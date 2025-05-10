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
		<a href="D.4.7.php">Last</a>
	    <a href="D.4.9.php">Next</a></p>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.8</p>
<p>Describe applications of lists.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand that lists can be used to represent stacks and queues.<br />
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
<p><span class="darkblue">List ADT B.: Applications</span></p>
<h3><br />
  Application of Lists: Stacks and Queues</h3>
<p><br />
  Since lists can be  accessed from one end (or the other), they make for a good structure to implement either <strong>stacks or queues</strong>. </p>
<blockquote>
  <p>(Beyond the basics: Note that such access, three out of the four times it is most often done - see the next section - can be from the head, which is very easy, since that's what we have direct access to.)</p>
</blockquote>
<p><strong>Lists Applied as Stacks</strong></p>
<p>In the case of operation as a stack, the last node &quot;in&quot; is the first node &quot;out&quot; (<strong>LIFO</strong>). So adding and removing will be (easilly done) from the <strong>same end</strong>. </p>
<blockquote>
  <p>(Beyond the basics: Note that we could also add &amp; remove from the &quot;tail&quot;, though with direct access only to the head, this would be less efficient.)</p>
</blockquote>
<p><strong>List Applied as Queues</strong></p>
<p>In the case of operation as a queue, the first node &quot;in&quot; is the first node &quot;out&quot; (<strong>FIFO</strong>). So adding and removing will be from <strong>opposite ends</strong>. </p>
<blockquote>
  <p>(Beyond the basics: Note that the combination of adding to the &quot;head&quot;/removing from the &quot;tail&quot;, along with the combination of adding to the &quot;tail&quot;/removing from the &quot;head&quot;, both achieve this.)</p>
  <p>&nbsp;</p>
  </blockquote>
<p>And, finally, to make a connection to Topic 6 and operating system functions, <strong>interrupts</strong> are a great example of something that should and does work as a <strong>stack</strong>, since more urgent things should be attended to first, before the other, less urgent interrupts that are stacked beneath them. </p>
<p>And <strong>polling</strong> requests are a great example of something that could operate more as a <strong>queue</strong>, since no one request, or check is more important than another (generally), so first come, first serve should be the way things,  work.</p>
<h3>&nbsp;</h3>
<h3>Non-applications of Lists: Searching and Direct/Random Access</h3>
<p>It is very important to note that lists SHOULD NOT BE USED in many situations; the following two in particular. And so you need to keep in mind that we have other structures at our disposal also for these things - namely arrays and binary search trees.</p>
<p><strong>Direct/Random Access - List No No!</strong>!!</p>
<p>Do not choose to use a list (stack or queue) if you intend to be accessing individual data from some place in the middle of the structure, which we call <strong>direct access</strong>, or <strong>random access</strong>. Lists are only really efficient for accessing data  from the head. And in terms of the functionality that is to be expected from lists, access from the tail is usually implemented also (even though that takes a traversal all the way from the head.)</p>
<p>So if needing to access directly/randomly from the middle of a structure some place, an array is a much better approach; if the position of the element is know, then it is pure, direct access, like print(arr[5]) - in this example, if <em>arr</em> were an int array, we would take the address of <em>arr</em>, and add 5 * 32 to that address to directly access this element. And  if the exact element of the array is not know, it may be possible to use another  approach called hashing (outside the context of this syllabus).</p>
<p>Meantime, searaching through a list, though possible, is not easy, direct access; it is access by traversing through the entire list until we find what we are looking for. (For what it's worth, Big O n, rather than the Big O 1 efficiency of using arrays, and/or hashing.)</p>
<p><strong>Searching - List No No!</strong>!!</p>
<p>Do not choose to use a list (stack or queue) if you intend on frequently searching for data; it is not made for this purpose. Any searches have to happen one step at a time, sequentially, starting at the head. In the worst case scenario, you will have to visit all nodes to find what you are looking for. (Again, for what it's worth, a Big O seraching efficiency of Big O n.)</p>
<p>Depending on the situation, two other options are better for searching. The first situation to consider is a static context, in which the size of the structure us generally unchanging. In this case, just use an array, sort it, and then it can be binarily searched. But if it is a dynamic situation, with a structure changing in size, and you still need searching, choose a binary search tree structure.</p>
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