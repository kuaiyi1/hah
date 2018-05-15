<?php
/* Smarty version 3.1.30, created on 2018-04-30 06:19:35
  from "D:\wamp\www\wrr\4.17\app\viewer\ordersadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae6b577b645e5_28156466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd32b2bed951e823115ee1c38ae27c358769be06' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\ordersadd.html',
      1 => 1525069169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5ae6b577b645e5_28156466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加订单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=orders&a=checkordersadd">  
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <select name="gid" id="gname" class="input w50">
            <option value="未选择">请选择商品名称</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>商品数量</label>
          </div>
          <div class="field">
            <input type="text" class="input w50"  name="gnumber" id="gnumber" data-validate="required:请输入商品数量" onkeyup="this.value=this.value.replace(/\D/g,'')" />
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>总价格:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" id="gprice" name="gprice" data-validate="required:请输入商品价格" readonly/>
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>收件人姓名:</label>
          </div>
          <div class="field">
              <select name="uid" id="username" class="input w50">
                <option value="未选择">请选择收件人姓名</option>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
          </div>
      </div>
       <div class="form-group">
          <div class="label">
            <label>收件人地址:</label>
          </div>
          <div class="field">
              <select name="aid" id="address1" class="input w50">
               
                 
                
                 
              </select>
          </div>
      </div>
       <div class="form-group">
          <div class="label">
            <label>订单状态:</label>
          </div>
          <div class="field">
                <select name="ostate" id="username" class="input w50">
                <option value="未选择">请选择收件人状态</option>
                 <option value="0">未付款</option>
                 <option value="1">已付款</option>
                 <option value="2">尚未发货</option>
                 <option value="3">配送中</option>
                 <option value="4">已收到</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>订单排序:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="" name="osort" data-validate="required:请输入排序号"  onkeyup="this.value=this.value.replace(/\D/g,'')" />
            <div class="tips"></div>
          </div>
      </div>
     
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
 <div id="address" data-src="<?php echo JS_PATH;?>
/area.json"></div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/areadata.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getaddress.js"><?php echo '</script'; ?>
>

</body></html>
<?php }
}
