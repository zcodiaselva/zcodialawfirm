services.factory("OnlineUsersFactory",["$http","$q",function(e,n){return this.loadOnlineUsers=function(i){var t=n.defer();return e.get(WWW_DIR_JAVASCRIPT+"chat/onlineusers/(method)/ajax/(timeout)/"+i.timeout+(i.department>0?"/(department)/"+i.department:"")+(i.max_rows>0?"/(maxrows)/"+i.max_rows:"")).success(function(e){t.resolve(e)}),t.promise},this.deleteOnlineUser=function(i){var t=n.defer();return e.post(WWW_DIR_JAVASCRIPT+"chat/onlineusers/(deletevisitor)/"+i.user_id+"/(csfr)/"+confLH.csrf_token).success(function(e){"undefined"!=typeof e.error_url?document.location=e.error_url:t.resolve(e)}),t.promise},this}]),lhcAppControllers.controller("OnlineCtrl",["$scope","$http","$location","$rootScope","$log","$interval","OnlineUsersFactory",function(e,n,i,t,o,s,r){function a(e,n){e.sort(function(e,i){return e[n]<=i[n]?-1:1})}var u;this.onlineusers=[],this.onlineusersPreviousID=[],e.onlineusersGrouped=[],this.updateTimeout=10,this.userTimeout=3600,this.maxRows=50,this.department=0,this.predicate="last_visit",this.reverse=!0,this.wasInitiated=!1,this.forbiddenVisitors=!1,this.soundEnabled=!1,this.notificationEnabled=!1,e.groupByField="none";var c=this;e.groupBy=function(n){e.onlineusersGrouped=[],a(c.onlineusers,n);for(var i="_INVALID_GROUP_VALUE_",t=0;t<c.onlineusers.length;t++){var o=c.onlineusers[t];if(o[n]!==i){var s={label:o[n],id:t,ou:[]};i=s.label,e.onlineusersGrouped.push(s)}s.ou.push(o)}},this.updateList=function(){1!=lhinst.disableSync&&1!=c.forbiddenVisitors&&r.loadOnlineUsers({timeout:c.userTimeout,department:c.department,max_rows:c.maxRows}).then(function(n){if(c.onlineusers=n,"none"!=e.groupByField?e.groupBy(e.groupByField):(e.onlineusersGrouped=[],e.onlineusersGrouped.push({label:"",id:0,ou:c.onlineusers})),c.notificationEnabled||c.soundEnabled){var i=!1,t=[];if(angular.forEach(c.onlineusers,function(e,n){var o=!0;c.onlineusersPreviousID.indexOf(e.id)==-1&&(o=!1,c.onlineusersPreviousID.push(e.id)),1==c.wasInitiated&&0==o&&(i=!0,t.push(e))}),1==i){if(c.soundEnabled&&Modernizr.audio){var o=new Audio;o.src=Modernizr.audio.ogg?WWW_DIR_JAVASCRIPT_FILES+"/new_visitor.ogg":Modernizr.audio.mp3?WWW_DIR_JAVASCRIPT_FILES+"/new_visitor.mp3":WWW_DIR_JAVASCRIPT_FILES+"/new_visitor.wav",o.load(),setTimeout(function(){o.play()},500)}c.notificationEnabled&&(window.webkitNotifications||window.Notification)&&angular.forEach(t,function(e,n){if(window.webkitNotifications){var i=window.webkitNotifications.checkPermission();if(0==i){var t=window.webkitNotifications.createNotification(WWW_DIR_JAVASCRIPT_FILES_NOTIFICATION+"/notification.png",e.ip+(""!=e.user_country_name?", "+e.user_country_name:""),(""!=e.page_title?e.page_title+"\n-----\n":"")+(""!=e.referrer?e.referrer+"\n-----\n":""));t.onclick=function(){t.cancel()},t.show(),setTimeout(function(){t.cancel()},15e3)}}else if(window.Notification&&"granted"==window.Notification.permission){var t=new Notification(e.ip+(""!=e.user_country_name?", "+e.user_country_name:""),{icon:WWW_DIR_JAVASCRIPT_FILES_NOTIFICATION+"/notification.png",body:(""!=e.page_title?e.page_title+"\n-----\n":"")+(""!=e.referrer?e.referrer+"\n-----\n":"")});t.onclick=function(){t.close()},setTimeout(function(){t.close()},15e3)}})}c.wasInitiated=!0,c.onlineusersPreviousID.length>100&&(c.wasInitiated=!1,c.onlineusersPreviousID=[])}})},u=s(function(){0==c.forbiddenVisitors?c.updateList():s.cancel(u)},1e3*this.updateTimeout),e.$watch("online.updateTimeout",function(e,n){e!=n&&(s.cancel(u),u=s(function(){c.updateList()},1e3*e),lhinst.changeUserSettingsIndifferent("oupdate_timeout",e))}),e.$watch("online.userTimeout",function(e,n){e!=n&&lhinst.changeUserSettingsIndifferent("ouser_timeout",e)}),e.$watch("online.department",function(e,n){e!=n&&lhinst.changeUserSettingsIndifferent("o_department",e)}),e.$watch("online.maxRows",function(e,n){e!=n&&lhinst.changeUserSettingsIndifferent("omax_rows",e)}),e.$watch("groupByField",function(e,n){e!=n&&lhinst.changeUserSettingsIndifferent("ogroup_by",e)}),e.$watch("online.userTimeout + online.department + online.maxRows + groupByField",function(e,n){c.updateList()}),this.showOnlineUserInfo=function(e){lhc.revealModal({url:WWW_DIR_JAVASCRIPT+"chat/getonlineuserinfo/"+e})},this.previewChat=function(e){e.chat_id>0&&1==e.can_view_chat&&lhc.revealModal({url:WWW_DIR_JAVASCRIPT+"chat/previewchat/"+e.chat_id})},this.sendMessage=function(e){lhc.revealModal({url:WWW_DIR_JAVASCRIPT+"chat/sendnotice/"+e})},this.deleteUser=function(e,n){confirm(n)&&r.deleteOnlineUser({user_id:e.id}).then(function(n){c.onlineusers.splice(c.onlineusers.indexOf(e),1)})},this.disableNewUserBNotif=function(){c.notificationEnabled=!c.notificationEnabled,lhinst.changeUserSettings("new_user_bn",1==c.notificationEnabled?1:0)},this.disableNewUserSound=function(){c.soundEnabled=!c.soundEnabled,lhinst.changeUserSettings("new_user_sound",1==c.soundEnabled?1:0)},e.$on("$destroy",function(){s.cancel(u)})}]);
