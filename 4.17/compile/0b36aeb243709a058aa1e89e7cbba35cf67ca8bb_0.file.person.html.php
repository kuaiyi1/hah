<?php
/* Smarty version 3.1.30, created on 2018-04-27 08:09:08
  from "D:\wamp\www\wrr\4.17\app\viewer\index\person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2daa4dbef42_64683081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b36aeb243709a058aa1e89e7cbba35cf67ca8bb' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\person.html',
      1 => 1524816544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2daa4dbef42_64683081 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>鲜花</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--<link rel="icon" href="img/favicon.ico" type="img/x-icon">-->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/person.css">

	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="head">
		<div class="head">
			<a onclick="history.back()"><div class="head_left">&#xe608;</div></a>
			<div class="head_middle">修改个人资料</div>
			<a href="index.php?m=index&c=index&a=init"><div class="head_right"><p>&#xe607;</p></div></a>
		</div>
	</div>
	<form action="index.php?m=index&c=members&a=updateperson" method="post">
		<div class="base">
			<div class="base_title">基本信息</div>
			<div class="email">
				<?php if ($_smarty_tpl->tpl_vars['data']->value['picture'] == '') {?>
					<div class="tips">您还没设置图片，赶紧设置吧</div>
					<img src="" alt="" id="imgs">
					<input type="file" id="url1"   />
					<input type="button" id="image1" value="浏览上传" data-url="index.php?m=admin&c=user&a=upload">
					<input type="hidden" name="picture" id="hidden" value="">
				<?php } else { ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" alt="">
				<input type="file" id="url2"  class="img2" />
				<input type="button" id="image2" value="浏览上传" data-url="index.php?m=admin&c=user&a=upload">
				<input type="hidden" name="picture" id="hidden2" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" >
				<?php }?>
			</div>
			<div class="base_name">
				<div class="base_name_left">会员名:</div>
				<input type="text" name="username"class="base_right" <?php if ($_smarty_tpl->tpl_vars['data']->value['username'] == '') {?> value="未设置"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
"<?php }?> placeholder="">
			</div>
			<div class="base_name">
				<div class="base_name_left w">性别:</div>
				<div class="base_name_right">

					<input type="radio" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == "1" || $_smarty_tpl->tpl_vars['data']->value['sex'] == '') {?>checked<?php }?> >男
					<input type="radio" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == "0") {?>checked<?php }?> >女
				</div>
			</div>
			<div class="phone">
				<div class="phone_left">手机号码:</div>
				<input type="text" name="phone" class="phone_right" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
" readonly>
			</div>

			<div class="line"></div>
			<input type="submit" class="submit" value="确定">

		<!--</div>-->
	</form>



	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getpictures.js"><?php echo '</script'; ?>
>
	
	
</body>
</html><?php }
}
