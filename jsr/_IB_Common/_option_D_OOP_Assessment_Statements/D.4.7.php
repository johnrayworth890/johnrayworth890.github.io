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
		<a href="D.4.6.php">Last</a>
	    <a href="D.4.8.php">Next</a></p>
</div>
	
<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.7</p>
<p>Identify the features of the abstract data type (ADT) list.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand the nature of an ADT—where no implementation details are known but the actions/methods are standard.<br />
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
<p class="darkblue">List ADT A.: Features</p>
<h3>ADTs at a Programming vs. a Usage Level</h3>
<p>Before going into the features and applications of the list ADT, it is important to focus in on the Teaching Note. It points out that with all ADTs we don't necessarily need to know how they were implemented (i.e. coded) to use them. We just need to recognize their standard methods/actions, and know how they should work. And what is this an example of??? Our old friend abstraction, again!</p>
<p>In fact, for IB CS, you need to be able to work with ADTs on both levels:</p>
<ol>
  <li>Algorithmic construction of lists and trees
    <ul>
      <li>In Topic 5, that was limited to diagrams</li>
      <li>Here in the OOP Extension includes is actual Java code implementations</li>
    </ul>
  </li>
  <li>But also - as focused on here - simply how to apply them</li>
  </ol>
<h3><br />
  The Features &amp; Application of ADTs</h3>
<p>&quot;Simply&quot; applying ADT is, in fact fairly straight-forward, but it still has to be learned, and it is based on what a certain ADT can do; i.e. its features. </p>
<p>A good example here, which we already have experience with, is classes which specialize in doing user input and output. To you, by now, it is obvious how we  apply the Scanner and/or  BufferedReader classes. When we go Scanner s = new Scanner( ), and then go s. and see the list of functions that comes up, we are pretty familiar with some of the functional capabilities of Scanner. But, in fact, there are many more that we are not familiar with. </p>
<p align="center"><img src="Images/Scanner-Methods.jpg" width="539" height="313" alt=""/></p>
<p>Whether or not we know all of the ways an ADT can be applied, it is the general <em><strong>features</strong></em> of classes like BufferedReader and Scanner which, in the first place, lead to what they can do; how they can be applied. </p>
<p>What are the general features of BufferedReader and Scanner? Well, they can take in streams of input from various sources, including the keyboard. And, in the case of BufferedReader, an additional feature is that it can store up input one piece at a time, in a &quot;buffer&quot;, and then process that input all at once in a batch way. That makes it really efficient. Scanner lacks that capability, but a very useful feature is that it has ways to, by itself, parse input data types other than String, such as int and boolean.</p>
<h3>&nbsp;</h3>
<h3>Understanding Features of the ADT List before we can apply it</h3>
<p>So before we can see a bunch of specific methods to use from a List class (as in the picture above for the Scanner class), we need to fully appreciate the general features of lists. A lot of this was covered various places in Topic 5.</p>
<p><strong> <br />
  Features Shared with other Dynamic Structures</strong></p>
<p>The  features that ADT List has starts with the fact that lists are dynamic data structures, as opposed to their static counterparts, namely the Java array. The features of dynamic data structures in general (as seen in <a href="/jsr/_IB_Common/_topic5AssessmentStatements/5.1.11.php">5.1.1</a> - and do be sure to look at the details there) are:</p>
<p>- They are dynamic, not static; i.e. <strong>they can grow and shrink in size</strong>.</p>
<p>- They are <strong>made up of nodes</strong>, which are self-referential types, composed of the data itself, and a pointer to the next node. </p>
<p>- Because they are dynamic, they <strong>do not waste memory</strong>; they only take up as much memory as is the number of nodes in the list <br />
</p>
<p><strong><br />
  Further Features of Lists</strong></p>
<p>- <strong>Access</strong> to the chain, or the list, is <strong>from one end only</strong>. </p>
<p>- This beginning node is usually identified as <strong>Head</strong> (or first). The last node in the chain is usually identified as the <strong>Tail</strong> (or last).</p>
<p>- With access to the Head, since all nodes are linked, <strong>any node can be found</strong> by going from node to node until the one searched for is located (or not, if it is not there).</p>
<p>- Lists therefore have a searching <strong>efficiency which is directly proportional to their size</strong>; not a bad efficiency, but not as good as other structures. <br />
  (This efficiency can expressed in what computer scientist usually use to measure relative efficiency, &quot;Big O&quot;. Lists have a Big O of Big On, with n being the number of nodes in the structure.)</p>
<p>- Specific algorithms can be implemented to <strong>add to the list, at either end</strong>, to effectively <strong>delete</strong> nodes from the list, or to <strong>add</strong> additional nodes <strong>at any point along the chain</strong> (accomplished though re-direction of the nodes' &quot;pointers&quot;).</p>
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