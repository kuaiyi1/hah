<?php
/* Smarty version 3.1.30, created on 2018-04-23 01:15:40
  from "D:\wamp\www\wrr\4.17\app\viewer\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add33bc48cdf5_55193552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3986e3393cf90c8e6686f4fedcc7d675c7eeafab' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\admin.html',
      1 => 1524444619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5add33bc48cdf5_55193552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo IMG_PATH;?>
/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="index.php?m=admin&c=loginin&a=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:none">
    <li><a href="index.php?m=admin&c=loginin&a=changepass" target="right"><span class="icon-caret-right"></span>密码修改</a></li>
    <!-- <li><a href="pass.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="page.html" target="right"><span class="icon-caret-right"></span>单页管理</a></li>  
    <li><a href="adv.html" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   
    <li><a href="book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>     
    <li><a href="column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li> -->
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>用户模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=user&a=showuser" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
    <li><a href="index.php?m=admin&c=address&a=showaddress" target="right"><span class="icon-caret-right"></span>地址管理</a></li>      
  </ul> 
   <h2><span class="icon-pencil-square-o"></span>分类模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=category&a=showcategory" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=goods&a=showgoods" target="right"><span class="icon-caret-right"></span>商品管理</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>订单模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=orders&a=showorders" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
  </ul>   
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
<?php echo '</script'; ?>
>
<ul class="bread">
  <li><a href="" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html><?php }
}
