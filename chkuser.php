<?php
    session_start();
    include_once "conn/conn.php";
    $sql = "select * from users where username='".$_POST['name']."'";
    $password = $_POST['password'];
    if(!empty($password)){
	    $sql .= " and password = '".$password."'";
    }
    $rst = $conn->Execute($sql) or die('execute error');			  
    if($rst->RecordCount() == 1){
		$_SESSION['member'] = $rst->fields['username'];
			  echo "<script language='javascript'> 
		      alert('登陆成功');
		      location.replace('home.php');
			  </script>";
   } else{

	  echo "<script language='javascript'> 
		      alert('密码错误');
		     history.go(-1);
			  </script>";
   }
			  
   echo $reback;
?>