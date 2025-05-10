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
		<a href="D.3.3.php">Last</a>
	    <a href="D.3.5.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.4</p>
<p>Describe the uses of the primitive data types and the reference class string.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>In examination questions the primitive types will be limited to int, long, double, char and Boolean.</p>
<p>MYP Mathematics: forms of numbers.</p>
	<br /></div>

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
<p>Firstly trying to figure out how to interpret the assessment statement and teaching note: Let's assume this is saying &quot;describe the use of&quot; int, long, double, char, boolean, and String. And that it's not so concerned about the fact that String is a class, but can also be used as a literal type, like primitives.</p>
<p>So it's simply, &quot;describe the use of int&quot;, with an answer that is really basic, but that someone walking down the street would not be able to answer. </p>
<p>So: <em><strong>int</strong></em>: int is used to represent medium length integer values.</p>
<p>Here are the others:</p>
<p><em><strong>long</strong></em>: long is a data type used to represent very large integer values.</p>
<p><em><strong>double</strong></em>: double is a data type which is used to represent real number values, i.e. those with decimals.</p>
<p><em><strong>char</strong></em>: char is a data type used to represent individual characters, in fact, those characters represented in the ASCII table, such as 'a', 'A',  '2', and '!'.</p>
<p><em><strong>boolean</strong></em>: boolean is a data type used to represent either true or false, and that's it.</p>
<p><em>string</em>: string is a data type used to represent a string of characters; i.e. words. (Again, regardless of whether String is being treated as a literal, or a reference type.)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Strings as Literal Primitives vs Objects<br />
</h3>
<p>The rest of this page of notes goes <em><strong>a bit beyond what is required</strong></em>, particularly for Standard Level, but going through it will help consolidate a lot of things, and make some of the Higher Level concepts make a lot more sense later on.</p>
<p>String can be treated as a primitive, but can also be treated as a &quot;reference object&quot;, when we call the constructor of String, using the new operator. </p>
<blockquote>
  <p><strong>String as literal</strong></p>
  <p><em>String x = &quot;hello world&quot;;</em></p>
  <p><strong>String as object</strong></p>
  <p><em>String y = new String(&quot;hello world&quot;);</em></p>
</blockquote>
<p>You'll recall from the definitions of D.3.1 that <strong>primitives are literally their value in memory</strong>, and that their variable can be seen as a short-cut for that literal value. And String can work that way.</p>
<p>But String, when treated <strong>as a &quot;reference object&quot;, is indeed a reference</strong>, i.e. an address reference indicating where in memory the String object - it's char array, and its String attributes and methods, such as length - reside.</p>
<p style="text-align: center"><img src="../Java-Revolution/_Images/_Board-Notes/String-as-Literal-or-Object.jpg" width="671" height="502" alt=""/></p>
<p><strong><br />
  A Bit More on the Peculiarity of Strings</strong></p>
<p>Strings are <em>strings </em> of characters. And so a Java string is an array of char primitives. This actually makes string technically more a data structure, rather than a primitive. In fact, if you wanted, you could declare an array of chars every time you wanted to work with words. But this would be pretty silly. So  the makers of Java decided that since strings are so commonly used that they would give them the ability to be treated as literal primitives.</p>
<p>But the makers of Java also saw strings as something which could be nicely be controlled by a specific String class, which could have pre-made attributes and methods that are commonly used when working with words. Attributes such as <em><strong>length</strong></em> could be kept track of and directly used, and methods such as <em><strong>substring</strong></em> for accessing a subset of the character array could also be pre-implemented and available to be easily used.</p>
<p>And so the Java String is a very unique thing within the world of Java. It is actually a structure made up of primitive chars, yet it can itself be declared and used as a primitive, and it can also be declared and used as an object of a class, namely the String class. <br />
</p>
<p>&nbsp;</p>
<h3>String Equality vs Identity</h3>
<p>When working with Strings it is imporant to keep in mind the difference between equality and identiy, and the usage of the <strong>.equals( )</strong> method, vs. the <strong>==</strong> operator. The two Strings  have  &quot;<strong>equality</strong>&quot;, when what they are representing are the same word/s. But their &quot;<strong>identity&quot;</strong> refers to specifically where they are in memory. So two Strings could have equal equality, but not have equal identiy. See the diagram below, but here's a simple example:</p>
<blockquote>
  <p>String a = &quot;sun&quot;;<br />
    String b = new String(&quot;sun&quot;);<br />
    String c = new String(&quot;sun);</p>
</blockquote>
<p>a, b, and c all have equality, but each has a different identity.</p>
<p><br />
  So, a.equals(b), and a.equals(c), and b.equals(c) are all trure.</p>
<p>But a == b, and a == c, and b == c<em></em> are all false.</p>
<p><br />
  Generally, we as programmers will usually be interested in the equality sense of equals, so as a rule of thumb, <strong>always use .equals( ) to test for equality of Strings in Java</strong>.</p>
<p><br />
  <span class="gray">**The below diagram continues the trend of most of this page of notes being a bit beyond what is required for IB CS, but it's good to have an idea about for a variety of reasons.**</span></p>
	</div>

<div align="center"><img src="../Java-Revolution/_Images/Strings-Equality-Memory.jpg" width="1069" height="1104" alt=""/></div>
<div class="backgroundDiv">
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
<p>&nbsp;</p>
<p>EXTRA - NOT AT ALL NEEDED (THOUGH  INTERESTING)</p>
<p><em>One other <strong>minor </strong>thing simply to note at this time is that Strings are &quot;immutable&quot;, meaning that (similar to the way that an array cannot grow) once they are made, they cannont be changed. It may seem as if you can change a String with lines like:</em></p>
<p><em>String x = &quot;hello world&quot;;<br />
  x = &quot;hello world extended a bit&quot;;</em></p>
<p><em>But what is actually happening here is that the first array of chars h e l l o w o r l d gets &quot;orphaned&quot;, and the variable x will create a new literal string of chars another place. Sooner or later Java's garbage collection will realize that the first array of chars is not being pointed to by anything, and so will &quot;mop it up&quot;, but it is a bit inefficient in terms of memory usage. This is particularly true in any loop which seems to work with the same string loop after loop, when actually it is instantiating a new String every time through loop. This isn't that big a deal, and the IB curriculum donesn't worry about it, but for what it's worth, there is one way around this, and that is to use the Java method StringBuffer instead. See Morelli page 318 for more information on this class</em></p>
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