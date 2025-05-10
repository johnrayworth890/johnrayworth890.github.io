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
		<a href="D.1.4.php">Last</a>
	    <a href="D.1.6.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.5</p>
<p>Describe the process of decomposition into several related objects.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>A simple example with 3–5 objects is suggested. Examples related to D.1.1 could be employers, traffic simulation models, calculators, calendars, media collections.</p>
<p>LINK Thinking abstractly.</p>
<p>AIM 4 Applying thinking skills critically to decompose scenarios.</p>
<br />
	</div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>Describe three advantages of modularity in program development. [for 6 marks!]</p>

<p>----</p>
<p><span class="line-number"><br />
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
<p><em><strong>Abstraction leads to Decomposition</strong>
</em></p>
<p>The concept of abstration will come into focus increasingly as we move into Object Oriented Programming. Abstration is basically looking at one layer of detail at a time, ignoring the othe details. A fundamental task of abstraction in  object-oriented design is to identify objects in the overall problem domain and to classify them into types/classes. This process is the process of decomposition.</p>
<h3><br />
  Decomposition</h3>
<p><strong>General Definition of Decomposition</strong>
</p>
<p>Decomposition, generally, is the process of taking a system or problem which is fairly large and/or complicated, and splitting it up into smaller, less complicated pieces. In doing so, each individual part of the system or problem is easier to handle. Via this kind of a &quot;<strong>divide and conquor</strong>&quot; approach, in which we handle all of the smaller pices/problems one at a time, the entire problem is solved.<br />
  <br />
</p>
<p><strong>Decomposition in Computer Science</strong></p>
<p>Given that computer science is, at its most fundamental and general, the study and managment of complex systems, the concept and application of decomposition cannot be understated.</p>
<p>In one key computer science example of decomposition we speak of <em>algorithmic decomposition</em>; it is the  process of solving a complex problem in a step-by-step way. And  within a computer program itself, the process of grouping  blocks of specialized code into functions/methods is another prime example of decomposition.<br />
  <br />
</p>
<p><strong>Decompostion in OOP</strong></p>
<p>And so in object-oriented porgramming we apply this concept of decomposition on the level of classes/objects. We break a large system down into progressively smaller classes or objects that are responsible for some part of the problem domain.</p>
<p>&nbsp;</p>
<h3><strong>Advantages of Decomposition / Modularity</strong></h3>
<p>(Advantages of decomposition goes  a bit beyond this assessment statement, but it is a nice preview to <a href="D.2.10.php">D.2.10</a>.)</p>
<blockquote>
  <p><em>General advantages:</em></p>
</blockquote>
<p>A. <strong>Divide and Conquor</strong> approach (which allows abstraction)</p>
<p>B. <strong>Abstraction</strong>, i.e. focusing in on individual problems, ignoring other details</p>
<blockquote>
  <p><em>Leading to, specifically:</em></p>
</blockquote>
<p><strong>1. Faster development</strong><br/>
  This is mainly because different programming teams can work on different modules/classes. </p>
<p><strong>2. Easier debugging</strong><br/>
  The idea here is that smaller modules/classes are bound to have fewer mistakes and problems than one big complex program.</p>
<p><strong>3. Easier updating in the future</strong><br/>
  Individual classes can be adjusted. And because of this, the implications of those changes via interactions with the rest of the program will be minimal and clear.</p>
<p><strong>4. Re-usability</strong><br/>
  Modules/classes can be stored in libraries and reused for different programs. This in turn further speeds up development.</p>
<p class="green">&nbsp;</p>
<h3>Examples from the Teaching Note:</h3>
<p>So for each of these large/complex systems, how would you decompose them, i.e. how would you break them down into simpler pieces/parts.<br />
  <br />
</p>
<p><strong>Employers Example</strong> <strong>- A School</strong></p>
<p>Using a school as an example, what classes of objects would make most sense for the management of  the school's employees? </p>
<ul>
  <li>Administrator</li>
  <li>Teacher</li>
  <li>TeacherAssistant</li>
  <li>MaintenanceWorker</li>
  <li>Guard</li>
</ul>
<p>Each class would have its own attributes, and associated actions. <br />
  <br />
  So, for example, an attribute of  &quot;entertainmentExpenses&quot; for Administrators would be unique to them, along with associated action of &quot;deductFromEntertainmentExpenses&quot;. <br />
  <br />
  And as another example, a &quot;teachingExperience&quot; attribute might be common to the Administrator, Teacher, and TeacherAssistant classes, along with an associated action, such as &quot;determineInternaitionalExperience&quot;.</p>
<p>(But note - if you are already familiar with OOP - that all would share attributes such as &quot;name&quot;, and &quot;address&quot;, and so likely here we would have a super class called &quot;Employee&quot;, and all of the above would inherit from it.)</p>
<p>&nbsp;</p>
<p><strong>Traffic Simulation Model - Example</strong> Classes/Objects</p>
<ul>
  <li>Metro</li>
  <li>Light Rail pod</li>
  <li>Bus</li>
  <li>Route</li>
  <li>Driver</li>
  <li>Passenger</li>
</ul>
<p>&nbsp;</p>
<p><strong>Calculator Example</strong> Classes/Objects</p>
<ul>
  <li>Mathematic Operation
    <ul>
      <li>Arithmetic Operation</li>
      <li>Scientific Operation</li>
      </ul>
  </li>
  <li>Memory Recall Operation</li>
</ul>
<p>&nbsp;</p>
<p><strong>Calendar Example</strong> Classes/Objects</p>
<ul>
  <li>Year
    <ul>
      <li>Month
        <ul>
          <li>Week
            <ul>
              <li>Day</li>
            </ul>
          </li>
          </ul>
      </li>
      </ul>
  </li>
  <li>Event</li>
  <li>Reminder</li>
</ul>
<p>&nbsp;</p>
<p><strong>Media Collection Example</strong> Classes/Objects</p>
<ul>
  <li>Movie</li>
  <li>Song</li>
  <li>TV Show</li>
  <li>Playlist</li>
  <li>Genre
    <ul>
      <li>Movie genre</li>
      <li>Song genre</li>
      </ul>
  </li>
  </ul>
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