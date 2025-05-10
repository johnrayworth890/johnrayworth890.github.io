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
		<a href="D.1.1.php">Last</a>
	    <a href="D.1.2.php">Next</a></p>
</div>
	
	
	<div class="backgroundDiv">

<h1>D—Object-oriented programming</h1>
<h2>D.1 Objects as a programming concept (6 hours)</h2>
<p><strong>The paradigm of object-oriented programming should be introduced through discussion and example.</strong></p>
<p><span class="green"><strong><br />
  </strong></span><strong>OOP</strong> (<strong>Object Oriented Programming</strong>) is a programming design approach. It differs from the <strong>procedural programming </strong>approach which preceded it<strong> </strong>(with programming languages such as C and Pascal). With <strong>OOP</strong>, code is grouped as self sustainable &quot;<strong>objects</strong>&quot; made from specifically designed template classes. With this approach, there are gains in both reusability and reliability.

<p><br />
<div class="roundedCornerDiv">
D.1.1</p>
<p>Outline the general nature of an object.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>An object as an abstract entity and its components—data and actions.</p>
<p>Familiar examples from different domains might be people, cars, fractions, dates and music tracks.<br />
	
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
<h3><strong>General Concept of Objects</strong></h3>
<p>So, yes, from the teaching note, an object, in general, is indeed a particular abstract entity of a certain type/class, and it can be described in terms of &quot;data&quot; which describes characteristics of it, and &quot;actions&quot; which are things it can perform. Put another way, real-world objects, all have, at any given point in time, a <strong>state</strong> (how they are), and a <strong>set of possible behaviors</strong> (things they are capable of doing). </p>
<p>Identifying the state and potential behavior of real-world objects is a great way to begin thinking in terms of object-oriented programming. For example, particular instances of dogs have particular states at any given point in time (name, color, breed, hungry or not) and can exhibit, at any given point in time certain behaviors (barking, fetching, wagging tail). As another example, every bicycle also has a current state (current gear, current pedal cadence, current speed) and set of behaviors availabale to it (the ability to change the gear, the ability to change the pedal cadence, the ability to apply the brakes). <span class="green"><br />
  <br />
</span></p>
<h3><strong>OOP Concept of Objects</strong></h3>
<p>Software objects are conceptually similar to real-world objects: they too consist of state and related behaviors. In OOP programming, we will be able to say that a &quot;class&quot; of objects is indeed defined by it's characteristics (its &quot;data&quot;/&quot;attributes&quot;) and the actions that exist to act upon those attributes (its &quot;methods&quot;/&quot;procedures&quot;).</p>
<p>An OOP object stores its state in <strong>fields</strong> (private variable <strong>attributes</strong> in Java), and it presents its behavior through <strong>methods</strong> (public - usually - methods, in Java). Methods operate on an object's internal state and serve as the primary mechanism for object-to-object communication. Hiding internal state (via private attribues) and requiring all interaction to be performed through an object's public methods is known as data encapsulation - a fundamental principle of object-oriented programming.</p>
<p>&nbsp;</p>
<p><strong>Here are some more real-world examples.</strong></p>
<p>Every &quot;instance&quot; of a Person has the following attributes, which will be of a particular state (size, weight etc.):</p>
<blockquote>
  <p>- arms<br />
    - legs<br />
    - brain<br />
    - etc</p>
</blockquote>
<p>and with/to these attribures a Person can perform the following behaviours:</p>
<blockquote>
  <p>+ wave<br />
    + run<br />
    + playBasketball<br />
    + think</p>
</blockquote>
<p>&nbsp;</p>
<p>Every &quot;instance&quot; of a MusicTrack has the following attributes, which will be of a particular state (number of seconds, name etc.):</p>
<blockquote>
  <p>- a length<br />
    - a singer/group<br />
    - a title<br />
    - digital or analogue recording</p>
</blockquote>
<p>and with/to these attribures a MusicTrack can perform the following behaviours:</p>
<blockquote>
  <p>+ output the length of the track<br />
    + be played <br />
    + display the title<br />
  </p>
</blockquote>
<p>&nbsp;</p>
</div>
	<p></p>	
</body>

</div>
	<p></p>	
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