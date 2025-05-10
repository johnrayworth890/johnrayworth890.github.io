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

<link href="../../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
<link href="../../cssStyleSheets/forSideBarEtc.css" rel="stylesheet" type="text/css" />
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
	
	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_From_Syllabus.php">OOP Option</a>
		<a href="D.3.4.php">Last</a>
	    <a href="D.3.6.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.5</p>
<p>Construct code to implement assessment statements D.3.1–D.3.4.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students may be asked to trace, explain or construct algorithms using the concepts associated with the terms.<br />
</p>
	</div>
<p>&nbsp;</p>
<p class="line-number"><br />











JSR Notes:

<p>The best thing here is to eventually look at lots of past papers, and this can be done mostly prior to mock exams.</p>
<p>The first time through, &quot;set-piece&quot; examples in IntelliJ etc. are enough.</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
<p>&nbsp;</p>
</div>
	<p></p>	
</body>
</html>

<?php
ini_set('session.gc_maxlifetime', '7200');
ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../../phpHelperScripts/allThreeScriptsHelper.php'); 
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