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
		<a href="D.2.6.php">Last</a>
	    <a href="D.2.8.php">Next</a></p>
</div>	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.7</p>
<p>Describe the advantages of libraries of objects.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, sorts and other complex algorithms and processes do not have to be “re-invented”.<br />
	</p>
  </div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>Q1. Describe how the use of libraries can facilitate the development of programs like this company’s administration program. </p>
<p>----</p>
<p>Q2. Outline one advantage of using standard library collections.</p>
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
<p>JSR Notes:</p>
<p><strong>The Long Way...</strong></p>
<p>We could create our own way of doing all sorts of things, even things as common - but ultimately complex - as printing a line of code. But for this example, it is obviously much easier to use the pre-made println( ) method of the out object of the System class. Likewise we could create our own way to read or write, and buffer to speed up the process, but we choose to use BufferedReader and BufferedWriter, or perhaps Scanner.</p>
<p><strong>Or The Short Way...</strong></p>
<p>&quot;<strong>Libraries</strong>&quot; like these examples are groups of code which has been made by others, and are now available for us to use, or in the case of the library analogy, to &quot;borrow&quot;. And it's not just common tasks such as printing to the screen or taking keyboard input. There are also freely available classes to do common and complex algorithms. So, for example, there is no need to code your own selection sort, or binary search tree etc. </p>
<p>It's important to make your own such algorithms for learning purposes,  so that you intimately know how they work, but once you get out in the &quot;real world&quot;, you need to be the most efficient you can be, and use pre-made classes and algorithms like the ones mentioned here.</p>
<p>In fact, we  use &quot;libraries&quot; every time we use <span class="keyword-directive">import</span> in our code - usually though a right-click, and import this or that (as with BufferedReader, or Scanner).</p>
<p><strong>Third Party Libraries</strong></p>
<p>When we think of using libraries, sure, we are using libraries that come with Java, such as Scanner, but that's not all. Rather, it is other libraries not necessarily made by the folks at Sun when they developed Java, but  libraries that were made by &quot;third parties&quot;, whether companies or individuals. As the teaching note alludes to, there are lots of sorts out there, not just one or a handful, that we can just import and use. </p>
<p>You'll note that focus soon will be our use of pre-programmed &quot;Collections&quot; classes which offer specific implementations of &quot;Abstract Data Types&quot;, such as &quot;linked lists&quot; and &quot;binary trees&quot;. All of which we could have coded ourselves, but there's no need to bother since others have already made them and allow them to be used.</p>
<p><strong>Libraries of Classes</strong></p>
<p>Just one terminology note to end on; the assessment statement talks of libraries of &quot;objects&quot;, but it's better to talk of libraries of &quot;classes&quot;. We will usually import the classes, and make individual object instances from those library classes.</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Describe the advantages of libraries of objects.  </p>
<p> Library programs are programs that have already been written, and are likely to be able to be reused in other projects. Development time will be saved since, not only are they alrady developed, but they are tested, and bug-free.<br />
</p>
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