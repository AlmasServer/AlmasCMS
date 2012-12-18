<?php

class almasdb{
 function almas_connection($host,$user,$pass,$port)
 {
  $connection = mysql_connect($host,$user,$pass);
  if (!$connection)
   return false; 
 }
 
 function almas_query($query)
 {
  $result_array = array();
  $sql_query = mysql_query($query);
  $num_rows  = mysql_num_rows($sql_query);
  for ($i=0; $i<$num_rows ; $i++){
    if($row=mysql_fetch_array($sql_query)){
	 $result_array = $row;
	 
	}
  }
  return $result_array;  
 }
 
 function almas_selectdb($db,$connection)
 {
  $dbselect = mysql_select_db($db,$connection);
  if(!$dbselect)
   return false;
 }
 
 function almas_myadmin($query)
 {
  $myadmin = mysql_query($query);
  if(!$myadmin)
   return false;
 }
}

?> 