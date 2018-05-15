<?php
/* Smarty version 3.1.30, created on 2018-04-30 07:12:56
  from "D:\wamp\www\wrr\4.17\app\viewer\ordersupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae6c1f885c502_94674807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1873eb8856b02ef75f5d901cec38af5142044382' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\ordersupdate.html',
      1 => 1525072373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5ae6c1f885c502_94674807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加订单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=orders&a=checkordersupdate"> 
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['oid'];?>
">
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <select name="gid" id="gname" class="input w50" >
            <?php if ($_smarty_tpl->tpl_vars['arr1']->value['gid'] == "未选择") {?>
                <option value="未选择" selected>请选择商品名称</option>
             <?php }?>
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

               
             <option value="未选择">请选择商品名称</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['arr1']->value['gid'] == $_smarty_tpl->tpl_vars['v']->value['gid']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" checked><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</option>
                <?php }?>
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
            <input type="text" class="input w50"  name="gnumber" id="gnumber" data-validate="required:请输入商品数量" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['gnumber'];?>
" onkeyup="this.value=this.value.replace(/\D/g,'')" />
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>总价格:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" id="gprice" name="gprice" data-validate="required:请输入商品价格" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['gprice'];?>
"readonly />
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>收件人姓名:</label>
          </div>
          <div class="field">
              <select name="uid" id="username" class="input w50">
               <?php if ($_smarty_tpl->tpl_vars['arr1']->value["uid"] == "未选择") {?>
                <option value="未选择" checked>请选择收件人姓名</option>
                <?php }?>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'v');
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

                <option value="未选择" >请选择收件人姓名</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value["uid"] == $_smarty_tpl->tpl_vars['arr1']->value["uid"]) {?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" checked><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
                <?php }?>
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
                 <option value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['aid'];?>
" checked><?php echo $_smarty_tpl->tpl_vars['arr3']->value['area'];
echo $_smarty_tpl->tpl_vars['arr3']->value['location'];?>
</option>
                 
                
                 
              </select>
          </div>
      </div>
       <div class="form-group">
          <div class="label">
            <label>订单状态:</label>
          </div>
          <div class="field">
                <select name="ostate" id="username" class="input w50">
                <option value="未选择"  <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "未选择") {?>selected<?php }?> >请选择收件人状态</option>
                 <option  value="0" <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "0") {?>selected<?php }?>>未付款</option>
                 <option  value="1" <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "1") {?>selected<?php }?>>已付款</option>
                 <option  value="2" <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "2") {?>selected<?php }?>>尚未发货</option>
                 <option  value="3" <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "3") {?>selected<?php }?>>配送中</option>
                 <option  value="4" <?php if ($_smarty_tpl->tpl_vars['arr1']->value["ostate"] == "4") {?>selected<?php }?>>已收到</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>订单排序:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['osort'];?>
" name="osort" data-validate="required:请输入排序号" onkeyup="this.value=this.value.replace(/\D/g,'')" />
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
