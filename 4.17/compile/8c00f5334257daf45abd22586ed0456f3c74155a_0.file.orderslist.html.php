<?php
/* Smarty version 3.1.30, created on 2018-04-24 14:56:17
  from "D:\wamp\www\wrr\4.17\app\viewer\orderslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf4591156383_72593587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c00f5334257daf45abd22586ed0456f3c74155a' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\orderslist.html',
      1 => 1524581189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5adf4591156383_72593587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
   td img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
     }
</style>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong> <a href="" style="float:right; display:none;">添加订单</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=orders&a=addorders"> 添加订单</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <td>oid</td>
        <td>商品名称</td>
        <td>购买商品数量</td>
        <td>商品总价格</td>
        <td>用户名</td>
        <td>用户地址</td>
        <td>商品运送状态</td>
        <td>订单排序</td>
        <td>操作</td>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
       <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value["oid"];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gname"];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gnumber"];?>
</td>
       		<td><?php echo $_smarty_tpl->tpl_vars['v']->value["gprice"];?>
 </td>
          
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['v']->value["area"];
echo $_smarty_tpl->tpl_vars['v']->value["location"];?>
</td>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == "0") {?><td>未付款</td><?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == "1") {?><td>已付款</td><?php }?>
             <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == "2") {?><td>尚未发货</td><?php }?>
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 == "3") {?><td>配送中</td><?php }?>
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["ostate"];
$_prefixVariable5=ob_get_clean();
if ($_prefixVariable5 == "4") {?><td>已收到</td><?php }?>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["osort"];?>
</td>
          <td><div class="button-group"> <a class="button border-main" href="index.php?m=admin&c=orders&a=updateorders&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
"><span class="icon-edit"></span> 修改</a> 
          <a class="button border-red" href="index.php?m=admin&c=orders&a=delorders&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
" ><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
        <td colspan="7"><div class="pagelist"> <?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</div></td>
      </tr>
    </table>
  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
		
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
