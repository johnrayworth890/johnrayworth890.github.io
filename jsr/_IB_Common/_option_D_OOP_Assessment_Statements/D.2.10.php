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
		<a href="D.2.9.php">Last</a>
	    <a href="D.3.1.php">Next</a></p>
</div>	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.10</p>
<p>Explain the advantages of modularity in program development.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Advantages include easier debugging and testing, speedier completion, etc.<br />
	</div>
</p>
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
<p><strong><br />
  Classes and Methods</strong></p>
<p>Modularity means splitting a larger problem or work into smaller pieces or modules. So in the case of programming we can talk about this on two levels. Firstly, at the more macro level of a project, we can divide the work/problem into different classes. Though also, at a the class level itself, we can divide the tasks up into method modules.</p>
<p>Regarding modularity in the context of OOP, we are more concerned  with the modularity of breaking a large problem into different class modules.</p>
<p>Do remember  that upon division of a larger problem into classes, it is the OOP principle of encapsulation that, when properly followed, can lead to increased stability of the program. Refer to <a href="D.2.1.php">D.2.1</a> and <a href="D.2.4.php">D.2.4</a> for the distinct advantages offered by encapsulation.<br />
  </p>
<p>&nbsp;</p>
<h3>Advantages of  Modularity</h3>
<p>(This is a reiteration, with some more details added, of what was mentioned in <a href="D.1.5.php">D.1.5</a>, where decomposition/modularity was introduced.)</p>
<blockquote>
  <p><em><br />
    Modularity allows, generally:
    <br />
  </em></p>
</blockquote>
<p>A. <strong>A Divide and Conquer</strong> approach (which allows abstraction)</p>
<p>B. <strong>Abstraction</strong>, i.e. focusing in on individual problems, ignoring other details</p>
<blockquote>
  <p><em>Leading to, specifically:</em></p>
</blockquote>
<p><strong><br />
  1. Faster development</strong><br/>
  This is mainly because <strong>work can be divided</strong> between different programming teams. Each team can work on different modules/classes concurrently.</p>
<p>And furthermore, classes can be <strong>shared/re-used</strong> across projects. So for instance, a Student class could be used in a Grades project, and also in an Attendance project, etc.<br />
  <br />
</p>
<p><strong>2. Easier debugging</strong><br/>
  <strong>De-bugging takes less time</strong>, since it's easier to track down problems in <strong>smaller</strong>, <strong>less complex</strong> modules/classes.</p>
<p>By having data-focused template classes, other classes which make use of that data can be easily <strong>tested</strong> by simply providing them <strong>with dummy data</strong> values even before those &ldquo;real&rdquo; data classes are themselves available to be used for testing.</p>
<p>And when there are <strong>errors</strong>, they can generally be <strong>isolated to one class</strong>, so that means there is less code to look through to find the problem. This concept, in fact, can be extended down to the modularity of methods. When trying to isolate an error you can comment out a particular method to see if it's the one causing the problem.</p>
<p>(Consider the alternative where there is one big program with no methods, rather one big long chunk of code. If it ran with an error, you would have no idea where to start looking for the error.)</p>
<p><br />
</p>
<p><strong>3. Easier updating in the future</strong>, i.e. Ease of Maintenance<br/>
  For any one particular change, only one class needs to be modified. So the implications of those changes on other dependent classes will be minimal and clear. In fact, no changes at all may be required by dependent classes if the public interface of the edited class does not change (even though the hidden &quot;inner workings&quot; have changed.)</p>
<p><strong><br />
  4. Re-usability</strong><br/>
  Modules/classes can be stored in libraries and reused for different programs. This in turn further speeds up development. (See also the Faster Development section above.)</p>
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