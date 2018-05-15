<?php
/* Smarty version 3.1.30, created on 2018-04-30 02:14:08
  from "D:\wamp\www\wrr\4.17\app\viewer\index\cake.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae67bf08f7ad1_94355492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea74a532c3b382a3f032166e9d70cf8173d1fac' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\cake.html',
      1 => 1525054437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5ae67bf08f7ad1_94355492 (Smarty_Internal_Template $_smarty_tpl) {
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
			<p class="head_item_tubiao ">蛋糕</p>
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
						<a href="index.php?m=index&c=cake&a=getcontent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
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
	</div>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getthree.js"><?php echo '</script'; ?>
>


</body>
</html><?php }
}
