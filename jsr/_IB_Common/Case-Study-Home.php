<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Case Study Home</title>

<meta name="description" content="" /><!-- PUT DESCRIPTION OF PAGE HERE -->

<meta name="keywords" content="" /><!-- PUT KEYWORDS HERE; though less supported -->

<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p><div class="backgroundDiv">
<h1>Case Study</h1>
<p><strong>*** Firstly, do arrange to do a field trip every case study! ***</strong></p>
<p><a href="Case-Study/Case-Study-FAQ-from-IB.php">Case Study FAQ from IB</a></p>
<p><a href="Case-Study/Case-Study-Rayworth-Advice.php">Case Study Rayworth Advice &amp; Suggested Approach</a></p>
<p>&nbsp;</p>
<h3>Present Case Study - 2021-22</h3>
<p>Case Study 2021-22 - <a href="Case-Study/HL 2022 Case Study - Genetic Algorithms.pdf">Genetic Algorithms</a>  (plus the main cs2021.php - case sensitive - page)</p>
<p>New video: <a href="https://youtu.be/Sf3zGM5xpPM" target="_blank">Case Study Part 1 - General</a></p>
<p>New video: <a href="https://youtu.be/1pF-fguJovo" target="_blank">Case Study Part 2 - Genetic Algorithms</a></p>
<p>&nbsp;</p>
<h3>Past Case Studies</h3>
<p>Case Study 2019-20 - <a href="Case-Study/Past-Case-Studies/Case-Study-2019-20.pdf">Blockchain</a></p>
<p>Case Study 2018-19 - <a href="Case-Study/Past-Case-Studies/Case-Study-2018-19.pdf">Computer Aided Dispatch</a> + <a href="Case-Study/CS_HL_paper_3_2019.pdf">Paper 3 Questions</a>******** &lt;&lt;--- Both case study and exam questions</p>
<p>Case Study 2017-18 - <a href="Case-Study/Past-Case-Studies/Case-Study-2017-18.pdf">Autonomous Cars </a></p>
<p>Case Study 2015-16 - <a href="Case-Study/Past-Case-Studies/Case-Study-2015-16.pdf">CGI</a> + <a href="Case-Study/Computer_science_paper_3__HL Exam Nov 2016.pdf">Paper 3 Questions</a> ******** &lt;&lt;--- Both case study and exam questions</p>
<p>Case Study 2014 - <a href="Case-Study/Case-Study-Guide-2014.php">Network Security</a><br />
</p>
<p>&nbsp;</p>
	





<p>&nbsp;</p>
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