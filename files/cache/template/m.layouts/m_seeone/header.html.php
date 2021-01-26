<?php if(!defined("__XE__"))exit;?><!-- Header
------------------------------------------------------>
<header class="header trs <?php if($__Context->mid=='case'){ ?>board<?php }else if($__Context->mid=='notice'){ ?>board<?php } ?>">
    <div class="header-wrap dp_f dp_sb">
			<h1 class="logo"><a href="/seeone" class="ir">시원플란트치과의원 See One Plant Dental Clinic</a></h1>
			<!-- toggle -->
			<div class="header-rt dp_f dp_c">
				<!-- call -->
				<a href="tel:023845454" class="call ir">문의전화 02-384-5454</a>
				<div class="toggle-bg">
					<button class="toggle">
						<span class="trs"></span>
						<span class="trs"></span>
						<span class="trs"></span>
					</button>
				</div>
			</div>
		</div>
</header>
<!-- GNB
------------------------------------------------------>
<nav class="nav trs">
	<div class="nav-cover"></div>
	<a href="tel:023845454" class="nav-call">시원플란트치과의원 <em>02) 384-5454</em></a>
	<ul class="gnb">
		<?php if($__Context->global_menu->list)foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="on"<?php } ?>>
			<a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a>
			<?php if($__Context->val1['list']){ ?><ul class="depth2">
				<?php if($__Context->val1['list'])foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="on"<?php } ?>>
					<a href="<?php echo $__Context->val2['href'] ?>"><?php echo $__Context->val2['link'] ?></a>
				</li><?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
	</ul>
	<h1 class="nav-logo"><a href="/seeone" class="ir">시원플란트치과의원 See One Plant Dental Clinic</a></h1>
</nav>