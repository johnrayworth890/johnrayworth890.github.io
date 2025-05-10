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
	    <a href="/_topic5FromSyllabus.php">Topic 5</a>
	    <a href="last">Last</a>
	    <a href="next">Next</a></p>
</div>
	
<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.2</p>
<p>Distinguish between an object (definition, template or class) and instantiation.</p>
<p class="comment">JSR Note: This is better stated:<br />
  Distinguish between the template class definition, and the instantiation of objects of that class.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students must understand the difference in terms of code definitions, memory use and the potential creation of multiple instantiated objects.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>Q1. A large company with locations in different cities has taken an OOP approach in creating an<br />
administration program that manages all aspects of its business. These aspects include:<br />
- the sale of all of the different products that the company manages<br />
- the salaries for managers, office staff and sales personnel.<br />
</p>
<p>By making use of an example from the above scenario, distinguish between a class<br />
  and an instantiation of a class.</p>

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
<p>&nbsp;</p>
<p>JSR Notes:</p>
<h3>Theory of Template Class vs. Object Instance</h3>
<h3>Template Class</h3>
<p>A &quot;template&quot; class is the class which exists as model for making instances of that particular type. You can think of it as &quot;the idea&quot; for a certain object. Keep in mind that it actually is a real, coded class. But you can think of it as being abstract because it itself is not used as a particular object- rather it is used as the <em>model</em> to make usable instances/objects. </p>
<p>You can think of the template class as being the cookie cutter. And the instances/objects made from its model are the usable (eatable!) cookies. The cookie cutter is real, but is is not the object that is actually used when it's time to have a sweet snack!<br />
  <br />
</p>
<h3>Objects &amp; the Instantiation of Objects</h3>
<p>An object is one particular instance of a certain template class. In terms of physically how it exists in the running computer, the object is actually a memory location holding the address of where the attributes and methods of that instance are stored in RAM. Just like a primitive variable, for ease of working with it, rather than trying to remember and keep track of that particular memory address, an object is represented by a certain identifier we give it when we &quot;instantiate&quot; it. Below is the <strong>instantiation</strong> of a particular object of the Student class, in which we have chosen to give it the identifier s. </p>
<p>Student s = new Student(&quot;Sally&quot;, 18);</p>
<p>Having executed this  line, there would exist not only the Student template class - previously programmed - but a particular realization of the abstract idea of that Student class. (So basically a copy of the Student class, but with a particular state - Sally, and 18.)</p>
<p>Having been instantiated,  objects are conceptually similar to real-world objects: not only do they  consist of a particular state, but they can do all of the behaviors that have been coded in the template class to work with the those attributes. Given the two particular attributes of this class, the likely behaviors would be things such as getting the name and age, and re-setting the name and age.<span class="green"><br />
  <br />
   </span></p>
<p>&nbsp;</p>
<h3>Actual Java Implementation </h3>
<p><strong>Template Class Definition</strong></p>
<p>First you make the template class (and then you make instances of it in another class). So my Student &quot;template&quot; class might be defined as:</p>
<pre>public class Student{
    private String name = &quot;not set yet&quot;;
    private int age = -999;

    public Student(String name, int grade){
        this.name = name;
        this.age = age;
    }

    //gets...
   
    //sets...
}</pre>
<p>The above code is the actual <strong>class definition</strong> of the Student class. Or put another way, we can say it is the Student &quot;template class&quot;. 
</p>
<p>&nbsp;</p>
<p><strong>Making an Instance/Object of a Template Class</strong></p>
<p>After having made a template class,  you then <em>use</em> the template class by making <strong>instances </strong> of it. Or put another way, you make <strong>objects</strong> of that class. This  could be just one, or a  handful of instances/objects, but usually you end up making many instances/objects of a certain class.</p>
<p>So from a &quot;main&quot; etc. class, you would see &quot;instantiation&quot; statements (with the new operator):</p>
<pre>Student s = new Student(&quot;Sally&quot;, 18);
Student s1 = new Student(&quot;George&quot;, 16);
Student s2 = new Student(&quot;John&quot;, 17);
//etc.</pre>
<p>The above are three actual <strong>instances</strong> or <strong>objects</strong> of the template class Student.</p>
<p>And each line above is indeed <strong>instantiation</strong> of a unique object of the Student class. Instantiation, then, is making a new instance of an object by creating <strong>new </strong>memory for an address which points to the object, and calls its constructor.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Memory Usage of Template Classes and Objects</strong></p>
<p>In terms of the &quot;memory use&quot; referred to in the Teaching Note, the original class definition itself takes up a certain amount of memory based on the number and type of data attributes, and the associated methods. But note that each individual object of the class which is instantiated also takes up exactly that much memory again. i.e. each instance of a class has its own attributes (name and grade in the example above) along with its own methods (the constructor and gets and sets for example).</p>
<p>&nbsp;</p>
<p><strong>Back to the Assessment Statement</strong> &quot;Distinguish between an object (definition, template or class) and instantiation&quot;, here is how you could address it in a sentence:</p>
<p>A class describes/provides the template for a particular object, whereas an instantiation of a class actually creates an object for that class.<br/>
For example: A Student class would contain attributes and actions that describe a student, and an instantiation would represent a particular student. </p>
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