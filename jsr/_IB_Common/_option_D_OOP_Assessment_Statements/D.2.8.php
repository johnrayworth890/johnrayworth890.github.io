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
		<a href="D.2.7.php">Last</a>
	    <a href="D.2.9.php">Next</a></p>
</div>	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.8</p>
<p>Describe the disadvantages of OOP.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, increased complexity for small problems; unsuited to particular classes of problem.</p>
<p>AIM 9 Develop an appreciation of the limitations of OOP.</p>
<br />
	</div>
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

?><p>JSR Notes:</p>
<p>This is a curious assessment statement to note, since in a way it's counter  to the whole purpose of the OOP Option. Never-the-less:</p>
<p><strong>- When Not Working With Objects</strong></p>
<p>Object-oriented programming suits situations where you are making instances of a certain class of object. So whenever you are programming and you come across a time where you are using data, and then using a slightly different set of that data again, OOP is well suited. But if you are doing something which <strong>does not work with &quot;sets&quot; of data</strong>, then there is no need for objects. Though do note that most of what we do with technology in a practical way takes advantage of a computer's ability to work with large  sets of data, so OOP usually does makes sense.</p>
<p><strong><br />
  - Too Much Bother for Simple Situations</strong></p>
<p>The other case, as mentioned, is when it's just too much bother. There can be two reasons for this. It could still be an object oriented situation, but  you are using <strong>only a few instances of something</strong>, so maybe you don't want a whole other class dedicated to those few items.</p>
<p>And also if the <strong>program itself is very short/&quot;simple&quot;</strong> - but it's still useful for a computer to do in instead of a human - then the bother of having separated classes may not be worth it.</p>
<p>&nbsp;</p>
<p><strong>- Projects tend to be Bigger, and so are Slower</strong></p>
<p>There are simply more classes, and more interactions between object of those classes. And so, particularly on limited hardware, an OOP program will tend to run slower than its non-OOP equivalent.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>(Of course, each one of these disadvantages suggests a corollary advantage for OOP, namely when it's not a simple situation you are programming for, and when the problem is big enough that it can most certainly be usefully decomposed and modularized. And further, with an OOP approach, even if initially simple or small, the program is ready for growth and extensibility. But, that's not the point of this particular assessment statement...)</p>
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