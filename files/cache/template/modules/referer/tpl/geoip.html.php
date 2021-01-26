<?php if(!defined("__XE__"))exit;
if($__Context->refererConfig->use_geoip_admin != "no"){ ?>
<div id="loading"></div>
<input id="GeoIPSite" type="hidden" value="auto"/>
<script type="text/javascript">// <![CDATA[
jQuery(function($){
	var oFlag = new Object();
	var opts = {
		left:$('.table').position().left+$('.table').width()/2+'px',
		top:$('.table').offset().top+'px'
	}
	var target = document.getElementById('loading');
	var spinner = new Spinner(opts);
	var done = 0;
	var total = 0;
	
	$('.flag').each(function() {
		if (typeof $(this).attr('ip') != 'undefined') {
			if(oFlag[$(this).attr('ip')] === undefined) {
				oFlag[$(this).attr('ip')] = [];
				++total;
			}
			oFlag[$(this).attr('ip')].push($(this).attr('id'));
		}
		else if (typeof $(this).attr('domain') != 'undefined') {
			if(oFlag[$(this).attr('domain')] === undefined) {
				oFlag[$(this).attr('domain')] = [];
				++total;
			}
			oFlag[$(this).attr('domain')].push($(this).attr('id'));
		}
	});
	if(total) {
		spinner.spin(target);
<?php if($__Context->refererConfig->GeoIPSite == 'geoipxe'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_geoipxe.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'ipapi')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_ipapi.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'petabyet')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_petabyet.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'ipsb')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_ipsb.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'ipdata')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_ipdata.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'geoipdb')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_geoipdb.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'geojs')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_geojs.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'nekudo')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_nekudo.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'cdnservice')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_cdnservice.html');
} ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto' || $__Context->refererConfig->GeoIPSite == 'pingadvisor')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_pingadvisor.html');
} ?>
<?php if($__Context->refererConfig->GeoIPSite=='geoipxe') echo "getGeoIP_geoipxe();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='ipapi') echo "getGeoIP_ipapi();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='petabyet') echo "getGeoIP_petabyet();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='ipsb') echo "getGeoIP_ipsb();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='ipdata') echo "getGeoIP_ipdata();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='geoipdb') echo "getGeoIP_geoipdb();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='geojs') echo "getGeoIP_geojs();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='nekudo') echo "getGeoIP_nekudo();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='cdnservice') echo "getGeoIP_cdnservice();"; ?>
<?php if($__Context->refererConfig->GeoIPSite=='pingadvisor') echo "getGeoIP_pingadvisor();"; ?>
<?php if(($__Context->refererConfig->GeoIPSite == 'auto')){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','geoip_auto.html');
} ?>
	}
});
// ]]></script>
<?php } ?>