<?php

header('P3P: CP="NOI ADM DEV COM NAV OUR STP"');
header("Content-type: text/javascript");

$tpl = erLhcoreClassTemplate::getInstance('lhchat/chatcheckoperatormessage.tpl.php');

$userInstance = erLhcoreClassModelChatOnlineUser::handleRequest(array('pro_active_invite' => erLhcoreClassModelChatConfig::fetch('pro_active_invite')->current_value));

if ($userInstance !== false) {
    $tpl->set('visitor',$userInstance);
    echo $tpl->fetch();
}
exit;
?>