<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Lhc {

    public function init() {
        @ini_set('error_reporting', 0);
        @ini_set('display_errors', 0);
        @ini_set('session.gc_maxlifetime', 200000);
        @ini_set('session.cookie_lifetime', 2000000);
        @ini_set('session.cookie_httponly', 1);

        require_once "lhc_web/lib/core/lhcore/password.php";
        require_once "lhc_web/ezcomponents/Base/src/base.php"; // dependent on installation method, see below
        
        ezcBase::addClassRepository('./', './lhc_web/lib/autoloads');

        spl_autoload_register(array('ezcBase', 'autoload'), true, false);
//echo 'here2';die;
        erLhcoreClassSystem::init();echo 'here2';die;

// your code here
        ezcBaseInit::setCallback(
                'ezcInitDatabaseInstance', 'erLhcoreClassLazyDatabaseConfiguration'
        );
        echo 'here';die;
        $Result = erLhcoreClassModule::moduleInit();

        $tpl = erLhcoreClassTemplate::getInstance('pagelayouts/main.php');

        $tpl->set('Result', $Result);
        if (isset($Result['pagelayout'])) {
          
            $tpl->setFile('pagelayouts/' . $Result['pagelayout'] . '.php');
        }

        echo $tpl->fetch();

        flush();
        session_write_close();

        if (function_exists('fastcgi_finish_request')) {
            fastcgi_finish_request();
        };

        erLhcoreClassChatEventDispatcher::getInstance()->executeFinishRequest();
    }

}
