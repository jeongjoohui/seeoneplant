<?php if(!defined("__XE__"))exit;?><div id="skip" class="skip-navigation">
    <a href="#gnb">메뉴 바로가기</a>
    <a href="#content">컨텐츠 바로가기</a>
</div>
<header id="header" class="main-header">
    <div class="header-top">
        <div class="top-bnr__left">
            <p class="fz22 fw_400">임플란트 수술</p>
            <div class="top-bnr__left-bg">
                <div class="odometer top-counter"<?php if($__Context->layout_info->case_count){ ?> data-case="<?php echo $__Context->layout_info->case_count ?>"<?php } ?>>12000</div>
                <div class="top-bnr__left-txt">
                    <p class="fz20 fw_500">건 누적식립</p>
                    <p class="fz18 c_g"><span><?php echo $__Context->layout_info->case_year ?></span>.<span><?php echo $__Context->layout_info->case_month ?></span>기준</p>
                </div>
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
        <div class="log_menu">
            <?php if(!$__Context->logged_info){ ?><a class="join" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">회원가입</a><?php } ?>
            <?php if(!$__Context->logged_info){ ?><a class="login" href="<?php echo getUrl('act','dispMemberLoginForm') ?>">로그인</a><?php } ?>
            <?php if($__Context->logged_info){ ?><a class="logout" href="<?php echo getUrl('act', 'dispMemberLogout') ?>">로그아웃</a><?php } ?>
            <?php if($__Context->logged_info->is_admin){ ?><a class="management" href="/index.php?module=admin">관리자</a><?php } ?>
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