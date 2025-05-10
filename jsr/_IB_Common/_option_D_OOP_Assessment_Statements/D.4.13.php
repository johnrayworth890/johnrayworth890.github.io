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
<script type="text/javascript" src="../../_jwplayer/jwplayer.js"></script>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_Extension_From_Syllabus.php">OOP HL</a>
		<a href="D.4.12.php">Last</a>
	    <a href="D.4.14.php">Next</a></p>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.13</p>
<p>Explain the advantages of using library collections.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand that libraries provide convenient and reliable implementations of common programming tasks.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>------</p>
<p>Q1. Discuss how the use of library classes (i.e. Arraylist) simplifies the construction of the methods in parts (a) and (b) (of the exam).</p>

<p>----</p>
<p><span class="line-number"><br />
  <br />
  sdfsdfsf<br />
  </span><br />
  
  <?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
$loggedInUser = $_SESSION['validUser7'];
if($loggedInUser == 'examPrepUser'){
	echo '<p class="line-number"><u>Marks Scheme</u><br><br>
	';
	
}

?>
</p>
<p>JSR Notes:</p>
<p><br />
This is partially a repeat of <a href="D.2.7.php">D.2.7</a>, in terms of the advantages of <em>all</em> libraries of classes and objects that are at our disposal. But here, what are the advantages of using any of the six Java Collections libraries, particularly for IB CS, ArrayList and LinkedList?</p>
<p>As with most shared library resources, it boils down to three or four things:</p>
<ol>
  <li>You don't have to implement these ADTs yourself, so it is <strong>convenient</strong>. There is no need to &quot;re-invent the wheel&quot;.</li>
  <li>Via <strong>abstraction</strong>, you do not have to worrry about the implementation of the classes; you just know the methods available to you, what parameters they require, what they return, and that by satisfying the pre-conditions, the post-conditions will be met. </li>
  <li>These classes are tried, true and tested, and so they are <strong>reliable</strong>. </li>
  <li>And it is  useful that different prorammers across teams, and indeed around the world, are using the same standard method names working in the same expected and understood ways, i.e. it's the <strong>consistency</strong> they bring to coding common programming tasks.</li>
</ol>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Explain the advantages of using library collections.</p>
<p>If the question were related primarily to an ArrayList:</p>
<p>With ArrayList, via the principle of abstraction, you do not have to worry about the implementation details of the class (for example, you do not have to declare size of the array, because the arraylist automatically resizes itself behind the scenes). This makes things convenient, reliable, and consistent with other programmers.</p>
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