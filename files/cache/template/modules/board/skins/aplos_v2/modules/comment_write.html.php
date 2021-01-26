<?php if(!defined("__XE__"))exit;?><div class="comment-write <?php echo $__Context->CommentWriteLoc ?> clear">
	<div class="comment-write-header">
		<h3><?php echo $lang->write_comment ?>
			<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><span class="header-tool">
				<?php if($__Context->mi->comment_write_type=='' || $__Context->mi->comment_write_type=='textarea'){ ?><a class="" href="#" onclick="jQuery.cookie('ab_editor_type','wysiwyg');location.reload();return false"><i class="fas fa-sync-alt fa-fw"></i> <?php echo $lang->use_wysiwyg ?></a><?php } ?>
				<?php if($__Context->mi->comment_write_type=='wysiwyg'){ ?><a class="" href="#" onclick="jQuery.cookie('ab_editor_type','textarea');location.reload();return false"><i class="fas fa-sync-alt fa-fw"></i> <?php echo $lang->use_textarea ?></a><?php } ?>
			</span><?php } ?>
		</h3>
	</div>
	<div class="comment-write-body clear">
		<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="comment-write-form" id="write_comment"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="member_nickname" value="<?php echo $__Context->logged_info->nick_name ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
			<input type="hidden" name="comment_srl" value="" />
<?php if($__Context->mi->comment_write_type == 'wysiwyg'){ ?>
			<input type="hidden" name="content" value="" />
		  <?php echo $__Context->oDocument->getCommentEditor() ?>
<?php }else{ ?>
			<input type="hidden" name="use_html" value="Y" />
			<input type="hidden" id="htm_<?php echo $__Context->oDocument->document_srl ?>" value="n" />
			<textarea id="temp_<?php echo $__Context->oDocument->document_srl ?>"></textarea>
			<textarea style="display: none;" id="editor_<?php echo $__Context->oDocument->document_srl ?>" name="content"></textarea>
<script type="text/javascript">
function setTextareaReplace() {
	var str = document.getElementById("temp_<?php echo $__Context->oDocument->document_srl ?>").value;
	if (str == '') {
		return false;
	}
	str = "<p>" + str.replace(/(?:\r\n|\r|\n)/g, "</p>\r\n<p>") + "</p>";
	str = str.replaceAll("<p></p>", "<p>&nbsp;</p>");
	document.getElementById("editor_<?php echo $__Context->oDocument->document_srl ?>").value = str;
};
</script>
<?php } ?>
			<?php if(!$__Context->is_logged){ ?><div class="comment-write-author clear">
				<span class="non-member-input">
					<span><?php echo $lang->writer ?></span><input type="text" name="nick_name" id="userName" class="iText userName" />
				</span>
				<span class="non-member-input">
					<span><?php echo $lang->password ?></span><input style="margin-bottom: 0;" type="password" name="password" id="userPw" class="iText userPw" />
				</span>
			</div><?php } ?>
			<div class="comment-write-tool">
				<?php if($__Context->is_logged){ ?><span class="ab-checkbox">
					<input type="checkbox" name="notify_message" value="Y" id="notify_message" class="ab-btn" />
					<label class="ab-btn" for="notify_message"><?php echo $lang->notify ?></label>
				</span><?php } ?>
				<?php if($__Context->module_info->secret=='Y'){ ?><span class="ab-checkbox">
					<input<?php if(!$__Context->is_logged){ ?> style="margin-top: 0.6em"<?php } ?> type="checkbox" name="is_secret" value="Y" id="is_secret" class="ab-btn" />
					<label class="ab-btn" for="is_secret"><?php echo $lang->secret ?></label>
				</span><?php } ?>
				<button type="submit" class="ab-btn<?php if($__Context->mi->write_btn_style == 'border'){ ?> ab-point-bacolor ab-border-1 ab-point-color<?php }elseif($__Context->mi->write_btn_style == 'fill'){ ?> ab-point-bgcolor ab-text-white<?php }else{ ?> ab-point-color<?php } ?>" onclick="setTextareaReplace()"><?php echo $lang->cmd_comment_registration ?></button>
			</div>
		</form><?php } ?>
		<?php if(!$__Context->grant->write_comment || !$__Context->oDocument->isEnableComment()){ ?><div class="comment-write-form" style="position: relative;">
			<textarea style="resize: none;"><?php echo $lang->not_permitted_comment;
if(!$__Context->is_logged){ ?> <?php echo $lang->sign_in;
} ?></textarea>
			<?php if(!$__Context->is_logged){ ?><a class="ab-link"<?php if($__Context->mi->signin_helper == ''){ ?> href="<?php echo getUrl('act','dispMemberLoginForm') ?>"<?php }else{ ?> onclick="jQuery('<?php echo $__Context->mi->signin_helper ?>').trigger('click');" style="cursor: pointer;"<?php } ?>></a><?php } ?>
		</div><?php } ?>
	</div>
</div>
<!-- reCommentBox -->
<?php if($__Context->rd_idx==0){ ?><div id="reCommentBox" class="comment-write" style="display:none;">
	<div class="comment-write-header">
		<h3 id="reCommentHT"><?php echo $lang->write_comment ?>
			<span class="header-tool">
				<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><a id="use_editor"><i class="fas fa-sync-alt fa-fw"></i> <?php echo $lang->use_wysiwyg ?></a><?php } ?> <a href="#" onclick="jQuery('#reCommentBox').toggle().parent().find('#reComment').focus();return false"><i class="fas fa-times fa-fw"></i> <?php echo $lang->cmd_close ?></a>
			</span>
		</h3>
	</div>
	<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><form action="./" method="post" onsubmit="return procFilter(this,insert_comment)" class="comment-write-form"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="member_nickname" value="<?php echo $__Context->logged_info->nick_name ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
		<input type="hidden" name="parent_srl" value="" />
		<input type="hidden" name="use_html" value="Y" />
		<input type="hidden" id="htm_2" value="n" />
		<textarea id="temp_2"></textarea>
		<textarea style="display: none;" id="editor_2" name="content"></textarea>
<script type="text/javascript">
function setTextareaReplace_RC() {
	var str = document.getElementById("temp_2").value;
	str = "<p>" + str.replace(/(?:\r\n|\r|\n)/g, "</p>\r\n<p>") + "</p>";
	str = str.replaceAll("<p></p>", "<p>&nbsp;</p>");
	document.getElementById("editor_2").value = str;
};
</script>
		<?php if(!$__Context->is_logged){ ?><div class="comment-write-author clear">
			<span class="non-member-input">
				<span><?php echo $lang->writer ?></span><input type="text" name="nick_name" id="userName" class="iText userName" />
			</span>
			<span class="non-member-input">
				<span><?php echo $lang->password ?></span><input style="margin-bottom: 0;" type="password" name="password" id="userPw" class="iText userPw" />
			</span>
		</div><?php } ?>
		<div class="comment-write-tool">
			<?php if($__Context->is_logged){ ?><span class="ab-checkbox">
				<input type="checkbox" name="notify_message" value="Y" id="notify_message_recmt" class="ab-btn" />
				<label class="ab-btn" for="notify_message_recmt"><?php echo $lang->notify ?></label>
			</span><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><span class="ab-checkbox">
				<input<?php if(!$__Context->is_logged){ ?> style="margin-top: 0.6em"<?php } ?> type="checkbox" name="is_secret" value="Y" id="is_secret_recmt" class="ab-btn" />
				<label class="ab-btn" for="is_secret_recmt"><?php echo $lang->secret ?></label>
			</span><?php } ?>
			<button type="submit" class="ab-btn<?php if($__Context->mi->write_btn_style == 'border'){ ?> ab-point-bacolor ab-border-1 ab-point-color<?php }elseif($__Context->mi->write_btn_style == 'fill'){ ?> ab-point-bgcolor ab-text-white<?php }else{ ?> ab-point-color<?php } ?>" onclick="setTextareaReplace_RC()"><?php echo $lang->cmd_comment_registration ?></button>
		</div>
	</form><?php } ?>
	<?php if(!$__Context->grant->write_comment || !$__Context->oDocument->isEnableComment()){ ?><div class="comment-write-form" style="position: relative;">
		<textarea style="resize: none;"><?php echo $lang->not_permitted_comment;
if(!$__Context->is_logged){ ?> <?php echo $lang->sign_in;
} ?></textarea>
		<?php if(!$__Context->is_logged){ ?><a class="ab-link"<?php if($__Context->mi->signin_helper == ''){ ?> href="<?php echo getUrl('act','dispMemberLoginForm') ?>"<?php }else{ ?> onclick="jQuery('<?php echo $__Context->mi->signin_helper ?>').trigger('click');" style="cursor: pointer;"<?php } ?>></a><?php } ?>
	</div><?php } ?>
</div><?php } ?>
<!--/reCommentBox -->
