<?php
/* Smarty version 3.1.30, created on 2018-05-03 07:06:41
  from "D:\wamp\www\wrr\4.17\app\viewer\index\suoyoudingdan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aeab501edbfa2_12574540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd960e2ccf27312babc96515b4062542db3eb89e5' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\suoyoudingdan.html',
      1 => 1525331198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeab501edbfa2_12574540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>所有订单</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--<link rel="icon" href="img/favicon.ico" type="img/x-icon">-->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/suoyoudingdan.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="head">
		<div class="head_item">

			<p class="head_item_tubiao" onclick="history.back()">&#xe608;</p>


			<p class="head_item_tubiao4 ">所有订单</p>
		<a href="index.php?m=index&c=index&a=init">

			<p class="head_item_tubiao head_item_tubiao1 head_item_tubiao2 head_item_tubiao3">&#xe607;</p>
		</a>
		</div>
	</div>
	<div class="content">
		<div class="three">
			<p>订单号</p>
			<p>总价</p>
			<p>状态</p>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<div class="dingdan">
			<!--<p>暂时您没有订单</p>-->
			<p><?php echo $_smarty_tpl->tpl_vars['v']->value["oid"];?>
</p>
			<p><?php echo $_smarty_tpl->tpl_vars['v']->value["gprice"];?>
*<?php echo $_smarty_tpl->tpl_vars['v']->value["gnumber"];?>
元</p>
			<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == "0") {?> 未付款<?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == "1") {?> 已付款<?php }?>
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == "2") {?> 尚未发货<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 == "3") {?> 配送中<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable5=ob_get_clean();
if ($_prefixVariable5 == "4") {?> 已收到<?php }?></p>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</body>
</html><?php }
}
