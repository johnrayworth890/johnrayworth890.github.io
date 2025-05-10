<?php
//ini_set('session.gc_maxlifetime', '7200');
//ini_set('session.gc_maxlifetime', '7200');
//session_start();
require_once('phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************


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

  $mysqlLink = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", "root", returnPassword());
  $succeeded = mysql_select_db("jsr_database", $mysqlLink); 
  //though nothing done with $succeeded, note.
 
//} 

//db_connect();
$linkHere = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", "root", returnPassword());

//Lost of msql examples:

		//To GET information from an SQL table:

$result2 = mysql_query("select * from miscellaneoustable where misc_purposeField = 'cronTabCounter'", $linkHere);
while($row = mysql_fetch_array($result2)){
  $counterNumber = $row['misc_Int_Field'] ; 
}

$counterNumber = $counterNumber + 1;
		//To UPDATE something:  Example 1

$query1 ="update miscellaneoustable set misc_Int_Field = '$counterNumber' where misc_purposeField = 'cronTabCounter'";
mysql_query($query1);

	
	
	
//First get last homework details.	
$resultHomeworkList = mysql_query("select * from assignmentdetails where course = 'IB CS (b)' order by dueDateFirst", $linkHere);
while($row = mysql_fetch_array($resultHomeworkList)){
  $dueDateOfLastHW = $row['dueDateFirst'] ;
  
  $nameOfHW = $row['assignFullName'];
  $numberOfHW = $row['assignNumber'];
}
echo $dueDateOfLastHW.'<br>';
$nUnixTimestampForDueDate = strtotime($dueDateOfLastHW);
echo '<br>The due date for the last homework assignment:<br>';
echo $nUnixTimestampForDueDate.'<br>';
echo '<br>The current time: <br>';
echo time().'<br>';
echo '<br>';

//Next get e-mail addresses, and for each of them call the method below that returns whether or not they have done their homework yet.

$nUnixTimestampForDueDate_Plus_23_Hours = $nUnixTimestampForDueDate + 82800; //i.e. 23 hours past the beginning of the due date (11 p.m. of that day.)

if(($nUnixTimestampForDueDate_Plus_23_Hours - time()) < 43200 and ($nUnixTimestampForDueDate_Plus_23_Hours - time()) > 0 ){//So if less than 12 hours to due date and not after due date.
                                                        //Doing less than 12 hours because of 11pm/8am thing - a 9pm warning is still less                                                                                   //than 12 hours away.
	
	$resultIBCS1hw = mysql_query("select * from  ib_b_studentstable ", $linkHere);
	while($row = mysql_fetch_array($resultIBCS1hw)){
  		$email = $row['emailAddress'] ; 
		if(!haveDoneHW($email, $numberOfHW)){
			//mail($email, "IB CS Homework Notification - hw".$assignNumber, "Homework # ".$assignNumber.", ".$assignFullName." is now ready to be done.  <br><br>");
			//mail(to, subject, message)
			mail($email, "IB CS - Home Assignment Reminder", "Hi, \n\nThis is to remind you that you now have two hours left to complete home assignment # ".$numberOfHW.": ". $nameOfHW.". \n\n(Remember that this is an auto-generated e-mail, so don't Reply to it.  Address any questions or comments to me directly, using jrayworth@isp.cz.)\n\nMr Rayworth");
			//>>>>>>>>>>> change &email1 to be $email to make this functional.
			echo 'They have not done it.<br>';
		}else{
			echo 'They did it.<br>';
		}
	}
}else{
	echo 'The due date for the last homework is past.<br>';
}

function haveDoneHW($emailAddress, $hwNum){
	
	$linkHere = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", "root", returnPassword());

	$haveDoneIt = true;//Assume this so that no e-mails get sent by accident.
	$resultUsingEmailAddress = mysql_query("select * from ib_b_studentstable where emailAddress = '".$emailAddress."'", $linkHere);
	while($row = mysql_fetch_array($resultUsingEmailAddress)){
  		$userName = $row['userName'] ; 
		$commentFieldName = 'l'.$hwNum;
		$result2 = mysql_query("select * from ib_b_gradestable where userName = '".$userName."'", $linkHere);
		while($row = mysql_fetch_array($result2)){
			$comment = $row[$commentFieldName] ; 
		} 
		if($comment == 'no'){
			$haveDoneIt = false;
		}
	}
	
	return $haveDoneIt;
}


?>




























