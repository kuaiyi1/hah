<?php
/* Smarty version 3.1.30, created on 2018-04-21 07:52:58
  from "D:\wamp\www\wrr\4.17\app\viewer\useradd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaeddac8bcf8_87565925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2502d3511ce3aec21f713ff40c4e632d73d6ab56' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\useradd.html',
      1 => 1524278795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5adaeddac8bcf8_87565925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=user&a=checkuseradd">  
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="username" data-validate="required:请输入用户名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>密码：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="" name="password" data-validate="required:请输入密码" />
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
          <input type="hidden" name="picture" id="hidden">
        </div>
      </div>     
      <div class="form-group">
          <div class="label">
            <label>手机号:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="" name="phone" data-validate="required:请输入手机号码" />
            <div class="tips"></div>
          </div>
      </div>
      <!-- <div class="form-group">
          <div class="label">
            <label>手机号:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="" name="password" data-validate="required:请输入手机号码" />
            <div class="tips"></div>
          </div>
      </div> -->
      <div class="form-group">
          <div class="label">
            <label>性别：</label>
          </div>
          <div class="field">
             <input type="radio" name="sex" value="1">男
             <input type="radio" name="sex" value="0">女
            <div class="tips"></div>
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
