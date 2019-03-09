<?php
  $con=new MySQLi("localhost","root","","tours_and_travels");
  
  class model
  {
	  function ins_data($con,$tbl,$data)
	  {
		  $k=array_keys($data);
		  $dk=implode(",",$k);
		  $v=array_values($data);
		  $dv=implode("','",$v);
		  $ins="insert into $tbl ($dk) values ('$dv')";
		// echo $ins;exit;
		  $i=$con->query($ins);
	  }
	  
	  function sel_data($con,$tbl)
	  {
		  $sql="select * from $tbl";
		  $q=$con->query($sql);
		  while($fet=$q->fetch_object())
		  {
			  $res[]=$fet;
			  
		  }
		  return @$res;
	  }
	  
	  
	  
	  
	  function del_data($con,$tbl,$where)
	  {
		$key=array_keys($where);
		$dk=implode(",",$key);
		$val=array_values($where);
		$dv=implode("','",$val);
		
		$sql="delete from $tbl where $dk=$dv";
		//echo $sql;exit;
		$q=$con->query($sql);  
	  }
	  
	   function select_where($con,$tbl,$where)
	  {
	  $key=array_keys($where);
	  $val=array_values($where);
	  $i=0;
	  $sql="select * from $tbl where 1=1";
	 	     	foreach($where as $q)
	  	   {
		     $sql.=" and " .$key[$i]."='".$val[$i]."'";
		     $i++;
		   }
		//echo $sql;exit;
		$q=$con->query($sql);
	//echo $q;exit;
		return @$q;
	  
	  
	 }
	  
	  function update_data($con,$tbl,$data,$where)
	  {
		  $dk=array_keys($data);
		  $dv=array_values($data);
		  $wk=array_keys($where);
		  $wv=array_values($where);
		 // $size=count ($data);
		  $i=0;
		  $k=0;
		  $sql="update $tbl set";
		  $size=sizeof($data);
		  
		  		foreach($data as $y)
				{
					if($size==$i + 1)
					{
						$sql.=" ".$dk[$i]."='".$dv[$i]."'";
					}
					else
					{
						$sql.=" ".$dk[$i]."='".$dv[$i]."',";
					}
					$i++;
				}
				$sql.=" where 1=1";
				
				foreach($where as $i)
				{
					$sql.=" and " .$wk[$k]."='".$wv[$k]."'";
					$k++;
				}
			//echo $sql;exit;
			$q=$con->query($sql);
			
			return $q;
	  }
	  
	  
	  
	  function join_two($con,$tbl1,$tbl2,$where)
	  {
		  $sql="select * from $tbl1 join $tbl2 on $where";
		  $q=$con->query($sql);
		//echo $sql;exit;
		  while($fet=$q->fetch_object())
		  {
			  $res[]=$fet;
			 
		  }
		 return @$res;
	  }
	  

	   function join_three($con,$tbl1,$tbl2,$where1,$tbl3,$where2)
	  {
		  $sql="select * from $tbl1 join $tbl2 on $where1 join $tbl3 on $where2";
		  $q=$con->query($sql);
		//echo $sql;exit;
		  while($fet=$q->fetch_object())
		  {
			  $res[]=$fet;
			 
		  }
		 return @$res;
	  }
	   function join_four($con,$tbl1,$tbl2,$where1,$tbl3,$where2,$tbl4,$where3)
	  {
		  $sql="select * from $tbl1 join $tbl2 on $where1 join $tbl3 on $where2 join $tbl4 on $where3";
		  $q=$con->query($sql);
		//echo $sql;exit;
		  while($fet=$q->fetch_object())
		  {
			  $res[]=$fet;
			 
		  }
		 return @$res;
	  }
	  
	  function select_where_join($con,$tbl1,$tbl2,$on,$where)
	  {
	  $key=array_keys($where);
	  $val=array_values($where);
	  $sql="select * from $tbl1 join $tbl2 on $on where 1=1";
	  
	  $i=0;
	  foreach($where as $q)
	  	   {
		     $sql.=" and " .$key[$i]."='".$val[$i]."'";
		     $i++;
		   }
	 	  $q=$con->query($sql);
	 //echo $sql;exit;
		return @$q;
	  
	  
	 }
	 
	  function select_where_join_three($con,$tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$where)
	  {
	  $key=array_keys($where);
	  $val=array_values($where);
	  $sql="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where 1=1";
	  
	  $i=0;
	  foreach($where as $q)
	  	   {
		     $sql.=" and " .$key[$i]."='".$val[$i]."'";
		     $i++;
		   }
	 	  $q=$con->query($sql);
		   //echo $sql;exit;
		 
		 return @$q;
	
		
	  
	  
	 }
	 
	  function select_where_join_two($con,$tbl1,$tbl2,$on1,$tbl3,$on2,$where)
	  {
	   $sql="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 where $where";
	 	  $q=$con->query($sql);
	 // echo $sql;exit;
		return @$q;
	  
	  
	 }
	 
	  function select_where_join_detail($con,$tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$tbl5,$on4,$where)
	  {
	 
	  $sql="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 join $tbl5 on $on4 where $where";
	 	  $q=$con->query($sql);
	 // echo $sql;exit;
		return @$q;
	  
	  
	 }
	 
	 function select_where_join_detail_three($con,$tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$where)
	  {
	 
	  $sql="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where $where";
	 	  $q=$con->query($sql);
	  //echo $sql;exit;
		return @$q;
	  
	
	 }
	 
	 
	 
  }
  
?> 