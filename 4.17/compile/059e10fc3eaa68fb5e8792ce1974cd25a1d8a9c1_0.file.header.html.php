<?php
/* Smarty version 3.1.30, created on 2018-04-25 10:02:15
  from "D:\wamp\www\wrr\4.17\app\viewer\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae05227a02de7_33860304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059e10fc3eaa68fb5e8792ce1974cd25a1d8a9c1' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\header.html',
      1 => 1524650421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae05227a02de7_33860304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon"> -->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xianhua.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.css">
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
<?php }
}
