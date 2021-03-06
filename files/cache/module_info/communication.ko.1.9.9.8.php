<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispCommunicationAdminConfig';
$info->permission = new stdClass;
$info->permission_check = new stdClass;
$info->action = new stdClass;
$info->permission->dispCommunicationMessages = 'member';
$info->permission_check->dispCommunicationMessages = new stdClass;
$info->permission_check->dispCommunicationMessages->key = '';
$info->permission_check->dispCommunicationMessages->type = '';
$info->action->dispCommunicationMessages = new stdClass;
$info->action->dispCommunicationMessages->type='view';
$info->action->dispCommunicationMessages->grant='guest';
$info->action->dispCommunicationMessages->standalone='true';
$info->action->dispCommunicationMessages->ruleset='';
$info->action->dispCommunicationMessages->method='';
$info->action->dispCommunicationMessages->check_csrf='true';
$info->action->dispCommunicationMessages->meta_noindex='true';
$info->permission->dispCommunicationSendMessage = 'member';
$info->permission_check->dispCommunicationSendMessage = new stdClass;
$info->permission_check->dispCommunicationSendMessage->key = '';
$info->permission_check->dispCommunicationSendMessage->type = '';
$info->action->dispCommunicationSendMessage = new stdClass;
$info->action->dispCommunicationSendMessage->type='view';
$info->action->dispCommunicationSendMessage->grant='guest';
$info->action->dispCommunicationSendMessage->standalone='true';
$info->action->dispCommunicationSendMessage->ruleset='';
$info->action->dispCommunicationSendMessage->method='';
$info->action->dispCommunicationSendMessage->check_csrf='true';
$info->action->dispCommunicationSendMessage->meta_noindex='true';
$info->permission->dispCommunicationNewMessage = 'member';
$info->permission_check->dispCommunicationNewMessage = new stdClass;
$info->permission_check->dispCommunicationNewMessage->key = '';
$info->permission_check->dispCommunicationNewMessage->type = '';
$info->action->dispCommunicationNewMessage = new stdClass;
$info->action->dispCommunicationNewMessage->type='view';
$info->action->dispCommunicationNewMessage->grant='guest';
$info->action->dispCommunicationNewMessage->standalone='true';
$info->action->dispCommunicationNewMessage->ruleset='';
$info->action->dispCommunicationNewMessage->method='';
$info->action->dispCommunicationNewMessage->check_csrf='true';
$info->action->dispCommunicationNewMessage->meta_noindex='true';
$info->permission->dispCommunicationFriend = 'member';
$info->permission_check->dispCommunicationFriend = new stdClass;
$info->permission_check->dispCommunicationFriend->key = '';
$info->permission_check->dispCommunicationFriend->type = '';
$info->action->dispCommunicationFriend = new stdClass;
$info->action->dispCommunicationFriend->type='view';
$info->action->dispCommunicationFriend->grant='guest';
$info->action->dispCommunicationFriend->standalone='true';
$info->action->dispCommunicationFriend->ruleset='';
$info->action->dispCommunicationFriend->method='';
$info->action->dispCommunicationFriend->check_csrf='true';
$info->action->dispCommunicationFriend->meta_noindex='true';
$info->permission->dispCommunicationAddFriend = 'member';
$info->permission_check->dispCommunicationAddFriend = new stdClass;
$info->permission_check->dispCommunicationAddFriend->key = '';
$info->permission_check->dispCommunicationAddFriend->type = '';
$info->action->dispCommunicationAddFriend = new stdClass;
$info->action->dispCommunicationAddFriend->type='view';
$info->action->dispCommunicationAddFriend->grant='guest';
$info->action->dispCommunicationAddFriend->standalone='true';
$info->action->dispCommunicationAddFriend->ruleset='';
$info->action->dispCommunicationAddFriend->method='';
$info->action->dispCommunicationAddFriend->check_csrf='true';
$info->action->dispCommunicationAddFriend->meta_noindex='true';
$info->permission->dispCommunicationAddFriendGroup = 'member';
$info->permission_check->dispCommunicationAddFriendGroup = new stdClass;
$info->permission_check->dispCommunicationAddFriendGroup->key = '';
$info->permission_check->dispCommunicationAddFriendGroup->type = '';
$info->action->dispCommunicationAddFriendGroup = new stdClass;
$info->action->dispCommunicationAddFriendGroup->type='view';
$info->action->dispCommunicationAddFriendGroup->grant='guest';
$info->action->dispCommunicationAddFriendGroup->standalone='true';
$info->action->dispCommunicationAddFriendGroup->ruleset='';
$info->action->dispCommunicationAddFriendGroup->method='';
$info->action->dispCommunicationAddFriendGroup->check_csrf='true';
$info->action->dispCommunicationAddFriendGroup->meta_noindex='true';
$info->permission->dispCommunicationMessageBoxList = 'member';
$info->permission_check->dispCommunicationMessageBoxList = new stdClass;
$info->permission_check->dispCommunicationMessageBoxList->key = '';
$info->permission_check->dispCommunicationMessageBoxList->type = '';
$info->action->dispCommunicationMessageBoxList = new stdClass;
$info->action->dispCommunicationMessageBoxList->type='mobile';
$info->action->dispCommunicationMessageBoxList->grant='guest';
$info->action->dispCommunicationMessageBoxList->standalone='true';
$info->action->dispCommunicationMessageBoxList->ruleset='';
$info->action->dispCommunicationMessageBoxList->method='';
$info->action->dispCommunicationMessageBoxList->check_csrf='true';
$info->action->dispCommunicationMessageBoxList->meta_noindex='true';
$info->permission->procCommunicationUpdateAllowMessage = 'member';
$info->permission_check->procCommunicationUpdateAllowMessage = new stdClass;
$info->permission_check->procCommunicationUpdateAllowMessage->key = '';
$info->permission_check->procCommunicationUpdateAllowMessage->type = '';
$info->action->procCommunicationUpdateAllowMessage = new stdClass;
$info->action->procCommunicationUpdateAllowMessage->type='controller';
$info->action->procCommunicationUpdateAllowMessage->grant='guest';
$info->action->procCommunicationUpdateAllowMessage->standalone='true';
$info->action->procCommunicationUpdateAllowMessage->ruleset='';
$info->action->procCommunicationUpdateAllowMessage->method='';
$info->action->procCommunicationUpdateAllowMessage->check_csrf='true';
$info->action->procCommunicationUpdateAllowMessage->meta_noindex='false';
$info->permission->procCommunicationSendMessage = 'member';
$info->permission_check->procCommunicationSendMessage = new stdClass;
$info->permission_check->procCommunicationSendMessage->key = '';
$info->permission_check->procCommunicationSendMessage->type = '';
$info->action->procCommunicationSendMessage = new stdClass;
$info->action->procCommunicationSendMessage->type='controller';
$info->action->procCommunicationSendMessage->grant='guest';
$info->action->procCommunicationSendMessage->standalone='true';
$info->action->procCommunicationSendMessage->ruleset='sendMessage';
$info->action->procCommunicationSendMessage->method='';
$info->action->procCommunicationSendMessage->check_csrf='true';
$info->action->procCommunicationSendMessage->meta_noindex='false';
$info->permission->procCommunicationStoreMessage = 'member';
$info->permission_check->procCommunicationStoreMessage = new stdClass;
$info->permission_check->procCommunicationStoreMessage->key = '';
$info->permission_check->procCommunicationStoreMessage->type = '';
$info->action->procCommunicationStoreMessage = new stdClass;
$info->action->procCommunicationStoreMessage->type='controller';
$info->action->procCommunicationStoreMessage->grant='guest';
$info->action->procCommunicationStoreMessage->standalone='true';
$info->action->procCommunicationStoreMessage->ruleset='';
$info->action->procCommunicationStoreMessage->method='';
$info->action->procCommunicationStoreMessage->check_csrf='true';
$info->action->procCommunicationStoreMessage->meta_noindex='false';
$info->permission->procCommunicationDeleteMessage = 'member';
$info->permission_check->procCommunicationDeleteMessage = new stdClass;
$info->permission_check->procCommunicationDeleteMessage->key = '';
$info->permission_check->procCommunicationDeleteMessage->type = '';
$info->action->procCommunicationDeleteMessage = new stdClass;
$info->action->procCommunicationDeleteMessage->type='controller';
$info->action->procCommunicationDeleteMessage->grant='guest';
$info->action->procCommunicationDeleteMessage->standalone='true';
$info->action->procCommunicationDeleteMessage->ruleset='';
$info->action->procCommunicationDeleteMessage->method='';
$info->action->procCommunicationDeleteMessage->check_csrf='true';
$info->action->procCommunicationDeleteMessage->meta_noindex='false';
$info->permission->procCommunicationDeleteMessages = 'member';
$info->permission_check->procCommunicationDeleteMessages = new stdClass;
$info->permission_check->procCommunicationDeleteMessages->key = '';
$info->permission_check->procCommunicationDeleteMessages->type = '';
$info->action->procCommunicationDeleteMessages = new stdClass;
$info->action->procCommunicationDeleteMessages->type='controller';
$info->action->procCommunicationDeleteMessages->grant='guest';
$info->action->procCommunicationDeleteMessages->standalone='true';
$info->action->procCommunicationDeleteMessages->ruleset='';
$info->action->procCommunicationDeleteMessages->method='';
$info->action->procCommunicationDeleteMessages->check_csrf='true';
$info->action->procCommunicationDeleteMessages->meta_noindex='false';
$info->permission->procCommunicationAddFriend = 'member';
$info->permission_check->procCommunicationAddFriend = new stdClass;
$info->permission_check->procCommunicationAddFriend->key = '';
$info->permission_check->procCommunicationAddFriend->type = '';
$info->action->procCommunicationAddFriend = new stdClass;
$info->action->procCommunicationAddFriend->type='controller';
$info->action->procCommunicationAddFriend->grant='guest';
$info->action->procCommunicationAddFriend->standalone='true';
$info->action->procCommunicationAddFriend->ruleset='addFriend';
$info->action->procCommunicationAddFriend->method='';
$info->action->procCommunicationAddFriend->check_csrf='true';
$info->action->procCommunicationAddFriend->meta_noindex='false';
$info->permission->procCommunicationAddFriendGroup = 'member';
$info->permission_check->procCommunicationAddFriendGroup = new stdClass;
$info->permission_check->procCommunicationAddFriendGroup->key = '';
$info->permission_check->procCommunicationAddFriendGroup->type = '';
$info->action->procCommunicationAddFriendGroup = new stdClass;
$info->action->procCommunicationAddFriendGroup->type='controller';
$info->action->procCommunicationAddFriendGroup->grant='guest';
$info->action->procCommunicationAddFriendGroup->standalone='true';
$info->action->procCommunicationAddFriendGroup->ruleset='addFriendGroup';
$info->action->procCommunicationAddFriendGroup->method='';
$info->action->procCommunicationAddFriendGroup->check_csrf='true';
$info->action->procCommunicationAddFriendGroup->meta_noindex='false';
$info->permission->procCommunicationMoveFriend = 'member';
$info->permission_check->procCommunicationMoveFriend = new stdClass;
$info->permission_check->procCommunicationMoveFriend->key = '';
$info->permission_check->procCommunicationMoveFriend->type = '';
$info->action->procCommunicationMoveFriend = new stdClass;
$info->action->procCommunicationMoveFriend->type='controller';
$info->action->procCommunicationMoveFriend->grant='guest';
$info->action->procCommunicationMoveFriend->standalone='true';
$info->action->procCommunicationMoveFriend->ruleset='deleteCheckedFriend';
$info->action->procCommunicationMoveFriend->method='';
$info->action->procCommunicationMoveFriend->check_csrf='true';
$info->action->procCommunicationMoveFriend->meta_noindex='false';
$info->permission->procCommunicationDeleteFriend = 'member';
$info->permission_check->procCommunicationDeleteFriend = new stdClass;
$info->permission_check->procCommunicationDeleteFriend->key = '';
$info->permission_check->procCommunicationDeleteFriend->type = '';
$info->action->procCommunicationDeleteFriend = new stdClass;
$info->action->procCommunicationDeleteFriend->type='controller';
$info->action->procCommunicationDeleteFriend->grant='guest';
$info->action->procCommunicationDeleteFriend->standalone='true';
$info->action->procCommunicationDeleteFriend->ruleset='deleteCheckedFriend';
$info->action->procCommunicationDeleteFriend->method='';
$info->action->procCommunicationDeleteFriend->check_csrf='true';
$info->action->procCommunicationDeleteFriend->meta_noindex='false';
$info->permission->procCommunicationDeleteFriendGroup = 'member';
$info->permission_check->procCommunicationDeleteFriendGroup = new stdClass;
$info->permission_check->procCommunicationDeleteFriendGroup->key = '';
$info->permission_check->procCommunicationDeleteFriendGroup->type = '';
$info->action->procCommunicationDeleteFriendGroup = new stdClass;
$info->action->procCommunicationDeleteFriendGroup->type='controller';
$info->action->procCommunicationDeleteFriendGroup->grant='guest';
$info->action->procCommunicationDeleteFriendGroup->standalone='true';
$info->action->procCommunicationDeleteFriendGroup->ruleset='';
$info->action->procCommunicationDeleteFriendGroup->method='';
$info->action->procCommunicationDeleteFriendGroup->check_csrf='true';
$info->action->procCommunicationDeleteFriendGroup->meta_noindex='false';
$info->permission->procCommunicationRenameFriendGroup = 'member';
$info->permission_check->procCommunicationRenameFriendGroup = new stdClass;
$info->permission_check->procCommunicationRenameFriendGroup->key = '';
$info->permission_check->procCommunicationRenameFriendGroup->type = '';
$info->action->procCommunicationRenameFriendGroup = new stdClass;
$info->action->procCommunicationRenameFriendGroup->type='controller';
$info->action->procCommunicationRenameFriendGroup->grant='guest';
$info->action->procCommunicationRenameFriendGroup->standalone='true';
$info->action->procCommunicationRenameFriendGroup->ruleset='';
$info->action->procCommunicationRenameFriendGroup->method='';
$info->action->procCommunicationRenameFriendGroup->check_csrf='true';
$info->action->procCommunicationRenameFriendGroup->meta_noindex='false';
$info->action->dispCommunicationAdminConfig = new stdClass;
$info->action->dispCommunicationAdminConfig->type='view';
$info->action->dispCommunicationAdminConfig->grant='guest';
$info->action->dispCommunicationAdminConfig->standalone='true';
$info->action->dispCommunicationAdminConfig->ruleset='';
$info->action->dispCommunicationAdminConfig->method='';
$info->action->dispCommunicationAdminConfig->check_csrf='true';
$info->action->dispCommunicationAdminConfig->meta_noindex='false';
$info->action->getCommunicationAdminColorset = new stdClass;
$info->action->getCommunicationAdminColorset->type='model';
$info->action->getCommunicationAdminColorset->grant='guest';
$info->action->getCommunicationAdminColorset->standalone='true';
$info->action->getCommunicationAdminColorset->ruleset='';
$info->action->getCommunicationAdminColorset->method='';
$info->action->getCommunicationAdminColorset->check_csrf='true';
$info->action->getCommunicationAdminColorset->meta_noindex='false';
$info->action->procCommunicationAdminInsertConfig = new stdClass;
$info->action->procCommunicationAdminInsertConfig->type='controller';
$info->action->procCommunicationAdminInsertConfig->grant='guest';
$info->action->procCommunicationAdminInsertConfig->standalone='true';
$info->action->procCommunicationAdminInsertConfig->ruleset='insertConfig';
$info->action->procCommunicationAdminInsertConfig->method='';
$info->action->procCommunicationAdminInsertConfig->check_csrf='true';
$info->action->procCommunicationAdminInsertConfig->meta_noindex='false';
return $info;