<?php
/* Smarty version 3.1.30, created on 2018-05-02 00:35:05
  from "D:\wamp\www\wrr\4.17\app\viewer\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae907b9097b94_23948198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad7d00fcab98a6feac5262583a756f2c2a85819' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\index.html',
      1 => 1525221292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae907b9097b94_23948198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>芬芳迷人</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link rel="icon" href="<?php echo IMG_PATH;?>
/favicon.ico" type="<?php echo IMG_PATH;?>
/x-icon"> -->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/main.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.css">
	 <!-- 通过src引进js文件 -->
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.js"><?php echo '</script'; ?>
>

</head>
<body>
	<div id="head">
		<div class="head_left">
			<p class="head_item_tubiao">&#xe699;</p>
		</div>
		<div class="head_middle">
			<p>手机鲜花网（XianHua.CN）</p>
		</div>
		<div class="head_right">
			<a href="index.php?m=index&c=sousuo&a=init">
				<p class=" head_item_tubiao1 ">&#xe6ac;</p>
			</a>
		</div>
	</div>
	<div class="content">
		<div id="display">
			<div class="swiper-container">
			<!-- //--首先定义一个容器 -->
	            <div class="swiper-wrapper">
	                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/lunbo1.jpg" /></div><!--  --添加图片 -->
	                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/lunbo1.jpg" /></div>
	                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/lunbo1.jpg" /></div>
	            </div>

        	</div>
			<!-- <img src="<?php echo IMG_PATH;?>
/lunbo1.jpg" alt=""> -->
			<div class="dispaly_shaw">
				<!-- <div class="dispaly_item">
					<p class="yuandian"></p>
					<p class="yuandian"></p>
					<p class="yuandian"></p>
					<p class="yuandian"></p>
					<p class="yuandian"></p>
				</div> -->
			</div>
		</div>
		<div id="caidan">
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<a href="index.php?m=index&c=<?php echo $_smarty_tpl->tpl_vars['v']->value['cename'];?>
&a=init&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">	
				<div  class="caidan_item">
					<div class="caidan_item_top">
					 	<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
						<!-- <span>&#xe625;</span> -->
					</div>
					<div class="caidan_item_bottom">
						<p><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</p>
					</div>
				</div>
			</a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<div class="xianhua_item">
			<div class="xianhua_item_left" >
				<em><?php echo $_smarty_tpl->tpl_vars['v']->value["gsort"];?>
</em>
			</div>
			<a href="index.php?m=index&c=flower&a=getcontent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
				<div class="xianhua_item_right">
					<div class="xianhua_item_right_left">
						<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="" class="xianhua_img">
					</div>
					<div class="xianhua_item_right_middle">
						<div class="xianhua_item_right_middle_top">
							<p class="xianhua_sell"><?php echo $_smarty_tpl->tpl_vars['v']->value["gsells"];?>
人已经购买</p>
						</div>
						<div class="xianhua_item_right_middle_bottom">
							<p class="xianhua_discount"><?php echo $_smarty_tpl->tpl_vars['v']->value["gdiscount"];?>
折</p>
							<p class="xianhua_yuanjia"><?php echo $_smarty_tpl->tpl_vars['v']->value["goprice"];?>
元</p>
						</div>
					</div>
					<div class="xianhua_item_right_right">
						<span>&gt;</span>
						<p class="xianhua_price"><?php echo $_smarty_tpl->tpl_vars['v']->value["gprice"];?>
</p>
					</div>
				</div>
			</a>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		<!--<div id="bottom">-->
			<!--<div class="bottom_content">-->
				 <!--<?php if ($_smarty_tpl->tpl_vars['name']->value !== '' || $_smarty_tpl->tpl_vars['name1']->value !== '') {?>-->
				<!--(<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)-->

				<!--<a href="index.php?m=index&c=members&a=exitlogin"><p>退出</p></a>-->
				<!--<?php } else { ?>-->
				<!--<a href="index.php?m=index&c=members&a=init"><p>尚未登录，请登录</p></a>-->
				<!--<?php }?>-->
			<!--</div>-->
		<!--</div>-->
	</div>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/lunbo.js"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
