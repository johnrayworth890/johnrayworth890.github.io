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
		<a href="D.2.8.php">Last</a>
	    <a href="D.2.10.php">Next</a></p>
</div>	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.9</p>
<p>Discuss the use of programming teams.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>As compared to individuals working alone. Examples include speed to completion, information hiding to reduce module dependencies, expertise in narrow fields (eg testing, documentation), etc.</p>
<p>INT, AIM 5 The need to develop a common “language” to enable collaboration across international frontiers when resolving problems.</p>
<br />
	</div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>Q1. Describe two ways in which programming by a team differs from programming by an individual working alone.</p>

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
<p>One point to make at the start of this is that for sure most modern programs are simply too complex to be managed by one person alone. This was not always the case, but it certainly is now. Which is one reason why interpersonal skills are so important to work on, along with core programming skills.</p>
<p>To highlight the increasing importance of programming teams, you'll note that there's a really interesting move now-a-days for (particularly young) coders to apply for jobs as a team or a group, rather than individually.</p>
<p>Reasons for using programming teams include (as noted above in the Teaching Note)</p>
<p><strong>Efficiency</strong></p>
<p>  Teams can very easily <strong>split up a big job</strong> and work on the pieces individually (decomposition). This is easy with OOP  whereby separate, encapsulated, classes  can use/have/inherit other classes (being developed by other teams), often via interacting with the &quot;public interface&quot; of the class' methods. Important here also are the concepts of information hiding and abstraction, in which the users of other classes do not have to intimately know the inner workings of the classes all the other teams are working on; rather they can just use them according to the documentation provided by those other teams.</p>
<p><strong>Specialization/Expertise</strong> </p>
<p>A team member or parts of a team can become well-practiced and faster at a <strong>certain kind of task</strong>, speeding up the overall efficiency and success of the team. And as mentioned in the teaching note, this is not just different aspects of programming itself, but other related tasks as well, which though they require a certain understanding of coding, are not necessarily coding themselves.</p>
<p><strong>Focus</strong></p>
<p>A team member or parts of a team can focus on their own problem without worrying about the other pieces - which is yet another example of <strong>abstraction</strong>. Such &quot;<strong>information hiding</strong>&quot; of other team's work allows the programmer or team be left alone to solve their own specialized task, which they in turn, keep from complicating the lives of other parts of the overall team. (Remember that this &quot;information hiding&quot; is enabled through encapsulation, where only the public &quot;interface&quot; of other team member work is &quot;publicly&quot; available to other coders on the team.)</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Discuss the use of programming teams.</p>
<p>Programmers can be specialized; some programmers can develop special expertise in one area, like testing, while others focus on user interfaces, for example.  Different programmers can work on different classes independently because of the modularity provided by OOP principles of decompositon. And yes, with many people, various backgounds and ideas can help lead to novel solutions.</p>
<p>&nbsp;</p>
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