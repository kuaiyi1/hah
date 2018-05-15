<?php
/* Smarty version 3.1.30, created on 2018-04-26 06:47:59
  from "D:\wamp\www\wrr\4.17\app\viewer\index\reg3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1761fbba785_04872028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bffc2de54a04d8534c7cf0621b578bddc7712cc2' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\reg3.html',
      1 => 1524725256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae1761fbba785_04872028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>鲜花</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon"> -->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/reg.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
	 <style>
	 	#displayerror{
	 		width: 100%;
			height: 1rem;
			text-align: center;
			line-height: 1rem;
			font-size: 0.3rem;
			color: #c10100;
	 	}
	 </style>
</head>
<body>

	<div id="head">
		<div class="head">
			<!-- <div class="head_left">&#xe608;</div> -->
			<div class="head_middle">注册鲜花网会员</div>
			<!-- <div class="head_right"><p>&#xe607;</p></div> -->
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="reg_title">
		<div class="reg_title_item ">1 输入手机号</div>
		<!-- <div class="reg_title_item  ">2 输入验证码</div> -->
		<div class="reg_title_item color1">2 设置密码</div>
	</div>
	<form action="index.php?m=index&c=members&a=checkaddpass" class="jiegou" method="post">
		<input type="password" class="password" id="password3"placeholder="设置密码" name="password">
		<input type="password" class="password1"  name="password1" placeholder="确认密码">
		<input type="submit" class="submit" value="确认提交">
	</form>
	<div id="displayerror"></div>
	
	
	
	
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getcode.js"><?php echo '</script'; ?>
>	
</body>
</html><?php }
}
