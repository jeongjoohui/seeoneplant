<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','header.html') ?>
<script>
<?php $__Context->oMemberModel = &getModel('member') ?>
<?php $__Context->oRefererClass = &getClass('referer') ?>
<?php $__Context->oRefererModel = &getModel('referer') ?>
jQuery(function($){
	$(".userAgent .ua_view").click(function(){
		$(this).parent().find(".ua_more:not(:animated)").slideToggle("fast");
	});
	$(".refererUrl .rf_view").click(function(){
		$(this).parent().find(".rf_more:not(:animated)").slideToggle("fast");
	});
});
</script>
<div class="table even">
	<table cellspacing="0" class="rowTable">
	<colgroup>
		<col style="width:120px" />
		<col style="width:170px" />
		<col style="width:95px" />
		<col style="max-width:580px" />
		<col style="width:60px" />
	</colgroup>
	<caption>All (<?php echo number_format($__Context->total_count) ?>) / Page (<?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?>) &nbsp; &nbsp; &nbsp;
		<?php if($__Context->host){ ?><span class="btn">URL: <a href="http://<?php echo $__Context->host ?>" target="_blank"><?php echo $__Context->host ?></a></span><?php } ?>
		<?php if($__Context->remote){ ?><span class="btn"><?php echo $lang->remote ?>: <a href="http://myip.ms/info/whois/<?php echo $__Context->remote ?>" title="<?php echo $lang->IP_Tracing ?>" target="_blank"><?php echo $__Context->remote ?></a></span><?php } ?>
		<?php if($__Context->user_info){ ?><span class="btn"><?php echo $lang->user ?>: <?php echo $__Context->user_info ?></span><?php } ?>
		<?php if($__Context->country){ ?><span class="btn"><?php echo $lang->country ?>: <?php echo $__Context->country ?></span><?php } ?>
		<?php if($__Context->ref_mid&&$__Context->ref_document_srl<0) $__Context->ref_uri=$__Context->ref_mid; ?>
		<?php if(!$__Context->ref_mid&&$__Context->ref_document_srl>0) $__Context->ref_uri=$__Context->ref_document_srl; ?>
		<?php if($__Context->ref_mid&&$__Context->ref_document_srl>0) $__Context->ref_uri=$__Context->ref_mid."/".$__Context->ref_document_srl; ?>
		<?php if($__Context->ref_uri){ ?><span class="btn"><?php echo $lang->request_uri ?>: <a href="/<?php echo $__Context->ref_uri ?>" title="<?php echo $lang->cmd_go_to_page ?>" target="_blank">/<?php echo $__Context->ref_uri ?></a></span><?php } ?>
		<?php if($__Context->uagent){ ?><span class="btn"><?php echo $lang->uagent ?>: <a href="http://useragentstring.com/" title="<?php echo $lang->uagent_info ?>" target="_blank">http://useragentstring.com/</a></span><?php } ?>
	</caption>
	<thead>
		<tr>
			<th class="mobile-portrait-hidden"><?php echo $lang->first_accessed ?>~<?php echo $lang->last_accessed ?></th>
			<th><?php echo $lang->remote ?></th>
			<th>UAgent</th>
			<th><?php echo $lang->referer ?></th>
			<th><?php echo $lang->readed_count ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if(!$__Context->referer_list){ ?><tr><td colspan="5" style="text-align:center"><?php echo $lang->msg_no_result ?></td></tr><?php } ?>
		<?php if($__Context->referer_list)foreach($__Context->referer_list as $__Context->no => $__Context->val){ ?>
		<tr>
			<td class="date mobile-portrait-hidden"><?php echo zdate($__Context->val->regdate,"Y-m-d") ?><br/><?php echo zdate($__Context->val->regdate,"H:i:s") ?>~<?php echo zdate($__Context->val->regdate_last,"H:i:s") ?></td>
			<td>
				<span id="IP_<?php echo $__Context->no ?>" class="flag mobile-portrait-hidden" ip="<?php echo $__Context->val->remote ?>"></span><a href="http://myip.ms/info/whois/<?php echo $__Context->val->remote ?>" title="<?php echo $lang->IP_Tracing ?>" target="_blank"><?php echo $__Context->val->remote ?></a>
			</td>
			<td class="userAgent">
				<button type="button" class="sTog ua_view" title="Open/Close"><i class="x_icon-chevron-down"></i></button>
				<div class="ua_more" style="display:none"><?php echo $__Context->val->uagent ?></div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','ua_icons.html') ?>
			</td>
			<td class="refererUrl">
				<button type="button" class="sTog rf_view" title="Open/Close"><i class="x_icon-chevron-down"></i></button>
				<?php if($__Context->val->member_srl > 0){ ?><button type="button" class="sTog rf_view" title="<?php echo $__Context->val->user_id ?>"><i class="x_icon-user"></i></button><?php } ?>
			<?php if($__Context->val->url=="http://localhost"){ ?>
				<?php echo $lang->direct_access ?>
			<?php }else{ ?>
			<?php $__Context->url=urldecode($__Context->val->url) ?>
			<?php $__Context->url_kr=iconv("EUC-KR", "UTF-8", $__Context->url) ?>
			<?php $__Context->url=iconv("UTF-8", "UTF-8", $__Context->url)!=$__Context->url&&$__Context->url_kr!=""?$__Context->url_kr:$__Context->url ?>
				<div style="text-overflow:ellipsis;overflow:hidden;word-wrap:break-word;max-width:575px">
					<span id="URL_<?php echo $__Context->no ?>" class="flag mobile-portrait-hidden" domain="<?php echo $__Context->val->hostip ?>"></span><a href="<?php echo $__Context->val->url ?>" title="<?php echo $__Context->val->url ?>" target="_blank"><?php echo $__Context->url ?></a>
				</div>
			<?php } ?>
				<div class="rf_more" style="display:none">
					<?php $__Context->member_info = $__Context->val->member_srl > 0 ? $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->member_srl) : NULL ?>
					<?php echo $lang->host ?>: <?php if($__Context->val->url=="http://localhost"){ ?>localhost<?php }else{ ?><a href="http://<?php echo $__Context->val->host ?>" title="http://<?php echo $__Context->val->host ?>" target="_blank"><?php echo $__Context->val->host ?></a><?php } ?><br />
					<?php echo $lang->visitor ?>: <?php echo $__Context->oRefererClass->getUserStringFromMemberSrl($__Context->val->member_srl, getUrl('', 'module', $__Context->module, 'act', 'dispRefererAdminIndex', 'page', '1', 'search_target', 'user_id', 'search_keyword', $__Context->oRefererClass->getUserIDFromMemberSrl($__Context->val->member_srl)), $lang->search_user) ?><br />
					<?php echo $lang->request_uri ?>: <a href="<?php echo $__Context->val->request_uri ?>" target="_blank" title="<?php echo $lang->cmd_go_to_page ?>"><?php echo $__Context->val->request_uri ?></a>
				</div>
			</td>
			<td class="number"><?php echo $__Context->val->count ?></td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
	<?php if($__Context->host||$__Context->remote||$__Context->country_code||$__Context->user_info||$__Context->ref_mid||$__Context->ref_document_srl||$__Context->uagent){ ?><div class="btnArea"><span class="btn"><a href="<?php echo getUrl('act', 'dispRefererAdminIndex', 'page', 1, 'host', '', 'remote', '', 'country_code', '', 'country', '', 'member_srl', '', 'ref_mid', '', 'ref_document_srl', '', 'uagent', '', 'search_target', '', 'search_keyword', '') ?>"><?php echo $lang->cmd_view_all ?></a></span></div><?php } ?>
	<form action="./" method="post" class="search center x_input-append" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="host" value="<?php echo $__Context->host ?>" />
		<input type="hidden" name="remote" value="<?php echo $__Context->remote ?>" />
		<input type="hidden" name="country_code" value="<?php echo $__Context->country_code ?>" />
		<input type="hidden" name="country" value="<?php echo $__Context->country ?>" />
		<input type="hidden" name="user_id" value="<?php echo $__Context->user_id ?>" />
		<input type="hidden" name="ref_mid" value="<?php echo $__Context->ref_mid ?>" />
		<input type="hidden" name="ref_document_srl" value="<?php echo $__Context->ref_document_srl ?>" />
		<input type="hidden" name="uagent" value="<?php echo $__Context->uagent ?>" />
		<label for="search_mode" class="control-label"><input type="checkbox" name="search_mode" value="members"<?php if($__Context->search_mode=='members'){ ?> checked="checked"<?php } ?>> <?php echo $lang->show_members_only ?> &nbsp;</label>
		<select name="search_target" style="margin-right:4px" title="<?php echo $lang->search_target ?>">
		<?php $__Context->search_target_list = array("referer"=>$lang->referer, "remote"=>$lang->remote, "user_id"=>$lang->user_id, "request_uri"=>$lang->visiting_page, "uagent"=>$lang->uagent, "date"=>$lang->accessdate, "date_less"=>$lang->accessdate_less, "date_more"=>$lang->accessdate_more, "country_code"=>$lang->country_code) ?>
		<?php if($__Context->search_target_list)foreach($__Context->search_target_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" style="width:140px">
		<button class="x_btn x_btn-inverse" type="submit" name="search_action" value="search"><?php echo $lang->cmd_search ?></button>
		<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act, 'page', $__Context->page, 'host', $__Context->host, 'host', $__Context->host, 'remote', $__Context->remote, 'ref_mid', $__Context->ref_mid, 'ref_document_srl', $__Context->ref_document_srl, 'uagent', $__Context->uagent) ?>"><?php echo $lang->cmd_cancel ?></a>
		<button class="x_btn x_btn x_pull-right" type="button" onclick="document.getElementById('fo_save_data').submit();"<?php if(!$__Context->total_count){ ?> disabled<?php } ?>><?php echo $lang->cmd_save_as_excel ?></button>
	</form>
	<form action="./" method="post"  name="fo_save_data" id="fo_save_data"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="host" value="<?php echo $__Context->host ?>" />
		<input type="hidden" name="remote" value="<?php echo $__Context->remote ?>" />
		<input type="hidden" name="country_code" value="<?php echo $__Context->country_code ?>" />
		<input type="hidden" name="country" value="<?php echo $__Context->country ?>" />
		<input type="hidden" name="user_id" value="<?php echo $__Context->user_id ?>" />
		<input type="hidden" name="ref_mid" value="<?php echo $__Context->ref_mid ?>" />
		<input type="hidden" name="ref_document_srl" value="<?php echo $__Context->ref_document_srl ?>" />
		<input type="hidden" name="uagent" value="<?php echo $__Context->uagent ?>" />
		<input type="hidden" name="search_mode" value="<?php echo $__Context->search_mode ?>" />
		<input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" />
		<input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" />
		<input type="hidden" name="search_action" value="save" />
	</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','footer.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip.html') ?>