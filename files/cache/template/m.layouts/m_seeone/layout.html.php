<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/m_seeone','include.html') ?>
<body>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/m_seeone','header.html') ?>
<!-- Contents
------------------------------------------------------>
<div class="mwrap trs <?php if($__Context->mid=='case'){ ?>board<?php }else if($__Context->mid=='notice'){ ?>board<?php } ?>"><?php echo $__Context->content ?></div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/m_seeone','footer.html') ?>
<?php if($__Context->mid==='romeo' || $__Context->mid==='main'){;
} ?>
<!--
<span itemscope="" itemtype="http://schema.org/Organization">
 <link itemprop="url" href="http://www.thewookdental.co.kr">
 <a itemprop="sameAs" href="https://blog.naver.com/thewookdental"></a>
</span>-->
</body>