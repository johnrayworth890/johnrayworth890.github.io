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
		<a href="../_recursion_Topic5andOOPFromSyllabus.php">Recursion</a> 
	    <a href="../_topic5AssessmentStatements/5.1.1.php">Last</a> 
	    <a href="../_topic5AssessmentStatements/5.1.2.php">Next</a></p>
	<iframe src="https://duckduckgo.com/search.html?site=johnrayworth.info&prefill=Search johnrayworth.info" style="overflow:hidden;margin:0;padding:0;width:100px;height:40px;" frameborder="0"></iframe>
</div>
	<div class="backgroundDiv">


<h1>HL Extension</h1>
<h2>D.4 Advanced program development (15 hours)</h2>
<p><br />
	<div class="roundedCornerDiv">
D.4.1</p>
<p>Define the term recursion.</p>
	</div>
<p>&nbsp;</p>
<p><em>Teaching Note:<br />
</em></p>
<p>&nbsp;</p>
<span class="line-number">Sample Question: <br />
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
<p><strong>From Sample Paper 1 - 2014:</strong></p>
<p><img src="Images/Sample-Q-D.4.1.png" alt="" width="825" height="55" /></p>
<p><img src="Images/Sample-A-D.4.1.png" alt="" width="729" height="90" /></p>
<p>**** But do note that this is not the best answer...</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>JSR Notes:</p>
<p><strong><br />
Recursion is when a method calls <em>another instance of </em>itself. </strong></p>
<p>It is thus a form of iteration, i.e. it is a means of repeating code. </p>
<p>&nbsp;</p>
<p>&quot;Iterative&quot; vs. &quot;Recursive&quot; </p>
<p><strong>Iteration</strong> is repetition. Iterative situations are those in which we repeat with the conventional coding techniques of <strong>looping</strong>, such as <strong>for loops</strong> and <strong>while loops</strong>. Those loops are said to &quot;iterate&quot;, i.e. to repeat, or, indeed to loop.</p>
<p>Recursion achieves iteration/repetition through <strong>recursive calls</strong> to other instances of itself.</p>
<p><strong>So recursion is just another way of iterating/looping</strong>. But it's a very cool, and elegant way of looping, which, though, it doesn't make sense to use often, sometimes it's perfect.</p>
<p>&nbsp;</p>
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