<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 22:16:13
         compiled from "D:\project\UMLproject\Smarty\templates\test2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2089955816f7d723e36-07292254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f29f1921463553d7691785f151aafa20e9c0eb' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\test2.tpl',
      1 => 1434550569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2089955816f7d723e36-07292254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55816f7d756ab0_92458208',
  'variables' => 
  array (
    'objnamevalue' => 0,
    'pricevalue' => 0,
    'descriptionvalue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55816f7d756ab0_92458208')) {function content_55816f7d756ab0_92458208($_smarty_tpl) {?>     <ul class="breadcrumb">
        <li>
          <a href="#">主页</a>
          <span class="divider">/</span>
        </li>
        <li class="active">发布</li>
      </ul>
      <!-- Contact Us-->
	  
      <h1 class="heading1"><span class="maintext">发布</span><span class="subtext"> 发布新的物品</span></h1>
      <div class="row">
        <div class="span9">
		 <form id="publishObject" name="publishObject"
		    action="publishObject.php" method="post" enctype="multipart/form-data"> 
      
            <fieldset>
              <div class="control-group">
                <label class="control-label" >名称<span class="red">*</span></label>
                  <input type="text" class="" value="<?php echo $_smarty_tpl->tpl_vars['objnamevalue']->value;?>
" name="objname" >
              </div>
                <label class="control-label" >类型<span class="red">*</span></label>
                <div class="controls">
                  <select name="type" >
                    <option value="sale">二手</option>
                    <option value="drift">漂流</option>
                  </select>
                </div>
         
                <label class="control-label" >分类<span class="red">*</span></label>
                  <select name="classes" >
                    <option value="book">图书</option>
                    <option value="woman">女装</option>
                    <option value="man">男装</option>
                    <option value="bike">单车</option>
                    <option value="electric">数码</option>
					<option value="home">家电</option>
					<option value="daily">日用</option>
                  </select>



                <label class="control-label" >价格</label>
                  <input type="text" class="" name="price" value="<?php echo $_smarty_tpl->tpl_vars['pricevalue']->value;?>
">
    
                <label class="control-label" >所在地</label>
                  <input type="text" class=""  value="">


                <label class="control-label" >成色</label>
                  <input type="text" class=""  value="">

                <label class="control-label" >上传图片</label>
				  <input type = "file" name="loadpic"/>
                  <br />
                  <input type="submit" name="upload" value="上传"/>
    

                <label for="message" class="control-label">描述</label>
  
                  <textarea  name = "description" rows="6" cols="40" id="message" name="messagee">
				  <?php echo $_smarty_tpl->tpl_vars['descriptionvalue']->value;?>
</textarea>
				  
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" name="public" value="发布"/>
                <input class="btn btn-orange" type="reset" value="重写" /></td>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div><?php }} ?>
