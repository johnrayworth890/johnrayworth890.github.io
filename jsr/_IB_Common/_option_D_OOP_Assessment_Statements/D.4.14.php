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
		<a href="D.4.13.php">Last</a>
	    <a href="D.4.15.php">Next</a>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.14</p>
<p>Outline the features of ADT’s stack, queue and binary tree.</p>
<p>&nbsp;</p>
<p>Teaching Note:</p>
<p>Students should be able to provide diagrams, applications and descriptions of these ADTs. For example, they should know that a binary tree can be used to efficiently store and retrieve unique keys.<br />
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

?><p>JSR Notes:
</p>
<p>This is a copy and paste of what is found in Topic 5.1.6 (stacks), 5.1.8 (queue).<span class="comment"></span> More details were given above in the OOP Topic. So in case you're thinking that much or all of this is a review, you're right!</p>
<p>For these, I have used this assessment statement's three &quot;<em>should be able to</em>&quot;s from the Teaching Notes to structure this introduction, so: descriptions, diagrams, and applications. </p>
<h3><br />
  <strong>Features of the Stack ADT</strong>:</h3>
<h3><strong>Description/Characteristics</strong></h3>
<p>- Stacks are particular implementation of lists, which operate in a LIFO manner.</p>
<p>- Since they are lists, stacks are made of a &quot;chain&quot; of self-referencing nodes; i.e. nodes of the same type that point to each other.</p>
<p>- Items can be added, or &quot;pushed&quot; onto one end of the stack (most conveniently, the head).</p>
<p>- Items can be taken from, or &quot;popped&quot; from  the same end of the stack, and so operating in a LIFO basis (Last In, Last Out).</p>
<p>- It is important that checks can be made to see if the stack is empty,  thus preventing the error of trying to access something that is not there.</p>
<p><strong>Diagrams</strong></p>
<p>(This diagram actually shows pushing and popping to/from the tail. This is easier in one way to conceptualize, but is inefficient compared to working with the head.)</p>
<p><img src="Images/Basic-List-Diagram.jpg" width="665" height="549" alt=""/></p>
<h3><strong>Applications</strong></h3>
<p><strong>General</strong>:</p>
<p>- Any process in which the last one on the stack should be the first one that is next dealt with, and so taken off the stack.</p>
<p><strong>Analogies</strong>:</p>
<p>- A conventional analogy is when plates are stacked on top of each other in a cafeteria; it is impossible to take from the bottom of the stack, and so we always take the top plate off of the stack.</p>
<p>- In fact stacking of physical objects, like magazines on the coffee table of the living room.</p>
<p><strong>Computing</strong>:</p>
<p>- 1. <strong>Errors</strong> which can interrupt other events, including other errors, cause stacking of those other errors and other events. This is the case because if anything, including an error itself, is interrupted by a new error, it's that last error that has to be handled first, before the other ones can be.</p>
<p>- 2. <strong>Method</strong> calls in the middle of other methods cause stacking of the unfinished methods. In this case the unfinished method that has made the call goes on a stack, and waits for the called method to be finished. This can go many levels deep; for example, main( ) calls method1( ), and method1( ) calls method2( ), and method2( ) calls println( ). When println( ) is being executed, all of the  method calls before it are on a LIFO stack waiting to be finished.</p>
<p>- 3. <strong>Recursion</strong>. Recursion is a process in which a method is interrupted by calls to other instances of itself. This accomplishes repetition without the use of a conventional structure such as a for or while loop. Since functions get interrupted, they are not finished, and so they have to be put some place, on a &quot;stack&quot;, where they wait to be handled. Once the other method that they themselves called get finished, they can then also finish.</p>
<p>&nbsp;</p>
<p><br />
  <br />
</p>
<h3><strong>Features of the Queue ADT</strong>: </h3>
<h3><strong>Description/Characteristics</strong></h3>
<p>- Queues are a particular implementation of lists that operate in a FIFO manner (first-come-first-serve).</p>
<p>- Since they are lists, queues are made of a &quot;chain&quot; of self-referencing nodes; i.e. nodes of the same type that point to each other.</p>
<p>- Items can be added, or &quot;enqueued&quot; onto the head or tail of the queue. </p>
<p>- Items can be taken from, or &quot;dequeued&quot; from the opposite end that they were enqueued to. That way the items that have been there the longest get priority of access, and so queues operate in a FIFO basis (First In, First Out).</p>
<p>- It is important that checks can be made to see if the queue is empty, thus preventing the error of trying to access something that is not there.</p>
<p><strong>Diagrams</strong></p>
<p><img src="Images/Basic-Queue-Diagram.jpg" width="665" height="495" alt=""/></p>
<p>&nbsp;</p>
<h3><strong>Applications</strong></h3>
<p><strong>General</strong>:</p>
<p>- Queues function in much the same way that lines or queues function in most of the civilized world, in that the first one in the line is the first one served; there's no butting into the line.</p>
<p><strong>Analogies</strong>:</p>
<p>- Other than queues of people lining up for food, or tickets at a movie theatre, a good common example is airplanes queuing up to take off from an airport. The first one to taxi out to the runway is the first allowed to take off. Once that plane takes off, the next one in line is the one that takes off. New planes line up at the back of the list/queue.</p>
<p><strong>Computing</strong>:</p>
<p>- 1. In terms of the functioning of a computer, queues will be used whenever <strong>tasks are non-urgent</strong>, and at the same level of priority as the other tasks waiting for the CPU to execute them. (A Topic 6 example is <strong>CPU polling</strong>.)</p>
<p>- 2. And in terms of programs we will make, whenever we have a <strong>list</strong> of things to do or deal with, and they also are all <strong>of equivalent importance and priority</strong>, a queue is the most equitable way to deal with them one by one.</p>
<p>- 3. A <strong>print queue</strong> or a queue for any other network service such as this. It only makes sense that the print jobs etc. are fairly handled in a first come-first serve basis.</p>
<p>- 4. Computer <strong>modeling of physical queues</strong> (eg. supermarket checkouts). Taking the example mentioned above in the Teaching Note, a simulation to test efficiencies of various arrangements of supermarket checkouts would have to function the way that they do in reality, which is the first one in line is always the next person dealt with.</p>
<p>- Note that a queue can function in a linear way, or a circular way as well:</p>
<p><img src="../_option_D_OOP_Assessment_Statements/Images/Basic-Queue-Diagram-LandC.jpg" width="385" height="286" alt=""/></p>
<p><br />
  <br />
</p>
<h3><strong>Features of Binary Tree ADT</strong>: </h3>
<p>(Refer to <a href="../_topic5AssessmentStatements/5.1.14.php">5.1.14</a> also, for more implementation details.)</p>
<h3><strong>Description/Characteristics</strong></h3>
<p>- Binary trees are a data structure that is also properly referred to as <strong>binary search trees</strong>. They are ideal for storing data that has to be searched efficiently regularly.</p>
<p>- A binary tree is made of <strong>nodes which have two pointers each</strong>: one pointer pointing to the right, to all of the nodes which contain items &quot;greater&quot; than itself, and one pointing to the left, to all of the nodes &quot;lesser&quot; than it.</p>
<p>- The tree starts assembling itself with a &quot;root&quot; node (which, to have a balanced tree, should be a &quot;middle&quot; value of the set).</p>
<p>- Items are added by progressing down through the tree, asking at each node whether they are &quot;greater than&quot; or &quot;lesser than&quot; the current node, and then being attached when they get to the &quot;end of the line&quot;.</p>
<p>- Because of the way values are added, they are <strong>naturally sorted</strong>.</p>
<p>- <strong>Searching can be done in a binary way</strong>, because of this natural sorting process, since at every step through the binary tree when searching, half of the remaining nodes are eliminated from the search.</p>
<p>- Through various algorithms, nodes may be effectively deleted from the tree by re-linking nodes around them.</p>
<p><strong>Diagrams</strong></p>
<p><img src="Images/Basic-Tree-Diagram.jpg" width="665" height="495" alt=""/></p>
<h3><strong>Applications</strong></h3>
<p>- The binary search tree is the &quot;be-all-and-end-all&quot; of data structures, in that it is the best of both worlds, with regard to both memory management and searchability. It is <strong>dynamic</strong> in nature, allowing items to be added and deleted without memory penalty, but it is also <strong>binarily searchable</strong>.</p>
<p>- So whenever a data structure has an unknown and/or changeable size, and it also will be frequently searched, the binary search tree is an ideal choice.</p>
<p>-  Or put another way (the Teaching Note way) a binary tree can be used to <em>efficiently</em> store <strong>and</strong> retrieve unique keys.</p>
<p> - Examples include all sorts of data that needs to be managed and searched, yet whose number of items grows and/or shrinks. So to take just one example, the student database of a school with big numbers, and fluctuating enrollment with students arriving and leaving regularly, so like is the situation at a big international school.</p>
<p>&nbsp;</p>
<p>***Note that since binary trees appear in the OOP topic, and so do reference mechanisms, even though they were gone over in a lot more detail in Topic 5, they are fare game here too, as seen, for example on the May 2017 paper 2.</p>
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