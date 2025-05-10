<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>


<?php
$currentFileNameForTitle = basename($_SERVER['REQUEST_URI'], ".php");
echo $currentFileNameForTitle;
?>

</title>

<meta name="description" content="" /><!-- PUT DESCRIPTION OF PAGE HERE -->

<meta name="keywords" content="" /><!-- PUT KEYWORDS HERE; though less supported -->

<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="/_topic5FromSyllabus.php">Topic 5</a>
	    <a href="last">Last</a>
	    <a href="next">Next</a></p>
</div>
	
<div class="backgroundDiv">
<h1>IB Documents for Teaching &amp; Exam Prep</h1>
<p><br />
<a href="IBO-Documents/IBCS-Brief-Guide.pdf">IBCS-Brief-Guide.pdf</a></p>
<p><a href="IBO-Documents/IBCS-Guide-2014.pdf">IBCS-Guide-2014.pdf</a></p>
<p>&nbsp;</p>
<p><a href="IBO-Documents/Pseudocode-and-Flowchart-for-Teaching.pdf">Pseudocode-and-Flowchart-for-Teaching.pdf</a> - The main thing is this includes sample flow-chart</p>
<p><a href="IBO-Documents/Pseudocode-for-Examinations.pdf">Pseudocode-for-Examinations.pdf</a> - For Paper 1 questions</p>
<p>&nbsp;</p>
<p><a href="IBO-Documents/JETS-Document.pdf">JETS-Document.pdf</a> - For the OOP (Java) Option (note, RandomAccessFile not supposed to be included)</p>
<p><a href="IBO-Documents/IBCS-Guide-2012-but-Jets-Examples.pdf">Old-Guide-but-Jets-Examples.pdf</a></p>
<p>&nbsp;</p>
<p><a href="IBO-Documents/Sample-Papers-2014.pdf">Sample Papers (All) 2014</a></p>
<p><a href="IBO-Documents/Paper-2-With-Answers.pdf">Paper-2-With-Answers.pdf</a> - The sample paper, but with answers in the same pdf document.</p>
</div>
	<p></p>	
</body>
</html>

<?php
ini_set('session.gc_maxlifetime', '7200');
ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();
$user = $_SESSION['validUser7'];
$linkHere = mysql_connect(returnhost(), returnUser(), returnPassword());

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

/* $query3 = "INSERT INTO itfClassicHomework VALUES('$loggedInUser','$homework', '$hwAndStudent', '', '', '', '', '', '', '', '')";
mysql_query($query3); */



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
<style type="text/css">
<!--
pre {
	color: #000000;
	background-color: #ffffff;
	font-family: Monospaced;
	font-size: 14px;
}
table {color: #000000; background-color: #e9e8e2; font-family: Monospaced}
.line-number {background-color: #e9e8e2}
.character {color: #ce7b00}
.keyword-directive {color: #0000e6}
.comment {color: #969696}
-->
</style>