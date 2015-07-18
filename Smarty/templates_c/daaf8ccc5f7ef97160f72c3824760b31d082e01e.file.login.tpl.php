<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 20:35:05
         compiled from "D:\project\UMLproject\Smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23381557c26f23c1053-16134123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daaf8ccc5f7ef97160f72c3824760b31d082e01e' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\login.tpl',
      1 => 1434544502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23381557c26f23c1053-16134123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_557c26f2422f55_96295232',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c26f2422f55_96295232')) {function content_557c26f2422f55_96295232($_smarty_tpl) {?><div id="maincontainer">
  <section id="product">
    <div class="container">
       <!-- Account Login-->
      <div class="row">  
        <div class="span12">
          <div align="center">
          <section class="newcustomer">
            <br/>
            <br/>
            <br/>
            <h1 class="heading2"><span style="font-size:45px">欢迎使用</span></h1>
            <h1 class="heading2"><span style="font-size:40px">SecHandrift</span></h1>
            <br/>
            <br/>
            <br/>
          </section>
        </div>
		<form id="login" name="login" method="post" action="chkuser.php">
          <section class="returncustomer">
            <h2 class="heading2">登陆</h2>
            <div class="loginbox">
              <form class="form-vertical">
                <fieldset>
                  <div class="control-group">
                    <label  class="control-label">用户名:</label>
                    <div class="controls">
                      <input type="text" name="name"  class="span3"/ >
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label">密码:</label>
                    <div class="controls">
                      <input type="password"  name="password" type="password" class="span3">
                    </div>
                  </div>
                  <a class="" href="findPassword.php">忘记密码?</a>
                  <br>
                  <br>
                  <div align=right>
                  <a href="register.php" class="btn btn-orange">注册</a>&nbsp;
                  <input id="enter"  class="btn btn-orange" name="enter" type="submit" value="登陆">
                </div>
                </fieldset>
              </form>
            </div>
          </section>
        </div>
          </form>

      </div>
    </div>
  </section>
</div>
<?php }} ?>
