<?php if(!defined("__XE__"))exit;?><!--css load-->
<!--#Meta:layouts/seeoneplant/font/stylesheet.css--><?php $__tmp=array('layouts/seeoneplant/font/stylesheet.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/themes/odometer-theme-default.css--><?php $__tmp=array('layouts/seeoneplant/css/themes/odometer-theme-default.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/jquery.simplyscroll.css--><?php $__tmp=array('layouts/seeoneplant/css/jquery.simplyscroll.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/swiper.min.css--><?php $__tmp=array('layouts/seeoneplant/css/swiper.min.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/reset.css--><?php $__tmp=array('layouts/seeoneplant/css/reset.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/common.css--><?php $__tmp=array('layouts/seeoneplant/css/common.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/transition.css--><?php $__tmp=array('layouts/seeoneplant/css/transition.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/style.css--><?php $__tmp=array('layouts/seeoneplant/css/style.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/css/responsive.css--><?php $__tmp=array('layouts/seeoneplant/css/responsive.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--js load-->
<!--#Meta:layouts/seeoneplant/js/plugins/ScrollMagic.min.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/ScrollMagic.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/TweenMax.min.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/TweenMax.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/animation.gsap.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/animation.gsap.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/debug.addIndicators.min.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/debug.addIndicators.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/jquery.simplyscroll.min.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/jquery.simplyscroll.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/swiper.min.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/swiper.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/plugins/odometer.js--><?php $__tmp=array('layouts/seeoneplant/js/plugins/odometer.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/seeoneplant/js/script.js--><?php $__tmp=array('layouts/seeoneplant/js/script.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="skip" class="skip-navigation">
    <a href="#gnb">메뉴 바로가기</a>
    <a href="#content">컨텐츠 바로가기</a>
</div>
<header id="header" class="main-header">
    <div class="header-top">
        <div class="top-bnr__left">
            <p class="fz22 fw_400">임플란트 수술</p>
            <div class="top-bnr__left-bg">
                <div class="odometer top-counter">12000</div>
            </div>
        </div>
        <h1 class="logo"><a href="/seeone" class="ir">시원플란트치과 see one plant dental</a></h1>
        <div class="swiper-container top-bnr__right">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/layouts/seeoneplant/img/top-bnr__right-slide01-200804.png" alt="치주과전문의 대표원장 상주진료">
                </div>
                <div class="swiper-slide">
                    <img src="/layouts/seeoneplant/img/top-bnr__right-slide03.png" alt="보존과전문의 대표원장 협진 진료">
                </div>
                <div class="swiper-slide">
                    <img src="/layouts/seeoneplant/img/top-bnr__right-slide02.png" alt="3호선 불광역 1번,2번출구">
                </div>
            </div>
            <div class="ctrls prev"></div>
            <div class="ctrls next"></div>
        </div>
    </div>
    <nav id="gnb">
        <ul class="">
            <?php if($__Context->gnb->list)foreach($__Context->gnb->list as $__Context->key1=>$__Context->val1){ ?>
                <?php  $__Context->menu_idx++ ?>
                <li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
                    <a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a>
                    <?php if($__Context->val1['list']){ ?><ul class="depth2 idx_<?php echo $__Context->menu_idx ?>">
                        <?php  $__Context->submenu_idx++ ?>
                        <?php if($__Context->val1['list'])foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
                            <a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
                                <span><?php echo $__Context->val2['link'] ?></span>
                            </a>
                        </li><?php } ?>
                    </ul><?php } ?>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>
<div class="video-bg" id="bg">
    <iframe src="https://player.vimeo.com/video/442971463?background=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <div class="overlay"></div>
</div>
<main class="main-content" id="content">
    <div class="case-bg">
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
<footer class="main-footer" id="footer">
    <div class="container">
        <h1 class="flogo"><a href="/seeone" class="ir">시원플란트치과 see one plant dental</a></h1>
        <div class="main-footer__info p1">
            <address>주소 : 서울시 은평구 통일로 714 우성메디컬 7층</address><p class="tel">  |  TEL : 02-384-5454  |  FAX : 02-384-2599</p>
            <p class="m_18">상호명 : 시원플란트치과  |  대표자 : 이수홍  |  사업자번호 : 252-91-01554</p>
            <p class="copy">COPYRIGHT © 2020 시원플란트치과 ALL RIGHTS RESERVED</p>
        </div>
    </div>
</footer>
<div class="quick" id="quick">
    <ul>
        <li class="quick__case"><a href="/case"><i class="q-icon case-icon"></i> 치료사례</a></li>
        <li class="quick__time"><a href="/seeone#worktime"><i class="q-icon time-icon"></i> 진료시간</a></li>
        <li class="quick__loca"><a href="/seeone#location"><i class="q-icon loca-icon"></i> 오시는길</a></li>
        <li class="quick__resv"><a href="https://booking.naver.com/booking/13/bizes/393540" target="_blank" rel="noopener noreferrer"><i class="q-icon resv-icon"></i> 네이버예약</a></li>
        <li class="quick__talk"><a href="https://talk.naver.com/W4UI12" target="_blank" rel="noopener noreferrer"><i class="q-icon talk-icon"></i> 네이버톡톡</a></li>
    </ul>
</div>
<div class="modal-container">
    <div class="modal-wrapper">
        <div class="modal-content" id="doctor01">
            <img src="/layouts/seeoneplant/img/doctor01-modal-cnt.jpg" alt="이수홍 대표원장">
        </div>
        <div class="modal-content" id="doctor02">
            <img src="/layouts/seeoneplant/img/doctor02-modal-cnt.jpg" alt="김형종 원장">
        </div>
        <div class="modal-content" id="implant01">
            <img src="/layouts/seeoneplant/img/implant-cnt01-img.png" alt="당일임플란트란?">
        </div>
        <div class="modal-content" id="implant02">
            <img src="/layouts/seeoneplant/img/implant-cnt02-img-200804.jpg" alt="전악임플란트란?">
        </div>
        <div class="modal-content" id="implant03">
            <img src="/layouts/seeoneplant/img/implant-cnt03-img.jpg" alt="임플란트재수술이란?">
        </div>
        <div class="modal-content" id="implant04">
            <img src="/layouts/seeoneplant/img/implant-cnt04-img.jpg" alt="상악동거상술이란?">
        </div>
    </div>
    <button class="modal-close p_a"></button>
</div>