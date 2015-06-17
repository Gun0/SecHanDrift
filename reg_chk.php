<?php
	session_start();
	include_once 'conn/conn.php';
    $name = $_POST['name'];
   	$password = $_POST['pwd1'];
   	$tel = $_POST['tel'];
   	$Email = $_POST['email'];
   	$QQ = $_POST['qq'];
	echo "<script language='javascript'> 
	        alert(123');
	 	  </script>"; 
    $sql = "insert into users(username,password,email,telephone,QQ)" ;
    $sql .= " values ('$name', '$password', '$Email', '$tel','$QQ')";
 			  
    $rst = $conn->execute($sql);  
    	
    if($rst == false){
	    echo '<script>alert(\'添加失败\');history.back;</script>';
    }else{
	    $_SESSION['member'] = $name;
	    echo "<script>location.replace('home.php');alert('注册成功');window.close();</script>";
    }
		
?>