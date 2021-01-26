<?php if(!defined("__XE__"))exit;
echo ($this->config->autoescape === 'on' ? htmlspecialchars('<?xml version="1.0" encoding="UTF-8" ?>', ENT_QUOTES, 'UTF-8', false) : ('<?xml version="1.0" encoding="UTF-8" ?>')) ?>
<?php $this->config->autoescape = 'on'; ?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
	<channel>
		<title><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->title, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->title)) ?></title>
		<link><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->link, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->link)) ?></link>
		<description><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->description, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->description)) ?></description>
		<atom:link href="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->id, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->id)) ?>" rel="self" type="application/rss+xml" />
		<language><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->language, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->language)) ?></language>
		<pubDate><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->date_r, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->date_r)) ?></pubDate>
		<generator>Rhymix</generator>
		<?php if($__Context->info->feed_copyright){ ?><copyright><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->feed_copyright, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->feed_copyright)) ?></copyright><?php } ?>
		<?php if($__Context->info->image){ ?><image>
			<url><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->image, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->image)) ?></url>
			<title><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->feed_title, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->feed_title)) ?></title>
			<link><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->info->site_url, ENT_QUOTES, 'UTF-8', false) : ($__Context->info->site_url)) ?></link>
		</image><?php } ?>
		<?php if($__Context->document_list)foreach($__Context->document_list as $__Context->oDocument){ ?><item>
			<title><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getTitleText(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getTitleText())) ?></title>
			<link><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getPermanentUrl(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getPermanentUrl())) ?></link>
			<?php if($__Context->target_modules[$__Context->oDocument->get('module_srl')] == 'Y'){ ?>
			<description><?php echo htmlspecialchars(utf8_trim(utf8_normalize_spaces($__Context->oDocument->get('content'))), ENT_QUOTES, 'UTF-8', true) ?></description>
			<?php }else{ ?>
			<description><?php echo htmlspecialchars($__Context->oDocument->getSummary(400), ENT_QUOTES, 'UTF-8', true) ?></description>
			<?php } ?>
			<?php if($__Context->oDocument->getModuleName()){ ?><category><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getModuleName(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getModuleName())) ?></category><?php } ?>
			<?php if($__Context->oDocument->get('category_srl') && $__Context->category_name = $__Context->category_list[$__Context->oDocument->get('module_srl')][$__Context->oDocument->get('category_srl')]->title){ ?><category><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->category_name, ENT_QUOTES, 'UTF-8', false) : ($__Context->category_name)) ?></category><?php } ?>
			<?php if($__Context->oDocument->get('tag_list'))foreach($__Context->oDocument->get('tag_list') as $__Context->tag){ ?><category><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->tag, ENT_QUOTES, 'UTF-8', false) : ($__Context->tag)) ?></category><?php } ?>
			<dc:creator><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getNickName(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getNickName())) ?></dc:creator>
			<guid isPermaLink="true"><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getPermanentUrl(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getPermanentUrl())) ?></guid>
			<?php if($__Context->oDocument->allowComment()){ ?><comments><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->oDocument->getPermanentUrl(), ENT_QUOTES, 'UTF-8', false) : ($__Context->oDocument->getPermanentUrl())) ?>#comment</comments><?php } ?>
			<pubDate><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars(date('r', ztime($__Context->oDocument->get('regdate'))), ENT_QUOTES, 'UTF-8', false) : (date('r', ztime($__Context->oDocument->get('regdate'))))) ?></pubDate>
		</item><?php } ?>
	</channel>
</rss>
