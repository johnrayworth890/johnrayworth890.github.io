<?php
ini_set('session.gc_maxlifetime', '7200');
session_start();

require_once('phpHelperScripts/jsrCourses_fns.php'); 
require_once('phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();

$linkHere = mysql_connect(returnhost(), returnUser(), returnPassword());


/*for($i = 1; $i< 40; $i++){	

	$c = 'c'.$i;
	$cAfter = 'hw'.$i;
	$myQuery2 = "ALTER TABLE pro_it_grades7 ADD $c TEXT NOT NULL AFTER $cAfter;";
	echo($myQuery2.'<br>');
	mysql_query($myQuery2);

}*/



//Example 1:
//$result1 = mysql_query("select * from allstudents7 where userName = `".$loggedInUser."`", $linkHere); 


//*******************CAREFUL TO COMMENT OUT AFTERWARD SO DON`T OVERWRITE TABLES*****************

//*******************CAREFUL TO COMMENT OUT AFTERWARD SO DON`T OVERWRITE TABLES*****************

//*******************CAREFUL TO COMMENT OUT AFTERWARD SO DON`T OVERWRITE TABLES*****************

//*******************CAREFUL TO COMMENT OUT AFTERWARD SO DON`T OVERWRITE TABLES*****************

//----------->>Keep everything commented.


//                careful not to forget the semi-colon within the sql statement, so the lines end ;";   
//                careful not to forget the semi-colon within the sql statement   


//AS A FIRST CHOICE, USE THE TEMPLATES BELOW, NOT THE SQL CODE FROM DOING IT IN PHPMYADMIN FIRST.

//And note that the problem with the SQL copy and paste is the single quotes which are NOT NEEDED.


//Add Field - complex example

/*$iHelper = 159;
for($i = 160; $i< 170; $i++){
	
	$myQuery = "
	
	ALTER TABLE `ib_b_gradestable` ADD `hw".$i."` FLOAT NOT NULL AFTER `l".$iHelper."` ,
ADD `c".$i."` TEXT NOT NULL AFTER `hw".$i."` ,
ADD `l".$i."` VARCHAR( 40 ) NOT NULL AFTER `c".$i."`;";
	
//INSERT INTO `jsr_database`.`ib_b_gradestable` (`assignNumber`, `fullAssignName`, `kind`, `score`) VALUES ('hw".$i."', '', '', '');";
	echo($myQuery.'<br>');
	mysql_query($myQuery);
	$iHelper++;

}/*

//ALTER TABLE `ib_b_gradestable` ADD `hw71` FLOAT NOT NULL AFTER `l70` ,
//ADD `c71` TEXT NOT NULL AFTER `hw71` ,
//ADD `l71` VARCHAR( 40 ) NOT NULL AFTER `c71` 

/*


for($i = 102; $i< 170; $i++){	

	$c = 'c'.$i;
	$cAfter = 'hw'.$i;
	$myQuery2 = "ALTER TABLE ib_a_grades ADD $c TEXT NOT NULL AFTER $cAfter;";
	echo($myQuery2.'<br>');
	mysql_query($myQuery2);

}

for($i = 102; $i< 170; $i++){
	
	$l = 'l'.$i;
	$lAfter = 'c'.$i;
	$myQuery3 = "ALTER TABLE ib_a_grades ADD $l VARCHAR( 40 ) NOT NULL AFTER $lAfter;";
	echo($myQuery3.'<br>');
	mysql_query($myQuery3);
}*/

//Another update.
for($i = 101; $i< 146; $i++){
	$hw = 'hw'.$i;
	$query1 ="update ib_a_assignmentnames set fullAssignName = '' where assignNumber = $hw";
	mysql_query($query1); 
	$query1 ="update ib_a_assignmentnames set kind = '' where assignNumber = $hw";
	mysql_query($query2);
	$query1 ="update ib_a_assignmentnames set score = '' where assignNumber = $hw";
	mysql_query($query3);
	echo 'ljkljlj';
	
}


echo 'sdsdf';



/*  
 $ab =  "INSERT INTO `jsr_database`.`cblstudentwebsites` (`websiteName`, `studentName`, `userName`) VALUES ('thatsiteoverthere', 'Ace', 'Aessa');";
mysql_query($ab);
 
 */


//Lost of msql examples:

		//To GET information from an SQL table:

/* $result2 = mysql_query("select * from tableName where field = '".$loggedInUser."'", $linkHere);
while($row = mysql_fetch_array($result2)){
  $section = $row['section'] ; 
} */


		//To UPDATE something:  Example 1

/* $query1 ="update tableName set fieldName = '$fullAssignName' where assignNumber = '$assignNumber'";
mysql_query($query1); */

		//To UPDATE something:  Example 2

/* $query1 ="update tableName set $fileNameVariable = 'hellow world' where assignNumber = '$assignNumber'";
mysql_query($query1); */


		//To INSERT something:

/*for($i = 1; $i < 165; $i++){
	$hw = 'hw'.$i;
	$query3 = "INSERT INTO ib_b_model_answers VALUES ('$hw', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
	mysql_query($query3); 
}

echo ' done';*/


/*
for($i = 1; $i < 13; $i++){
	$fx = 'g'.$i;
	$query = "ALTER TABLE pro_it_rubrics ADD $fx DOUBLE NOT NULL DEFAULT '-1'";
	mysql_query($query);
} 

$qf = "ALTER TABLE pro_it_rubrics ADD gGrade DOUBLE NOT NULL DEFAULT '-1'";
mysql_query($qf);
$cf = "ALTER TABLE pro_it_rubrics ADD gComment TEXT NOT NULL"; 
mysql_query($cf);
*/




echo 'done';
		//Looping Through all of some query
/* if($section == 'Block_IB_a'){
	$studentsRestult = mysql_query("select * from ibYear1StudentsTable7 where section = 'Block_IB_a' and assignType = '".$letterForKindOfGrade."' order by userName", $linkHere);	
	//but note that order by userName will only work if there is a field called userName
}
while($row = mysql_fetch_array($studentsRestult)){
	$studentX = $row['userName'];
	//and then do stuff
}
 */




?>