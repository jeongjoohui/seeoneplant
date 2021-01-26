<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/referer/tpl','header.html') ?>
<script type="text/javascript">// <![CDATA[
function digit_check(evt){
	// BS, HOME, END, LEFT, RIGHT, DEL, 숫자만 사용 가능
	if(evt.keyCode != 8 && evt.keyCode != 35 && evt.keyCode != 36 && evt.keyCode != 37 && evt.keyCode != 39 && evt.keyCode != 46 && (evt.which < 48 || evt.which > 57)) return false;
}
// ]]></script>
<section class="section setup">
	<h1><?php echo $lang->cmd_setup ?></h1>
	<?php Context::addJsFile("modules/referer/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal" method="post" ><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
		<input type="hidden" name="module" value="referer" />
		<input type="hidden" name="act" value="procRefererAdminInsertConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin', 'act', $__Context->act) ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/referer/tpl/1" />
		<div class="x_control-group">
			<label class="x_control-label" for="include_admin"><?php echo $lang->include_admin ?></label>
			<div class="x_controls">
				<select name="include_admin" id="include_admin">
					<option value="yes"<?php if($__Context->refererConfig->include_admin=='yes'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->include ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->include_admin=='no'||$__Context->refererConfig->include_admin==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->not_include ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_include_admin ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="include_direct_access"><?php echo $lang->include_direct_access ?></label>
			<div class="x_controls">
				<select name="include_direct_access" id="include_direct_access">
					<option value="yes"<?php if($__Context->refererConfig->include_direct_access=='yes'||$__Context->refererConfig->include_direct_access==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->include ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->include_direct_access=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->not_include ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_include_direct_access ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="include_bot"><?php echo $lang->include_bot ?></label>
			<div class="x_controls">
				<select name="include_bot" id="include_bot">
					<option value="yes"<?php if($__Context->refererConfig->include_bot=='yes'||$__Context->refererConfig->include_bot==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->include ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->include_bot=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->not_include ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_include_bot ?></span>
			</div>
			<label class="x_control-label" for="treat_msie6_bot"><?php echo $lang->treat_msie6_bot ?></label>
			<div class="x_controls">
				<select name="treat_msie6_bot" id="treat_msie6_bot">
					<option value="yes"<?php if($__Context->refererConfig->treat_msie6_bot=='yes'||$__Context->refererConfig->treat_msie6_bot==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->use ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->treat_msie6_bot=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->notuse ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_treat_msie6_bot ?></span>
			</div>
			<label class="x_control-label" for="treat_msie7_bot"><?php echo $lang->treat_msie7_bot ?></label>
			<div class="x_controls">
				<select name="treat_msie7_bot" id="treat_msie7_bot">
					<option value="yes"<?php if($__Context->refererConfig->treat_msie7_bot=='yes'||$__Context->refererConfig->treat_msie7_bot==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->use ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->treat_msie7_bot=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->notuse ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_treat_msie7_bot ?></span>
			</div>
			<label class="x_control-label" for="treat_moz5_bot"><?php echo $lang->treat_moz5_bot ?></label>
			<div class="x_controls">
				<select name="treat_moz5_bot" id="treat_moz5_bot">
					<option value="yes"<?php if($__Context->refererConfig->treat_moz5_bot=='yes'||$__Context->refererConfig->treat_moz5_bot==''){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->use ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->treat_moz5_bot=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->notuse ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_treat_moz5_bot ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="exclude_uagent"><?php echo $lang->exclude_uagent ?></label>
			<div class="x_controls">
				<input type="text" name="exclude_uagent" id="exclude_uagent" value="<?php echo $__Context->refererConfig->exclude_uagent ?>" />
				<span class="x_help-inline"><?php echo $lang->help_exclude_uagent ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="exclude_host"><?php echo $lang->exclude_host ?></label>
			<div class="x_controls">
				<input type="text" name="exclude_host" id="exclude_host" value="<?php echo $__Context->refererConfig->exclude_host ?>" />
				<span class="x_help-inline"><?php echo $lang->help_exclude_host ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="delete_olddata"><?php echo $lang->delete_olddata ?></label>
			<div class="x_controls">
				<input type="text" name="delete_olddata" id="delete_olddata" value="<?php echo $__Context->refererConfig->delete_olddata ?>" onkeypress="return digit_check(event)" style="-ms-ime-mode:disabled;ime-mode:disabled;text-align:right; padding-right:1px" /><?php echo $lang->unit_day ?>
				<span class="x_help-inline"><?php echo $lang->help_delete_olddata ?></span>
			</div>
		</div>
		<h2><?php echo $lang->geoip_log_setup ?></h2>
		<div class="x_control-group">
			<label class="x_control-label" for="logging_country"><?php echo $lang->logging_country ?></label>
			<div class="x_controls">
				<select name="logging_country" id="logging_country"<?php if(!($__Context->curl_installed||$__Context->useGeoipxe)){ ?> readonly<?php } ?>>
					<option value="yes"<?php if($__Context->refererConfig->logging_country=='yes'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->use ?>)</option>
					<option value="no"<?php if(!($__Context->curl_installed||$__Context->useGeoipxe)||$__Context->refererConfig->logging_country=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->notuse ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_logging_country ?></span>
			</div>
		</div>
		<div class="x_control-group" id="logging_country_options">
			<label class="x_control-label"><?php echo $lang->GeoIPSite ?></label>
			<div class="x_controls">
				<label class="x_inline" for="auto"><input type="radio" name="GeoIPSite_log" id="auto" value="auto"<?php if($__Context->refererConfig->GeoIPSite_log=='auto'||$__Context->refererConfig->GeoIPSite_log==''){ ?> checked="checked"<?php } ?> /> <?php echo $lang->auto_sel ?></label>
				<?php if($__Context->useGeoipxe){ ?><label class="x_inline" for="geoipxe"><input type="radio" name="GeoIPSite_log" id="geoipxe" value="geoipxe"<?php if($__Context->refererConfig->GeoIPSite_log=='geoipxe'){ ?> checked="checked"<?php } ?> /> geoipxe</label><?php } ?>
				<label class="x_inline" for="ipapi"><input type="radio" name="GeoIPSite_log" id="ipapi" value="ipapi"<?php if($__Context->refererConfig->GeoIPSite_log=='ipapi'){ ?> checked="checked"<?php } ?> /> ip-api.com</label>
				<label class="x_inline" for="petabyet"><input type="radio" name="GeoIPSite_log" id="petabyet" value="petabyet"<?php if($__Context->refererConfig->GeoIPSite_log=='petabyet'){ ?> checked="checked"<?php } ?> /> petabyet.com</label>
				<label class="x_inline" for="geojs"><input type="radio" name="GeoIPSite_log" id="geojs" value="geojs"<?php if($__Context->refererConfig->GeoIPSite_log=='geojs'){ ?> checked="checked"<?php } ?> /> geojs.io</label>
				<label class="x_inline" for="ipsb"><input type="radio" name="GeoIPSite_log" id="ipsb" value="ipsb"<?php if($__Context->refererConfig->GeoIPSite_log=='ipsb'){ ?> checked="checked"<?php } ?> /> ip.sb</label>
				<label class="x_inline" for="ipdata"><input type="radio" name="GeoIPSite_log" id="ipdata" value="ipdata"<?php if($__Context->refererConfig->GeoIPSite_log=='ipdata'){ ?> checked="checked"<?php } ?> /> ipdata.co</label>
				<label class="x_inline" for="nekudo"><input type="radio" name="GeoIPSite_log" id="nekudo" value="nekudo"<?php if($__Context->refererConfig->GeoIPSite_log=='nekudo'){ ?> checked="checked"<?php } ?> /> geoip.nekudo.com</label>
				<label class="x_inline" for="cdnservice"><input type="radio" name="GeoIPSite_log" id="cdnservice" value="cdnservice"<?php if($__Context->refererConfig->GeoIPSite_log=='cdnservice'){ ?> checked="checked"<?php } ?> /> geoip.cdnservice.eu</label>
				<label class="x_inline" for="geoipdb"><input type="radio" name="GeoIPSite_log" id="geoipdb" value="geoipdb"<?php if($__Context->refererConfig->GeoIPSite_log=='geoipdb'){ ?> checked="checked"<?php } ?> /> geoip-db.com</label>
				<!--label class="x_inline" for="pingadvisor"><input type="radio" name="GeoIPSite_log" id="pingadvisor" value="pingadvisor"<?php if($__Context->refererConfig->GeoIPSite_log=='pingadvisor'){ ?> checked="checked"<?php } ?> /> pingadvisor.com</label-->
				<!--label class="x_inline" for="smartip"><input type="radio" name="GeoIPSite_log" id="smartip" value="smartip"<?php if($__Context->refererConfig->GeoIPSite_log=='smartip'){ ?> checked="checked"<?php } ?> /> smart-ip.net</label-->
				<p class="x_help-block"><?php echo $lang->about_GeoIPSite_log ?><br /><br />
					Powered by
					<a href="https://www.kndol.net/my_programs/13312">geoipxe</a>,
					<a href="http://ip-api.com" target="_blank">ip-api.com</a>,
					<a href="http://www.petabyet.com" target="_blank">petabyet.com</a>,
					<a href="https://geojs.io" target="_blank">geojs.io</a>,
					<a href="https://ip.sb" target="_blank">ip.sb</a>,
					<a href="https://ipdata.co" target="_blank">ipdata.co</a>,
					<a href="https://geoip.nekudo.com" target="_blank">geoip.nekudo.com</a>,
					<a href="https://geoip.cdnservice.eu" target="_blank">geoip.cdnservice.eu</a>,
					<a href="https://geoip-db.com" target="_blank" style="display:inline-block">geoip-db.com</a>.
					<!--a href="https://api.pingadvisor.com/" target="_blank">pingadvisor.com</a-->
					<!--a href="http://smart-ip.net" target="_blank">smart-ip.net</a-->
				</p>
			</div>
			<div class="x_control-label"><?php echo $lang->timeout_label ?></div>
			<div class="x_controls">
				<label class="x_inline" for="timeout_log"><input type="number" name="timeout_log" id="timeout_log" value="<?php echo $__Context->refererConfig->timeout_log ?>" onkeypress="return digit_check(event)" style="-ms-ime-mode:disabled;ime-mode:disabled;text-align:right; padding-right:1px" /> ms</label>
				<span class="x_help-block"><?php echo $lang->help_timeout_log ?></span>
			</div>
			<label class="x_control-label"><?php echo $lang->benchmark ?></label>
			<div class="x_controls">
				<p><button class="x_btn x_btn" type="button" id="start_benchmark"><?php echo $lang->cmd_start_benchmark ?></button></p>
				<div><div class="benchmark-site">geoipxe:</div><div class="benchmark" id="benchmark-geoipxe">0</div> ms</div>
				<div><div class="benchmark-site">ip-api.com:</div><div class="benchmark" id="benchmark-ipapi">0</div> ms</div>
				<div><div class="benchmark-site">petabyet.com:</div><div class="benchmark" id="benchmark-petabyet">0</div> ms</div>
				<div><div class="benchmark-site">geojs.com:</div><div class="benchmark" id="benchmark-geojs">0</div> ms</div>
				<div><div class="benchmark-site">ip.sb:</div><div class="benchmark" id="benchmark-ipsb">0</div> ms</div>
				<div><div class="benchmark-site">ipdata.co:</div><div class="benchmark" id="benchmark-ipdata">0</div> ms</div>
				<div><div class="benchmark-site">geoip.nekudo.com:</div><div class="benchmark" id="benchmark-nekudo">0</div> ms</div>
				<div><div class="benchmark-site">geoip.cdnservice.eu:</div><div class="benchmark" id="benchmark-cdnservice">0</div> ms</div>
				<div><div class="benchmark-site">geoip-db.com:</div><div class="benchmark" id="benchmark-geoipdb">0</div> ms</div>
				<!--div><div class="benchmark-site">pingadvisor.com:</div><div class="benchmark" id="benchmark-pingadvisor">0</div> ms</div-->
				<!--div><div class="benchmark-site">smart-ip.net:</div><div class="benchmark" id="benchmark-smartip">0</div> ms</div-->
				<div class="x_help-block"><?php echo $lang->about_benchmark ?></div>
			</div>
		</div>
		<h2><?php echo $lang->geoip_admin_setup ?></h2>
		<div class="x_control-group">
			<label class="x_control-label" for="use_geoip_admin"><?php echo $lang->use_geoip_admin ?></label>
			<div class="x_controls">
				<select name="use_geoip_admin" id="use_geoip_admin">
					<option value="yes"<?php if($__Context->refererConfig->use_geoip_admin=='yes'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_yes ?> (<?php echo $lang->use ?>)</option>
					<option value="no"<?php if($__Context->refererConfig->use_geoip_admin=='no'){ ?> selected="selected"<?php } ?>><?php echo $lang->cmd_no ?> (<?php echo $lang->notuse ?>)</option>
				</select>
				<span class="x_help-inline"><?php echo $lang->help_use_geoip_admin ?></span>
			</div>
		</div>
		<div class="x_control-group" id="geoip_admin_options">
			<label class="x_control-label"><?php echo $lang->GeoIPSite ?></label>
			<div class="x_controls">
				<label class="x_inline" for="auto"><input type="radio" name="GeoIPSite" id="auto" value="auto"<?php if($__Context->refererConfig->GeoIPSite=='auto'||$__Context->refererConfig->GeoIPSite==''){ ?> checked="checked"<?php } ?> /> <?php echo $lang->auto_sel ?></label>
				<label class="x_inline" for="petabyet"><input type="radio" name="GeoIPSite" id="petabyet" value="petabyet"<?php if($__Context->refererConfig->GeoIPSite=='petabyet'){ ?> checked="checked"<?php } ?> /> petabyet.com</label>
				<label class="x_inline" for="geojs"><input type="radio" name="GeoIPSite" id="geojs" value="geojs"<?php if($__Context->refererConfig->GeoIPSite=='geojs'){ ?> checked="checked"<?php } ?> /> geojs.io</label>
				<label class="x_inline" for="ipsb"><input type="radio" name="GeoIPSite" id="ipsb" value="ipsb"<?php if($__Context->refererConfig->GeoIPSite=='ipsb'){ ?> checked="checked"<?php } ?> /> ip.sb</label>
				<label class="x_inline" for="ipdata"><input type="radio" name="GeoIPSite" id="ipdata" value="ipdata"<?php if($__Context->refererConfig->GeoIPSite=='ipdata'){ ?> checked="checked"<?php } ?> /> ipdata.co</label>
				<label class="x_inline" for="cdnservice"><input type="radio" name="GeoIPSite" id="cdnservice" value="cdnservice"<?php if($__Context->refererConfig->GeoIPSite=='cdnservice'){ ?> checked="checked"<?php } ?> /> geoip.cdnservice.eu</label>
				<label class="x_inline" for="geoipdb"><input type="radio" name="GeoIPSite" id="geoipdb" value="geoipdb"<?php if($__Context->refererConfig->GeoIPSite=='geoipdb'){ ?> checked="checked"<?php } ?> /> geoip-db.com</label>
				<label class="x_inline" for="nekudo"><input type="radio" name="GeoIPSite" id="nekudo" value="nekudo"<?php if($__Context->refererConfig->GeoIPSite=='nekudo'){ ?> checked="checked"<?php } ?> /> geoip.nekudo.com</label>
				<label class="x_inline" for="ipapi"><input type="radio" name="GeoIPSite" id="ipapi" value="ipapi"<?php if($__Context->refererConfig->GeoIPSite=='ipapi'){ ?> checked="checked"<?php } ?> /> ip-api.com</label>
				<?php if($__Context->useGeoipxe){ ?><label class="x_inline" for="geoipxe"><input type="radio" name="GeoIPSite" id="geoipxe" value="geoipxe"<?php if($__Context->refererConfig->GeoIPSite=='geoipxe'){ ?> checked="checked"<?php } ?> /> geoipxe</label><?php } ?>
				<!--label class="x_inline" for="pingadvisor"><input type="radio" name="GeoIPSite" id="pingadvisor" value="pingadvisor"<?php if($__Context->refererConfig->GeoIPSite=='pingadvisor'){ ?> checked="checked"<?php } ?> /> pingadvisor.com</label-->
				<!--label class="x_inline" for="smartip"><input type="radio" name="GeoIPSite" id="smartip" value="smartip"<?php if($__Context->refererConfig->GeoIPSite=='smartip'){ ?> checked="checked"<?php } ?> /> smart-ip.net</label-->
				<p class="x_help-block"><?php echo $lang->about_GeoIPSite_admin ?></p>
			</div>
			<div class="x_control-label"><?php echo $lang->timeout_label ?></div>
			<div class="x_controls">
				<label class="x_inline" for="timeout"><input type="number" name="timeout" id="timeout" value="<?php echo $__Context->refererConfig->timeout ?>" onkeypress="return digit_check(event)" style="-ms-ime-mode:disabled;ime-mode:disabled;text-align:right; padding-right:1px" /> ms</label>
				<span class="x_help-block"><?php echo $lang->help_timeout_admin ?></span>
			</div>
		</div>
		<div class="btnArea x_clearfix">
			<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $lang->cmd_save ?>" /></span>
		</div>
	</form>
</section>
<section class="section">
	<h1><?php echo $lang->referer ?> <?php echo $lang->cmd_reset ?></h1>
	<div class="x_control-group">
		<div class="x_controls">
    		<a href="<?php echo getUrl('act','dispRefererAdminConfirmReset') ?>"><input class="x_btn x_btn-warning" type="button" value="&nbsp; &nbsp; &nbsp; <?php echo $lang->cmd_reset ?> &nbsp; &nbsp; &nbsp;" /></a>
    		<span class="x_help-inline"><?php echo $lang->help_referer_reset ?></span>
    	</div>
    </div>
</section>
<div id="loading"></div>
<script type="text/javascript">// <![CDATA[
jQuery(function($){
	$("#start_benchmark").click(function() {
		$("#benchmark-geoipxe").text('-');
		$("#benchmark-ipapi").text('-');
		$("#benchmark-petabyet").text('-');
		$("#benchmark-nekudo").text('-');
		$("#benchmark-cdnservice").text('-');
		$("#benchmark-geoipdb").text('-');
		$("#benchmark-geojs").text('-');
		$("#benchmark-ipdata").text('-');
		$("#benchmark-ipsb").text('-');
//		$("#benchmark-pingadvisor").text('-');
//		$("#benchmark-smartip").text('-');
		$.exec_json('referer.dispRefererAdminBenchmark', {}, function(ret_obj) {
			for (var key in ret_obj.data) {
				$("#benchmark-"+key).text(ret_obj.data[key]);
			}
		}, function(error) {
			console.log(error);
			alert("<?php echo $lang->msg_error_occured ?>");
		});
	});
	
	function enableCountryLogControls() {
		if ($("#logging_country").val() == "yes") $("#logging_country_options").show(400);
		else $("#logging_country_options").hide();
	}
	$("#logging_country").change(enableCountryLogControls);
	enableCountryLogControls();
	function enableGeoipAdminControls() {
		if ($("#use_geoip_admin").val() == "yes") $("#geoip_admin_options").show(200);
		else $("#geoip_admin_options").hide();
	}
	$("#use_geoip_admin").change(enableGeoipAdminControls);
	enableGeoipAdminControls();
});
// ]]></script>
