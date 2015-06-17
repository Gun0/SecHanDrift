// JavaScript Document
function lg(form){
	if(form.name.value==""){
		alert('请输入用户名');
		form.name.focus();
		return false;
	}
	if(form.password.value == "" || form.password.value.length < 6){
		alert('请输入正确密码');
		form.password.focus();
		return false;
	}
	
	var user = form.name.value;
	var password = form.password.value;
	var localhostPath = getRootPath();  
	var url = "/chkuser.php?user="+user+"&password="+password;
	xmlhttp.open("GET",url,false);
	xmlhttp.onreadystatechange = function(){
	    if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('用户名或密码错误!!');
				form.password.select();
				form.check.value = '';
				code(form);
				return false;
			}else{
				alert('欢迎光临');
				location.reload('home.php');
			}
		}
	}
	xmlhttp.send(null);
	return false;
}

function getRootPath(){
    //获取当前网址，如： http://localhost:8083/uimcardprj/share/meun.jsp
    var curWwwPath=window.document.location.href;
    //获取主机地址之后的目录，如： uimcardprj/share/meun.jsp
    var pathName=window.document.location.pathname;
    var pos=curWwwPath.indexOf(pathName);
    //获取主机地址，如： http://localhost:8083
    var localhostPaht=curWwwPath.substring(0,pos);
    //获取带"/"的项目名，如：/uimcardprj
    var projectName=pathName.substring(0,pathName.substr(1).indexOf('/')+1);
    return(localhostPaht+projectName);
}