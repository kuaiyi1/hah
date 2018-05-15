<?php
/* Smarty version 3.1.30, created on 2018-04-27 09:17:59
  from "D:\wamp\www\wrr\4.17\app\viewer\index\cartoon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2eac7b75f25_44071040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51de41f382da623f337cff2e0312a184c462b906' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\cartoon.html',
      1 => 1524820675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5ae2eac7b75f25_44071040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	
	<div id="head">
		<div class="head_item">
			<a onclick="history.back()">
				<p class="head_item_tubiao head_item_tubiao3">&#xe608;</p>
			</a>
			<!-- <p class="head_item_tubiao head_item_tubiao1">&#xe68d;</p> -->
			<a href="index.php?m=index&c=gouwuche&a=init">
				<p class="head_item_tubiao ">&#xe66f;</p>
			</a>
			<p class="head_item_tubiao ">卡通花束</p>
			<a href="index.php?m=index&c=sousuo&a=init">
				<p class="head_item_tubiao  ">&#xe6ac;</p>
			</a>
			<a href="index.php?m=index&c=index&a=init">
				<p class="head_item_tubiao head_item_tubiao1 head_item_tubiao2 head_item_tubiao3">&#xe607;</p>
			</a>
		</div>
	</div>
	
	<div class="content" id="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">
		<div id="erji" class="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
			<div class="erji_item gid">
			默认排序
			
			</div>
			<div class="erji_item gprice">
			价格
			
			</div>
			<div class="erji_item erji_item2 gsort">
			
			排序</div>
		</div> 
		<div class="content1">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<a href="index.php?m=index&c=flower&a=getcontent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
			<div id="xianhua">
				<div class="xianhua_left">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
				</div>
				<div class="xianhua_right">
					<div class="xianhua_right_title">
						<?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>

						
					
					</div>
					<div class="xianhua_right_price">
						<p class="xianhua_right_price1"><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</p>
						<p class="xianhua_right_price2">元</p>
						<p class="xianhua_right_price3"><?php echo $_smarty_tpl->tpl_vars['v']->value['goprice'];?>
元</p>
						<p class="xianhua_right_price4"><?php echo $_smarty_tpl->tpl_vars['v']->value['gdiscount'];?>
折</p>
					</div>
					<div class="xianhua_right_goumai">
						<p class="xianhua_right_goumai_price" >
							<?php echo $_smarty_tpl->tpl_vars['v']->value['gsells'];?>
人已经购买
						</p>
						<a href="index.php?m=index&c=cartoon&a=getcontent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
							<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
						</a>
					</div>	
				</div>
			</div>
			</a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<!-- <div id="xianhua">
			<div class="xianhua_left">
				<img src="img/20130702130560737.jpg" alt="">
			</div>
			<div class="xianhua_right">
				<div class="xianhua_right_title">
					守护爱情是甜蜜的琼浆，醉人的醇酒
				</div>
				<div class="xianhua_right_price">
					<p class="xianhua_right_price1">389</p>
					<p class="xianhua_right_price2">元</p>
					<p class="xianhua_right_price3">529元</p>
					<p class="xianhua_right_price4">7.4折</p>
				</div>
				<div class="xianhua_right_goumai">
					<p class="xianhua_right_goumai_price" >
						20453人已经购买
					</p>
					<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
				</div>	
			</div>
		</div>
		<div id="xianhua">
			<div class="xianhua_left">
				<img src="img/201307058999763933.jpg" alt="">
			</div>
			<div class="xianhua_right">
				<div class="xianhua_right_title">
					守护爱情是甜蜜的琼浆，醉人的醇酒
				</div>
				<div class="xianhua_right_price">
					<p class="xianhua_right_price1">389</p>
					<p class="xianhua_right_price2">元</p>
					<p class="xianhua_right_price3">529元</p>
					<p class="xianhua_right_price4">7.4折</p>
				</div>
				<div class="xianhua_right_goumai">
					<p class="xianhua_right_goumai_price" >
						20453人已经购买
					</p>
					<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
				</div>	
			</div>
		</div>
		<div id="xianhua">
			<div class="xianhua_left">
				<img src="img/201307116392956435.jpg" alt="">
			</div>
			<div class="xianhua_right">
				<div class="xianhua_right_title">
					守护爱情是甜蜜的琼浆，醉人的醇酒
				</div>
				<div class="xianhua_right_price">
					<p class="xianhua_right_price1">389</p>
					<p class="xianhua_right_price2">元</p>
					<p class="xianhua_right_price3">529元</p>
					<p class="xianhua_right_price4">7.4折</p>
				</div>
				<div class="xianhua_right_goumai">
					<p class="xianhua_right_goumai_price" >
						20453人已经购买
					</p>
					<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
				</div>	
			</div>
		</div>
		<div id="xianhua">
			<div class="xianhua_left">
				<img src="img/201307196144865049.jpg" alt="">
			</div>
			<div class="xianhua_right">
				<div class="xianhua_right_title">
					守护爱情是甜蜜的琼浆，醉人的醇酒
				</div>
				<div class="xianhua_right_price">
					<p class="xianhua_right_price1">389</p>
					<p class="xianhua_right_price2">元</p>
					<p class="xianhua_right_price3">529元</p>
					<p class="xianhua_right_price4">7.4折</p>
				</div>
				<div class="xianhua_right_goumai">
					<p class="xianhua_right_goumai_price" >
						20453人已经购买
					</p>
					<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
				</div>	
			</div>
		</div> -->
	</div>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getthree.js"><?php echo '</script'; ?>
>



</body>
</html><?php }
}
