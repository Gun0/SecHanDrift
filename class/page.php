<?php
 class page
 {
    private $pagesize;                  //保存每页最多显示的记录数
	private $page;                      //保存当前页数
	private $pagecount;                 //保存总页数
	private $total;                     //保存总记录数
	private $conn;                         
	   
	public function __construct($pagesize,$page)
	{
	   $this->pagesize=$pagesize;
	   $this->page=$page;
	
	} 
	
	public function listInfo()
	{
	   if($this->page=="" || !is_numeric($this->page))
	    {
	      $this->page=1;
	    }
	    
	   $this->conn=mysql_connect("localhost","root","root");
	   mysql_select_db("db_database20",$this->conn);
       mysql_query("set names gb2312");		 
	   $sql=mysql_query("select count(*) as total from tb_student",$this->conn); 
	   $info=mysql_fetch_array($sql);
	   $this->total=$info[total];
	   if($this->total==0)
	   {
	      
		 echo "<table width=704 height=20 border=0 align=center cellpadding=0 cellspacing=0>"+
               "<tr>"+
                "<td><div align=center>暂无学生信息！</div></td>"+
               "</tr>"+
              "</table>";
		  
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
		
		$sql=mysql_query("select * from tb_student order by sno desc limit ".$this->pagesize*($this->page-1).",$this->pagesize",$this->conn);
		
       ?>
	   
	   <table width="703" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#476106">
        <tr>
         <td width="100" height="20" bgcolor="#C2C41F"><div align="center">学号</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">姓名</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">性别</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">班级</div></td>
         <td width="297" bgcolor="#C2C41F"><div align="center">住址</div></td>
        </tr>
	  
	   <?php
	   
	    while($info=mysql_fetch_array($sql))
		{
		?>
		<tr>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ssex];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sclass];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[saddress];?></div></td>
        </tr>
       <?php  
		   }
		echo "</table>";
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

 $obj=new page(4,$_GET["page"]);

?>

	
<?php
$obj->listInfo();
$obj->toPage();
?>

