<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','include.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','header.html') ?>
<div class="video-bg" id="bg">
    <iframe src="https://player.vimeo.com/video/442971463?background=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <div class="overlay"></div>
</div>
<main class="main-content" id="content">
    <div class="case-bg <?php if($__Context->mid=='notice'){ ?>notice<?php }else{;
} ?>">
        <div class="title c_w ta_c">
            <h2 class="h2 m_24">시원플란트치과 <em><?php echo $__Context->module_info->browser_title ?></em></h2>
            <?php if($__Context->mid=='case'){ ?>
            <p class="fz18 c_g">소중한 시원플란트 치과 고객님의 치료사례입니다</p>
            <?php }else{ ?>
            <p class="fz18 c_g">시원플란트 공지사항 및 이벤트 입니다</p>
            <?php } ?>
        </div>
    </div>
    <div class="case-wrap">
        <div class="container">
            <?php echo $__Context->content ?>
        </div>
    </div>
</main>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/seeoneplant','footer.html') ?>