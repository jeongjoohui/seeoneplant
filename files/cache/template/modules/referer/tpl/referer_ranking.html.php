<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','header.html') ?>
<div class="table even">
	<table cellspacing="0" class="rowTable">
		<colgroup>
			<col style="width:50px" />
			<col style="max-width:795px" />
			<col style="width:60px" />
			<col style="width:70px" />
			<col style="width:50px" />
		</colgroup>
		<caption>All (<?php echo number_format($__Context->total_count) ?>) / Page (<?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?>)</caption>
		<thead>
			<tr>
				<th><?php echo $lang->ranking ?></th>
				<th>URL</th>
				<th><?php echo $lang->readed_count ?></th>
				<th><?php echo $lang->detail_view ?></th>
				<th><?php echo $lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if(!$__Context->referer_status){ ?><tr><td colspan="5" style="text-align:center"><?php echo $lang->msg_no_result ?></td></tr><?php } ?>
			<?php if($__Context->referer_status)foreach($__Context->referer_status as $__Context->no => $__Context->val){ ?>
			<tr class="row<?php echo $__Context->cycle_idx ?>">
				<td class="number"><?php echo $__Context->rank ?></td>
				<td class="wide"><div style="text-overflow:ellipsis;overflow:hidden;word-wrap:break-word;max-width:795px">
					<span id="<?php echo $__Context->no ?>" class="flag mobile-portrait-hidden" domain="<?php echo $__Context->val->hostip ?>"></span><a href="<?php echo getUrl('act', 'dispRefererAdminIndex', 'host', $__Context->val->host, 'search_target', 'host', 'search_keyword', $__Context->val->host) ?>" title="<?php echo $lang->view_selected_host ?>"><?php echo $__Context->val->host ?></a>
				<?php if(filter_var($__Context->val->host, FILTER_VALIDATE_IP)){ ?>
					<a href="http://myip.ms/info/whois/<?php echo $__Context->val->host ?>" title="<?php echo $lang->IP_Tracing ?>" target="_blank">&nbsp;</a>
				<?php }else{ ?>
					<a href="http://<?php echo $__Context->val->host ?>" title="http://<?php echo $__Context->val->host ?>" target="_blank">&nbsp;</a>
				<?php } ?>
				</div></td>
				<td class="number"><?php echo $__Context->val->cnt ?></td>
				<td class="center"><a href="<?php echo getUrl('act', 'dispRefererAdminRanking', 'host', $__Context->val->host) ?>" title="<?php echo $lang->detail_view ?>"><?php echo $lang->detail_view ?></a></td>
				<td class="center"><a href="<?php echo getUrl('act', 'dispRefererAdminDeleteStat', 'host', $__Context->val->host) ?>" title="<?php echo $lang->cmd_delete ?>" class="buttonSet buttonDelete"><?php echo $lang->cmd_delete ?></a></td>
			</tr>
		<!--<?php echo $__Context->rank += 1 ?> -->
			<?php } ?>
		</tbody>
	</table>
	<form action="./" method="post" class="search center x_input-append" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" style="width:140px">
		<button class="x_btn x_btn-inverse" type="submit"><?php echo $lang->cmd_search ?></button>
		<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act, 'page', $__Context->page) ?>"><?php echo $lang->cmd_cancel ?></a>
	</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','footer.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip.html') ?>