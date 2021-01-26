<?php if(!defined("__XE__"))exit;
if(Mobile::isMobileCheckByAgent()){ ?><!--#Meta:modules/board/skins/aplos_v2/assets/js/mboard.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/mboard.js','body','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/js/aplosboard.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/aplosboard.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/js/jquery.cookie.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/jquery.cookie.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/js/remodal.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/remodal.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/js/clipboard.min.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/clipboard.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->mi->share_article !='n' && $__Context->kakao_key != ''){ ?><!--#Meta://developers.kakao.com/sdk/js/kakao.min.js--><?php $__tmp=array('//developers.kakao.com/sdk/js/kakao.min.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<script>
    jQuery(document).ready(function(){
        <?php if($__Context->mi->etc_forbid!=''){ ?>
            jQuery(document).bind("contextmenu",function(e){
                return false;
            });
            jQuery(document).bind("selectstart",function(){
                return false;
            });
            jQuery(document).bind("dragstart",function(){
                return false;
            });
        <?php } ?>
        <?php if($__Context->mi->responsive_video==''){ ?>
            jQuery( '.article-content .xe_content iframe[src^="https://www.youtube.com/"]' ).wrap( '<div class="videoWrap"></div>' );
            jQuery( '.article-content .xe_content iframe[src^="https://player.vimeo.com/"]' ).wrap( '<div class="videoWrap"></div>' );
            jQuery( '.article-content .xe_content iframe[src^="https://tv.kakao.com/"]' ).wrap( '<div class="videoWrap"></div>' );
            jQuery( '.article-content .xe_content iframe[src^="https://serviceapi.rmcnmv.naver.com/"]' ).wrap( '<div class="videoWrap"></div>' );
        <?php } ?>
    });
<?php if($__Context->mi->share_article =='' && $__Context->kakao_key != '' && $__Context->oDocument){ ?>
    Kakao.init('<?php echo $__Context->kakao_key ?>');
    function sendLink() {
        Kakao.Link.sendScrap({
            requestUrl: '<?php echo $__Context->oDocument->getPermanentUrl() ?>'
        });
    }
    function shareStory() {
      Kakao.Story.share({
        url: '<?php echo $__Context->oDocument->getPermanentUrl() ?>'
      });
    }
<?php } ?>
<?php if($__Context->mi->share_article =='' && $__Context->oDocument){ ?>
	var clipboard = new Clipboard('.ab-copy-url');
	clipboard.on('success', function(e) {
	    alert('Copied!');
	});
	clipboard.on('error', function(e) {
	    prompt('Input Ctrl + C', e.text);
    });
    
    function sendSns(sns, url, title) {
    var o;
    var _url = encodeURIComponent(url);
    var _title = encodeURIComponent(title);
    var _br  = encodeURIComponent('\r\n');
    switch(sns) {
        case 'facebook':
            o = {
                method:'popup',
                url:'http://www.facebook.com/sharer/sharer.php?u=' + _url
            };
            break;
        case 'twitter':
            o = {
                method:'popup',
                url:'http://twitter.com/intent/tweet?url=' + _url
            };
            break;
        case 'googleplus':
            o = {
                method:'popup',
                url:'https://plus.google.com/share?url=' + _url
            };
            break;
        case 'kakaostory':
            o = {
                method:'popup',
                url:'https://story.kakao.com/s/share?url=' + _url
            }
            break;
        case 'naver':
            o = {
                method:'popup',
                url:'http://share.naver.com/web/shareView.nhn?url=' + _url + '&title=' + _title
            };
            break;
        case 'band':
            o = {
                method:'web2app',
                param:'create/post?text=' + _url,
                a_store:'itms-apps://itunes.apple.com/app/id542613198?mt=8',
                g_store:'market://details?id=com.nhn.android.band',
                a_proto:'bandapp://',
                g_proto:'scheme=bandapp;package=com.nhn.android.band'
            };
            break;
        default:
            alert('지원하지 않는 SNS입니다.');
            return false;
    }
    switch(o.method) {
        case 'popup':
            window.open(o.url);
            break;
        case 'web2app':
            if(navigator.userAgent.match(/android/i))
            {
                // Android
                setTimeout(function(){ location.href = 'intent://' + o.param + '#Intent;' + o.g_proto + ';end'}, 100);
            }
            else if(navigator.userAgent.match(/(iphone)|(ipod)|(ipad)/i))
            {
                // Apple
                setTimeout(function(){ location.href = o.a_store; }, 200);
                setTimeout(function(){ location.href = o.a_proto + o.param }, 100);
            }
            else
            {
                switch(sns) {
                    case 'band':
                        o = {
                            url: 'http://band.us/plugin/share?body=' + _url
                        }
                        window.open(o.url);
                        break;
                    default:
                        alert('이 기능은 모바일에서만 사용할 수 있습니다.');
                        break;
                }
            }
            break;
        }
    }
<?php } ?>
</script>