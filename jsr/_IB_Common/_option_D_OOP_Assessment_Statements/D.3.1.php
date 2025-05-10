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
		<a href="D.2.9.php">Last</a>
	    <a href="D.3.2.php">Next</a></p>
</div>
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<h2>D.3 Program development (20 hours)</h2>
<p><br />
D.3.1</p>
<p>Define the terms: class, identifier, primitive, instance variable, parameter variable, local variable.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>These are generally related to the object’s data. See JETS.<br />
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
<p>Really, all you need for these definitions here and on D.3.2 and D.3.3 is simple, &quot;canned&quot; IB definitions as immediately follows. But look below for more details as well, to help with your understanding. </p>
<p>And now would be a good time to metion that sometimes, for definition questions,  that adding a quick little diagram often doesn't hurt if it's appropriate.</p>
<p><br />
  Definitions:<br />
  <br />
<strong>class</strong> - a discrete group of attributes and methods which work with each other.</p>
<p><strong>identifier</strong> - the name of a variable. (A variable being a short-cut for a memory address.)</p>
<p><strong>primitive</strong> - a data type with is literally the value which it represents (as opposed to an object, or &quot;reference&quot; type, which is an address pointing to the data). Like int, char, double.</p>
<p><strong>instance variable</strong> - a variable identifier (i.e. a named short-cut) for the address at which an instance of a certain class is held in memory.</p>
<p><strong>parameter variable</strong> - a variable that is received by a method, sent (as an &quot;argument&quot;) from some other part of the program when that method was called.</p>
<p><strong>local variable</strong> - a variable declared within a block of code. In Java it is &quot;garbage collected&quot; at the close brace of the block in which it was defined.</p>
<p>&nbsp;</p>
<p>More Details:</p>
<p><strong>class</strong> - <em>a discrete group of attributes and methods which work with each other.</em><br />
  And we know, certainly, what classes are; several to many classes make up a project, and consequently a full program.
    <br />
    <br />
</p>
<p><strong>identifier</strong> - <em>the name of a variable. (A variable being a short-cut for a memory address.)</em><br />
  Basically, the name of anything that we ourselves make is an identifier. You could even say that the class names we pick for our classes are identifiers, but usually you think of an identifier being a variable identifier. And along with the &quot;variable identifiers&quot; for primitives, like int and boolean, there are &quot;instance variable identifiers&quot; which we use as identifiers for instance objects of classes we make, like our br of BufferedReader, or any other such instance variable identifiers we make in lines which use the &quot;new&quot; keyword.
  <br />
  <br />
</p>
<p><strong>primitive</strong> - <em>a data type with is literally the value which it represents (as opposed to an object, or &quot;reference&quot; type, which is an address pointing to the data).</em><br />
  The Java primitives we regularly use in IBCS are int, double, char, and boolean, though there are a few others IB doesn't require you to know, but we have looked at them: short, long, and float.
    <br />
So if we declare a primitive variable, like 
<blockquote>
  <pre>int x = 22;</pre></blockquote>
 then in memory, what x points to is literally the integer value 3.
</p>
<br />
<br />
<p><strong>instance variable</strong> - <em>a variable identifier (i.e. a named short-cut) for the address at which an instance of a certain class is held in memory.</em><br />
  So every time there is a line using the &quot;new&quot; keyword, for example, 
<blockquote>
  <pre>Marker m = new Marker(10, &quot;black&quot;);</pre>
</blockquote>
we have made an instance variable. In the example, the variable identifier is m. And that variable identifier points to a place in memory which is actually a memory address; the memory address where the object is stored.
</p>
<br />
<br />
<p><strong>parameter variable</strong> - a variable that is received by a method, sent (as an &quot;argument&quot;) from some other part of the program when that method was called.<br />
So any method which takes in information from where it was called, this information comes in in the form of parameter variables. Most methods, in fact, do take in parameter information. The most obvious example of this is a &quot;set method&quot;, or as we are about to call them &quot;mutator method&quot;. A header line for a set method, for example, would be:
<blockquote>
  <pre> public void setLength(int length)</pre>
</blockquote>
and &quot;length&quot; is the one parameter being taken in.
</p>
<br />
<br />
<br />
<p><strong>local variable</strong> - <em>a variable declared within a block of code. In Java it is &quot;garbage collected&quot; at the close brace of the block in which it was defined.</em><br />
  We looked before at the &quot;scope&quot; of where a variable can be used, and it's simply that: that a variable can be used only within the block of code in which it was defined. Note that it is possible for a variable to have &quot;global scope&quot;, i.e. scope within a whole class, by being declared inside the class block, not inside of any of the class' methods. This way the variable can be used anywhere in the class.
</p>
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