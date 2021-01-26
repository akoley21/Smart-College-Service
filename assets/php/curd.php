<?php
include('config.php');
class Crud extends a
{
    function __construct()
 {
  parent::__construct();
        
 }
    
    function insert($sql)
 {
	if($this->con->query($sql))
		return true; 	
 } 

    function login($sql)
{    
	 $result=$this->con->query($sql);
	 return $result; 
}
       function fetch($sql)
 {
	 $result=$this->con->query($sql);
	 return $result;
 }
       function update($sql)
 {
	 if($this->con->query($sql))
		return true; 
 } 
}
?>