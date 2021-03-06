<?php

class erLhcoreClassGenericBotActionCollectable {

    public static function process($chat, $action, $trigger)
    {
        $workflow = erLhcoreClassModelGenericBotChatWorkflow::findOne(array('filterin' => array('status' => array(0,1)),'filter' => array('chat_id' => $chat->id, 'trigger_id' => $trigger->id)));

        if (!($workflow instanceof erLhcoreClassModelGenericBotChatWorkflow)) {
            $workflow = new erLhcoreClassModelGenericBotChatWorkflow();
            $workflow->trigger_id = $trigger->id;
            $workflow->chat_id = $chat->id;
            $workflow->saveThis();
        }

        $stepId = (isset($workflow->collected_data_array['step']) && is_numeric($workflow->collected_data_array['step'])) ? $workflow->collected_data_array['step'] : 0;

        $workflow->collected_data_array['step'] = $stepId;
        $workflow->collected_data_array['current_step'] = $action['content']['collectable_fields'][$stepId];
        $workflow->collected_data_array['steps'] = $action['content']['collectable_fields'];
        $workflow->collected_data_array['collectable_options'] = $action['content']['collectable_options'];

        $workflow->collected_data = json_encode($workflow->collected_data_array);
        $workflow->saveThis();

        return self::processStep($chat, $workflow->collected_data_array['current_step']);
    }

    public static function processStep($chat, $stepData)
    {
        if (isset($stepData['content']['message']) && !empty($stepData['content']['message'])) {

            $metaMessage = array();

            if ($stepData['type'] == 'dropdown') {

                $handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
                    'render' => $stepData['content']['provider_dropdown'],
                    'render_args' => $stepData['content']['provider_argument'],
                    'chat' => & $chat,
                ));

                if ($handler !== false && isset($handler['render']) && is_callable($handler['render']))
                {
                    $metaMessage['content']['dropdown'] = array(
                        'provider_dropdown' => $handler['render'],
                        'provider_id' => $stepData['content']['provider_id'],
                        'provider_name' => $stepData['content']['provider_name'],
                        'provider_arguments' => $handler['render_args'],
                        'provider_default' => $stepData['content']['provider_default'],
                    );
                }
            }

            if ($stepData['type'] == 'buttons') {

                $handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
                    'render' => $stepData['content']['render_function'],
                    'render_args' => $stepData['content']['render_args'],
                    'chat' => & $chat,
                ));

                if ($handler !== false && isset($handler['render']) && is_callable($handler['render']))
                {
                    $metaMessage['content']['buttons'] = array(
                        'render_function' => $handler['render'],
                        'render_args' => $handler['render_args']
                    );
                }
            }

            if ($stepData['type'] == 'custom') {

                $handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
                    'render' => $stepData['content']['render_function'],
                    'render_args' => $stepData['content']['render_args'],
                    'chat' => & $chat,
                ));

                if ($handler !== false && isset($handler['render']) && is_callable($handler['render']))
                {
                    $metaMessage['content']['custom'] = array(
                        'render_function' => $handler['render'],
                        'render_args' => $handler['render_args']
                    );
                }
            }

            if ($stepData['type'] == 'collected_summary') {
                $metaMessage['content']['collected_summary'] = $stepData['content']['collected_summary'];
                $metaMessage['content']['collectable_options'] = isset($stepData['content']['collectable_options']) ? $stepData['content']['collectable_options'] : array();
            }

            if (isset($stepData['content']['message_explain']) && !empty($stepData['content']['message_explain'])) {
                $metaMessage['content_static']['message_explain'] = $stepData['content']['message_explain'];
            }

            $msg = new erLhcoreClassModelmsg();
            $msg->msg = $stepData['content']['message'];
            $msg->meta_msg = !empty($metaMessage) ? json_encode($metaMessage) : '';
            $msg->chat_id = $chat->id;
            $msg->name_support = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Live Support');
            $msg->user_id = -2;
            $msg->time = time() + 5;

            erLhcoreClassChat::getSession()->save($msg);
            return $msg;
        }
    }

    // Send's summary to user to confirm
    public static function sendSummary($chat, $workflow) {

        return array(
                'type' => 'collected_summary',
                'content' => array(
                    'message' => 'Here is your collection information is it correct?',
                    'collected_summary' => $workflow->collected_data_array['collected']
                )
            );

    }
}

?>