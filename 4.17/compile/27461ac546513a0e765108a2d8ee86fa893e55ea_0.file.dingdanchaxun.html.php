<?php
/* Smarty version 3.1.30, created on 2018-04-30 14:22:52
  from "D:\wamp\www\wrr\4.17\app\viewer\index\dingdanchaxun.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae726bcd47680_80387057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27461ac546513a0e765108a2d8ee86fa893e55ea' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\dingdanchaxun.html',
      1 => 1525097650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae726bcd47680_80387057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单查询</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="img/x-icon">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/dingdanchaxun.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="head">
		<div class="head_item">
			<a onclick="history.back()">
				<p class="head_item_tubiao">&#xe608;</p>
			</a>
			<p class="head_item_tubiao head_item_tubiao2">订单查询</p>
			<a href="index.php?m=index&c=index&a=init">
				<p class=" head_item_tubiao1 ">&#xe607;</p>
			</a>
		</div>
	</div>
	<div class="content">
		<form action="" method="post">
			<div id="order">订单号：</div>
			<input type="text" id="order_number" placeholder="请输入订单号" name="oid">
			<!--<div id="order">验证码：</div>-->
			<!--<input type="text" class="wenbenkuang">-->
			<!--<input type="text" class="wenbenkuang1" placeholder="674392">-->
			<input type="submit" id="order_number1" value="查询">
		</form>
	</div>
</body>
<?php echo '<script'; ?>
>
		var orders=$("#order_number").val();
		$.ajax({
			url:index.php?m=index&c=orderquery&a=selectone,

		})

<?php echo '</script'; ?>
>
</html><?php }
}
