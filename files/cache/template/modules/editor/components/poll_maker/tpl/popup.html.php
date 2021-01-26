<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/poll_maker/tpl/popup.js--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/poll_maker/tpl/popup.css--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/components/poll_maker/tpl/filter','insert_poll.xml');$__xmlFilter->compile(); ?>
<?php Context::loadLang('modules/editor/components/poll_maker/lang'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<?php Context::addMetaTag('viewport', 'width=device-width', FALSE); ?>
<script>
	var msg_poll_cannot_modify = "<?php echo $lang->msg_poll_cannot_modify ?>";
</script>
<div class="x_modal-header">
	<h1><?php echo $__Context->component_info->title ?></h1>
</div>
<div class="x_modal-body">
	<form action="./" method="post" id="fo_component" onSubmit="procFilter(this, insert_poll); return false;" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="component" value="<?php echo $__Context->component_info->component_name ?>" />
		<input type="hidden" name="method" value="insertPoll" />
		<input type="hidden" name="poll_srl" value="" />
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->poll_stop_date ?></label>
			<div class="x_controls">
				<input type="hidden" name="stop_date" id="stop_date" value="<?php echo date('Ymd',time()+60*60*24*30) ?>" />
				<input type="date" class="inputDate" min="<?php echo date('Y-m-d',time()) ?>"  max="<?php echo date('Y-m-d',strtotime('+10 years')) ?>" onchange="$('#stop_date').val($.datepicker.formatDate('yymmdd', new Date(this.value)));" value="<?php echo date('Y-m-d',time()+60*60*24*30) ?>" />
				<script>
				$(function(){
					// check if the browser support type date.
					if ( $(".inputDate").prop('type') != 'date' ) {
						var option = {
							changeMonth:true
							,changeYear:true
							,gotoCurrent: false
							,yearRange:'-100:+10'
							, onSelect:function(){
								$('#stop_date').val($.datepicker.formatDate('yymmdd', $(this).datepicker( "getDate" )));
							}
							,defaultDate: new Date("<?php echo date('Y-m-d',time()+60*60*24*30) ?>")
							,minDate: new Date("<?php echo date('Y-m-d',time()) ?>")
						};
						//if the browser does not support type date input, start datepicker. If it does, brower's UI will show their datepicker.
						$(".inputDate").datepicker(option);
					}
					else
					{
					}
				});
				</script>
			</div>
		</div>
		<div class="x_control-group">
			<label for="skin" class="x_control-label"><?php echo $lang->skin ?></label>
			<div class="x_controls">
				<select id="skin" name="skin">
				<?php if($__Context->skin_list)foreach($__Context->skin_list as $__Context->skin=>$__Context->skin_info){ ?>
				<option value="<?php echo $__Context->skin ?>"><?php echo $__Context->skin_info->title ?> (by <?php  $__Context->authorname = array();
if($__Context->skin_info->author)foreach($__Context->skin_info->author as $__Context->author=>$__Context->author_info){;
$__Context->authorname[] = $__Context->author_info->name;
};
echo implode(",",$__Context->authorname) ?>)</option>
				<?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->poll_display_memberinfo ?></label>
			<div class="x_controls">
				<label class="x_inline" for="poll_display_memberinfo_yes"><input type="radio" name="show_vote" value="1" id="poll_display_memberinfo_yes" /> <?php echo $lang->poll_display_memberinfo_yes ?></label>
				<label class="x_inline" for="poll_display_memberinfo_no"><input type="radio" name="show_vote" value="0" checked="checked" id="poll_display_memberinfo_no" /> <?php echo $lang->poll_display_memberinfo_no ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->poll_ableto_additems ?></label>
			<div class="x_controls">
				<input type="radio" name="add_item" value="2" id="poll_ableto_additems_yes" /> <label class="x_inline" for="poll_ableto_additems_yes"><?php echo $lang->poll_ableto_additems_yes ?></label>
				<input type="radio" name="add_item" value="0" checked="checked" id="poll_ableto_additems_no" /> <label class="x_inline" for="poll_ableto_additems_no"><?php echo $lang->poll_ableto_additems_no ?></label>
			</div>
		</div>
	<div id="poll_source" style="display:none">
		<div class="table">
		<table class="x_table x_table-striped x_table-hover">
			<thead>
			<col width="100" />
			<col />
			</thead>
			<tbody>
			<tr>
				<th scope="row"><div><?php echo $lang->poll_chk_count ?></div></th>
				<td><input type="text" name="checkcount_tidx" value="1" size="1"  /></td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $lang->poll_title ?></div></th>
				<td><input type="text" name="title_tidx" /></td>
			</tr>
			
			<tr>
				<th scope="row"><div><?php echo $lang->poll_item ?> 1</div></th>
				<td><input type="text" name="item_tidx_1" /></td>
			</tr>
			
			<tr>
				<th scope="row"><div><?php echo $lang->poll_item ?> 2</div></th>
				<td><input type="text" name="item_tidx_2" /></td>
			</tr>
			</tbody>
		</table>
		</div>
		<button type="button" class="_add_item x_btn"><?php echo $lang->cmd_add_item ?></button>
		<button type="button" class="_del_item x_btn"><?php echo $lang->cmd_del_item ?></button>
		<button type="button" class="_del_poll x_btn"><?php echo $lang->cmd_del_poll ?></button>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary" /><?php echo $lang->cmd_submit ?></button>
				<button type="button" id="add_poll" class="x_btn"><?php echo $lang->cmd_add_poll ?></button>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $lang->about_component ?></a>
			</div>
		</div>
	</form>
</div>
