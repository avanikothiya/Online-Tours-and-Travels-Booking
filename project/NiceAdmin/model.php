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
		 //echo $ins;exit;
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
	   function join_five($con,$tbl1,$tbl2,$where1,$tbl3,$where2,$tbl4,$where3,$tbl5,$where4)
	  {
		  $sql="select * from $tbl1 join $tbl2 on $where1 join $tbl3 on $where2 join $tbl4 on $where3 join $tbl5 on $where4";
		  $q=$con->query($sql);
		//echo $sql;exit;
		  while($fet=$q->fetch_object())
		  {
			  $res[]=$fet;
			 
		  }
		 return @$res;
	  }
	  
	  
	  
	  function up_status($con,$tbl,$where)
	  {
		      $wk=array_keys($where);
		  $wv=array_values($where);
		  $k=0;
		   	$up="update $tbl set status='approved' where 1=1";
			
			foreach($where as $i)
				{
					$up.=" and " .$wk[$k]."='".$wv[$k]."'";
					$k++;
				}
			$upp=$con->query($up);
			return $up;   
	  }
	  function up_status2($con,$tbl,$where)
	  {
		      $wk=array_keys($where);
		  $wv=array_values($where);
		  $k=0;
		   	$up="update $tbl set status='rejected' where 1=1";
			
			foreach($where as $i)
				{
					$up.=" and " .$wk[$k]."='".$wv[$k]."'";
					$k++;
				}
			$upp=$con->query($up);
			return $up;   
	  }
	  function up_status3($con,$tbl,$where)
	  {
		      $wk=array_keys($where);
		  $wv=array_values($where);
		  $k=0;
		   	$up="update $tbl set status='pending' where 1=1";
			
			foreach($where as $i)
				{
					$up.=" and " .$wk[$k]."='".$wv[$k]."'";
					$k++;
				}
			$upp=$con->query($up);
			return $up;   
	  }
	  
  }
  

  
  
  
?> 