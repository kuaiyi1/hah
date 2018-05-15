<?php
/* Smarty version 3.1.30, created on 2018-04-30 12:20:56
  from "D:\wamp\www\wrr\4.17\app\viewer\index\wodexinxi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae70a2812d139_69549115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd049870f69b6b97929ddac72129dc5ac9ddf5d61' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\wodexinxi.html',
      1 => 1525090799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae70a2812d139_69549115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>鲜花</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="icon" href="img/favicon.ico" type="img/x-icon">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/wodexinxi.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="head">
		<div class="head_item">
			<a  onclick="history.back()">
				<p class="head_item_tubiao">&#xe608;</p>
			</a>
			<p class="head_item_tubiao head_item_tubiao2">我的信息</p>
			<a href="index.php?m=index&c=index&a=init">
				<p class=" head_item_tubiao1 ">&#xe6ac;</p>
			</a>
		</div>
	</div>
	<div class="display">
		<img src="<?php echo IMG_PATH;?>
/lunbo2.jpg" alt="">
	</div>
	<a href="index.php?m=index&c=orders&a=unpaid">
	<div class="caidan_item">
		<p class="caidan_item_wenzi">&#xe6cc;</p>
		<p class="caidan_item_wenzi1">待付款订单</p>
		<p class="caidan_item_wenzi2">&#xe6a7;</p>
	</div>
	</a>
	<a href="index.php?m=index&c=orders&a=paid">
	<div class="caidan_item">
		<p class="caidan_item_wenzi">&#xe623;</p>
		<p class="caidan_item_wenzi1">已付款订单</p>
		<p class="caidan_item_wenzi2">&#xe6a7;</p>
	</div>
	</a>
	<a href="index.php?m=index&c=orders&a=init">
		<div class="caidan_item">
			<p class="caidan_item_wenzi">&#xe6cc;</p>
			<p class="caidan_item_wenzi1">所有订单</p>
			<p class="caidan_item_wenzi2">&#xe6a7;</p>
		</div>
	</a>
	<a href="index.php?m=index&c=members&a=person">
		<div class="caidan_item caidan_item1">
			<p class="caidan_item_wenzi">&#xe609;</p>
			<p class="caidan_item_wenzi1">个人资料</p>
			<p class="caidan_item_wenzi2">&#xe6a7;</p>
		</div>
	</a>
	<div class="bottom">
	 	<span><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span>
		<a class="phone" ><p>退出</p></a>
	</div>
	<?php echo '<script'; ?>
>
		var a=document.querySelector(".bottom span");
		a=a.innerHTML;
		localStorage.username1=a;

		exit=document.querySelector(".phone p");
		exit.onclick=function(){

		    localStorage.username1=localStorage.removeItem(localStorage.username1);
		    location.href="index.php?m=index&c=members&a=exitlogin";
		}
	<?php echo '</script'; ?>
>
	
	
	
</body>
</html><?php }
}
