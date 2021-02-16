<?php
include_once 'connect.php';
/**
 * databse qurey use 
 */
class database extends connect
{
	
	function insert($k,$p)
	{
		$connect = $this->dbcon();		
		$t = '';
		$y = '';
		$i = 1;
			foreach ($p as $key => $value) {
				if ($i == 1) {
					$t=$key;
					$y="'".$value."'";
				}
				else{
					$t = $t.','.$key;
					$y = $y.','."'".$value."'";
				}
				$i++;
			}
		$o = mysqli_query($connect,"insert into $k($t) values($y)");
		mysqli_close($connect);
		return $o;
	}


	 function view($t){
			$connect = $this->dbcon();
			
		  $b = mysqli_query($connect,"select * from $t");
		  mysqli_close($connect);
		  return $b;
	}


	 function views($table,$data='*',$where='',$other=''){
	$connect = $this->dbcon();
		if($where != '')
		{
			$where = 'where '.$where;
		}
		  $b = mysqli_query($connect,"select $data from $table $where $other");
		  mysqli_close($connect);
		  return $b;


	}

	function delete($table,$where){
		$connect = $this->dbcon();
		  $b = mysqli_query($connect,"delete from $table where $where");
		  mysqli_close($connect);
		  return $b;


	}


	 function update($table,$arg,$where){

			$ff = '';
			$t = 1;
		  foreach ($arg as $key => $value) {
		  		if($t == 1)
		  		{
		  			$ff = $key .'='."'".$value."'";
		  		}
		  		else{
		  			$ff = $ff.','.$key .'='."'".$value."'";
		  		}
		  		$t++;	
		  	}	

		  $b = mysqli_query($connect,"update $table set $ff where $where");
		  mysqli_close($connect);
		  return $b;
	}
	}
?>