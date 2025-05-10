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
		<a href="D.1.7.php">Last</a>
	    <a href="D.1.9.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.8</p>
<p>Construct related objects for a given problem.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>In examinations problems will require the students to construct definitions for no more than three objects <span class="comment">(JSR: I would say &quot;classes&quot;, not &quot;objects&quot;)</span> and to explain their relationships to each other and to any additional classes defined by the examiners.</p>
<p>LINK Connecting computational thinking and program design.</p>
<p>AIM 4 Applying thinking and algorithmic skills to resolve problems.</p>
	</div>
<p><br />
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
</p>
<p>JSR Notes:  <br />
  <br />
</p>
<p><strong>&quot;Construct related objects for a given problem</strong>&quot;</p>
<p>This is where you will be given a certain problem/context, and you will decide how best to use abstraction to deconstruct the problem into sub-problmes, i.e. classes, and determine various useful relationships between those classes. There are lots of examples of this process here in Option D, and there will be lots more as we move foward. For example, see the &quot;Bus&quot; example of the sample Paper 2 exam, and any other Paper 2 past papers.</p>
<p>And already, with what we have done, you can take a look back at the  example  on <a href="D.1.4.php">D.1.4</a> which has four classes defined. And  <a href="D.1.6.php">D.1.6</a> notes also has a couple of examples of objects/classes which have been chosen to address a certain larger problem.</p>
<p>&nbsp;</p>
<p><strong>Construction Steps</strong></p>
<p>So on a test/exam, based on a <strong><em>certain new situatio</em></strong>n you will be asked to come up with:<br />
  - 
the decomposition of the problem, i.e. <strong>division</strong> of the overall problem <strong>into classes</strong>, <br />
- 
that class structure's verticle heirarchy, if there are <strong>inheritance</strong> (i.e. &quot;is-a&quot;) relationships,<br />
-
and any other connections between the classes, including &quot;<strong>has a</strong>&quot; and &quot;<strong>uses</strong>&quot; <strong>relationships</strong>.</p>
<p><em><br />
  <br />
  </em><strong>Examples</strong><br />
  <em><br />
  Example Problem</em>: Management of a bank's ATM application (keeping it to three classes only)</p>
<ul>
  <li><strong>Client</strong> class: Requests both input and output from the ATM Machine</li>
  <li><strong>Machine</strong> class: Manages money by handling both input and output from user. So the Machine class <strong>uses</strong> objects of the Client class</li>
  <li><strong>Account</strong> class: Provides security by verifying users as they try to access the machine. The Client objects will &quot;have&quot; one or more Account objects.</li>
</ul>
<p>&nbsp;</p>
<p><em>Example Problem</em>: Management of a Soccer Team (being more realistic with more than three classes)</p>
<ul>
  <li><strong>TeamMember</strong> class: Class for all members of the organization, from backroom staff to players</li>
  <li><strong>NonPlayingStaff</strong> class: A sub-class of TeamMember, has CoachingStaff and Management below it on the heirarchy. So &quot;is-a&quot; TeamMember.</li>
  <li><strong>CoachingStaff</strong> class: A sub-class of NonPlayingStaff. So &quot;is-a&quot; NonPlayingStaff.</li>
  <li><strong>Management</strong> class: Also a sub-class of NonPlayingStaff. So &quot;is-a&quot; NonPlayingStaff.</li>
  <li><strong>Player</strong> class: A sub-class of TeamMember. So &quot;is-a&quot; TeamMember.</li>
  <li><strong>Goalie</strong> class: A sub-class of Player class. So &quot;is-a&quot; Player.</li>
  <li><strong>Stats</strong> class: &quot;Uses&quot; Player objects, and Goalie objects.</li>
  <li><strong>Lineup</strong> class: &quot;Has-an&quot; array of Players and Goalies</li>
</ul>
<p>&nbsp;</p>
<p><em>Example Problem</em>: Keeping track of High School student attendance</p>
<ul>
  <li></li>
  <li></li>
  <li></li>
</ul>
<p>&nbsp;</p>
<p><em>Example Problem</em>: Managing grades of students at a school</p>
<ul>
  <li></li>
  <li></li>
  <li></li>
</ul>
<p>&nbsp;</p>
<p>Or any other complex entity which could be defined by objects that make it up.</p>
<p>&nbsp;</p>
<p>* In fact, do note that  limiting the system to 3 classes makes the exercise trickier than it otherwise would be...</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it.png" width="109" height="60" alt=""/></p>
<p>&nbsp;</p>
<p></p>
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