<?php
	session_start();
	include_once 'config.php';
	include_once 'conn/conn.php';
	include_once 'inc/char.php';
	include "ifLogin.php";
	echo "<script>alert('物品添加成功');</script>";
	
	$objname = $_POST['objname'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	$classes = $_POST['classes'];
    $price = $_POST['price'];
	
    $publisher = $_SESSION['member'];
	$path = $_SESSION['picpath'];
	
	echo "123132123 + 路径".$_SESSION['picpath'];
	
	if(isset($_POST['public']))
	{
			    echo "<script language='javascript'> 
		      alert('111');
			  </script>"; 
	    echo  $description;	
				
	    $sql = "insert into objects(name,picture,type,class,publisher,gainer,onshelf,description,pubDate,price)" ;
	    $sql .= " values ('$objname', '$path', '$type', '$classes','$publisher',null,1,'$description',now(),'$price')";
	     
		echo $sql;	
			  
     	$rst = $conn->execute($sql);
 
	    if($rst == false){
		   echo '<script>alert(\'添加失败\');history.back;</script>';
	    } else {
		    $_SESSION['member'] = $name;
	    	echo "<script>alert('物品添加成功');</script>";
	    }
	} else if(isset($_POST['upload'])) {
          
	    if(!empty($_FILES[loadpic][name])){
			
		    $fileinfo = $_FILES[loadpic];
		    $type=strstr($fileinfo['name'],".");	
	
		    if($type!=".JPG"){
			    echo "您上传文件格式不正确！";
		    }else{
				
			    if($fileinfo['size'] < 2097152 && $fileinfo['size'] > 0){	/*  判断文件大小  */
  				    $path="upfile/".$_FILES["loadpic"]["name"];				//定义上传文件的路径
					$_SESSION['picpath'] = $path;
				    move_uploaded_file($fileinfo['tmp_name'],$path);		//上传文件
				    if(!is_dir("upfile/")){			     	                //判断文件名是否为目录
						echo "目录路径错误！";
						} else {
							  echo "<script language='javascript'> 
		       alter('图片上传成功'); 
			  </script>"; 
						}
					
			   }else{
				    echo '文件大小不符合要求';
			   }
		   }
	    }		
	} 
			    $smarty->assign('descriptionvalue',$description);
				$smarty->assign('objnamevalue',$objname);
                $smarty->assign('pricevalue',$price);
				$smarty->display('header.tpl');
				echo "<div id='maincontainer'>
                      <section id='product'>
                      <div class='container'>";
                $smarty->display('test2.tpl');				
				echo "</div></section></div>";
				$smarty->display('faster.tpl');
?>