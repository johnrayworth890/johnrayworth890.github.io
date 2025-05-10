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
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_Extension_From_Syllabus.php">OOP HL</a>
	    <a href="../_topic5AssessmentStatements/5.1.11.php">Last(5.1.11)</a>
	    <a href="../_topic5AssessmentStatements/5.1.12.php">Last(5.1.12)</a>
	</p>
</div>
	
<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.5</p>
<p>Define the term object reference.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>As typified by simple classes that are self-referential.<br />
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
<p><br />
There are two things in this assessment statement. &quot;object reference&quot;, which should be a review, and &quot;self-referential classes&quot;, the new, powerful usage of object references.</p>
<h3><br />
  Review of Object Reference</h3>
<p>First there's the same old same old very important concept of an object actually being, at its core, a memory address reference.</p>
<blockquote>
  <p>So:</p>
</blockquote>
<p>Student <strong>s</strong> = new Student(&quot;Jane&quot;, 10);</p>
<blockquote>
  <p>makes a &quot;reference&quot; variable, which is actually/technically the address of where the Student object resides.</p>
</blockquote>
<p>What is <strong>s</strong> technically/literally? <strong>s</strong> is a memory address, which points to the data associated with it. So yes, via dot notation (.getName( ) and .getGrade( )) we can access the data associated with <strong>s</strong>. And, yes, some place in memory, there is a String with the value of &quot;Jane&quot;, and right beside it is an int, with the value of 10. But it's the address of where those two things reside <em>which <strong>s</strong> actually is</em>, so let's say FFFF1234. </p>
<p><em>or put another way</em>:</p>
<p>So what is <strong>s</strong>, technically/literally? FFFF1234.</p>
<p>And/but what does <strong>s</strong> therefore <em>represent</em>; what useful information does it point to, that, using dot notation we can get at? The answer is the <em>data residing</em> at memory address FFFF1234, which is &quot;Jane&quot; and 10.</p>
<p align="center"><img src="../_topic5AssessmentStatements/Images/Simple-Object.jpg" width="449" height="476" alt=""/></p>
<p><br />
  So that's it for the review of what objects are, now onto the new concept which makes use of object references, self-referential classes.</p>
<p align="center">-------------------------- &quot; --------------------------</p>
<p align="center">&nbsp;</p>
<h3>Self-referential  Classes <br />
</h3>
<p>This is the kind of class in which at least one of its attributes is another instance of that class. </p>
<p>Here's a very simple example:</p>
<pre>public class <strong>Node</strong>( ){
    Object obj = null; <span class="gray">//so, since Object, can be any non-primitive thing</span>
    <strong>Node next = null;</strong>

    public Node( ){
    }

    public Node(Object obj, Node next){
        this.s = s;
        this.next = next;
    }
    //sets
    //gets
}</pre>
<p>Above, we can classify the class as being a self-referential class, because one of its attributes is of the type that it is; specifically, the MyClass class has attribute of type MyClass.</p>
<p>Here is how we diagram such a class, with it's  two attributes:</p>
<p align="center"><img src="../_topic6AssessmentStatements/Images/Node-Class.png" width="599" height="583" alt=""/></p>
<h3><strong><br />
    <br />
    The Utility of Self-referential Classes</strong></h3>
<p>So why would we want self-referential classes? With the use of self-referential classes, these kind of objects can easily find, and link to other objects of the same type, and thus form lists of those objects. This is what is done with the abstract data type (ADT) LinkedList, and others similar to it, like binary search trees. <br />
</p>
<p><img src="Images/Referential-Class-Diagram.png" width="848" height="833" alt=""/></p>
<p>&nbsp;</p>
<h3><br />
  <strong>Lists can thus be made</strong></h3>
<p>Lists are data structures in which instances of a certain type can link up to form an abstract data structure. This structure need not be made of instances which are physically side by side in memory, as is the case with arrays. Rather, through knowing where each next &quot;link in the chain&quot; is, in terms of memory, the full list can be navigated back and forth. The advantage of a list over an array is thus that the instances of the list can be scattered throughout memory; lists do not require one big contiguous memory space, as arrays do.</p>
<p align="center"><img src="../_topic5AssessmentStatements/Images/Basic-Stack-Diagram.jpg" width="446" height="368" alt=""/></p>
<h3><strong>Summary</strong></h3>
<p> To understand how  linking is possible, firstly keep in mind that objects are technically/literally themselves a 32 or 64 bit address. In a linked list, a Node  does not just contain useful information like student name and grade, but also a &quot;reference&quot;, or &quot;pointer&quot; Node to the next Node instance. And thus, step-by-step, link-by-link, these pointer links form lists.</p>
<p>See the next assessment statement for details of how this looks in practice.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>(Final Note: Self-referential Class vs. Recursion</strong></p>
<p>Don't confuse self-referential classes with recursion, if you have looked at recursion to this point. The two are similar in a way, but different, and each is used for a different purpose. With recursion, it is a method which calls another instance of itself, and this is done for the purposes of iteration. With self-referential classes, it is the  class itself which has an instance that is of the same type of itself, and this is done for purposed of being able to locate another instance of the same class, usually as part of a list.)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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