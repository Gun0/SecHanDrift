<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 07:35:04
         compiled from "D:\project\UMLproject\Smarty\templates\editUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20765557ce9aaaeea48-36505073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a382ac44c46026b3f3fd2cea5e60b003abd7464' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\editUser.tpl',
      1 => 1434497701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20765557ce9aaaeea48-36505073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_557ce9aab499c5_81479215',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ce9aab499c5_81479215')) {function content_557ce9aab499c5_81479215($_smarty_tpl) {?><table>
 <form id="editUser" name="editUser" action="editUserSubmit.php" method="post" onSubmit="return chkinput(this)">


    <tr>
      <td height="25"><div align="right">密码：</div>
          <input id="pwd1" name="pwd1" type="password"/></td>
    </tr>
    <tr>
      <td height="25"><div align="right">确认密码：</div>
          <input id="pwd2" name="pwd2" type="password" /></td>
    </tr>
   
    <tr>
      <td height="25"><div align="right">移动电话：</div> 
          <input id="tel" type="text" name="tel" /></td>
    </tr>
    
    <tr>
      <td height="25"><div align="right">QQ号码：</div>
          <input id="qq" type="text" name="qq" /></td>
    </tr>
   
    <tr>
      <td height="25" colspan="2">
          <input type="submit" value="提交"/></td>
    </tr>
  </form>
</table>
<?php }} ?>
