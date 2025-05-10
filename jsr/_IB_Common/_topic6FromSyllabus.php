<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Topic 6 - Resource Management</title>

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
	
<p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
<h1>Topic 6—Resource management (8 hours)</h1>
<p>JSR Note: ***This topic requires two testing session.***</p>
<h2>6.1 Resource management (8 hours)<br />
</h2>
<br />

<p><strong>System resources</strong></p>
<p><a href="_topic6AssessmentStatements/6.1.0.php">&quot;6.1.0&quot;</a> Summary of 6.1.1 - 6.1.4 - <span class="darkGray">a Mr Rayworth extra</span></p>
<p><a href="_topic6AssessmentStatements/6.1.1.php">6.1.1</a> Identify the <strong>resources</strong> that need to be managed within a computer system. *</p>
<p><a href="_topic6AssessmentStatements/6.1.2.php">6.1.2</a> Evaluate the resources available in a variety of <strong>computer systems</strong>. * (Also done on the 6.1.4 chart.)</p>
<p><a href="_topic6AssessmentStatements/6.1.3.php">6.1.3</a> Identify the <strong>limitations</strong> of a range of resources in a specified computer system. **** (Also done on the 6.1.4 chart.)</p>
<p><a href="_topic6AssessmentStatements/6.1.4.php">6.1.4</a> Describe the possible <strong>problems</strong> resulting from the limitations in the resources in a computer system. **** </p>
<p><strong><br />
Role of the operating system</strong></p>
<p><a href="_topic6AssessmentStatements/6.1.5.php">6.1.5</a> Explain the role of the operating system in terms of managing memory, peripherals and hardware interfaces. *****</p>
<p><a href="_topic6AssessmentStatements/6.1.6.php">6.1.6</a> ?? (Not in syllabus.)</p>
<p><a href="_topic6AssessmentStatements/6.1.7.php">6.1.7</a> Outline OS resource management techniques: scheduling, policies, multitasking, virtual memory, paging, interrupt, polling.*****</p>
<p><a href="_topic6AssessmentStatements/6.1.8.php">6.1.8</a> Discuss the advantages of producing a dedicated operating system for a device. **</p>
<p><a href="_topic6AssessmentStatements/6.1.9.php">6.1.9</a> Outline how an operating system hides the complexity of the hardware from users and applications. **</p>
  <br />
</a></p>
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