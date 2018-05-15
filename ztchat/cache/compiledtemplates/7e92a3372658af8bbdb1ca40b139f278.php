<h1>System configuration</h1><?php  $currentUser = erLhcoreClassUser::instance(); ?><div role="tabpanel"><ul class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#system" aria-controls="system" role="tab" data-toggle="tab">System</a></li><?php  $system_configuration_tabs_generate_js_enabled = true;?><?php  if ($system_configuration_tabs_generate_js_enabled == true && $currentUser->hasAccessTo('lhsystem','generate_js_tab')) : ?><li role="presentation"><a href="#embed" aria-controls="embed" role="tab" data-toggle="tab">Embed code</a></li><?php  endif; ?><?php  $system_configuration_tabs_chat_enabled = true;?><?php  if ($system_configuration_tabs_chat_enabled == true && $currentUser->hasAccessTo('lhchat','use')) : ?><li role="presentation"><a href="#chatconfiguration" aria-controls="chatconfiguration" role="tab" data-toggle="tab">Live help configuration</a></li><?php  endif; ?><?php  $system_configuration_tabs_speech_enabled = true;?><?php  if ($system_configuration_tabs_speech_enabled && $currentUser->hasAccessTo('lhspeech','manage')) : ?><li role="presentation"><a href="#speech" aria-controls="speech" role="tab" data-toggle="tab">Speech</a></li><?php  endif;?></ul><div class="tab-content"><div role="tabpanel" class="tab-pane active" id="system"><div class="row"><div class="col-md-6"><h4>System</h4><ul><?php  if ($currentUser->hasAccessTo('lhsystem','timezone')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/timezone">Time zone settings</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhsystem','performupdate')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/update">Update information</a></li><?php  endif; ?><?php  $system_configuration_links_configuresmtp_enabled = true;?><?php  if ($system_configuration_links_configuresmtp_enabled == true && $currentUser->hasAccessTo('lhsystem','configuresmtp')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/smtp">Mail settings</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhabstract','use')) : ?><?php  if ($currentUser->hasAccessTo('lhsystem','changetemplates')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/EmailTemplate">E-mail templates</a></li><?php  endif; ?><?php  endif;?><?php  if ($currentUser->hasAccessTo('lhsystem','configurelanguages') || $currentUser->hasAccessTo('lhsystem','changelanguage')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/languages">Languages configuration</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhsystem','expirecache')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/expirecache">Clean cache</a></li><?php  endif; ?></ul></div><?php  $system_configuration_links_users_section_enabled = true;?><?php  if ($system_configuration_links_users_section_enabled == true) : ?><div class="col-md-6"><?php  if ($currentUser->hasAccessTo('lhuser','userlist') || $currentUser->hasAccessTo('lhuser','grouplist') || $currentUser->hasAccessTo('lhpermission','list')) : ?><h4>Users</h4><ul class="circle small-list"><?php  if ($currentUser->hasAccessTo('lhuser','userlist')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/user/userlist">Users</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhuser','userautologin')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/user/autologinconfig">Auto login settings</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhuser','grouplist')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/user/grouplist">List of groups</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhpermission','list')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/permission/roles">List of roles</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhuser','import')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/user/import">Import users</a></li><?php  endif; ?></ul><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhsystem','use')) : ?><h4>Advanced</h4><ul class="circle small-list"><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/usersactions">Users actions</a></li></ul><?php  endif; ?></div><?php  endif;?></div></div><?php  $system_configuration_tabs_content_chat_enabled = true;?><?php  if ($system_configuration_tabs_content_chat_enabled == true && $currentUser->hasAccessTo('lhchat','use')) : ?><div role="tabpanel" class="tab-pane" id="chatconfiguration"><div class="row"><div class="col-md-6"><ul><?php  if ($currentUser->hasAccessTo('lhdepartment','list')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/department/index">Departments</a></li><?php  endif; ?><?php  $system_configuration_links_blockusers_enabled = true;?><?php  if ($system_configuration_links_blockusers_enabled == true && $currentUser->hasAccessTo('lhchat','allowblockusers')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/blockedusers">Blocked users</a></li><?php  endif; ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/listchatconfig">Chat configuration</a></li><?php  if ($currentUser->hasAccessTo('lhsystem','transferconfiguration')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/transferconfiguration">Chat transfer configuration</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhchat','administrategeoconfig')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/geoconfiguration">GEO detection configuration</a></li><?php  endif; ?><?php  $system_configuration_links_geoadjustment_enabled = true;?><?php  if ($system_configuration_links_geoadjustment_enabled == true && $currentUser->hasAccessTo('lhchat','geoadjustment')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/geoadjustment">GEO adjustment</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhchat','administrateconfig')) : ?><?php  $system_configuration_links_sync_and_sounde_settings_enabled = true;?><?php  if ($system_configuration_links_sync_and_sounde_settings_enabled == true) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/syncandsoundesetting">Synchronization and sound settings</a></li><?php  endif;?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/startchatformsettingsindex">Start chat form settings</a></li><?php  endif;?><?php  $system_configuration_links_translation_enabled = true;?><?php  if ($system_configuration_links_translation_enabled == true && $currentUser->hasAccessTo('lhtranslation','configuration')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/translation/configuration">Automatic translations</a></li><?php  endif;?><?php  $system_configuration_links_cannedmsg_enabled = true;?><?php  if ($system_configuration_links_cannedmsg_enabled == true && $currentUser->hasAccessTo('lhchat','administratecannedmsg')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/cannedmsg">Canned messages</a></li><?php  endif; ?><?php  $system_configuration_links_survey_enabled = true;?><?php  if ($system_configuration_links_survey_enabled == true && $currentUser->hasAccessTo('lhsurvey','manage_survey')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/Survey">Surveys</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhchat','administratesubject')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/Subject">Subjects</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhsystem','offlinesettings')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/offlinesettings">Offline settings</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhabstract','use')) : ?><?php  $system_configuration_proactive_enabled = true;?><?php  if ($system_configuration_proactive_enabled == true && $currentUser->hasAccessTo('lhchat','administrateinvitations')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/ProactiveChatInvitation">Pro active chat invitations</a></li><?php  endif;?><?php  $system_configuration_proactive_enabled = true;?><?php  if ($system_configuration_proactive_enabled == true && $currentUser->hasAccessTo('lhchat','administrateinvitations')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/ProactiveChatVariables">Pro active chat variables</a></li><?php  endif;?><?php  $system_configuration_proactive_enabled = true;?><?php  if ($system_configuration_proactive_enabled == true && $currentUser->hasAccessTo('lhchat','administrateinvitations')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/ProactiveChatEvent">Pro active chat events</a></li><?php  endif;?><?php  $system_configuration_links_autoresponder_enabled = true;?><?php  if ($system_configuration_links_autoresponder_enabled == true && $currentUser->hasAccessTo('lhchat','administrateresponder')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/AutoResponder">Auto responder</a></li><?php  endif;?><?php  endif; ?><?php  $system_configuration_links_xmpp_enabled = true;?><?php  if ($system_configuration_links_xmpp_enabled == true && $currentUser->hasAccessTo('lhxmp','configurexmp')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/xmp/configuration">XMPP settings</a></li><?php  endif; ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/list">Chats list</a></li><?php  if ($currentUser->hasAccessTo('lhchatarchive','archive')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chatarchive/archive">Chat archive</a></li><?php  endif; ?><?php  $system_configuration_links_statistic_enabled = true;?><?php  if ($system_configuration_links_statistic_enabled == true && $currentUser->hasAccessTo('lhstatistic','viewstatistic')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/statistic/statistic">Statistic</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhchat','maintenance')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chat/maintenance">Maintenance</a></li><?php  endif; ?><?php  $system_configuration_links_product_enabled = true;?><?php  if ($system_configuration_links_product_enabled == true && $currentUser->hasAccessTo('lhproduct','manage_product')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/product/index">Product</a></li><?php  endif; ?><?php  $system_configuration_paid_chat_enabled = true; ?><?php  if ($system_configuration_paid_chat_enabled == true && $currentUser->hasAccessTo('lhpaidchat','use_admin')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/paidchat/settings">Paid chat configuration</a></li><?php  endif; ?><?php  $system_configuration_rest_api_enabled = true; ?><?php  if ($system_configuration_rest_api_enabled == true && $currentUser->hasAccessTo('lhrestapi','use_admin')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/restapi/index">Rest API</a></li><?php  endif; ?></ul></div><div class="col-md-6"><?php  $system_configuration_links_files_enabled = true;?><?php  if ($system_configuration_links_files_enabled == true && ($currentUser->hasAccessTo('lhfile','use') || $currentUser->hasAccessTo('lhfile','file_list'))) : ?><h5>Files</h5><ul><?php  if ($currentUser->hasAccessTo('lhfile','use')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/file/configuration">Files configuration</a></li><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhfile','file_list')) : ?><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/file/list">List of files</a></li><?php  endif; ?></ul><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhabstract','use') && $currentUser->hasAccessTo('lhtheme','administratethemes')) : ?><h5>Theming</h5><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/abstract/list/WidgetTheme">Widget themes</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/theme/import">Import new themes</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/theme/default">Default theme</a></li></ul><h5>Back office theming</h5><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/theme/adminthemes">Admin themes</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/theme/defaultadmintheme">Default admin theme</a></li></ul><?php  endif; ?><?php  if ($currentUser->hasAccessTo('lhgenericbot','use') ) : ?><h5>Bot</h5><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/genericbot/list">Bot list</a></li></ul><?php  endif; ?></div></div></div><?php  endif;?><?php  $system_configuration_tabs_content_chat_embed_js_enabled = true; ?><?php  if ($system_configuration_tabs_content_chat_embed_js_enabled == true && $currentUser->hasAccessTo('lhsystem','generate_js_tab')) : ?><div role="tabpanel" class="tab-pane" id="embed"><div class="row"><?php  $system_configuration_links_chat_embed_enabled = true;?><?php  if ($system_configuration_links_chat_embed_enabled == true && $currentUser->hasAccessTo('lhsystem','generatejs')) : ?><div class="col-md-6"><h4>Live help embed code</h4><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/htmlcode">Widget embed code</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/system/embedcode">Page embed code</a></li></ul></div><?php  endif; ?><?php  $system_configuration_links_faq_embed_enabled = true;?><?php  if ($system_configuration_links_faq_embed_enabled == true && $currentUser->hasAccessTo('lhfaq','manage_faq')) : ?><div class="col-md-6"><h4>FAQ embed code</h4><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/faq/htmlcode">Widget embed code</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/faq/embedcode">Page embed code</a></li></ul></div><?php  endif; ?><?php  $system_configuration_links_questionary_embed_enabled = true;?><?php  if ($system_configuration_links_questionary_embed_enabled == true && $currentUser->hasAccessTo('lhquestionary','manage_questionary')) : ?><div class="col-md-6"><h4>Questionary embed code</h4><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/questionary/htmlcode">Widget embed code</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/questionary/embedcode">Page embed code</a></li></ul></div><?php  endif; ?><?php  $system_configuration_links_chatbox_embed_enabled = true;?><?php  if ($system_configuration_links_chatbox_embed_enabled == true && $currentUser->hasAccessTo('lhchatbox','manage_chatbox')) : ?><div class="col-md-6"><h4>Chatbox embed code</h4><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chatbox/htmlcode">Widget embed code</a></li><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/chatbox/embedcode">Page embed code</a></li></ul></div><?php  endif; ?><?php  $system_configuration_links_browse_offers_embed_enabled = true;?><?php  if ($system_configuration_links_browse_offers_embed_enabled == true && $currentUser->hasAccessTo('lhbrowseoffer','manage_bo')) : ?><div class="col-md-6"><h4>Browse offers embed code</h4><ul><li><a href="/zcodialawfirm/ztchat/index.php/site_admin/browseoffer/htmlcode">Embed code</a></li></ul></div><?php  endif; ?><?php   ?></div></div><?php  endif; ?><?php  $system_configuration_tabs_content_speech_enabled = true;?><?php  if ($system_configuration_tabs_content_speech_enabled == true && $currentUser->hasAccessTo('lhspeech','manage')) : ?><div role="tabpanel" class="tab-pane" id="speech"><ul class="circle small-list"><li><a title="Set default speech recognition language" href="/zcodialawfirm/ztchat/index.php/site_admin/speech/defaultlanguage">Speech language</a></li><li><a title="Languages" href="/zcodialawfirm/ztchat/index.php/site_admin/speech/languages">Languages</a></li><li><a title="Dialects" href="/zcodialawfirm/ztchat/index.php/site_admin/speech/dialects">Dialects</a></li></ul></div><?php  endif;?></div></div>