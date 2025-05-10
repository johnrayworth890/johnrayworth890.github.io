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
		<a href="D.1.5.php">Last</a>
	    <a href="D.1.7.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.1.6</p>
<p>Describe the relationships between objects for a given problem.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>The relationships that should be known are dependency (“uses”), aggregation (“has a”) and inheritance (“is a”).</p>
<p>LINK Thinking abstractly.</p>
<p>AIM 4 Applying thinking skills critically to decompose scenarios.</p>
<br />
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

?><p>JSR Notes:<br />
  <br />
</p>
<p><em><strong>Decomposition Leads to Relationships between Classes</strong></em></p>
<p>In thinking about how to address a larger problem/system with an OOP approach, you first set about decomposing the problem into smaller problems, thereby forming different types/classes. But as you do so, you will start to see that there are specific ways in which the various types/classes releate to each other. OOP classes are seen to have generally three kinds of relationships:</p>
<ul>
  <li>the uses-a relationship</li>
  <li>the has-a relationship</li>
  <li>the is-a relationship</li>
</ul>
<p class="green"> </p>
<h3><strong>Relationship Concepts</strong></h3>
<ul>
  <li>Dependency (&ldquo;uses&rdquo;) - During some activity, one type of object uses another type of object
    
    <ul>
      <li>Car &ldquo;uses&rdquo; Squeege</li>
      <li>Bicycle &ldquo;uses&rdquo; Pump</li>
    </ul>
  </li>
  <li>Aggregation (&ldquo;has a&rdquo;) - One type of object contains another or is composed of another
    
    <ul>
      <li>Car &ldquo;has a&rdquo; Engine</li>
      <li>Bicycle &ldquo;has a&rdquo; Wheel</li>
    </ul>
  </li>
  <li>Inheritance (&ldquo;is a&rdquo;) - One type of object is a more specific type of a general type
    
    <ul>
      <li>Car &ldquo;is a&rdquo; Vehicle</li>
      <li>Bicycle &ldquo;is a&rdquo; Vehicle</li>
</ul>
  </li>
</ul>
<p><br />
</p>
<p>&nbsp;</p>
<h3>Relationship Diagrams</h3>
<p>Here are a couple of diagrams to get you thinking about how these kinds of relationships between classes/objects exist in larger systems.</p>
<blockquote>
  <p><strong>General Diagram example</strong>:</p>
</blockquote>
<p align="center"><img src="Images/Object-Heirarch-Example.jpg" width="700" height="auto" alt="object hierarchy example" /></p>
<p>&nbsp;</p>
<blockquote>
  <p><strong>UML-style Diagram example</strong>:</p>
</blockquote>
<p align="center"><img src="Images/Prague-Public-Transport-Diagaram.jpg" width="542" height="756" alt="transit diagram" /></p>
<p align="center" class="comment">(JSR Note - when Photoshop correctly licenses, draw in lines with &quot;has a&quot; to Driver from Bus and Tram.)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Relationships In (Java) Code</h3>
<p><strong>Dependencey/</strong>&quot;<strong>uses</strong>&quot; is whenever an object of another class is used by a given class. So in a MainGUI class, for example, we will often use a SortAndSearch class, and a SaveAndOpen class; they do work for us, but from another class. Do note why a &quot;<strong>uses</strong>&quot; relationship is know as a &quot;<strong>dependency</strong>&quot; - this is because the one will not work without its ability to use the other. And this can be problematic (see next assessment statement).</p>
<pre>

<span class="gray">//&quot;Uses a&quot; example
//Below, MyClass uses an instance of ClassA.</span>

public class MyClass{
    public static void main(String args[]){
        int x = Math.random() * 60;
        int y = Math.random() * 200;
        ClassA a = new ClassA(x, y)</p>
        if(x &gt; 30 &amp;&amp; y &lt; 100){
            System.out.println(<strong>a.someClassAMethod()</strong>);      
            <span class="gray">// this is the &quot;<strong>uses</strong>&quot; dependency relationship</span>
        }
        else{
            System.out.println(&quot;The criteria were not met.&quot;);
        }
    }
}

  </pre>
<p><strong>Aggregation/</strong>&quot;<strong>has a</strong>&quot; is when we make an instance of one class in another &quot;<strong>template class</strong>&quot;. </p>
<blockquote>
  <pre>
<span class="gray">//&quot;Has a&quot; example
//Below, this template class includes an instance of another template class as one of its attributes</span>

public class ATemplateClass{

    private String s = &quot;not set yet&quot;;
    private int size = -999;
    <strong>private OtherClass o</strong>c;      <span class="gray"> 
    // this is the &quot;<strong>has a</strong>&quot; aggregation relationship</span>

    public ATemplateClass(){
    }

    public ATemplateClass(String s, int size, OtherClass oc){
        this.s = s;
        this.size = size;
        this.oc = oc;
    }

    <span class="gray">//accessor methods<br />
    //modifier methods</span>
}
   </pre>
</blockquote>
<p><strong>Inheritance</strong> is  when a class inherits (&quot;extends&quot;) another. For example, there could be an ISBEmployee class which has attributes of name and address, and all other specialized employee classes, such as ISBTeacher, ISBAssistantTeacher, and ISBAdministrator would inherit these attributes (and their related methods), as well as add others of their own. When inheritance takes place, it is a &quot;<strong>is a</strong>&quot; relationship; an ISBTeacher is indeed an ISBEmployee, though it does have a few more attributes and actions as well.</p>
<blockquote>
  <pre>
<span class="gray">//Inheritance example
//Showing that ANewClass is a sub-class of AnotherClass.</span>

public class <strong>ISBTeacher</strong> <strong>extends ISBEmployee</strong>{        
<span class="gray">// this line, above, shows the &quot;<strong>is a</strong>&quot; inheritance situation</span>
    private String name;
    private int idNumber;

    public ANewClass(boolean isFemale, String name, int idNumber){
        super(isFemale);
        this.name = name;
        this.idNumber = idNumber;
    }
   <span class="gray"> //etc.</span>
}
    </pre>
</blockquote>
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