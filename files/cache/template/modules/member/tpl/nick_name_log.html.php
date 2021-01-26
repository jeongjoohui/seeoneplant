<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/tpl','header.html') ?>
<table class="x_table x_table-striped x_table-hover">
	<thead>
		<tr>
			<th><?php echo $lang->date ?></th>
			<th><?php echo $lang->nick_name_before_changing ?></th>
			<th class="title"><?php echo $lang->nick_name_after_changing ?></th>
		</tr>
	</thead>
	<?php if($__Context->nickname_list){ ?><tbody>
		<?php if($__Context->nickname_list)foreach($__Context->nickname_list as $__Context->val){ ?><tr>
			<td>
				<?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?>
			</td>
			<td>
				<?php echo $__Context->val->before_nick_name ?>
			</td>
			<td>
				<?php echo $__Context->val->after_nick_name ?>
			</td>
		</tr><?php } ?>
	</tbody><?php } ?>
	<?php if(!$__Context->nickname_list){ ?><tbody>
		<tr>
			<td colspan="3" style="text-align: center"><?php echo $lang->no_data ?></td>
		</tr>
	</tbody><?php } ?>
</table>
<div class="x_clearfix">
	<div class="x_pagination x_pull-left">
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>>
				<a href="<?php echo getUrl('page','','module_srl','') ?>" class="direction">&laquo; <?php echo $lang->first_page ?></a>
			</li>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>>
				<a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a>
			</li>
			<?php } ?>
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>>
				<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="direction"><?php echo $lang->last_page ?> &raquo;</a>
			</li>
		</ul>
	</div>
</div>
