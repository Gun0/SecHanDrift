<?php
	session_start();
	include_once 'config.php';
    include_once 'Objlist.php';
	include_once 'conn/conn.php';
	//include "ifLogin.php";
	
	$search = $_POST['searchbox'];
	$objname = "";
	$description = "";
	$type = "";
	$classes = "";
    $price = "";
    $publisher = "";
	$path = "";
	
	$smarty->display('header.tpl');
	echo "<div id='maincontainer'>
         <section id='product'>
          <div class='container'>
		     <div class='row'><aside class='span3'>";
		 $smarty->display('category.tpl');
		   $smarty->display('floatsed.tpl');
		   $smarty->display('floatdrift.tpl');
	       $smarty->display('newlist.tpl');
    echo "</aside>";
	echo " <div class='span9'>          
          <section id='category'>
            <div class='row'>
              <div class='span9'>";	  
                 echo "<section id='categorygrid'>
                  <ul class='thumbnails grid'>";
	if(isset($_POST['searchbox']))
	{

		$sql1 = "select * from objects;";
		$sql2 = "select * from objects where description like '%".$search."%' and onshelf = 1;";

		
		$rst1 = $conn->execute($sql1);
		$rst2 = $conn->execute($sql2);

	    if($rst1->RecordCount() == 0){}
	    else{
			$arr1 = $rst1->getArray();
			echo "1";
			$objlist = new objlist(3,1);
			$objlist->listInfo($arr1);
		
	    
		if($rst2->RecordCount() == 0){}
	    else{
			$arr2 = $rst2->getArray();
		    echo "2";
		}
	  }	
	} 
	 echo "</ul></div></div></section></div></div></div></section></div>";
	 $smarty->display('faster.tpl');
?>