<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>johnrayworth.info</title>
<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
</head>

<body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="/_topic5FromSyllabus.php">Topic 5</a>
	    <a href="last">Last</a>
	    <a href="next">Next</a></p>
</div>
	
<div class="backgroundDiv">
<h1>Exam Preparation</h1>
<p><a href="Exam-Preparation/Summary-of-HL-Approach.php">Summary of HL Approach</a></p>
<p><a href="Exam-Preparation/Past-Exams-Home.php">Past Exams</a></p>
<p><a href="Exam-Preparation/Exam-Taking-Suggestions.php">Exam/Test Taking Suggestions</a><br />
<a href="Exam-Preparation/Exam-taking-Strategies-2012.rtf">(Exam/Test Taking Suggestions rtf file for printing)</a></p>
<p><a href="Exam-Preparation/Case-Study-Questions-Annotated.php">Annotated Case Study Question Example</a></p>
<p><a href="Exam-Preparation/More-Case-Study-Question-Points.php">More Points on Case Study Questions</a></p>
<p><a href="Exam-Preparation/Hand-Writing.php">Handwriting Instruction &amp; Practice</a></p>
<p>&nbsp;</p>
</div>
	<p></p>	
</body>
</html>

<?php
//Lost of msql examples:

//To GET information from an SQL table:
$result2 = mysql_query("select * from tableName where field = '".$loggedInUser."'", $linkHere);
while($row = mysql_fetch_array($result2)){
  $section = $row['section'] ; 
}


//To UPDATE something:
$query1 ="update tableName set field = '$fullAssignName' where assignNumber = '$assignNumber'";
mysql_query($query1);


//To INSERT something:
$query3 = "INSERT INTO pro_it_homework VALUES('$loggedInUser','$homework', '$hwAndStudent', '', '', '', '', '', '', '', '')";
mysql_query($query3);



?>