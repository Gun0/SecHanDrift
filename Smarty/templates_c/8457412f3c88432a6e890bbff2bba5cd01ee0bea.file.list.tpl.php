<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 23:35:38
         compiled from "D:\project\UMLproject\Smarty\templates\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301545580c2ae3b82e3-35154966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8457412f3c88432a6e890bbff2bba5cd01ee0bea' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\list.tpl',
      1 => 1434555335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301545580c2ae3b82e3-35154966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5580c2ae49ac15_88997140',
  'variables' => 
  array (
    'objname' => 0,
    'oid' => 0,
    'price' => 0,
    'description' => 0,
    'publisher' => 0,
    'type' => 0,
    'class' => 0,
    'picpath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580c2ae49ac15_88997140')) {function content_5580c2ae49ac15_88997140($_smarty_tpl) {?>
		
		<li class="span3">
                <a class="prdocutname" href="product.html"><?php echo $_smarty_tpl->tpl_vars['objname']->value;?>
</a>
                <div class="thumbnail">
                  
                  <a href="#"><img alt="" src="upfile/1.JPG"></a>
                  <div class="pricetag">
                    <span class="spiral"></span><a href="showObject.php?id=<?php echo $_smarty_tpl->tpl_vars['oid']->value;?>
" class="productde">商品详情</a>
                    <div class="price">
                      <div class="pricenew">￥<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</div>
                      
                    </div>
                  </div>
                </div>
              </li>
			<!--  
			  		<tr>
         <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['objname']->value;?>
</div></td>
         <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div></td>
         <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['publisher']->value;?>
</div></td>
         <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</div></td>
         <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</div></td>
		 <td height="20"><div align="center"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</div></td>
		 <td height="20"><div align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['picpath']->value;?>
" /></div></td>
		 <td height="20"><div align="center">
		      <a href="showObject.php?id=<?php echo $_smarty_tpl->tpl_vars['oid']->value;?>
"><input type="button" value="Go!"/></button>
			  </a></div>
		 </td>
        </tr> --><?php }} ?>
