<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Topic 7 - Control</title>

<meta name="description" content="" /><!-- PUT DESCRIPTION OF PAGE HERE -->

<meta name="keywords" content="" /><!-- PUT KEYWORDS HERE; though less supported -->

<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
<link href="../cssStyleSheets/forSideBarEtc.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../_jwplayer/jwplayer.js"></script>
</head><body>
	<p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
	<div class="sidenav">
	  <p><a href="../../index.html">Home</a>
</div>
	<div class="backgroundDiv">
	
<h1>Topic 7—Control (14 hours)</h1>
<p>JSR Note: ***This topic requires two testing session.***</p>
<h2>7.1 Control (14 hours)</h2>
<p><strong><br />
Centralized control systems</strong></p>
<p class="comment">(May not be a bad idea to at least just glance at 7.1.4 before heading into the rest of Topic 7.)</p>
<p><a href="_topic7AssessmentStatements/7.1.1.php">7.1.1</a> Discuss a range of control systems.</p>
<p><a href="_topic7AssessmentStatements/7.1.2.php">7.1.2</a> Outline the uses of microprocessors and sensor input in control systems.</p>
<p><a href="_topic7AssessmentStatements/7.1.3.php">7.1.3</a> Evaluate different input devices for the collection of data in specified situations.</p>
<p><a href="_topic7AssessmentStatements/7.1.4.php">7.1.4</a> Explain the relationship between a sensor, the processor and an output transducer.</p>
<p><a href="_topic7AssessmentStatements/7.1.5.php">7.1.5</a> Describe the role of feedback in a control system.</p>
<p><a href="_topic7AssessmentStatements/7.1.6.php">7.1.6</a> Discuss the social impacts and ethical considerations associated with the use of embedded systems.</p>
<p><strong><br />
Distributed systems</strong></p>
<p><a href="_topic7AssessmentStatements/7.1.7.php">7.1.7</a> Compare a centrally controlled system with a distributed system.</p>
<p><a href="_topic7AssessmentStatements/7.1.8.php">7.1.8</a> Outline the role of autonomous agents acting within a larger system.</p>
<br />
</a></p>
<h2>&nbsp;</h2>
	</div>
</body>
</html>

<?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();
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

/* $query3 = "INSERT INTO pro_it_homework VALUES('$loggedInUser','$homework', '$hwAndStudent', '', '', '', '', '', '', '', '')";
mysql_query($query3); */



		//Looping Through all of some query
/* if($section == 'Block_IB_a'){
	$studentsRestult = mysql_query("select * from ib_a_students where section = 'Block_IB_a' and assignType = '".$letterForKindOfGrade."' order by userName", $linkHere);	
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

@charset "UTF-8";
a {
	color: #0000CC;
	text-decoration: none;
}
.linksJSR {
	color: #333333;
}

-->
</style>