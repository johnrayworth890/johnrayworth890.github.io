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
		<a href="D.1.1.php">Last</a>
	    <a href="D.1.3.php">Next</a></p>
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
<h3>Preamble:</h3>
<h3><em>A Rose is a Rose is a Rose</em>, sure.</h3>
<h3>But is an Object and Object, an Object??</h3>
<p>Object is one of those terms that can be defined and used several different ways, and a couple of those ways are tricky to explain to begin with. So you have to consider context when answering &quot;what is an object?&quot;. Fully understanding all of this will require a bit more time and spiralling, but for now, consider the following, all slightly differently phrased, questions:</p>
<p>A. What are objects? (as in, generally speaking)</p>
<p>B. What is an object? (focusing in on &quot;an&quot;)</p>
<p>C. What, literally, is an object? (so here we would be thinking in terms of memory)</p>
<p>D. What is a Java object? (i.e. the Java context)</p>
<p>&nbsp;</p>
<p><em>A. What are objects? (as in generally speaking)</em><br />
  Objects are user defined types - i.e. non-primitive types - made by the programmer to represent various classes of things they are working with.
</p>
<p><em>B. What is an object? (focusing in on &quot;an&quot;)</em><br />
An object is a particular instance of a user defined class.</p>
<p><em>C. What, literally, is an object? (so here we would be thinking in terms of memory)</em><br />
  An object, literally, at the memory level of computers, is an address. That address points to  the data associated with the object.
</p>
<p><em>D. What is a Java object?</em><br />
  A Java object is an instance of a user-defined class, which, to one level of hierarchy or another, is ultimately extended from the &quot;mother of all Java classes&quot;, the Object class.
</p>
<h3>&nbsp;</h3>
<h3>Theory of Template Class vs. Object Instance</h3>
<h3>Template Class</h3>
<p>A &quot;template&quot; class is the class which exists as model for making instances of that particular type.  Keep in mind that it actually is a real, coded class. But you can think of it as being abstract because it itself is not used as a particular object- rather it is used as the <em>model</em> to make usable instances/objects. </p>
<p>Another way to think  of a template class is as being a cookie cutter. And the instances/objects made from its model are the usable (eatable!) cookies. The cookie cutter is real, but is is not the object that is actually used when it's time to have a sweet snack!<br />
  <br />
</p>
<h3>Objects &amp; the Instantiation of Objects</h3>
<p>An object is one particular instance of a certain template class. In terms of physically how it exists in the running computer, the object is actually a memory location holding the address of where the attributes and methods of that instance are stored in RAM. Just like a primitive variable, for ease of working with it, rather than trying to remember and keep track of that particular memory address, an object is represented by a certain variable identifier we give it when we &quot;instantiate&quot; it. Below are a few <strong>instantiations</strong> of a particular object of the Student class,  which we have chosen to give it the identifiers student1, student2, and student3. </p>
<blockquote>
  <p>Student student1 = new Student(&quot;Sally&quot;, 18);<br />
    Student student2 = new Student(&quot;Bob&quot;, 17);<br />
    Student student3 = new Student(&quot;Kelly&quot;, 17);
  </p>
</blockquote>
<p>Having executed theses  line, there would exist not only the Student template class - previously programmed - but three particular realizations of the abstract idea of that Student class. So basically copies of the Student class, but with a particular states - Sally - 18, Bob - 17, and Kelly - 17.</p>
<p>Having been instantiated,  objects are conceptually similar to real-world objects: not only do they  consist of a particular state, but they can do all of the behaviors that have been coded in the template class to work with the those attributes. Given the two particular attributes of this class, some likely behaviors would be things such as getting the name and age, and re-setting the name and age.<span class="green"><br />
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
<pre>Student student1 = new Student(&quot;Sally&quot;, 18);
Student student2 = new Student(&quot;Bob&quot;, 17);
Student student3 = new Student(&quot;Kelly&quot;, 17);
//etc.</pre>
<p>The above are three actual <strong>instances</strong> or <strong>objects</strong> of the template class Student.</p>
<p>And each line above is indeed <strong>instantiation</strong> of a unique object of the Student class. Instantiation, then, is making a new instance of an object by creating <strong>new </strong>memory for an address which points to the object, and calls its constructor.</p>
<p>Note that we have been using instances of template classes almost from day one. Here are a couple of examples that should ring a bell:</p>
<pre>Scanner snr = new Scanner(System.in);
String s = new String(&quot;Hello&quot;);</pre>
<p>Above, snr is an instance of the Scanner class, and s is an instance of the String class (though String is a special case and it can be treated as a primitive as well - more on that later on in the Option.) There are lots and lots of other &quot;libraries&quot; of template classes we can make use of later on, along with making our own.</p>
<p>&nbsp;</p>
<p><strong>Memory Usage of Template Classes and Objects</strong></p>
<p>In terms of the &quot;memory use&quot; referred to in the Teaching Note, the original class definition itself takes up a certain amount of memory based on the number and type of data attributes, and the associated methods. But note that each individual object of the class which is instantiated also takes up exactly that much memory again. i.e. each instance of a class has its own attributes (name and grade in the example above) along with its own methods (the constructor and gets and sets for example).</p>
<p>In making an object of a certain class, the main thing we need to do in terms of memory, is find enough available memory to store that object. All objects will have particular memory requirements based on their attributes. So, in the example below, 80 bits will be required to store the two attributes (16 bits for the char + 64 bits for the double). It is the<strong> <em>new</em></strong> operator that is responsible for finding and allotting that new memory. (<em><strong>new</strong></em> is one of the 50 keywords of Java.)</p>
<p>Here's another example of a template class:</p>
<pre><span class="line-number"></span><span class="line-number">1</span> <span class="keyword-directive">package</span> simpleOOPExample;
<span class="line-number">2</span>
<span class="line-number"></span><span class="line-number">3</span> <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> Team {
<span class="line-number">4</span> 
<span class="line-number">5</span>    <span class="comment">//Attributes</span>
<span class="line-number">6</span>     <span class="keyword-directive"></span><span class="keyword-directive">private char teamLetter = 'z';</span>
<span class="line-number">7</span>     <span class="keyword-directive"></span><span class="keyword-directive">private double</span> averageGoals = -999;
<span class="line-number">8</span>     
<span class="line-number">9</span>     <span class="comment"> //Methods</span>
<span class="line-number">10</span>     <span class="keyword-directive">publ</span><span class="keyword-directive">ic</span> Team(<span class="keyword-directive">char</span> teamLetterSent, <span class="keyword-directive">double</span> averageGoalsSent){
<span class="line-number">11</span>         teamName = teamNameSent;
<span class="line-number">12</span>         averageGoals = averageGoalsSent;
<span class="line-number">13</span>     }
<span class="line-number">14</span> 
<span class="line-number">15</span>     //gets... 
<span class="line-number">16</span>     
<span class="line-number">17</span>      //sets...
<span class="line-number">18</span> 
<span class="line-number">19</span>  }
</pre>
		<p>And making instances of it:</p>
		<pre>
<span class="line-number"></span><span class="line-number"> 5</span> 
<span class="line-number"> 6</span> <span class="keyword-directive">package</span> simpleOOPExample;
<span class="line-number"> 7</span> <span class="line-number"></span>
<span class="line-number"> 9</span> <span class="keyword-directive">pu</span><span class="keyword-directive">blic</span> <span class="keyword-directive">class</span> MainClass {
<span class="line-number">10</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">static</span> <span class="keyword-directive">void</span> main(String[] args) {
<span class="line-number">11</span>         Team example = <span class="keyword-directive">new</span> Team(<span class="character">'A'</span>,  3.2);
<span class="line-number">12</span>         Team anotherExample = <span class="keyword-directive">new</span> Team(<span class="character">'B'</span>, 1.6);
<span class="line-number">13</span>         System.out.println(<span class="character">&quot;</span><span class="character">Team</span><span class="character">&quot;</span> + example.getTeamLetter() + <span class="character">&quot;</span><span class="character">has an average goals of</span><span class="character">&quot;</span> + example.getAverageGoals());
<span class="line-number">14</span>         System.out.println(<span class="character">&quot;</span><span class="character">Team</span><span class="character">&quot;</span> + anotherExample.getTeamLetter() + <span class="character">&quot;</span><span class="character">has and average goals of</span><span class="character">&quot;</span> + anotherExample.getAverageGoal());
<span class="line-number">15</span>     }
<span class="line-number">16</span> }
<span class="line-number"></span><span class="line-number"></span></pre>
<p style="text-align: center"><img src="../Java-Revolution/_Images/Object-Declaration.png" width="522" height="501" alt=""/></p>
<p>&nbsp;</p>
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