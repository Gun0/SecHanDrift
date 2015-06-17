<?php
    session_start();
	//检测是否有账号登陆
	if(empty($_SESSION['member'])){
	    echo "<script language='javascript'> 
		      alert('请先登录账户');
		      location.replace('index.php') 
			  </script>";
    }
?>