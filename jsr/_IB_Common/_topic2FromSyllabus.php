<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Topic 2 - Computer Organization</title>

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
	
<h1>Topic 2—Computer organization (6 hours)</h1>
<p>JSR Note: ***This topic requires two testing session.***</p>
<h2>2.1 Computer organization (6 hours)<br />
</h2>
<p><strong>(As &quot;pre-reading&quot; prep for this topic do take a look at the &quot;<a href="../_Pro_IT/myLaptop/howComputersWorkHome.php" target="_blank">How Comptuers Work</a>&quot; pages of this website.)<br />
  <br />
  <br />
  Computer architecture</strong></p>
<p><a href="_topic2AssessmentStatements/2.1.1.php">2.1.1</a> Outline the architecture of the central processing unit (CPU) and the functions of the arithmetic logic unit (ALU) and the control unit (CU) and the registers within the CPU.</p>
<p><a href="_topic2AssessmentStatements/2.1.2.php">2.1.2</a> Describe primary memory.</p>
<p><a href="_topic2AssessmentStatements/2.1.3.php">2.1.3</a> Explain the use of cache memory.</p>
<p><a href="_topic2AssessmentStatements/2.1.4.php">2.1.4</a> Explain the machine instruction cycle.</p>
<p><strong><br />
Secondary memory</strong></p>
<p><a href="_topic2AssessmentStatements/2.1.5.php">2.1.5</a> Identify the need for persistent storage.</p>
<p><strong><br />
Operating systems and application systems</strong></p>
<p><a href="_topic2AssessmentStatements/2.1.6.php">2.1.6</a> Describe the main functions of an operating system.</p>
<p><a href="_topic2AssessmentStatements/2.1.7.php">2.1.7</a> Outline the use of a range of application software.</p>
<p><a href="_topic2AssessmentStatements/2.1.8.php">2.1.8</a> Identify common features of applications.</p>
<p><strong><br />
Binary representation</strong></p>
<p><a href="_topic2AssessmentStatements/2.1.9.php">2.1.9</a> Define the terms: bit, byte, binary, denary/decimal, hexadecimal.</p>
<p><a href="_topic2AssessmentStatements/2.1.10.php">2.1.10</a> Outline the way in which data is represented in the computer.</p>
<p><strong><br />
Simple logic gates</strong></p>
<p><a href="_topic2AssessmentStatements/2.1.11.php">2.1.11</a> Define the Boolean operators: AND, OR, NOT, NAND, NOR and XOR.</p>
<p><a href="_topic2AssessmentStatements/2.1.12.php">2.1.12</a> Construct truth tables using the above operators. <br />
  <span class="comment">(Order note: could/should do logic diagrams before truth table exercises.)</span></p>
<p><a href="_topic2AssessmentStatements/2.1.13.php">2.1.13</a> Construct a logic diagram using AND, OR, NOT, NAND, NOR and XOR gates.</p>
<p>&nbsp;</p>
<p><strong>Possible</strong> (though intense!) <strong>Review</strong> Videos with <strong>Crash Course Computer Science</strong></p>
<p>Or, as a pre-2.1.10 intro, do # 5 as a &quot;set-up&quot; (though no need to understand much) for the importance of # 3, which you can look at afterward.</p>
<p>So first: Crash Course CS # 5 - How Computers Calculate - the ALU:<a href="https://youtu.be/gI-qXk7XojA" target="_blank"><br />
</a></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/1I5ZMmrOfnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>&nbsp;</p>
<p>And now go back and look at # 3 - Boolean Logic &amp; Logic Gates:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gI-qXk7XojA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>&nbsp;</p>
<p>Then, more for review and more &quot;Wow factor&quot;, carry-Ann on with:</p>
<p>Registers and RAM: <a href="https://youtu.be/fpnE6UAfbtU" target="_blank">Crash Course Computer Science #6</a></p>
<p>and even</p>
<p>The Central Processing Unit (CPU): <a href="https://youtu.be/FZGugFqdr60" target="_blank">Crash Course Computer Science #7</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	</p></div>
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