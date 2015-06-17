<?php
    session_start();
	include_once 'config.php';
	include_once 'conn/conn.php';
	include "ifLogin.php";
	
    $name = $_SESSION['member'];
	
   	$password = $_POST['pwd1'];
	$password2 = $_POST['pwd2'];
   	$tel = $_POST['tel'];
   	$QQ = $_POST['qq'];
	
	if(isset($_POST['pwd1']) && isset($_POST['tel']) &&
	   isset($_POST['pwd2'])&& isset($_POST['qq']))
	{
	 if($password == $password2 ) {
	    $sql = "update users set password= '$password',telephone ='$tel',QQ ='$QQ' 
		        where username = '$name'" ;  
		echo $sql;
        $rst = $conn->execute($sql);  
	    if($rst == false){
	    echo '<script>alert(\'修改失败\');history.back;</script>';
        } else {
	        echo "<script>alert('修改成功');</script>";
        }
	  }
	 else {
		 echo '<script>alert(\'两次输入密码不一致\');history.back;</script>';
	 }
	}
	else{
		echo "<script language='javascript'> 
	        alert('请填写完整信息');
	 	  </script>"; 
	 }


    	

	
?>