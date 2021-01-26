<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/autolink/autolink.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "autolink",
      "target_plugin" => "autolink",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;

$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/layerpopup/layerpopup.addon.php';
$addon_info = unserialize('O:8:"stdClass":31:{s:15:"xe_validator_id";s:31:"modules/addon/tpl/setup_addon/1";s:11:"load_jquery";s:2:"no";s:14:"load_jquery_ui";s:2:"no";s:9:"popup_con";s:3:"img";s:8:"img_path";s:68:"/files/attach/images/2021/01/19/93ee7bd99d80fbcfec5a6ad59ee6d10f.jpg";s:8:"img_href";s:37:"http://www.seeoneplant.com/notice/365";s:8:"img_open";s:6:"_blank";s:9:"popup_pos";s:4:"true";s:13:"nopopup_color";s:7:"#ffffff";s:10:"image_size";s:4:"true";s:5:"width";s:3:"450";s:6:"height";s:3:"500";s:10:"openeffect";s:4:"fade";s:11:"closeeffect";s:4:"fade";s:9:"openspeed";s:3:"500";s:8:"topratio";s:4:"0.05";s:9:"leftratio";s:4:"0.02";s:10:"popup_drag";s:6:"handle";s:10:"popup_time";s:3:"yes";s:14:"starttime_auto";s:2:"no";s:6:"s_year";s:4:"2020";s:7:"s_month";s:2:"01";s:5:"s_day";s:2:"18";s:7:"s_hours";s:2:"24";s:9:"s_minutes";s:2:"00";s:6:"e_year";s:4:"2020";s:7:"e_month";s:2:"01";s:5:"e_day";s:2:"18";s:7:"e_hours";s:2:"24";s:9:"e_minutes";s:2:"00";s:13:"xe_run_method";s:12:"run_selected";}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "layerpopup",
      "target_plugin" => "layerpopup",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;

$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/member_extra_info/member_extra_info.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "member_extra_info",
      "target_plugin" => "member_extra_info",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;

$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/resize_image/resize_image.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "resize_image",
      "target_plugin" => "resize_image",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;
