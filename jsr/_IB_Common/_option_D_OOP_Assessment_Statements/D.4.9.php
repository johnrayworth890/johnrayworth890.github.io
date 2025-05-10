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
		  <a href="D.4.8.php">Last</a>
	    <a href="D.4.10.php">Next</a></p>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.9</p>
<p>Construct algorithms using a static implementation of a list.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Lists will be restricted to singly linked types. Methods that should be known are add (head and tail), insert (in order), delete, list, isEmpty, isFull.<br />
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
<p><span class="darkblue">List ADT C.: Coding List as Static Array</span>s</p>
<p><br />
  <strong>A Repeat here in the Option at a Deeper Level</strong></p>
<p>A lot of this you have recently seen in Topic 5. Remember that for Topic 5, it is to a level of diagramatic understanding, but with the OOP Option Extension, it will be to an algorithmic, coding level (next assessment statement). But.... for this assessment statement, see the &quot;Beyond what is needed&quot; note below.</p>
<p>Topic <a href="../_topic5AssessmentStatements/5.1.10.php">5.1.10</a> (green below indicates diagrams that apply to the methods mentioned here)</p>
<p>5.1.10 Array as Static Stack at a diagramatic level diagrams:</p>
<ul>
  <li class="green">push( )</li>
  <li>pop( )</li>
  <li class="green">isEmpty( ) stack</li>
  <li class="green">isFull( ) stack</li>
</ul>
<p>5.1.10 Array as Static Queue at a diagramatic level diagrams:</p>
<ul>
  <li class="green">enqueue( )</li>
  <li>dequeue( )</li>
  <li>isEmpty( ) queue</li>
  <li>isFull( ) queue</li>
  </ul>
<p><br />
  And here (D.4.9) - Array as Static Stack &amp; Queue at an algoritmic/coding level, from the Teaching Note:</p>
<ul>
  <li>add at tail - <span class="comment">which would be </span><span class="green">push</span></li>
  <li>add at head - <span class="comment">which would be </span><span class="green">enqueue</span></li>
  <li>insert (in order)</li>
  <li>delete</li>
  <li>list </li>
  <li>isEmpty - <span class="comment">which would be </span><span class="green">isEmpty (stack)</span></li>
  <li>isFull - <span class="comment">which would be </span><span class="green">isFull (stack)</span></li>
  </ul>
<p>When reproducing algorithms, do make sure you remember the importance if isFull( ) when trying to add to add or insert to lists made from arrays.<br />
  <br />
</p>
<p><strong>Beyond what is needed</strong></p>
<p>This is in all likelihood going beyond what we need to cover. And, the Topic 5.1.10 notes do a very good job at describing several of the methods mentioned here anyway. </p>
<p>And furthermore, <strong>the focus for lists</strong> (i.e. most often, stacks and queues) <strong>should be on dynamic implementations</strong>, not static ones. Yes, you can make static implementations of lists, using the array structure, but the main point to lists is that they can indeed be dynamic. If you understand the general approach (from 5.1.10), then on the off chance of a question to get you to code these, you should be able to problem-solve your way to an adequate respones. But again, here, now, it's not worth the likelihood of that happening to spend time on it.</p>
<p>Never-the-less, for what it's worth, here is a link to a <a href="https://www.journaldev.com/110/how-to-implement-arraylist-with-array-in-java" target="_blank">static implementation of a list, in Java</a>. And from another example, here is a taste of the code. It's a good little method to look at because you can see how the array structure is working. We are just &quot;appending&quot; (i.e. pushing) our object to the next element to be populated. And the one check that is dones first is to make sure that the listSize at this point is not greater than the maxSize, i.e. the size of the array.</p>
<pre>
  <span class="comment">// Append "obj" to list</span>
  public boolean append(Object obj) {
    if (listSize >= maxSize) return false;
    listArray[listSize++] = obj;
    return true;
  }
</pre>
<p>The next assessment statement is list algorithms <em>using object references</em>, so with that, I&quot;ll go into the full details.</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
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