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
		<a href="D.1.3.php">Last</a>
	    <a href="D.1.5.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.4</p>
<p>Interpret UML diagrams.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>LINK Connecting computational thinking and program design.<br />
	</p></div>
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
<p>The last assessment statement, D.1.3, was &quot;construct&quot; UML, whereas this is &quot;interpret&quot; UML. </p>
<p>So where with D.1.3, you are to be able to take code, and construct UML diagrams from it, with this, D.1.4, you are to be able to take UML diagrams, and make code from it.</p>
<h3><br />
  Multi-class Projects, and so Multi-class UML</h3>
<p>Ultimately both your construction of UML, and interpretation of UML will not be for just one class, but will be for multiple classes projects.</p>
<p>In the up-coming assessment statements you'll learn about taking a big problem and decomposing it into smaller &quot;sub-problems&quot;, each handled by one class. And then you'll learn about the relationships between those different OOP classes in a single project. But for now suffice it to say that usually an application will indeed be made of multiple classes, and those classes interact with and/or depend each other in specific ways. In UML, these relationships are shown with arrows and descriptions like &quot;has&quot;, &quot;uses&quot;, and &quot;is a&quot;.</p>
<p>So eventually - indeed soon! - by looking at multi-class UML (such as the one below), you will be able to interpret how to code each class individually, along with the coding which links the classes together.</p>
<p>&nbsp;</p>
<p align="center"><img src="Images/UML-Example-2.png" alt="uml example with inheritance" width="527" height="659" /></p>
<blockquote>
  <p>&nbsp;</p>
  <p>(As a teaser, the three relationships/dependencies shown above with arrows are:  </p>
  <p>The dotted lines with &quot;<strong>Uses</strong>&quot; indicate that the MainGUI class makes use of objects and/or methods of other classes; in this case, methods from SortAndSearch, and instances of Student.</p>
  <p>The line with the triangular arrow and &quot;<strong>Is a</strong>&quot; indicates a sub-class pointing to a super-class (an example of inheritance).</p>
  <p>The other major relationship, &quot;has a&quot;, is not shown here.)</p>
</blockquote>
<p>&nbsp;</p>
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