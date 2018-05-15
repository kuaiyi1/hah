<?php
/* Smarty version 3.1.30, created on 2018-04-27 04:05:24
  from "D:\wamp\www\wrr\4.17\app\viewer\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2a18476c114_20971136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a8255337a3123142252f5f4a7e329a8e3875fac' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\login.html',
      1 => 1524801920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae2a18476c114_20971136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon"> -->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getcode.js"><?php echo '</script'; ?>
>
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="head">
		<div class="head_item">
		<a onclick="history.back()">
			<p class="head_item_tubiao">&#xe608;</p>
		</a>	
		<p class="head_item_tubiao head_item_tubiao2">登录鲜花网</p>
		<a href="index.php?m=index&c=index&a=init">
			<p class=" head_item_tubiao1 ">&#xe607;</p>
		</a>	
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<form action="index.php?m=index&c=members&a=checklogin" class="yangshi" method="post">
		<input type="text" name="phone" class="login" placeholder="请输入手机号">
		 <div class="icon">&#xe626;</div>
		 <div class="icons">&#xe63c;</div>
		<input type="text" class="pwd" name="password"placeholder="请输入密码">
		<input type="submit" class="submits" value="登录" >
	</form>
	<div class="forget" >
		<a href="index.php?m=index&c=members&a=getreg"class="forget_left">现在注册</a>
		<!-- <div class="forget_right">忘记密码？</div> -->
	</div>
	<?php echo '<script'; ?>
>
		var username1=localStorage.username1?localStorage.username1:"";
		
		if(username1!=="undefined"){
			
			location.href="index.php?m=index&c=members&a=autologin&username1="+username1;
		}
	<?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
