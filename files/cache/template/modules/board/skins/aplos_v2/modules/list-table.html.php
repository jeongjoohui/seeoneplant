<?php if(!defined("__XE__"))exit;?><table class="ab-table">
	<?php if($__Context->mi->table_head == ''){ ?><thead>
		<!-- Header -->
		<tr>
			<?php if($__Context->list_config)foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $lang->no ?></span></th><?php } ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if($__Context->timeline_info && $__Context->mi->category_timeline==''){ ?><th><?php echo $lang->board ?></th><?php } ?>
			<?php if($__Context->showCategory){ ?><th scope="col"><span><?php echo $lang->category ?></span></th><?php } ?>
			<th scope="col" class="title"><span><a href="<?php echo getUrl('sort_index','title','order_type',$__Context->order_type) ?>"><?php echo $lang->title;
if($__Context->sort_index=='title'){ ?><i class="fa fa-angle-<?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><th scope="col"<?php if(!$__Context->grant->manager && ($__Context->mi->consultation == 'Y' && $__Context->mi->table_consultation_author == 'n')){ ?> style="display: none;"<?php } ?>><span><?php echo $lang->writer ?></span></th><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><th scope="col"<?php if(!$__Context->grant->manager && ($__Context->mi->consultation == 'Y' && $__Context->mi->table_consultation_author == 'n')){ ?> style="display: none;"<?php } ?>><span><?php echo $lang->user_id ?></span></th><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><th scope="col"<?php if(!$__Context->grant->manager && ($__Context->mi->consultation == 'Y' && $__Context->mi->table_consultation_author == 'n')){ ?> style="display: none;"<?php } ?>><span><?php echo $lang->user_name ?></span></th><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>"><?php echo $lang->date;
if($__Context->sort_index=='regdate'){ ?><i class="fa fa-angle-<?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $lang->last_update;
if($__Context->sort_index=='last_update'){ ?><i class="fa fa-angle-<?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $lang->last_post ?></span></th><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>"><?php echo $lang->readed_count;
if($__Context->sort_index=='readed_count'){ ?><i class="fa fa-angle-<?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>"><?php echo $lang->voted_count;
if($__Context->sort_index=='voted_count'){ ?><i class="fa fa-angle-<?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index',$__Context->val->eid,'order_type',$__Context->order_type) ?>"><?php echo $__Context->val->name ?></a></span></th><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><th scope="col"><input class="cart" id="cart_all" type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" title="Check All" /><label for="cart_all" class="cart"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i></label></th><?php } ?>
		</tr>
	</thead><?php } ?>
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><tbody>
		<tr>
			<td<?php if(!$__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config)+1 ?>"<?php };
if($__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config)+2 ?>"<?php } ?>><?php echo $lang->no_documents ?></td>
		</tr>
	</tbody><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?><tbody>
		<!-- Notice -->
		<?php if($__Context->notice_list)foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="notice<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> active<?php } ?>">
<?php 
	$__Context->oModuleModel = &getModel('module');
	$__Context->mi_temp = getModel('module')->getModuleInfoByDocumentSrl($__Context->document->document_srl);
	$__Context->grant_temp = $__Context->oModuleModel->getGrant($__Context->mi_temp, $__Context->logged_info);
 ?>
			<?php if($__Context->list_config)foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){;
if(!$__Context->document->get('hot_document')){ ?><td class="no">
				<?php if($__Context->document_srl==$__Context->document->document_srl){ ?><i class="fas fa-map-marker  ab-point-color"></i><?php } ?>
				<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $lang->notice;
} ?>
			</td><?php }} ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){;
if($__Context->document->get('hot_document')){ ?><td class="no">
				<span class="document-hot"><?php echo $lang->ab_document_hot ?></span>
			</td><?php }} ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if($__Context->timeline_info && $__Context->mi->category_timeline==''){ ?><td>-</td><?php } ?>
			<?php if($__Context->showCategory){ ?><td class="category"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_category.html') ?></td><?php } ?>
			<td class="title">
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->mi->list_title_cut) ?></a><?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="commentNum ab-point-color" title="<?php echo $lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php };
if($__Context->showIconNotice){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_icon.html');
} ?>
				<a class="ab-link" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"<?php if(!$__Context->grant_temp->view){ ?> onclick="alert('<?php echo $lang->msg_not_permitted ?>'); return false;"<?php } ?>></a>
			</td>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><span><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span></td><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserID() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserName() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="date"><?php if($__Context->mi->list_datetype == ''){;
echo getTimeGap($__Context->document->get('regdate'), $__Context->dateType);
}else{;
if((int)($__Context->document->getRegdate('YmdHis')>date('YmdHis', time()-24*60*60))){;
echo $__Context->document->getRegdate("H:i");
}else{;
echo $__Context->document->getRegdate($__Context->dateType);
};
} ?></td><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="date last_update"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="date last_post">
				<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" title="<?php echo getTimeGap($__Context->document->get('last_update'), "H:i") ?>"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d');
if($__Context->document->getLastUpdater()){ ?><br><small>(by <?php echo $__Context->document->getLastUpdater() ?>)</small><?php } ?></a>
				<?php }else{ ?>
					&nbsp;
				<?php } ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><td class="exval"><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></td><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><td class="check"><input class="cart" id="cart_<?php echo $__Context->document->document_srl ?>" type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="cart_<?php echo $__Context->document->document_srl ?>" class="cart"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i></label></td><?php } ?>
		</tr><?php } ?>
		<!-- Article -->
		<?php if($__Context->document_list)foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><tr<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> class="active"<?php } ?>>
<?php 
	$__Context->oModuleModel = &getModel('module');
	$__Context->mi_temp = getModel('module')->getModuleInfoByDocumentSrl($__Context->document->document_srl);
	$__Context->grant_temp = $__Context->oModuleModel->getGrant($__Context->mi_temp, $__Context->logged_info);
 ?>
			<?php if($__Context->list_config)foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="no">
				<?php if($__Context->document_srl==$__Context->document->document_srl){ ?><i class="fas fa-map-marker here-mark ab-point-color"></i><?php } ?>
				<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->no;
} ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if($__Context->timeline_info && $__Context->mi->category_timeline==''){ ?><td><a href="<?php echo getUrl('module_srl', $__Context->document->get('module_srl')) ?>"><?php echo $__Context->modules_info[$__Context->document->get('module_srl')]->browser_title ?></a></td><?php } ?>
			<?php if($__Context->showCategory){ ?><td class="categoryTD"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_category.html') ?></td><?php } ?>
			<td class="title">
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->mi->list_title_cut) ?></a><?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="commentNum ab-point-color" title="<?php echo $lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php };
if($__Context->showIcon){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_icon.html');
} ?>
				<a class="ab-link" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"<?php if(!$__Context->grant_temp->view){ ?> onclick="alert('<?php echo $lang->msg_not_permitted ?>'); return false;"<?php } ?>></a>
			</td>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"<?php if(!$__Context->grant->manager && ($__Context->mi->consultation == 'Y' && $__Context->mi->table_consultation_author == 'n')){ ?> style="display: none;"<?php } ?>><span><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span></td><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserID() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserName() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="date"><?php if($__Context->mi->list_datetype == ''){;
echo getTimeGap($__Context->document->get('regdate'), $__Context->dateType);
}else{;
if((int)($__Context->document->getRegdate('YmdHis')>date('YmdHis', time()-24*60*60))){;
echo $__Context->document->getRegdate("H:i");
}else{;
echo $__Context->document->getRegdate($__Context->dateType);
};
} ?></td><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="date last_update"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="date last_post">
				<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" title="<?php echo getTimeGap($__Context->document->get('last_update'), "H:i") ?>"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d');
if($__Context->document->getLastUpdater()){ ?><br><small>(by <?php echo $__Context->document->getLastUpdater() ?>)</small><?php } ?></a>
				<?php }else{ ?>
					&nbsp;
				<?php } ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><td class="exval"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_exval.html') ?></td><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><td class="check"><input class="cart" id="cart_<?php echo $__Context->document->document_srl ?>" type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="cart_<?php echo $__Context->document->document_srl ?>" class="cart"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i></label></td><?php } ?>
		</tr><?php } ?>
	</tbody><?php } ?>
</table>
<script>
	$('td.title span[style*="font-weight:bold"]').css('font-weight', '').wrap( '<strong></strong>');
</script>
