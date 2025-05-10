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
<script type="text/javascript" src="../../_jwplayer/jwplayer.js"></script>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_Extension_From_Syllabus.php">OOP HL</a>
		<a href="../_recursion_Topic5andOOPFromSyllabus.php">Recursion</a>
	    <a href="../_topic5AssessmentStatements/5.1.16.php">Last</a>
	    <a href="D.4.4.php">Next</a></p>
</div>
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.4</p>
<p>Trace recursive algorithms. </p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>All steps and calls must be shown clearly.</p>
<p>LINK Connecting computational thinking and program design.<br />
	</p></div>
<p>&nbsp;</p>


<p class="line-number">Sample Question - <strong>FORMER CURRICULUM </strong>- Not so much tracing, but a good overall recursive question.:</p>
<p class="line-number"><em>Given a program which functions like a linked list and has a recursive </em>count <em>method (HL 2 May 2008, question 1):</em></p>
<p class="line-number">(e) State the name of the programming technique used in the countUp method used<br />
  in the List class. [1 mark]<br />
</p>
<p class="line-number">To use this method the following statement is used.<br />
  output(list.count());<br />
  <br />
  (f) State the sequence of steps that flow from executing the above statement and<br />
state clearly how the count method stops executing. [4 marks]</p>
<p>&nbsp;</p>
<?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
$loggedInUser = $_SESSION['validUser7'];
if($loggedInUser == 'examPrepUser'){
	echo '<p class="line-number"><u>Marks Scheme</u><br><br>
	(e) Recursion; [1 mark]<br><br>
(f) An explanation is required not just a trace. Award [4 marks] for a correct<br>
answer, and award [2 marks] for a reasonable attempt at a trace.<br>
Call to method count executes a call to the countUp method and passes the<br>
address of head and assigns to variable n;<br>
Recursively return 1 + call to method countUp again passing next;<br>
This recursive calling process continues until n points to null;<br>
Call sequence terminates and the sequence of 1 + 1 + 1 + 1 is evaluated and<br>
returned to the original calling statement; [4 marks]';
	
}

?>


<p class="line-number">Sample Question - <strong>FORMER CURRICULUM</strong>:</p>
<p class="line-number">Consider the following recursive algorithm.<br />
<pre>
  int recur(int b){
  	if (b==0)<br />       	 return 1;
  	else
       	 return 2*recur(b-1);
  }</pre>
<p>(a) State two features of a recursive algorithm. [2 marks]<br />
  (b) State the value returned if the method is called by recur(3). [2 marks]</p>
</p>
<p>
  <?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
$loggedInUser = $_SESSION['validUser7'];
if($loggedInUser == 'examPrepUser'){
	echo '<p class="line-number"><u>Marks Scheme</u><br><br>
	(a) Award up to [2 marks max].<br>
The algorithm calls itself;<br>
There is a “simple”/terminating case;<br>
There is a “more difficult” case that becomes increasingly “simpler”; [2 marks]<br><br>
(b) Award [2 marks] for correct answer.<br>
[2 marks]</p>';
	
}

?>


<p>JSR Notes:</p>
<h3>Recursion Exercises</h3>
<p><a href="https://codingbat.com/java" target="_blank">CodingBat.com</a> for lots of good exercises.</p>
<p>These below, from a textbook I used to use tea=============ching AP CS, by Leon Schramm.</p>
	</div>
<p align="center"><img src="../Java-Revolution/_Images/Tracing-Recursive-Method.jpg" width="952" height="713" alt="Recursive Tracing" /></p>
	<div class="backgroundDiv">
<p>Above is an image of the tracing  exercise m4.</p>
<p>And here is  a video showing how to do the tracing exercise m5 below: <br />
  <br />
  <iframe width="510" height="314" src="https://www.youtube.com/embed/qysAsqxfsfY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
  <br />
</p>
<p>The idea is that when the first instance of the recursive method is called, the if condition is not true, so the method goes to the else block, in which another instance of the method is called. We show that in the trace table above as the call of m4(6, 7) is 7 + m4(5, 7). But we don't know what m4(5.7) is, since the &quot;a&quot; variable is still not 0. So another call to the m4 method is required, and so on, until, finally variable &quot;a&quot; is indeed 0, from which point we can work on up through the &quot;stacked&quot; calls.</p>
<pre>
  public int m1(int n)                  // m1(6) 
  {
     if (n == 1)
        return 25;
     else
        return n + m1(n-1);
  }</p>
<p><strong></strong>
  public int m2(int n)                 // m2(5) 
  {
     if (n == 5)
        return 0;
     else
        return n + m2(n+1);
  }<br />

  public int m3(int n)                  // m3(6)  
  {
     if (n == 1)
        return 1;
     else
        return n * m3(n-1);
  }<br />

  public int m4(int a, int b)                 // m4(6,7) 
  {
     if (a == 0)
        return 0;
     else
        return b + m4(a-1,b);
  }</p><p>-------------------------- Similar straigt-fowrard exercises continued below</p>
</pre>
<h3>Classic Recursive Exercises<br>
</h3>
<pre>
<strong><br />Factorial</strong>

try: factorial(5)

<br />public&#32;static&#32;int&#32;factorial(int&#32;n){<br />&#32;&#32;&#32;&#32;if(n&#32;==&#32;1){<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;return&#32;1;<br />&#32;&#32;&#32;&#32;}else{<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;return&#32;n&#32;*&#32;factorial(n&#32;-&#32;1);<br />&#32;&#32;&#32;&#32;}<br />}

<strong><br />Fibonacci Sequence</strong>

try: fibonacci(6)

<br />public&#32;static&#32;int&#32;fibonacci(int&#32;n){<br />&#32;&#32;&#32;&#32;if(n&#32;==&#32;0&#32;||&#32;n&#32;==&#32;1){<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;return&#32;n;<br />&#32;&#32;&#32;&#32;}else{<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;return&#32;fibonacci(n&#32;-&#32;1)&#32;+&#32;fibonacci(n&#32;-&#32;2);<br />&#32;&#32;&#32;&#32;}<br />}

There are two ways you can approach coming to the solution of a two 
recursive call in one line problem. One, showing the tree structure, and
the other a regular trace table. Both seen below.

<img src="Images/Fibonacci-recursive-calls-diagram.jpg" width="678" height="399" alt=""/>

<img src="Images/Fibonacci-trace.jpg" width="474" height="439" alt=""/>


<strong><br />Recursive Binary Search</strong>

try the following array:  <br />45 &nbsp;&nbsp;&nbsp;62  &nbsp;&nbsp;&nbsp;64  &nbsp;&nbsp;&nbsp;71 &nbsp;&nbsp;&nbsp; 75 &nbsp;&nbsp;&nbsp; 83 &nbsp;&nbsp;&nbsp; 88 &nbsp;&nbsp;&nbsp; 89 &nbsp;&nbsp;&nbsp; 94 &nbsp;&nbsp;&nbsp; 101 &nbsp;&nbsp;&nbsp; 112 &nbsp;&nbsp;&nbsp; 145 &nbsp;&nbsp;&nbsp; 152 <br />and searching for 89<br />Note that practically you have to &quot;kick-start&quot; a recursive binary search with a <br />helper function, so just assume the array above sent, along with 0, 12, 145<br /><br />
public static int recursiveBinarySearch(int[] arr, int low, int high, int key) {
    
    if (low &lt; high) {
        int mid = low + high/ 2; 
        if(k == arr[mid]{
            return mid;  
        else if (key &lt; arr[mid]) {
            return recursiveBinarySearch(arr, low, mid-1, key);  <span class="comment">// so high sent as mid - 1</span>
            
        } else { <span class="comment">//i.e. key &gt; arr[mid]</span>
            return recursiveBinarySearch(arr, mid+1, high , key);<span class="comment"> // so low sent as mid + 1</span>
        } 
    }
    return -1;  
}

<img src="Images/Binary-search-trace.jpg" width="474" height="285" alt=""/>
<p>&nbsp;</p><p>-------------------------- Continuation of similar straight-forward exercises from above<br />

  public int m5(int a, int b)                 //  m5(5,3)                 
  {
     if (a == 0)
        return 1;
     else
        return b * m5(a-1,b);
  }


  public int m6(int a, int b)                 // m6(3,5) 
  {
     if (b == 0)
        return 1;
     else
        return a * m6(a,b-1);
  }<strong></strong>


  public int m7(int a, int b)                 // m7(7,3) 
  {
     if (a &lt; b)
        return 5;
     else
        return b + m7(a-1,b+1);
  }<strong></strong>


  public int m8(int n)                 // m8(6) 
  {
     if (n == 1 || n == 0)
        return 0;
     else
        return n + m8(n-1) + m8(n-2);      //So this will require branching tracing
  }</p>
</pre>
<h3>Further Recursion Examples from the Morelli Textbook</h3>
<p>Make sure you look at both of these examples, and the hints for understanding them in-between.</p>
<p><img src="../../_IB_a/__IB_a-HW/images/Recusisve-Character-Printing-Forward.jpg" width="650" height="1214" /></p>
<p><strong><em>Hints for understanding and following both of these, above and below:</em></strong></p>
<p>- The difference between the two methods is mainly because of  the order in which the printing out of the letter and the recursive call are made.</p>
<p>- In the diagram, each lower block is the instance of the method that was called in the block above.</p>
<p>- A method is not finished until you get to (in the diagram) its final semi-colon.</p>
<p>- In recursion, the methods that call other methods recursively are not out of memory until those that it called are finished; they are placed on a stack of unfinished methods.</p>
<p>- It is the interruption of the recursive calls which is the secret to how things work.</p>
<p>- In the code, recall that the charAt() method of the String class prints out the character at a certain element number. So for the String &quot;hello world&quot;, charAt(7) would print return 'w'.</p>
<h3></h3>
<p><img src="../../_IB_a/__IB_a-HW/images/Recursive-Character-Printing-Reverse.jpg" width="650" height="1013" /></p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p>&nbsp;</p>
<pre></pre>
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