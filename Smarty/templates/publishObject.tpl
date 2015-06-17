<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/check.js"></script>
<body onload="setPage(publishObject)" onunload="savePage(publishObject)">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 <form id="publishObject" name="publishObject" action="publishObject.php" method="post" enctype="multipart/form-data">
 	<tr>
       <td colspan="5" align="center" valign="middle">
	       <h2>发布商品</h2>
	   </td>
    </tr>
    <tr>
      <td width="81" height="25">
	      <div align="right">商品名称</div>
	  </td>
      <td height="25" colspan="3">&nbsp;
          <input id="objname" name="objname" type="text" value="{$objnamevalue}"
		  onBlur="javascript:chkobjname(publishObject)" 
		  onMouseOver="this.style.backgroundColor='#ffffff'" 
		  onMouseOut="this.style.backgroundColor='#e8f4ff'" />
		  <input id="c_name" name="c_anme" type="hidden" value="not" ><font color="red">*</font>
	  </td>
      <td>请输入商品名称</td>
    </tr>
    <tr>
      <td height="25"><div align="right">商品描述</div></td>
      <td height="25" colspan="3">&nbsp;
          <textarea  value="123" rows="5" cols="20" name = "description"
		     onBlur="javascript:chkdescription(publishObject)" 
			 onMouseOver="this.style.backgroundColor='#ffffff'" 
			 onMouseOut="this.style.backgroundColor='#e8f4ff'">
			 {$descriptionvalue}
			 </textarea>
			 <font color="red">*</font>
		  </td>
      <td>请输入商品描述,不少于30字</td>
    </tr>
    <tr>
      <td height="25"><div align="right">商品图片</div></td>
      <td height="25" colspan="3">;
		  <input type = "file" name="loadpic"/>
          <input type="submit" name="upload" onClick="savePage(publishObject)" value="上传"/>
	   </td>
	  <td height="25"><div id="pwd21"><font color="#999999">上传商品图片</font></div></td>
    </tr>
   
    <tr>
      <td height="25"><div align="right">出售or漂流</div></td>
      <td height="25" colspan="3">
          <label><input name="type" type="checkbox" value="sale" onBlur="javascript:chktype(publishObject)") />出售 </label> 
          <label><input name="type" type="checkbox" value="drift" onBlur="javascript:chktype(publishObject)"/>漂流</label> 
	   </td>
       <td height="25"><div id="tel1"><font color="#999999">请选择卖出还是漂流</font></div></td>
    </tr>
    
    <tr>
      <td height="25"><div align="right">商品类型</div></td>
	  <td><select name="classes" id="classes" selected = "书本" >
          <option value="家电">家电</option> 
          <option value="书本">书本</option> 
          <option value="日常用品">日常用品</option>  	
		  <option value="其他">其他</option>  
     </select> </td>
      <td height="25"><div><font color="#999999">请选择商品类型</font></div></td>
    </tr>
	
    <tr>
      <td height="25"><div align="right">商品价格</div></td>
      <td height="25" colspan="3">
          <input id="price" value="{$pricevalue}" type="text" name="price" onBlur="javascript:chkemail(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="price"><font color="#999999">请输入商品价格</font></div></td>
    </tr>
   
    <tr>
      <td height="25" colspan="2">&nbsp;
          <input type="submit" name="public" onSubmit="return chkinput2(publishObject)" value="发布"/>
        <input type="reset" value="重写" /></td>
      <td height="25" colspan="3"><div style="color:#FF0000">带“*”号的为必填项</div></td>
    </tr>
  </form>
</table>
