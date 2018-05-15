<?php
/* Smarty version 3.1.30, created on 2018-04-26 10:40:01
  from "D:\wamp\www\wrr\4.17\app\viewer\categoryadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1ac8133d592_92954668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9b925fcffce0ef13e66f3a02ca662085fe45d6' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\categoryadd.html',
      1 => 1524739141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5ae1ac8133d592_92954668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=category&a=checkcategoryadd">  
      <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="cname" data-validate="required:请输入分类名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>英文名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="cename" data-validate="required:请输入英文分类名称" />
          <div class="tips"></div>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1"  class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" data-url="index.php?m=admin&c=user&a=upload"  style="float:left;" >
          <div class="tipss">图片尺寸：500*500</div>
          <input type="hidden" name="cthumb" id="hidden">
        </div>
      </div>     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</body></html>
<?php }
}
