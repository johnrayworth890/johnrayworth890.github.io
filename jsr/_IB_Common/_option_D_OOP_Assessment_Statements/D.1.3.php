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
		<a href="D.1.2.php">Last</a>
	    <a href="D.1.4.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.3</p>
<p>Construct unified modeling language (UML) diagrams to represent object designs.</p>
<p><span class="comment">JSR: This would be better stated:<br />
  Construct unified modeling language (UML) diagrams to represent </span>template class<span class="comment"> designs.</span></p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>LINK Connecting computational thinking and program design.<br />
</p>
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
<p>&nbsp;</p>
<p>UML stands for <strong>Universal Modeling Language</strong>, which is a unified, internationally agreed upon way of doing modeling of a wide variety things, including several software tasks such as flow charts, and this, <strong>class diagrams</strong>.</p>
<p>Below the diagrams is the actual code that would be represented by this example.</p>
<p><br />

</p>
<p><img src="Images/UML-Example.png" width="226" height="260" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Images/Student-Class-UML-Diagram.jpg" width="447" height="409" alt="student class uml" /></p>
<blockquote>
  <blockquote>
    <blockquote>
      <p>&nbsp;</p>
    </blockquote>
  </blockquote>
</blockquote>
<h3>UML Class Diagram Conventions</h3>
<p>The class name goes at the top<br />
  Then there is a section for data attributes<br />
  Then there is a section for all the methods
</p>
<p> <strong>-</strong> indicates private (for attributes, mainly)</p>
<p><strong>+</strong> indicates public (for methods, mainly)</p>
<p><strong>parameters</strong> are given both a <strong>name and a type</strong>, which follows a colon <strong>:</strong></p>
<p><strong>return values</strong> are only indicated by <strong>type only</strong>, which follows a colon <strong>:</strong></p>
<p><strong>arrays</strong> are given the type and [0..*] (NOTE: I don't have examples for arrays in the diagram above.)<br />
  for example, as a parameter <strong>+ setCourses(courses: String[0..*])</strong><br />
and as a return value <strong>+ getCourse: String[0..*]</strong></p>
<p>&nbsp;</p>
<h3><strong>Actual code represented by the above UML Class Diagrams</strong>:</h3>
<pre>
 7
 8 <span class="literal">public</span> <span class="literal">class</span> <span class="ST1">Student</span> {
 9     
10     <span class="comment">//Attributes</span>
11     <span class="literal">private</span> String <span class="ST2">name</span> = <span class="string">&quot;</span><span class="string">not set yet</span><span class="string">&quot;</span>;
12     <span class="literal">private</span> <span class="literal">int</span> <span class="ST2">grade</span> = -999;
13   
14     
15     <span class="comment">//Constructors</span>
16     <span class="literal">public</span> <span class="ST1">Student</span>(){   
17     }
18     
19     <span class="literal">public</span> <span class="ST1">Student</span>(String name, <span class="literal">int</span> grade){
20         <span class="literal">this</span>.<span class="ST2">name</span> = name;
21         <span class="literal">this</span>.<span class="ST2">grade</span> = grade;
22     }
23     
24     
25     <span class="comment">//Accessor Methods</span>
26     <span class="literal">public</span> String <span class="ST1">getName</span>(){
27         <span class="literal">return</span> <span class="ST2">name</span>;
28     }
29     
30     <span class="literal">public</span> <span class="literal">int</span> <span class="ST1">getGrade</span>(){
31         <span class="literal">return</span> <span class="ST2">grade</span>;
32     }
33     
34     
35     <span class="comment">//Modifier Methods</span>
36     <span class="literal">public</span> <span class="literal">void</span> <span class="ST1">setName</span>(String name){
37         <span class="literal">this</span>.<span class="ST2">name</span> = name;
38     }
39     
40     <span class="literal">public</span> <span class="literal">void</span> <span class="ST1">setGrade</span>(<span class="literal">int</span> grade){
41         <span class="literal">this</span>.<span class="ST2">grade</span> = grade;
42     }
43     
44     
45     <span class="comment">//Other Methods</span>
46     <span class="literal">public</span> <span class="literal">void</span> <span class="ST1">printOutStudentInfo</span>(){
47         System.<span class="ST3">out</span>.println(<span class="string">&quot;</span><span class="string">The student&#39;s name is </span><span class="string">&quot;</span> + <span class="ST2">name</span> + 
48                 <span class="string">&quot;</span><span class="string">, and they are in grade </span><span class="string">&quot;</span> + <span class="ST2">grade</span> + <span class="string">&quot;</span><span class="string">.</span><span class="string">&quot;</span>);
49     }
50 }
51 

</pre>
<p>Here is another UML Class Diagram &quot;template class&quot; example, this time, with three attributes:</p>
<p><img src="Images/Metro-Class.jpg" width="459" height="320" alt="metro class" /></p>
<p>&nbsp;</p>
<h3>Full Examples of UML Class Diagrams</h3>
<p>This might be jumping forward quite a bit, depending on when you do D.1.3, but here are a couple of full class diagrams, including all the kinds of relationships you are responsible for knowing about in the OOP option.</p>
<p><img src="Images/Student-OOP-UML-Web.png" width="891" height="426" alt=""/></p>
<p>&nbsp;</p>
<p><img src="Images/Bank-OOP-Project.png" width="889" height="752" alt=""/></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><strong>Alternative UML &amp; IB Style Class Diagrams</strong></h3>
<p class="comment">Though &quot;standard&quot;, you'll see a bit of variation in UML diagrams. It can be argued that since UML is primarily for you the programmer, to help keep yourself organized, that's OK. But since you will be working with others,  the more standard you can keep your UML, the better.</p>
<p class="gray">You'll note in particular that the way UML class diagrams are constructed in IB documentation varies significantly, as seen in the marking schemes from year to year. Below is a pretty typical &quot;IB style&quot; UML class diagram. Where such IB sourced UML appears in my website, I'll label them &quot;IB style&quot;. And you should be comfortable with this style, but do recognize it is not at all standard UML. </p>
<p><img src="Images/Basic-Sample-UML-2014-IB-Style.jpg" width="180" height="184" alt="basic uml" /></p>
<p><span class="gray">Please, when you do your own UML diagrams, even for IB exams, stick with the  standard approach used by most programmers, as shown above, at the top of this page.</span></p>
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