<?php
/* Smarty version 3.1.30, created on 2018-04-30 06:12:05
  from "D:\wamp\www\wrr\4.17\app\viewer\goodsupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae6b3b5e060d8_04601252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de5fdcc8a05be9c959c0adbf9f9c7f371a7dd8f' => 
    array (
      0 => 'D:\\wamp\\www\\wrr\\4.17\\app\\viewer\\goodsupdate.html',
      1 => 1525068722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5ae6b3b5e060d8_04601252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    .field img{
      width: 100px;
      height: auto;
    }
</style>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改商品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=goods&a=checkgoodsupdate"> 
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gid'];?>
"> 
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="gname" data-validate="required:请输入商品名称" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gname'];?>
" />
          <div class="tips" ></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>缩略图：</label>
        </div>
        <div class="field">
          <input type="file" id="url1"  class="input tips" style="width:25%; float:left;"    data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['arr']->value["gthumb"];?>
" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" data-url="index.php?m=admin&c=user&a=upload"  style="float:left;" >
          <div class="tipss">图片尺寸：500*500</div>
          <input type="hidden" name="gthumb" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value["gthumb"];?>
">
        </div>
      </div> 
       <div class="form-group">
        <div class="label">
          <label>多图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url2"  class="input tips" style="width:25%; float:left;"   data-toggle="hover" data-place="right"        data-image="" multiple / >
          <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传" data-url="index.php?m=admin&c=user&a=upload"  style="float:left;" >
          <div class="tipss">图片尺寸：500*500</div>
          <div class="field">
            <?php echo $_smarty_tpl->tpl_vars['imgs']->value;?>

          </div>
          <input type="hidden" name="gpictures" id="hidden1" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value["gpictures"];?>
">
        </div>
      </div>     
      <div class="form-group">
          <div class="label">
            <label>商品原价:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="goprice" data-validate="required:请输入商品原价"  value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['goprice'];?>
" id="goprice" onkeyup="value=value.replace(/[^\d]/g,'')"/>
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>商品折扣:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="gdiscount" data-validate="required:请输入商品折扣"  value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gdiscount'];?>
" id="gdiscount" />
            <div class="tips"></div>
          </div>
      </div>
       <div class="form-group">
          <div class="label">
            <label>商品现价:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="gprice" data-validate="required:请输入商品现价"  value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gprice'];?>
" id="gprice"/>
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>商品描述:</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="gdescription" data-validate="required:请输入商品描述" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gdescription'];?>
"/>
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>商品分类:</label>
          </div>
          <div class="field">
            <select name="cid" id="category">
              <?php if ($_smarty_tpl->tpl_vars['arr']->value['cid'] == "未选择") {?>
                <option value="未选择" selected>请选择商品分类</option>
                 <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>

                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['cid'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value["cname"];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               
                
                <option value="未选择" >请选择商品分类</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['arr']->value['cid'] == $_smarty_tpl->tpl_vars['r']->value['cid']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['cid'];?>
" checked><?php echo $_smarty_tpl->tpl_vars['r']->value["cname"];?>
</option>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
            </select>
            <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>推荐商品：</label>
          </div>
          <div class="field">
            <?php if ($_smarty_tpl->tpl_vars['arr']->value['grecommend'] == "1") {?>
             <input type="radio" name="grecommend" value="1" checked>是
             <input type="radio" name="grecommend" value="0">否<?php } else { ?>
               <input type="radio" name="grecommend" value="1">是
             <input type="radio" name="grecommend" value="0" checked>否
              <?php }?>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>商品排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="gsort" data-validate="required:请输入商品排序" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gsort'];?>
"  onkeyup="value=value.replace(/[^\d]/g,'')" />
          <div class="tips" ></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品销售量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="gsells" data-validate="required:请输入商品销售量" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['gsells'];?>
" onkeyup="value=value.replace(/[^\d]/g,'')" />
          <div class="tips" ></div>
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
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getprice.js"><?php echo '</script'; ?>
>
</body></html>
<?php }
}
