<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispFileAdminList';
$info->menu = new stdClass;
$info->menu->file = new stdClass;
$info->menu->file->title='파일';
$info->menu->file->type='';
$info->permission = new stdClass;
$info->permission_check = new stdClass;
$info->action = new stdClass;
$info->action->getFileList = new stdClass;
$info->action->getFileList->type='model';
$info->action->getFileList->grant='guest';
$info->action->getFileList->standalone='true';
$info->action->getFileList->ruleset='';
$info->action->getFileList->method='';
$info->action->getFileList->check_csrf='true';
$info->action->getFileList->meta_noindex='false';
$info->action->procFileUpload = new stdClass;
$info->action->procFileUpload->type='controller';
$info->action->procFileUpload->grant='guest';
$info->action->procFileUpload->standalone='true';
$info->action->procFileUpload->ruleset='';
$info->action->procFileUpload->method='';
$info->action->procFileUpload->check_csrf='false';
$info->action->procFileUpload->meta_noindex='false';
$info->action->procFileIframeUpload = new stdClass;
$info->action->procFileIframeUpload->type='controller';
$info->action->procFileIframeUpload->grant='guest';
$info->action->procFileIframeUpload->standalone='true';
$info->action->procFileIframeUpload->ruleset='';
$info->action->procFileIframeUpload->method='';
$info->action->procFileIframeUpload->check_csrf='true';
$info->action->procFileIframeUpload->meta_noindex='false';
$info->action->procFileImageResize = new stdClass;
$info->action->procFileImageResize->type='controller';
$info->action->procFileImageResize->grant='guest';
$info->action->procFileImageResize->standalone='true';
$info->action->procFileImageResize->ruleset='imageResize';
$info->action->procFileImageResize->method='';
$info->action->procFileImageResize->check_csrf='true';
$info->action->procFileImageResize->meta_noindex='false';
$info->action->procFileDelete = new stdClass;
$info->action->procFileDelete->type='controller';
$info->action->procFileDelete->grant='guest';
$info->action->procFileDelete->standalone='true';
$info->action->procFileDelete->ruleset='';
$info->action->procFileDelete->method='';
$info->action->procFileDelete->check_csrf='true';
$info->action->procFileDelete->meta_noindex='false';
$info->action->procFileSetCoverImage = new stdClass;
$info->action->procFileSetCoverImage->type='controller';
$info->action->procFileSetCoverImage->grant='guest';
$info->action->procFileSetCoverImage->standalone='true';
$info->action->procFileSetCoverImage->ruleset='';
$info->action->procFileSetCoverImage->method='';
$info->action->procFileSetCoverImage->check_csrf='true';
$info->action->procFileSetCoverImage->meta_noindex='false';
$info->action->procFileDownload = new stdClass;
$info->action->procFileDownload->type='controller';
$info->action->procFileDownload->grant='guest';
$info->action->procFileDownload->standalone='true';
$info->action->procFileDownload->ruleset='';
$info->action->procFileDownload->method='GET|POST';
$info->action->procFileDownload->check_csrf='true';
$info->action->procFileDownload->meta_noindex='false';
$info->action->procFileOutput = new stdClass;
$info->action->procFileOutput->type='controller';
$info->action->procFileOutput->grant='guest';
$info->action->procFileOutput->standalone='true';
$info->action->procFileOutput->ruleset='';
$info->action->procFileOutput->method='GET|POST';
$info->action->procFileOutput->check_csrf='true';
$info->action->procFileOutput->meta_noindex='false';
$info->permission->procFileGetList = 'root';
$info->permission_check->procFileGetList = new stdClass;
$info->permission_check->procFileGetList->key = '';
$info->permission_check->procFileGetList->type = '';
$info->action->procFileGetList = new stdClass;
$info->action->procFileGetList->type='controller';
$info->action->procFileGetList->grant='guest';
$info->action->procFileGetList->standalone='true';
$info->action->procFileGetList->ruleset='';
$info->action->procFileGetList->method='';
$info->action->procFileGetList->check_csrf='true';
$info->action->procFileGetList->meta_noindex='false';
$info->menu->file->index='dispFileAdminList';
$info->menu->file->acts[]='dispFileAdminList';
$info->action->dispFileAdminList = new stdClass;
$info->action->dispFileAdminList->type='view';
$info->action->dispFileAdminList->grant='guest';
$info->action->dispFileAdminList->standalone='true';
$info->action->dispFileAdminList->ruleset='';
$info->action->dispFileAdminList->method='';
$info->action->dispFileAdminList->check_csrf='true';
$info->action->dispFileAdminList->meta_noindex='false';
$info->menu->file->acts[]='dispFileAdminUploadConfig';
$info->action->dispFileAdminUploadConfig = new stdClass;
$info->action->dispFileAdminUploadConfig->type='view';
$info->action->dispFileAdminUploadConfig->grant='guest';
$info->action->dispFileAdminUploadConfig->standalone='true';
$info->action->dispFileAdminUploadConfig->ruleset='';
$info->action->dispFileAdminUploadConfig->method='';
$info->action->dispFileAdminUploadConfig->check_csrf='true';
$info->action->dispFileAdminUploadConfig->meta_noindex='false';
$info->menu->file->acts[]='dispFileAdminDownloadConfig';
$info->action->dispFileAdminDownloadConfig = new stdClass;
$info->action->dispFileAdminDownloadConfig->type='view';
$info->action->dispFileAdminDownloadConfig->grant='guest';
$info->action->dispFileAdminDownloadConfig->standalone='true';
$info->action->dispFileAdminDownloadConfig->ruleset='';
$info->action->dispFileAdminDownloadConfig->method='';
$info->action->dispFileAdminDownloadConfig->check_csrf='true';
$info->action->dispFileAdminDownloadConfig->meta_noindex='false';
$info->menu->file->acts[]='dispFileAdminOtherConfig';
$info->action->dispFileAdminOtherConfig = new stdClass;
$info->action->dispFileAdminOtherConfig->type='view';
$info->action->dispFileAdminOtherConfig->grant='guest';
$info->action->dispFileAdminOtherConfig->standalone='true';
$info->action->dispFileAdminOtherConfig->ruleset='';
$info->action->dispFileAdminOtherConfig->method='';
$info->action->dispFileAdminOtherConfig->check_csrf='true';
$info->action->dispFileAdminOtherConfig->meta_noindex='false';
$info->action->procFileAdminAddCart = new stdClass;
$info->action->procFileAdminAddCart->type='controller';
$info->action->procFileAdminAddCart->grant='guest';
$info->action->procFileAdminAddCart->standalone='true';
$info->action->procFileAdminAddCart->ruleset='';
$info->action->procFileAdminAddCart->method='';
$info->action->procFileAdminAddCart->check_csrf='true';
$info->action->procFileAdminAddCart->meta_noindex='false';
$info->action->procFileAdminDeleteChecked = new stdClass;
$info->action->procFileAdminDeleteChecked->type='controller';
$info->action->procFileAdminDeleteChecked->grant='guest';
$info->action->procFileAdminDeleteChecked->standalone='true';
$info->action->procFileAdminDeleteChecked->ruleset='deleteChecked';
$info->action->procFileAdminDeleteChecked->method='';
$info->action->procFileAdminDeleteChecked->check_csrf='true';
$info->action->procFileAdminDeleteChecked->meta_noindex='false';
$info->action->procFileAdminInsertUploadConfig = new stdClass;
$info->action->procFileAdminInsertUploadConfig->type='controller';
$info->action->procFileAdminInsertUploadConfig->grant='guest';
$info->action->procFileAdminInsertUploadConfig->standalone='true';
$info->action->procFileAdminInsertUploadConfig->ruleset='insertConfig';
$info->action->procFileAdminInsertUploadConfig->method='';
$info->action->procFileAdminInsertUploadConfig->check_csrf='true';
$info->action->procFileAdminInsertUploadConfig->meta_noindex='false';
$info->action->procFileAdminInsertDownloadConfig = new stdClass;
$info->action->procFileAdminInsertDownloadConfig->type='controller';
$info->action->procFileAdminInsertDownloadConfig->grant='guest';
$info->action->procFileAdminInsertDownloadConfig->standalone='true';
$info->action->procFileAdminInsertDownloadConfig->ruleset='';
$info->action->procFileAdminInsertDownloadConfig->method='';
$info->action->procFileAdminInsertDownloadConfig->check_csrf='true';
$info->action->procFileAdminInsertDownloadConfig->meta_noindex='false';
$info->action->procFileAdminInsertOtherConfig = new stdClass;
$info->action->procFileAdminInsertOtherConfig->type='controller';
$info->action->procFileAdminInsertOtherConfig->grant='guest';
$info->action->procFileAdminInsertOtherConfig->standalone='true';
$info->action->procFileAdminInsertOtherConfig->ruleset='';
$info->action->procFileAdminInsertOtherConfig->method='';
$info->action->procFileAdminInsertOtherConfig->check_csrf='true';
$info->action->procFileAdminInsertOtherConfig->meta_noindex='false';
$info->permission->procFileAdminInsertModuleConfig = 'manager';
$info->permission_check->procFileAdminInsertModuleConfig = new stdClass;
$info->permission_check->procFileAdminInsertModuleConfig->key = 'target_module_srl';
$info->permission_check->procFileAdminInsertModuleConfig->type = '';
$info->action->procFileAdminInsertModuleConfig = new stdClass;
$info->action->procFileAdminInsertModuleConfig->type='controller';
$info->action->procFileAdminInsertModuleConfig->grant='guest';
$info->action->procFileAdminInsertModuleConfig->standalone='true';
$info->action->procFileAdminInsertModuleConfig->ruleset='fileModuleConfig';
$info->action->procFileAdminInsertModuleConfig->method='';
$info->action->procFileAdminInsertModuleConfig->check_csrf='true';
$info->action->procFileAdminInsertModuleConfig->meta_noindex='false';
return $info;