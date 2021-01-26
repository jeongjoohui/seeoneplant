<?php if(!defined("__XE__"))exit;
$__Context->chk_movie = $__Context->chk_image = $__Context->chk_attach = false;
	if(strpos($__Context->document->getContent(),'youtube.com/embed')!==false || strpos($__Context->document->getContent(),'vimeo.com/video')!==false || strpos($__Context->document->getContent(),'kakao.com/embed')!==false || strpos($__Context->document->getContent(),'naver.com/flash')!==false || ($__Context->mi->common_play_icon == '' && ( strpos($__Context->document->getContent(),'https://youtu.be/')!==false || strpos($__Context->document->getContent(),'https://www.youtube.com/watch?v=')!==false ) ) ):
		$__Context->chk_movie = true;
	elseif(preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $__Context->document->getContent())):
		$__Context->chk_image = true;
	endif;
	if (!$__Context->document->getExtraImages() && !$__Context->chk_movie && !$__Context->chk_image)
		$__Context->showIconArea = false;
	else
		$__Context->showIconArea = true;
 ?>
<?php if($__Context->showIconArea){ ?><div class="print-icon">
	<?php if(in_array('new',$__Context->document->getExtraImages())){ ?><img class="ic ic-status" src="/modules/board/skins/aplos_v2/assets/images/status_n.svg" /><?php };
if(in_array('update',$__Context->document->getExtraImages())){ ?><img class="ic ic-status" src="/modules/board/skins/aplos_v2/assets/images/status_u.svg" /><?php };
if(in_array('secret',$__Context->document->getExtraImages())){ ?><i class="fas fa-lock fa-fw"></i><?php } ?>
	<?php if($__Context->document->getUploadedFiles())foreach($__Context->document->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
	<?php 
		$__Context->filetmp = strtolower(substr(strrchr($__Context->file->source_filename,'.'),1));
		if($__Context->filetmp == 'jpg' || $__Context->filetmp == 'gif' || $__Context->filetmp == 'png' || $__Context->filetmp == 'svg' || $__Context->filetmp == 'jpeg' || $__Context->filetmp == 'bmp')
			$__Context->chk_image = true;
		else
			$__Context->chk_attach = true;
	 ?>
	<?php } ?>
	<?php if($__Context->chk_movie){ ?><i class="fas fa-play-circle fa-fw"></i><?php };
if($__Context->chk_image){ ?><i class="fas fa-image fa-fw"></i><?php };
if($__Context->chk_attach){ ?><i class="fas fa-paperclip fa-fw"></i><?php } ?>
</div><?php } ?>
