<?php
/* Smarty version 3.1.30, created on 2018-04-26 01:16:32
  from "D:\wamp\www\wrr\4.17\app\viewer\index\reg2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae12870aee4d8_97926956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec0800c3a943210e0b7d95e95ea1d9618c374d41' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\reg2.html',
      1 => 1524149211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae12870aee4d8_97926956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>鲜花</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="img/x-icon">
	 <link rel="stylesheet" href="css/public.css">
	 <link rel="stylesheet" href="css/reg.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="js/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="head">
		<div class="head">
			<div class="head_left">&#xe608;</div>
			<div class="head_middle">注册鲜花网会员</div>
			<div class="head_right"><p>&#xe607;</p></div>
		</div>
	</div>

	<div class="reg_title">
		<div class="reg_title_item ">1 输入手机号</div>
		<div class="reg_title_item  color1">2 输入验证码</div>
		<div class="reg_title_item">3 设置密码</div>
	</div>
	<form action="" class="jiegou">
		<div class="getback_message">
			<div class="message_left">验证码短信已经发送到157****5678</div>
			<input type="button" value="57" class="hour">
		</div>
		<input type="text" class="message" placeholder="请输入您的短信验证码">
		<input type="submit" class="submit" value="提交验证码">
	</form>
	
	
	
	
	
</body>
</html><?php }
}
