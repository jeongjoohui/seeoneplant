<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','include.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','header.html') ?>
<main class="main-content" id="content">
    <?php echo $__Context->content ?>
</main>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','footer.html') ?>