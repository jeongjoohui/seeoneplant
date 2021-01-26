<?php if(!defined("__XE__"))exit;?>
<?php echo Context::addMetaTag("viewport", "width=device-width, user-scalable=yes") ?>
<?php Context::loadLang('layouts/simple_world/lang'); ?>
<?php 
	if(!$__Context->layout_info->primary_color)
		$__Context->layout_info->primary_color = 'red';
	if(!$__Context->layout_info->customized_primary_color)
		$__Context->layout_info->customized_primary_color = '#f44336';
	if(!$__Context->layout_info->content_color)
		$__Context->layout_info->content_color = '#ffffff';
	$__Context->material_colors = array(
		'red'	=>	'#f44336',
		'crimson'	=>	'#aa0000',
		'pink'	=>	'#e91e63',
		'purple'	=>	'#9c27b0',
		'deep-purple'	=>	'#673ab7',
		'indigo'	=>	'#3f51b5',
		'deep-blue'	=>	'#00397f',
		'blue'	=>	'#2196f3',
		'light-blue'	=>	'#03a9f4',
		'cyan'	=>	'#00bcd4',
		'teal'	=>	'#009688',
		'green'	=>	'#4caf50',
		'light-green'	=>	'#8bc34a',
		'lime'	=>	'#cddc39',
		'yellow'	=>	'#ffeb3b',
		'amber'	=>	'#ffc107',
		'orange'	=>	'#ff9800',
		'deep-orange'	=>	'#ff5722',
		'brown'	=>	'#795548',
		'grey'	=>	'#9e9e9e',
		'blue-grey'	=>	'#607d8b',
		'black'	=>	'#000000',
		'white'	=>	'#ffffff',
		'customized'	=>	$__Context->layout_info->customized_primary_color,
	);
	$__Context->oMemberModel = getModel('member');
	$__Context->member_config = $__Context->oMemberModel->getMemberConfig();
 ?>
<?php echo Context::addMetaTag("theme-color", $__Context->material_colors[$__Context->layout_info->primary_color]) ?>
<?php Context::set('layout_scss_value', array('grey' => $__Context->material_colors['grey'], 'primary_color' => $__Context->material_colors[$__Context->layout_info->primary_color], 'menu_position' => $__Context->layout_info->menu_position, 'content_color' => $__Context->layout_info->content_color)) ?>
<!--#Meta:layouts/simple_world/layout.scss?$__Context->layout_scss_value--><?php $__tmp=array('layouts/simple_world/layout.scss','','','',$__Context->layout_scss_value);Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/simple_world/layout.js--><?php $__tmp=array('layouts/simple_world/layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="skip"><a href="#content"><?php echo lang('skip_to_content') ?></a></div>
<header class="layout_frame">
	<div class="layout_header layout_canvas">
		<h1>
			<a href="<?php if($__Context->layout_info->logo_url){;
echo $__Context->layout_info->logo_url;
}elseif(Context::getDefaultUrl()){;
echo Context::getDefaultUrl();
}else{;
echo getUrl('');
} ?>" id="siteTitle">
				<?php if(!Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){ ?>Rhymix<?php } ?>
				<?php if(Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){;
echo Context::getSiteTitle();
} ?>
				<?php if($__Context->layout_info->LOGO_IMG){ ?><img src="<?php echo $__Context->layout_info->LOGO_IMG ?>" alt="<?php echo $__Context->layout_info->LOGO_TEXT ?>"><?php } ?>
				<?php if(!$__Context->layout_info->LOGO_IMG && $__Context->layout_info->LOGO_TEXT){;
echo $__Context->layout_info->LOGO_TEXT;
} ?>
			</a>
		</h1>
		<div id="layout_menu_toggle">
			<button class="layout_mobile_menu layout_mobile_menu--htx" data-target="layout_gnb">
				<span><?php echo lang('common.menu') ?></span>
			</button>
		</div>
		<div class="hside layout_pc">
			<div class="side">
				
				<form action="<?php echo getUrl() ?>" method="get" class="layout_search" >
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="act" value="IS" />
					<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" required placeholder="<?php echo lang('common.cmd_search') ?>" title="<?php echo lang('common.cmd_search') ?>" />
					<input type="submit" value="<?php echo lang('common.cmd_search') ?>" />
				</form>
				
			</div>
		</div>
	</div>
	
	<nav class="layout_frame layout_menu" id="layout_gnb">
		<ul>
			<li class="layout_dropdown">
				<?php if(!$__Context->is_logged){ ?><a href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>"><?php echo sprintf(lang('simple_hello'), lang('simple_guest')) ?></a><?php } ?>
				<?php if(!$__Context->is_logged){ ?><ul class="layout_dropdown-content">
					<li><a href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>"><?php echo lang('member.cmd_login') ?>...</a></li>
					<li><?php if($__Context->member_config->enable_join === 'Y'){ ?><a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>"><?php echo lang('member.cmd_signup') ?>...</a><?php } ?></li>
				</ul><?php } ?>
				<?php if($__Context->is_logged){ ?><a href="<?php echo getUrl('act', 'dispMemberInfo', 'member_srl', '') ?>"><?php echo sprintf(lang('simple_hello'), $__Context->logged_info->nick_name) ?></a><?php } ?>
				<?php if($__Context->is_logged){ ?><ul class="layout_dropdown-content">
					<li><a href="<?php echo getUrl('act', 'dispMemberInfo', 'member_srl', '') ?>"><?php echo lang('member.cmd_view_member_info') ?></a></li>
					<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li>
						<a href="<?php echo getUrl('', 'module','admin') ?>"><?php echo lang('common.cmd_management') ?></a>
					</li><?php } ?>
					<li><a href="<?php echo getUrl('act', 'dispMemberLogout') ?>"><?php echo lang('member.cmd_logout') ?></a></li>
				</ul><?php } ?>
			</li>
			<?php if($__Context->GNB->list)foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li class="<?php if($__Context->val1['selected']){ ?>active <?php };
if($__Context->val1['list']){ ?>layout_dropdown<?php } ?>">
				<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span><?php echo $__Context->val1['link'] ?></span></a>
				<?php if($__Context->val1['list']){ ?><ul class="layout_dropdown-content">
					<?php if($__Context->val1['list'])foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
						<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						<?php if($__Context->val2['list']){ ?><ul>
							<?php if($__Context->val2['list'])foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
						</ul><?php } ?>
					</li><?php } ?>
				</ul><?php } ?>
			</li><?php } ?>
			<li id="layout_search_link">
				<a href="<?php echo getUrl('vid', $__Context->vid, 'mid', $__Context->mid, 'act', 'IS') ?>"><span><?php echo lang('common.cmd_search') ?></span></a>
			</li>
		</ul>
	</nav>
	
</header>
<div class="layout_frame layout_body<?php if(in_array($__Context->layout_info->left_space, array('Y', 'YM'))){ ?> layout_left_content<?php } ?>">
	
	<div class="layout_body layout_canvas">
		
		<?php if(in_array($__Context->layout_info->left_space, array('Y', 'YM'))){ ?><div class="layout_content layout_left_content">
			<?php if($__Context->GNB->list)foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->layout_info->left_space == 'YM' && $__Context->val1['selected']){ ?><section class="layout_left layout_dropdown">
				<h1><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></h1>
				<?php if($__Context->val1['list']){ ?><ul class="layout_dropdown-content">
					<?php if($__Context->val1['list'])foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						<?php if($__Context->val2['list']){ ?><ul>
							<?php if($__Context->val2['list'])foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
						</ul><?php } ?>
					</li><?php } ?>
				</ul><?php } ?>
			</section><?php }} ?>
			<?php if(trim($__Context->layout_info->left_content)){ ?><section class="layout_left">
				<?php echo $__Context->layout_info->left_content ?>
			</section><?php } ?>
		</div><?php } ?>
		<div class="layout_content" id="content">
			<?php echo $__Context->layout_info->before_content ?>
			<?php echo $__Context->content ?>
			<?php echo $__Context->layout_info->after_content ?>
		</div>
		
		<?php if(trim($__Context->layout_info->right_content)){ ?><div class="layout_outright">
			<?php echo $__Context->layout_info->right_content ?>
		</div><?php } ?>
	</div>
</div>
<footer class="layout_frame layout_footer">
	<div class="layout_footer layout_canvas">
		
		<?php if(is_countable($__Context->FNB->list) && count($__Context->FNB->list)){ ?><nav class="layout_menu" id="layout_fnb">
			<ul>
				<?php if($__Context->FNB->list)foreach($__Context->FNB->list as $__Context->key1=>$__Context->val1){ ?><li class="footer_menu">
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span><?php echo $__Context->val1['link'] ?></span></a>
				</li><?php } ?>
			</ul>
		</nav><?php } ?>
		
		
		<?php if(is_countable($__Context->lang_supported) && count($__Context->lang_supported) > 1){ ?><div class="layout_language">
			<button type="button" class="toggle">Language: <?php echo $__Context->lang_supported[$__Context->lang_type] ?></button>
			<ul class="selectLang">
				<?php if($__Context->lang_supported)foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li><?php }} ?>
			</ul>
		</div><?php } ?>
		<?php if(!$__Context->layout_info->FOOTER){ ?><p>Powered by <a href="https://www.rhymix.org/" target="_blank" rel="noopener">Rhymix</a>.</p><?php } ?>
		<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
	</div>
</footer>