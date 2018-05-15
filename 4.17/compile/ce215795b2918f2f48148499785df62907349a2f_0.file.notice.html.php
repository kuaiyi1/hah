<?php
/* Smarty version 3.1.30, created on 2018-04-26 03:27:43
  from "D:\wamp\www\wrr\4.17\app\viewer\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1472f84d311_05820270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce215795b2918f2f48148499785df62907349a2f' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\notice.html',
      1 => 1524713260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae1472f84d311_05820270 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
			

<style>
				#notice{
					width: 100%;
					height: 1rem;
					text-align: center;
					line-height: 1rem;
					font-size: 0.3rem;
					position: relative;
					color: #c10100;
				}
				#notice span{
					width: 0.75rem;
					height: 0.75rem;
					position: absolute;
					top: 0.125rem;
					right:0.2rem ;
					background: #c10100;
					color: #fff;
					border-radius: 50%;
					text-align: center;
					line-height: 0.75rem;
				}
			</style>
		 <div id="notice"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

		 <span class="del">X</span>
		 <?php echo '<script'; ?>
>
		 	let del=document.querySelector(".del");
		 	del.onclick=function(val,index){
		 		console.log(0);
		 		var obj=del.parentNode;
		 		obj.parentNode.removeChild(obj);
		 	}
		 <?php echo '</script'; ?>
>
		 </div>
	<?php }
}
}
