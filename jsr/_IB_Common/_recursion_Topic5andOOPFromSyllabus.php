<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Recursion from Topic 5 & OOP</title>

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
	
<h2>Recursion - from Topic 5 &amp; OOP Extension</h2>
<p><span class="gray">Extra resource: <a href="Java-Java-Java-Morelli-Walde.pdf">Java, Java, Java</a> by Ralph Morelli &amp; Ralph Walde. (CC BY 4.0)<br />
A
great college level open source license  textbook to aid you. </span></p>
<p>&nbsp;</p>
<p>Code-Camp-Day-1: <a href="../../largeFilesOutsideJSR/__IB-Other/Videos/Code-Camps-February-Break-2015/Code-Camp-Day-1/Recursion.mp4">Recursion</a><a href="../../largeFilesOutsideJSR/__IB-Other/Videos/Code-Camps-February-Break-2015/Code-Camp-Day-1/Stacks-and-Queues-Implemented.mp4"> </a>(<a href="https://youtu.be/KGHAUfiWmiQ" target="_blank">YT</a>)</p>
<p>Code-Camp-Day-1: <a href="../../largeFilesOutsideJSR/__IB-Other/Videos/Code-Camps-February-Break-2015/Code-Camp-Day-1/Recursion-Applied.mp4">Recursion Applied</a> (<a href="https://youtu.be/kriaqFq2p8g" target="_blank">YT</a>)</p>
<p><span class="indigo">- Code-Camp-Day 2: <a href="../../largeFilesOutsideJSR/__IB-Other/Videos/Code-Camps-February-Break-2015/Code-Camp-Day-2/HL-Extension-Recursion-Again.mp4">Recursion Again</a><a href="../../largeFilesOutsideJSR/__IB-Other/Videos/Code-Camps-February-Break-2015/Code-Camp-Day-1/Stacks-and-Queues-Implemented.mp4"> </a>(<a href="https://youtu.be/uqayAUrEOSg" target="_blank">YT</a>)</span></p>
<p><strong>Thinking recursively</strong> </p>
<p>JSR Note about teaching Recursion: You can go two levels; there's no in-between. Either:<br />
  - 10 minutes: What is recursion: a method calling an instance of itself. What is the major limit: hogs RAM. How do you identify it: methodXYZ( ) is called inside methodXYZ( ). Or:<br />
  - at least 3 full classes of complete understanding so can construct (simply), and trace, including trees.
</p>
<p><br />
  An overview of how this proceeds:</p>
<p>D.4.1 - define recursion<br />
  5.1.1 - recursive situations<br />
  5.1.2 - identify recursion in code<br />
  <br />
  D.4.2 - lots of details<br />
  <span class="darkGray">D.4.3 - not necessary, but may help</span><br />
  <br />
  D.4.4 - tracing <br />
  5.1.16 - tracing tree traversals<br />
  <span class="darkGray">5.1.16 - tracing again  </span><br />
</p>
<p>&nbsp;</p>
<p><a href="_topic5AssessmentStatements/5.1.1.php"><span class="indigo"><a href="_option_D_OOP_Assessment_Statements/D.4.1.php">D.4.1</a></span> Define the term recursion.<span class="indigo"> <span class="gray">(In terms of coding)</span></span> <span class="darkblue">- 2021, yes</span></a></p>
<p><a href="_topic5AssessmentStatements/5.1.1.php">5.1.1</a> Identify a situation that requires the use of recursive thinking. <span class="comment">(In general)</span></p>
<p><a href="_topic5AssessmentStatements/5.1.2.php">5.1.2</a>  Identify recursive thinking in a specified problem solution. <span class="comment">(i.e. a coding solution)</span><a href="_option_D_OOP_Assessment_Statements/D.4.1.php"><br />
</a></p>
<p><span class="indigo"><a href="_option_D_OOP_Assessment_Statements/D.4.2.php">D.4.2</a> </span>Describe the application of recursive algorithms.<span class="indigo"> <span class="gray">(In coding)</span></span> <span class="darkblue">- 2021, this could be an extension of 5.1.1</span></p>
<p><span class="gray"><a href="_option_D_OOP_Assessment_Statements/D.4.3.php">D.4.3</a> Construct algorithms that use recursion.</span><span class="indigo"> <span class="gray">(With Java etc.)</span></span> <span class="darkblue">- this is the one to pass on 2021</span></p>
<p><span class="indigo"><a href="_option_D_OOP_Assessment_Statements/D.4.4.php">D.4.4</a> </span>Trace recursive algorithms.<span class="indigo"> <span class="gray">(An original algorithm)</span> <span class="green">Straight-forward, good exam question</span></span> <span class="darkblue">- 2021, yep, 5.1.3++</span></p>
<p><span class="indigo"><a href="_topic5AssessmentStatements/5.1.16.php">5.1.16</a></span>  State the result of inorder, postorder and preorder tree traversal.<span class="indigo"> <span class="green">Straight-forward, good exam question</span><br />
</span></p>
<p><span class="indigo"><a href="_topic5AssessmentStatements/5.1.3.php">5.1.3</a></span> <span class="darkGray">Trace a recursive algorithm to express a solution to a problem.</span><span class="indigo"> <span class="gray">(Done better with D.4.4 above)</span></span></p>
<p>&nbsp;</p>
<p><br />
</p>
<p class="indigo">&nbsp;</p>

<p><br />
</p>
</div>
	<p></p>	
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