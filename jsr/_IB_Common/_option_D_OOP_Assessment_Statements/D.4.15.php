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
		<a href="D.4.14.php">Last</a>
	    <a href="D.4.15.php">Next</a></p>
</div>
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.15</p>
<p>Explain the importance of style and naming conventions in code.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand that meaningful identifiers, proper indentation and adequate comments all improve the readability of code for humans and thus save money, time and effort in programming teams.</p>
<p>INT, AIM 5 The need to develop a common “language” to enable collaboration across international frontiers when resolving problems.</p>
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
<h3>Style &amp; Convention Are Important</h3>
<p>By <strong>style</strong> we mean things that can be chosen by a particular programmer that are not necessarily standard. And by <strong>convention</strong> we mean, in spite of those stylistic possibilities, sticking to what is expected and agreed upon by the greater programming community.</p>
<p>&quot;Oh, but do we have to??...&quot; is the oft-heard joyful refrain about commenting and the other conventions mentioned in the Teaching Note. And as a teacher, the response can start with &quot;If you were working for my company...&quot; The main point is that computer scientists and coders are no longer sequestered in their basement or their cubicle working on their own little project. I.T. is now <strong>too complex to be handled by individuals</strong>, and your code is not just your code any more; it's your team's, your company's, and beyond. </p>
<p>There has to be a &quot;<strong>lingua franca</strong>&quot; not just in terms of the parts that cannot be changed, like the reserve words of a particular language, but of all other more flexible parts too. In this way, code becomes much more standard, and thus much more easy to understand and to share.</p>
<p>Each company or work group can come to agreement on local specifics, and often times &quot;<strong>style guides</strong>&quot; will be published or posted. Among the points of style and convention they focus  on are the following.<strong><br />
</strong></p>
<p>&nbsp;</p>
<p><strong>Meaningful Identifiers</strong></p>
<p>Either you, many months or years later, or other programmers who cannot immediately get help from you, will surely be re-looking at your code at some point. So you NEED to make your identifiers of variables and methods and classes to be clear. Certainly don't make them too long, but better to err on the side of caution, and be clear, if a little long, in your choice of identifier names.</p>
<p>Along with your identifiers being meaningful, there are also additional conventions for certain programming languages, such as <strong>class identifiers in Java beginning with a capital</strong>, and <strong>Java package identifiers being all lower case</strong>; neither is enforced by the compiler, but both are expected by coders worldwide. Other conventions, such as the use or avoidance of the underscore character are more dependent on what is agreed upon at a certain company or organization. <strong>camelCasing</strong>, though is mainly standard worldwide for Java variable names.</p>
<p><strong>Proper Indentation</strong></p>
<p>Code is so, so, so much easier to read if indentation is correct, and this should be easy to do with most modern IDEs (Integrated Development Environments), simply with a keyboard shortcut or click of a button. But don't forget.</p>
<p><strong>Adequate Comments</strong></p>
<p>You never <em>really </em>understand the importance of adequate comments until you have to go back and try to figure out some code that you once upon a time understood, but you sure don't now... In terms of what to comment, there are two non-negotiables. Firstly, appropriate, clear, and correct pre-conditions and postconditions need to be done. Secondly,  any non-standard algorithms should be properly explained.</p>
<p>Commenting is simply something you must develop as a habit of being a good coder. The good news is, like any good habit, once you have it, you don't even think about it; you just do it. Finally, note that along with the ease of practicing any good habit, good commenting takes very little effort when that particular function or algorithm is fresh in your mind.</p>
<p>&nbsp;</p>
<h3>Benefits </h3>
<p><strong>Save Money</strong></p>
<p>This comes from the time and effort saved. See next item.</p>
<p><strong>Save Time and Effort in Programming Teams</strong></p>
<p>A programmer sitting and scratching his/her head all afternoon trying to figure out what another programmer made long ago and far away - or indeed yesterday, one floor down! - is wasted time and money, if proper and adequate commenting would have prevented the situation. </p>
<p>A classic, if extreme, example of this was the time and effort needed to protect again the Millennial Bug at the turn of the last century. The issue was the possibility that the year 1999, stored as '99 in certain code, would wrap around incorrectly to '00, rather than 2000. Preventing this in the first place would have been universal adherence to the convention of four digit years in code. And proper commenting on tons of programs (many very old, using structures long since forgotten) would have, and did help. In the end, with lots of effort and lots of money, but thanks to lots of code commenting as well, catastrophe was averted!</p>
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