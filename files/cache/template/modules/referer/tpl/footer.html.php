<?php if(!defined("__XE__"))exit;?><!-- 페이지 네비게이션 -->
<?php if(is_object($__Context->page_navigation)){ ?><div class="pagination pagination-centered">
	<ul>
		<li><a href="<?php echo getUrl('page','') ?>" class="direction">&laquo; <?php echo $lang->first_page ?></a></li> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<li<?php if($__Context->page == $__Context->page_no){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('page',$__Context->page_no,'') ?>"><?php echo $__Context->page_no ?></a></li> 
        <?php } ?>
		<li><a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="direction"><?php echo $lang->last_page ?> &raquo;</a></li>
	</ul>
</div><?php } ?>
