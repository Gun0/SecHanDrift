<<<<<<< HEAD
﻿<?php
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
=======
﻿<?php
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
>>>>>>> bbe3a4673a9a3bc6b54c9d9df7b109ec495b6d2a
?>