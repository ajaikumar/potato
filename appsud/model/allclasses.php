<?php
class connection
{
	Private $con,$query,$result,$hostname,$dbname,$db_user,$db_password;
	function connection()//Connect Directly when an object is declared~Also Known As~constructor
		{
			if(preg_match("/localhost/",$_SERVER['SERVER_NAME']))
			{
				// LOCALHOST //
				$this->hostname 	= 'localhost';
				$this->dbname 		= 'appsud';
				$this->db_user 		= 'root';
				$this->db_password 	= 'root';
			}
		
		
			else
			{
				// LIVE SERVER //
				// LIVE SERVER //
				$this->hostname 	= 'localhost';
				$this->dbname 		= 'threads_appsud';
				$this->db_user 		= 'threads_321afspo';
				$this->db_password 	= 'vd#nJzo9~yeX';
			}
			
				
			$this->connect();
		}
	function connect()//mysql connection established
		{
			$this->con=mysql_connect($this->hostname,$this->db_user,$this->db_password) or die("Error in mysql connection ");
			mysql_select_db($this->dbname,$this->con) or die("Error in DB connection ");
		}
	function executequery($query)
		{
			$this->query=$query;
			$result=mysql_query($this->query,$this->con);
			return $result;
		}
	function select($table,$feilds,$where="")
	{
		if($where==""){}else{$where=" where ".$where;}
		$this->query="select ".$feilds." from ".$table." ".$where;
		$result=mysql_query($this->query,$this->con);
		return $result;
	}
	function select1($table,$feilds,$where)
	{
		if($where==""){}else{$where=" where ".$where;}
		$this->query="select ".$feilds." from ".$table." ".$where;
		//$result=mysql_query($this->query,$this->con);
		return $this->query;
	}
	
	function insert($table,$fields,$values)
	{
			$this->query="insert into ".$table."(".$fields.") values (".$values.")";
			$result=mysql_query($this->query,$this->con);
			return $result;
	}
	function insert1($table,$fields,$values)
	{
			$this->query="insert into ".$table."(".$fields.") values (".$values.")";
			$result=mysql_query($this->query,$this->con);
			return $this->query;
	}
	
	
    function update($table,$set,$where)
		{
			$set=strip_tags($set);
			$where=strip_tags($where);
			//date_default_timezone_set('Asia/Calcutta');
			//$mysqltoday = date( 'Y-m-d H:i:s');
			$this->query="UPDATE ".$table." SET ".$set." WHERE ".$where."";
			//$this->query = str_ireplace("NOW()","'$mysqltoday'", $this->query);
			$result=mysql_query($this->query,$this->con);
			return $result;
		}
	function update1($table,$set,$where)
		{
			$set=strip_tags($set);
			$where=strip_tags($where);
			//date_default_timezone_set('Asia/Calcutta');
			//$mysqltoday = date( 'Y-m-d H:i:s');
			$this->query="UPDATE ".$table." SET ".$set." WHERE ".$where."";
			//$this->query = str_ireplace("NOW()","'$mysqltoday'", $this->query);
			return $this->query;
		}
		function delete($table,$where)
		{
			$this->query="DELETE FROM `".$table."` WHERE ".$where;
			$result=mysql_query($this->query,$this->con);
			return $result;
		}
	function delete1($table,$where)
		{
			$this->query="DELETE FROM `".$table."` WHERE ".$where;
			return $this->query;
		}
}
?>		