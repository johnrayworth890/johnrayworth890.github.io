<?php
//ini_set('session.gc_maxlifetime', '7200');
//ini_set('session.gc_maxlifetime', '7200');
//session_start();
require_once('phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();

/*function returnUser(){
  return "root";
}
function returnPassword(){
  return "falconsE3B4P2";
} 
function returnHost(){
  return "localhost";
}*/
 
/* The better, full way for it to be done:
function db_connect(){
  $username = "root";
  $password = "falconsE3B4P2";
  $database = "jsr_database";
  $localhost = "localhost";

  $mysqlLink = mysql_connect($localhost, $username, $password);
  $result = mysql_select_db($database, $mysqlLink); 
  if (!$result) {
     throw new Exception('Could not connect to database server');
  } else {
  //echo 'connected';
     return $result;
   }
} */

  //$mysqlLink = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", "root", returnPassword());
  //$succeeded = mysql_select_db("jsr_database", $mysqlLink); 
  //though nothing done with $succeeded, note.
 
//} 

//db_connect();
//$linkHere = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", "root", returnPassword());
$linkHere = mysql_connect(returnhost(), returnUser(), returnPassword());

//Lost of msql examples:

		//To GET information from an SQL table:

$result2 = mysql_query("select * from miscellaneoustable where misc_purposeField = 'cronTabCounter'", $linkHere);
while($row = mysql_fetch_array($result2)){
  $counterNumber = $row['misc_Int_Field'] ; 
}
echo 'counter number '.$counterNumber.'</br>';
$counterNumber = $counterNumber + 1;
		//To UPDATE something:  Example 1

$query1 ="update miscellaneoustable set misc_Int_Field = '$counterNumber' where misc_purposeField = 'cronTabCounter'";
mysql_query($query1);
echo 'counter number is now '.$counterNumber.'</br>';

	

?>


