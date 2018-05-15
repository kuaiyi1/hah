<?php
/* Smarty version 3.1.30, created on 2018-05-03 07:03:16
  from "D:\wamp\www\wrr\4.17\app\viewer\index\gouwuche.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aeab434a3cad6_08060435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c596e7d45f9ca83ffcc9c08ab08bbe1e32f20e92' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\index\\gouwuche.html',
      1 => 1525330989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeab434a3cad6_08060435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon"> -->
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	 <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gouwuche.css">

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
				<p class="head_item_tubiao head_item_tubiao2">购物车</p>
				<a href="index.php?m=index&c=index&a=init">
					<p class=" head_item_tubiao1 ">&#xe607;</p>
				</a>
			</div>
		
	</div>
	<div class="content">
		<div id="zongjiesuan">
			<div class="zongjie1">
			<p class="zongjiesuan_left">商品数量：</p>
			<p class="zongjiesuan_left1"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</p>
			</div>
			<div class="zongjie2">
				<p class="zongjiesuan_right">总计：</p>
				<p class="zongjiesuan_right zongjiesuan_right1 zongjiesuan_right2"><?php echo $_smarty_tpl->tpl_vars['gprice']->value;?>
</p>
				<p class="zongjiesuan_right zongjiesuan_right1">元</p>
			</div>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<div id="product">
			<div class="product_left">
				<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
			</div>
			<div class="product_right">
				<p class="product_title"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</p>
				<div class="product_bottom">
				<p  class="product_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
元</p>
				<p class="product_tubiao">&#xe80a;</p>
				<div class="product_bottom_right" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
					<p class="product_tubiaoyi1 jian" >&#xe60d;</p>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gnumber'];?>
" class="produt_shuliang" readonly>
					<p class="product_tubiaoyi1 jia" >&#xe641;</p>
				</div>
				</div>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
	<div id="footer">
		<a href="tianxiedingdan.html">
			<input type="button" id="order_number1" value="去结算">
		</a>
	</div>
	
	
	
	
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>


    // var price=document.querySelector(".zongjiesuan_right2");
    //
    // var p=document.querySelector(".product_price");
	 // var s=num.innerHTML;
    var num=$(".zongjiesuan_left1").html();



	 $(".jian").each(function(index,ele){
	     $(this).click(function(){
             var index = $(".jian").index(this);
            
				var s=$(".produt_shuliang").eq(index).val();

             s--;

             if(s==0){
                 s=1;
                 return;
             }
			 if(num==2){
                 num=2;
                 return;
			 }
             num--;
             $(".produt_shuliang").eq(index).val(s);
             $(".zongjiesuan_left1").html(num);

            $(".product_price").html=s*parseInt($(".product_price").html);
		 })
	 })
    $(".jia").each(function(index,ele){
        $(this).click(function(){
            var index = $(".jia").index(this);
            var s=$(".produt_shuliang").eq(index).val();

            s++;
            num++;
            $(".produt_shuliang").eq(index).val(s);
            $(".zongjiesuan_left1").html(num);
            $(".product_price").html=s[index]*parseInt($(".product_price")[index].html);
        })
    })



	$(".product_tubiao").click(function(ele,index){

			$(this).each(function(){
                $.ajax({
					datatype:"json",
                    url:"index.php?m=index&c=gouwuche&a=deletegouwuche",
                    data:{ gid:$(".product_bottom_right").attr("id") },
                    success:function(r){
						console.log(r);
                    }
                })
			})

	});
<?php echo '</script'; ?>
>
</html><?php }
}
