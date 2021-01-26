<?php if(!defined("__XE__"))exit;
$__Context->prev_page = max($__Context->page-1, 1) ?>
<?php  $__Context->next_page = min($__Context->page+1, $__Context->page_navigation->last_page) ?>
<a <?php if($__Context->page!=1){ ?>href="<?php echo getUrl('page',$__Context->prev_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" <?php } ?>class="pagination-arrow<?php if($__Context->page==1){ ?> disabled<?php } ?>"><?php echo $lang->cmd_prev ?></a>
<?php if($__Context->page_navigation->last_page!=1){ ?>
	<?php if($__Context->page==1){ ?>
		<strong class="pagination-num"><span>1</span></strong>
	<?php }else{ ?>
		<?php if($__Context->page!=$__Context->page_no){ ?><a class="pagination-num" href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>">1</a><?php } ?>
	<?php } ?>
<?php } ?>
<?php if($__Context->page>($__Context->module_info->page_count)/2+2){ ?><span class="pagination-num">...</span><?php } ?>
<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){;
if($__Context->page_no!=1 && $__Context->page_no!=$__Context->page_navigation->last_page){ ?>
	<?php if($__Context->page==$__Context->page_no){ ?><strong class="pagination-num"><?php echo $__Context->page_no ?></strong><?php } ?>
	<?php if($__Context->page!=$__Context->page_no){ ?><a class="pagination-num" href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
<?php }} ?>
<?php if(($__Context->page+($__Context->module_info->page_count+1)/2<$__Context->page_navigation->last_page) && ($__Context->module_info->page_count+1<$__Context->page_navigation->last_page)){ ?><span class="pagination-num">...</span><?php } ?>
<?php if($__Context->page==$__Context->page_navigation->last_page){ ?>
	<strong class="pagination-num"><?php echo $__Context->page_navigation->last_page ?></strong>
<?php }else{ ?>
	<?php if($__Context->page!=$__Context->page_no){ ?><a class="pagination-num" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_navigation->last_page ?></a><?php } ?>
<?php } ?>
<a <?php if($__Context->page!=$__Context->page_navigation->last_page){ ?>href="<?php echo getUrl('page',$__Context->next_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" <?php } ?>class="pagination-arrow<?php if($__Context->page==$__Context->page_navigation->last_page){ ?> disabled<?php } ?>"><?php echo $lang->cmd_next ?></a>
