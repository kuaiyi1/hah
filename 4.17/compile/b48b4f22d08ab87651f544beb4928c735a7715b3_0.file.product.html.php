<?php
/* Smarty version 3.1.30, created on 2018-05-02 09:08:38
  from "D:\wamp\www\wrr\4.17\app\viewer\index\product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae98016ddee44_47790679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48b4f22d08ab87651f544beb4928c735a7715b3' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\product.html',
      1 => 1525252094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae98016ddee44_47790679 (Smarty_Internal_Template $_smarty_tpl) {
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
/product.css">
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
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.js"><?php echo '</script'; ?>
>
	 <style>
	 		.swiper-slide img{
	 			width: 100%;
	 			height: 7.22rem;
	 		}
	 </style>
</head>
<body>

	<div id="head">
		<div class="head_item">
			<a onclick="history.back()">
				<p class="head_item_tubiao">&#xe608;</p>
			</a>
			<a href="index.php?m=index&c=gouwuche&a=init">
				<p class="head_item_tubiao head_item_tubiao1 ">&#xe66f;</p>
			</a>
			<p class="head_item_tubiao head_item_tubiao1 head_item_tubiao4"><?php echo $_smarty_tpl->tpl_vars['arr']->value["gname"];?>
</p>
			<a href="index.php?m=index&c=index&a=init">
				<p class="head_item_tubiao head_item_tubiao1 head_item_tubiao2">&#xe607;
				</p>
			</a>
		</div>
	</div>
	<div class="content">
		<div id="product">
			<div class="product">
				<div class="swiper-container">
	            	<div class="swiper-wrapper">
	            		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value['gpictures'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	                	<div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" /></div> 
	            		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	                </div>
         		</div>
			</div>
			<div class="product_title">
				<?php echo $_smarty_tpl->tpl_vars['arr']->value["gdescription"];?>

			</div>
			<div class="product_title1">名称：<?php echo $_smarty_tpl->tpl_vars['arr']->value["gname"];?>
</div>
			<div class="product_title1 bianhao">编号：<?php echo $_smarty_tpl->tpl_vars['arr']->value['gid'];?>
</div>
			<div class="product_price">
				<div class="product_price2">促销：￥</div>
				<p class="product_price1 p"><?php echo $_smarty_tpl->tpl_vars['arr']->value["gprice"];?>
</p>
				<div class="product_price2">元</div>
			</div>
			<div class="product_price"style="border:0;">
				<div class="product_price2">原价：</div>
				<p class="product_price1" style="color:#dcdcdc; text-decoration: line-through;;">￥<?php echo $_smarty_tpl->tpl_vars['arr']->value["goprice"];?>
</p>
				<div class="product_price2"  style=" text-decoration: line-through;">元</div>
			</div>
			<div class="product_shuliang" id="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gid'];?>
">
				<div class="product_price3">数量：</div>
				<input type="text" value="1" class="product_fangkuang" >
			</div>
		</div>
	</div>
	
	<div class="bottom">

			<div class="bottom_btn">
				<p class="bottom_btn_wenzi">立即订购</p>
			</div>

		<div class=" bottom_btn1">
			<p class="bottom_btn_wenzi1">加入购物车</p>
		</div>
	</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/lunbo.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
