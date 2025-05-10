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
		<a href="D.4.2.php">Last</a>
	    <a href="../_topic5AssessmentStatements/5.1.3.php">Next</a></p>
</div>
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.3</p>
<p>Construct algorithms that use recursion.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>This is limited to a method that returns no more than one result and contains either one or two recursive calls.</p>
<p>LINK Connecting computational thinking and program design.</p>
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
<p>Not the most likely of questions to be honest, and arguably so, since you don't just go around turning iterative loops into recursive ones, for the reasons mentioned elsewhere about the memory penalty experienced with running recursive functions. And neither do you, as an every day occurrence, come up with a novel situation that can be solved in only a recursive way.</p>
<p>Never-the-less, we could, for arguments sake turn any iterative programming function into a recursive one. Here are some examples:</p>
<p>1. Use recursion to print out 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, BLAST OFF!</p>
<pre>public static void blastOff(int i){
        System.out.print(i + &quot; &quot;);
        i--;
        if(i &gt; 0){
                blastOff(i);
        }
        else{
                return;
        }
}

public static void main(String args []){
        blastOff(10);
        System.out.println(&quot;BLAST OFF!&quot;);
}
</pre>
<p>2. Use recursion to loop through a upper case word and change all the letters to lower case, and print them out one letter at a time.</p>
	<pre>public&#32;static&#32;void&#32;toLowerCase(String&#32;s){<br />&#32;&#32;&#32;&#32;    char&#32;c&#32;=&#32;s.charAt(0);<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;char&#32;d&#32;=&#32;(char)(c&#32;+&#32;32);<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;System.out.print(d&#32;+&#32;&quot;&quot;);<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;String&#32;s1&#32;=&#32;s.substring(1);<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;if(s1.length()&#32;&gt;&#32;0){<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;toLowerCase(s1);<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;}<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;else{<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;return;<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;}<br />}

public&#32;static&#32;void&#32;main(String&#32;args[])&#32;{<br />&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;toLowerCase(&quot;HELLO&quot;);<br />}</pre>
	<p>&nbsp;</p>
	<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
    <pre></pre>
    <br />
</p>
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