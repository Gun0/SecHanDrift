<?php
	$con = mysql_connect("localhost","root","dwawer00S");
	
	if(!$con)
	{
	    die('Could not connect :' .mysql_error());
	}
	if($con)
	{
	    echo "success";
	}
	mysql_query("set names 'UTF8'");
	mysql_select_db("test",$con);
   
	if(isset($_POST["Login"]) && $_POST["Login"] == "login")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		$sql_insert = "INSERT INTO  users(username, password) 
                                   VALUES ('$user', '$psw')";
        $test_insert = mysql_query($sql_insert);
		if($test_insert)
	    {
	    	echo "<script>alert('插入数据成功！');</script>";
	    }
	}
?>