<?php
 include_once 'config.php';
 class Objlist
 {
    private $pagesize=7;                  //保存每页最多显示的记录数
	private $page;                      //保存当前页数
	private $pagecount;                 //保存总页数
	private $total;                     //保存总记录数
	private $conn;    

	   
	public function __construct($pagesize,$page)
	{
	   $this->pagesize=7;
	   $this->page=$page;
	} 
	
	public function listInfo($infoall)
	{
		global $smarty;
	   if($this->page=="" || !is_numeric($this->page))
	    {
	      $this->page=1;
	    }
	    
	   $this->total= count($infoall);
	   
	   //echo "this total :" .$this->total;
	   if($this->total==0)
	   {      
		 echo "什么都没有~";		  
	   }
	   else
	   {
	       if(($this->total % $this->pagesize)==0)
	       {
		      $this->pagecount=intval($this->total/$this->pagesize);
	     	}
		    else
		   {
		      if($this->total<=$this->pagesize)
		      {
		          $this->pagecount=1;
		       }
		      else
		     {
		         $this->pagecount=ceil($this->total/$this->pagesize);
		     }
		    }
		
	     $info = array_slice($infoall, $this->pagesize*($this->page-1),$this->pagesize); //第二个参数为pagesize;
		
	   foreach($info as $value){
			 // print_r($value);
			 			  
			  $smarty->assign('objname',$value['name']);
			  $smarty->assign('description',$value['description']);
			  $smarty->assign('publisher',$value['publisher']);
			  $smarty->assign('type',$value['type']);
			  $smarty->assign('class',$value['class']);
			  $smarty->assign('price',$value['price']);
			  $smarty->assign('picpath',$value['picture']);
			  $smarty->assign('oid',$value['O_id']);
			  $smarty->display('list.tpl');	  		
	   }
	 }	
	   	
  }
	
	public function toPage()
	{
	?>
	   <table width="704" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
         <td width="342">&nbsp;共有学生信息&nbsp;<?php echo $this->total;?>&nbsp;条&nbsp;每页显示&nbsp;<?php echo $this->pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $this->page;?>&nbsp;页/共&nbsp;<?php echo $this->pagecount;?>&nbsp;页</td>
         <td width="362"><div align="right">
		      <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1">首页</a>
              <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page>1)
			     echo $this->page-1;
			    else
				 echo 1; 
			  ?>">上一页</a>
			  <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page<$this->pagecount-1) 
			      echo $this->page+1;
			    else
				  echo $this->pagecount;
			  ?>">下一页</a>
              <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $this->pagecount;?>">尾页</a>
		 
		 </div></td>
        </tr>
       </table> 
	  
	<?php
	}
        
       public function __destruct()
	   {
	     mysql_close($this->conn);
	   }
  }
?>

