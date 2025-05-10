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
		<a href="D.1.8.php">Last</a>
	    <a href="D.1.10.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.9</p>
<p>Explain the need for different data types to represent data items.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>The data types will be restricted to integer, real, string and Boolean.<br />
	
</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>With reference to two examples from the classes on page xyz, explain the benefits<br />
  gained by the use of different data types.</p>

<p>----</p>
<p><span class="line-number"><br />
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
  <br />
  <br />
</p>
<p>JSR Notes:</p>
<h3>Data Types Review</h3>
<p>Because data can come in many forms and sizes there is a need for various data types to suit the particular needs or situation. First, let's review what you should already know about data types:</p>
<p><strong>What a Type Defines</strong></p>
<ul>
  <li>The <strong>&quot;type&quot;</strong> of a particular kind of data in a particular programming language determines:
    <ul>
      <li> how many bits are used used for that paticular data item (16 bits? 32 bits? 64 bits? etc.)</li>
      <li>and how the bits are to be interpreted (as numbers? as characters? as colors? etc.)</li>
      </ul>
  </li>
  </ul>
<p><strong>Kinds of Types</strong></p>
<ul>
  <li>Most modern computer languages recognize five basic categories of data types: 
    <ul>
      <li>Integer (whole numbers)</li>
      <li>Floating point (real numbers)</li>
      <li>Character (and strings of Characters)</li>
      <li>Boolean (true / false values)</li>
      <li>User defined data types (such as Car, Student, PimpedUpOrange, or anything else)  </li>
    </ul>
  </li>
</ul>
<ul>
  <li>Sometimes data may be converted from one type to another, (possibly with loss of precision ), such as from real number to integer (in which the decmial portion will be lost).</li>
  </ul>
<p><strong>What Types are at a Physical Level</strong></p>
<ul>
  <li>Do remember that  all data stored on a computer is ultimately stored as a sequence of binary <strong>bi</strong>nary digi<strong>ts</strong> called bits (i.e. zeros and ones). </li>
  <li>And these bits are physically implemented using two different states, for example wires with two different voltages, or magnetic particles on a hard drive with two different alignments, or spots on an optical disk having two different optical properties.</li>
</ul>
<p><strong>Variables vs. Constants</strong></p>
<p>When certain types are declared, recall also that they can be declared as wither variables, or constants. A <strong>constant</strong>, once declared, cannot have its value changed. In Java, it is the <strong>final</strong> keyword which dictates that the data's value is to be constant. </p>
<blockquote>
  <p>final int NUMBATHROOMS = 6; <span class="comment">//from this point on, the value of x is 45 and cannot be chanaged.</span><br />
    NUMBATHROOMS = 7; <span class="comment">// This line would cause an ERROR. <br />
    It is not possible to change NUMBATHROOMS.</span></p>
</blockquote>
<p>Recall that it is a convention to make constant identifiers ALL CAPS, but that, in and of itself does not make it a constant; it is the use of the reserved word <strong>final</strong>, which does that.</p>
<p>Meantime, a <strong>variable</strong> is another kind of named memory location where a value is stored, but that value can be changed throughout the running of the program. For example:</p>
<blockquote>
  <p>int i = 52;<br />
    System.out.println(i);
      <span class="comment">// 52 is printed out</span><br />
    i++;<br />
    System.out.println(i);  <span class="comment">// 53 is printed out</span></p>
  <p><br />
  </p>
</blockquote>
<p align="center">_____________________________________________________</p>
<h3>&nbsp;</h3>
<h3>The Need for Types</h3>
<p><strong>Reason  for Types # 1. Different Kinds of Data</strong></p>
<p>It makes a lot of sense to have ifferent types to represent different kinds of data. Starting with numbers, it makes sense to have both integer and real number data types. If we had only one general number type,  the maximum and minimum range of integers would be limited by the requirement to look after decimal places, and often decimal places are not necessary. Meantime, it is good to have a data type which can indeed keep track of many decimal places, in order to more accurately represent real number values. And individual characters - on their own, or together as Strings - obviously need to be able to be represented also. Then there's the ever-present boolean situation in programming, and so it makes sense to have a data type specialized to represent true or false only.</p>
<p>Here is more on the need to have each type mentioned in the assessment statement teaching note:</p>
<p><strong>integer</strong> - to represent whole number values, which are used frequently in mathematics. Furthermore, ints are used very frequently for counting type procedures, such as keeping track of how many times a loop should execute, and for naming elements in arrays.</p>
<p><strong>real</strong> - it is important to be able to represent real numbers, since they are used - indeed are expeced to be used - in much mathematics, and real world measurement, and it is often very important to be able to accurately represent precise values to many decimal places</p>
<p><strong>string</strong> - we need to be able to represent words, since words are our main means of human communication. It makes sense to have a data structure which can handle words, i.e. groups of characters, or indeed &quot;strings&quot; of characters; this is easier than dealing directly with arrays of characters.</p>
<p><strong>Boolean</strong> - computers are really good at two basic things: repetition (indeed very, very quick repetition), and working with structures that are able to act/react differently depending on certain conditions. Having a boolean data type allows these structures to operate differntly depending on such variable conditions.</p>
<p><strong>User Defined Types</strong> - Not all programming languages allow the creation of user defined types, but Java and many others do. This allows programmers to develop types which do more than the above primitive types can. User defined types are what we make in Java when we make Temlate classes. So a Car object, or a PimpedUpOrange object are able to do things and store things that primitives alone cannot.</p>
<p>&nbsp;</p>
<p><strong>Reason for Types # 2. Memory Management</strong></p>
<p>The other general need for different types is memory management. From a memory standpoint,  you don't want to waste memory; it's as simple as that. A boolean, in theory, could be represented with just one bit, though in Java it uses 8. An integer does not need as many bits to represent integer values (for example, the Java 32-bit int, representing from -2 billion to +2 billion) as a real number with a fair precision (for example, the 64-bit Java double). And Strings will be as much memory as the number of characters they have (using 16-bit individual Java chars).</p>
<p>So with the memory management view, particularly with the three integer Java data types (short, int and long), and two real number Java data types (float, and double), you want to match your desired integer range/real number precision needs with the appropriate type. Since short can only deal with -32,768 &lt;---&gt; 32,767, you could not use it to work with the population of countries, but if it were to keep track of numbers of students enrolled in various high schools, then it would make sense. And for any real number value for which you need high precision, you need to use double, but if it's just for general outside temperature values, float would be good enough, and not unduly waste memory.</p>
<p>Here's a board diagram which shows how using the int data type for small numbers (in this case, all under 100) wastes memory; the short data type could more efficiently be used:</p>
<p><img src="Images/Int-Memory-Wastage.jpg" width="800" height="auto" alt="int memory wastage" /></p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  &quot;Explain the need for different data types to represent data items.&quot;</p>
<p>Having different data types allow different operations to be carried out depending upon the type of data being worked with. </p>
<p>So, for example, calculations can be performed using integer types, whereas numbers treated as Strings would not be able to be worked with in this way. And doubles can introduce fractional portions to numbers, reflecting real-life scenarios and adding precision. </p>
<p>And in defining what particular types work with, an appropriate amount of memory can be allotted, avoiding wastage. (Java short requires a lot less memory than a Java long, for example.)<br/>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it.png" width="109" height="60" alt=""/></p>
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