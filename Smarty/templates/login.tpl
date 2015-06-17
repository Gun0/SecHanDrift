<div id="maincontainer">
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
