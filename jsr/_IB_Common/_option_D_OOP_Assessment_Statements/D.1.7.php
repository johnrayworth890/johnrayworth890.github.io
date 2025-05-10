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
		<a href="D.1.6.php">Last</a>
	    <a href="D.1.8.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.7 </p>
<p>Outline the need to reduce dependencies between objects in a given problem.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand that dependencies increase maintenance overheads.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Questions: </span></p>
<p>----</p>
<p>Q1. Outline a negative effect that a future change in the design of the Sales object<br />
  might have on this suite of programs.</p>

<p>-----</p>
<p>Q2. Outline the reasons for keeping dependencies to a minimum. You should include<br />
  an example using the classes described so far.</p>

<p>----<span class="line-number"><br />
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
<p>JSR Notes:
  <br />
</p>
<p><strong>What we mean by Dependencies</strong></p>
<p>First of all, by <strong>&quot;dependencies&quot;</strong> we are talking about when there are <em><strong>any</strong></em> <strong>&quot;connections&quot;</strong>, i.e. relationships between classes. So looking at a UML class diagram, every time there is an arrow, either for a &quot;is a&quot;,  &quot;has a&quot;, or &quot;uses&quot; relationship, we would see this is a dependency situation.<br />
  <br />
(So do note that this is not just talking about the &quot;uses&quot; relationships, which are also refered to, specifically, as &quot;dependency&quot; - rather it is all connections between classes.)</p>
<p><strong><br />
  Limiting Dependencies
</strong></p>
<p>On one level, limiting dependencies seems to be counter to the fundamental pillar of OOP programming,  decomposition, i.e. dividing a big problem up into smaller problems via classes. But the thing is, decomposition, by definition, creates dependencies between objects, and dependencies can very well lead to problems.<br />
  <br />
</p>
<p><strong>Potential Problems of  Decompostion</strong> (i.e. possible problems when there are too many dependencies)</p>
<blockquote>
  <p><strong>Messines</strong></p>
  <p>- Too much decomposition potentially makes the program harder to follow, and <strong>more messy</strong>, with there being so many classes*</p>
  <p><strong>More Potential Boken Connections</strong></p>
  <p>- There are more <strong>interactions</strong>/communications between classes that could potentially be <strong>broken</strong>**</p>
  <p><strong>Maintenance Overhead</strong></p>
  <p>- There is more <strong>maintenance overhead</strong>, given that changes to one class demand changes to other classes***</p>
</blockquote>
<p><br />
  <span class="gray">Still, remember that there are many advantages to decomposition.</span></p>
<p class="gray"><strong>Advantages of Decomposition</strong>, (in spite of dependencies) including</p>
<blockquote>
  <blockquote>
    <p class="gray"><em>General advantages:</em></p>
  </blockquote>
  <p class="gray">A. Divide and Conquor approach <br />
    B. Abstraction: focusing in on individual problems, ignoring other details</p>
  <blockquote>
    <p class="gray"><em>Leading to, specifically:</em></p>
</blockquote>
  <p class="gray">1. Faster development<br/>
  2. Easier debugging<br/>
  3. Easier updating in the future<br/>
  <span class="gray">4. Re-usability</span><br/>
</p>
</blockquote>
<p>So  you should look for a happy medium between decomposition, but not too much decomposition - i.e. limiting dependencies. Yes, we want to divide a big problem up into smaller pices, but we don't want to over-do it. We do indeed need to be conscious that too many dependencies can become problematic.</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  &quot;Outline the need to reduce dependencies between objects in a given problem.&quot;</p>
<div>
  <div>
    <p>Changes in one class in a dependency may affect  other dependent classes. And this may cause programs using the dependent class to not function correctly. </p>
  </div>
</div>
<div>
  <div>
    <p>Less dependencies lead to reduced maintenance overhead, since a programmer editing a particular class would not have to be concerned so much with other classes; it allows the programmer to focus more on the class they are writing.</p>
  </div>
</div>
<p><br />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><strong>More on the Problems of Dependencies
</strong></h3>
<p>More on <strong>&quot;Messiness&quot;*</strong></p>
<p>You can imagine that if you went wild with classes, making separate classes for every little thing, it would soon be a mess, and would be hard to keep track of what does what where. You may end up with classes dependent on classes, which are dependent on other classes, and so on. This would be hard to keep track of. Furthermore if/when another programmer comes to work on your program many years later, after you're long gone, it will be all the harder for them to makes sense of all your classes and dependencies. </p>
<p>More on <strong>More Potential Broken Connections**</strong></p>
<p>One other reason to keep dependencies to a reasonable number is if the &quot;connection&quot; between them gets broken, it can screw up the whole program. And keeping the connections working correctly takes extra attention since you are working with different classes, not within the same class/code. An easy example to appreciate this is when you change the constructor of one class, you need to change all of the instances of calling that constructor in other classes which use it. This is one example of the &quot;maintenance overhead&quot; mentioned in the Teaching Note.</p>
<p>More on <strong>Maintainence Overhead***</strong></p>
<p>Breaking a program up into different independent parts is great for focus, and the isolation, which makes for easier development, testing and debugging. The problem is that classes in a project are not every truly independent. The whole idea is that classes are used one way or the other by other classes; that's what they are there for. So depending on the complexity of your interactions, there will always be at least one other class which inteacts with a class you are working on. And any change you make may very well affect that another class, which may then have to be changed itself, to reflect the change you are making to the class you are working on. And where there is a web of interconnections, individual changes to any given one class can ripple through other classes, adding still more to the maintenance overhead.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p><strong>&quot;Refactor&quot; to the Rescue</strong></p>
</blockquote>
<p>In terms of potential broken connections and the maintenance overhead, IntelliJ and other modern IDEs can &quot;<strong>refactor</strong>&quot; other classes when necessary. Refactoring is basically making the necessary changes to other classes (or indeed in the same class, like with changed variable names) when a dependency requires it based on a certain change to a certain class in the project. This makes life a lot easier, but still, as a general rule, you want to limit the amount of refactoring that is necessary in the first place, with a balance between decomposition and limiting dependencies.</p>
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