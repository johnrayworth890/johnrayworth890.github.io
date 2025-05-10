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
		<a href="D.2.4.php">Last</a>
	    <a href="D.2.6.php">Next</a></p>
</div>		
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.5</p>
<p>Explain the advantages of inheritance.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, a parent object holds common data and actions, which enhances reuse and reduces maintenance overheads.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Questions: <br />
    <br />
    <br />
  </span>---- </p>
<p>Q1. Outline two ways in which the programming team can benefit from the way the relationships between the three objects, <em>XyzSuperClass</em>, <em>AbcSubClass</em> and <em>DefSubclass</em>, have been represented in the code.</p>
<p>----</p>
<p>Q2. The team has decided to use inheritance in its design.<br />
  Describe one benefit that inheritance brings to OOP.</p>

<p>----</p>
<p>Q3. The company that owns this restaurant (classes provided in the exam paper) also owns hotels, shops, and a car hire business. The programs that manage the finances of these different businesses include classes similar to the ones shown in this paper.<br />
</p>
<p>Explain how inheritance could be used as a tool to both improve the clarity of the design and to reduce the amount of code that needs to be written.</p>

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
<p>&nbsp;</p>
<p>JSR Notes:</p>
<p>Let's start with an example:</p>
<p>You are programming for a real estate agent, and have several classes of buildings/properties you are working with - including apartments and houses, for example. And all classes of properties share 15 different attributes, such as price, square meters of floor, address, owner, etc. So why not have one super class called Property? </p>
<p>The Apartment sub-class, for example, can have all those 15 common attributes plus a couple of its own, such as hasElevator, and commonSpaceSize. Meantime, a House sub-class could have all Property class attributes, plus hasGarden, and hasShed. This arrangement will yield several advantages, mainly through the avoidance of duplication, but also because the program's structure will model the real situation.<br />
</p>
<h3><br />
  Advantages of Inheritance<br />
</h3>
<p><strong>1. Avoidance of Duplication</strong> (and so...)</p>
<blockquote>
  <p><strong>1A. Faster Development</strong></p>
</blockquote>
<p>During initial development, but also when it comes time to alter any of the attributes or the methods that work with them, work done to the super-class will only have to be done once, instead many times. This increases overall speed efficiency, both with development and maintenance.</p>
<blockquote>
  <p><strong>1B. Increased Reliability</strong></p>
</blockquote>
<p>Avoidance of duplication also leads to consistently within all related classes. With the alternative approach multiple classes all containing a certain common attribute or methods would <strong><em>each need to be changed</em></strong>. This <em><strong>increases the possibility of errors occurring</strong></em>, or even without obvious errors, inconsistencies creeping in, which may cause problems down the line. All of this is completely avoidable with the inheritance approach. </p>
<blockquote>
  <p><strong>1C. Simplified Testing</strong></p>
</blockquote>
<p>One super-class means one round of testing, rather than having to test each class that had a duplicate attribute and related methods. Not only is this simpler, it's faster.</p>
<p><strong><br />
  2. Modeling of Real-world Relationships</strong></p>
<p>The other major advantage to inheritance is the way it models real-world relationships. Recall how the grouping of related attributes and the methods that act upon them, in encapsulation,  can better model real world situations. In the same sort of way, modeling the macro level a complex system in a hierarchical way that reflects their real world relationships can  make the structure of the program <strong>easier to understand</strong>. <strong>And this in turn makes it less prone to errors</strong>.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Explain the advantages of inheritance.</p>
<ul>
  <li>It adds to coding efficiency by <strong>avoiding duplication</strong> of code which can be shared between classes.
<ul>
      <li>This allows for <strong>faster development</strong>.</li>
      <li>And it i<strong>ncreased reliability</strong>, via consistency.</li>
      <li> It simplifies testing since superclass methods only need to be <strong>tested once</strong>.</li>
</ul>
  </li>
  <li>    It mimics <strong>real-world</strong> object relationships, making it easier to understand and less prone to errors. </li>
  </ul>
<p>&nbsp;</p>
<p>And for specific scenarios in exam questions:</p>
<p>A generic Xyz superclass can be created which would contain attributes/methods required by all subclasses. Each of the different subclasses could then inherit all these tributes and methods, and add new attributes/methods that relate only to them. (And all of this yields the advantages listed above...)</p>
<p>&nbsp;</p>
<p><br />
</p>
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