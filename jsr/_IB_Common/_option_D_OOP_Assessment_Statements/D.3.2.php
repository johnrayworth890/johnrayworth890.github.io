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
		<a href="D.3.1.php">Last</a>
	    <a href="D.3.3.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.2</p>
<p>Define the terms: method, accessor, mutator, constructor, signature, return value.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>These are generally related to the object’s actions. See JETS.<br />
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
  Definitions:<br />
  <br />
  <strong>method</strong> - a discrete block of code which specializes in accomplishing a certain task</p>
<p><strong>accessor</strong> - a method which specializes in returning a private variable of an object</p>
<p><strong>mutator</strong> - a method which specializes in changing in some way a private variable of an object</p>
<p> <strong>constructor</strong> - a special method which &quot;constructs&quot; an instance of a certain class. It generally takes in specific parameters which set the private attributes to certain starting values.</p>
<p> <strong>signature</strong> - the specific nature of a method's header - so, </p>
<ul>
  <li>whether it is private or public</li>
  <li>it's return type</li>
  <li>its name</li>
  <li>(in particular) it's order and type of parameters</li>
</ul>
<p><strong>return value</strong> - a value which is returned to where a method is called. The method call therefore evaluates to the return value. The return value may be void, in which case the method accomplishes its task(s) without returning anything.</p>
<p><br />
</p>
<p>More Details: </p>
<p><strong>method</strong> -<em> a discrete block of code which specializes in accomplishing a certain task</em>.<br />
  You should have a pretty good idea of what methods look like by now; most code is grouped into methods, in the case of Java in a block of code held in curly braces { }. In fact, classes of code are basically attributes and methods which act on those attributes. The word &quot;function&quot; can be used interchangeably with &quot;method&quot;.
  <br />
  <br />
</p>
<p><strong>accessor</strong> - <em>a method which specializes in returning a private variable of an object</em>.<br />
To this point, in our template classes, we have called these &quot;get methods&quot;. Here's a quick example:</p>
<pre>public String getColor(){
    return color;
}</pre>
<p><strong><br />
mutator</strong> - <em>a method which specializes in changing in some way a private variable of an object</em>.<br />
To this point, in our template classes, we have called these &quot;set methods&quot;. Here's a quick example:
</p>
<pre>public void setColor(String color){
    this.color = color;
}</pre>
<p> <strong><br />
constructor</strong> - <em>a special method which &quot;constructs&quot; an instance of a certain class. It generally takes in specific parameters which set the private attributes to certain starting values</em>.<br />
As we've seen, a &quot;default&quot; constructor takes in no parameters, and so an instance made with it will just take the default values of the class. Otherwise, that's a purpose of the constructor, to take in and set initial values of the instance's properties. </p>
<p>Remember that the constructor method is special in two ways: 1. it is exactly the name of the class, and 2. it has no return type, not even void. Here's a quick example of a constructor that takes in two parameters:</p>
<pre>public Marker(int length, String color){
    this.length = length;
    this.color = color;
}</pre>
<p> <strong><br />
signature</strong> - <em>the specific nature of a method's header - so, </em></p>
<ul>
  <li><em>whether it is private or public</em></li>
  <li><em>its return type</em></li>
  <li><em>its name</em></li>
  <li><em>(in particular) it's order and type of parameters</em></li>
</ul>
<p>It is worth noting that the signature makes up what is referred to as the &quot;public interface&quot; of the method. It is what (and is all that) other classes can see of the method; its contents are not accessible.<br />
</p>
<p><strong><br />
return value</strong> - <em>a value which is returned to where a method is called. The method call therefore evaluates to the return value. The return value may be void, in which case the method accomplishes its task(s) without returning anything</em>.<br />
Remember that there are three general situations for return values: 1. there is none, in the case of constructors, 2. the return value exists, but it is <strong>void</strong>, i.e. nothing, and 3. the return value is some sort of primitive or object value. <br />
Here is a quick example of a method which returns a value (a primitive double value in this case).:</p>
<pre>public double addTwoNumbers(double a, double b){
    double answer = a + b;
    return answer;
}</pre>
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