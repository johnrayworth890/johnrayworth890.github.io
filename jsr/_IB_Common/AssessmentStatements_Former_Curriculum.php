<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Assessment Statements Home</title>
<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
</head>



<?php

ini_set('session.gc_maxlifetime', '7200');
session_start();

require_once('../phpHelperScripts/jsrCourses_fns.php'); 
require_once('../phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();
//Calling the function to connect to the database, which was included in db_fns.php, which, in turn was included in jsrCourses_fns.php included above.

$loggedInUser = $_SESSION['validUser7'];
echo '<p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a><p>';
echo 'Logged in user: '. $loggedInUser .'<br>';


$linkHere = mysql_connect(returnHost(), returnUser(), returnPassword());
$result1 = mysql_query("select * from pro_it_rubrics where studentName = '".$loggedInUser."'", $linkHere);

if($loggedInUser == "ib_a_Student" or $loggedInUser == "ib_b_Student"){
	echo'<pre>
	
	For JSR Only
	<u>Teaching Strategies</u>:
	
	Try the Southern Methodist guy\'s idea of content at home, a little quiz at the beginning of the next class,
	and then start with "Any questions?". At least for the easier stuff.
	
	And this could work well when getting programming of dossiers going; programming in class, easier Topic
	4 and 7 stuff mainly at home. And maybe for parts of Topic 1 too.
	
	
	</pre>';
}

echo '


<body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="/_topic5FromSyllabus.php">Topic 5</a>
	    <a href="last">Last</a>
	    <a href="next">Next</a></p>
</div>
	
<div class="backgroundDiv">
<h1>Assessment Statements</h1>
<p>Note that for the <i><strong>mock exam</strong></i>, all of the sample questions are prime candidates as questions.<p>
<p>Also note that for many of these kinds of assessment statement questions, point form may be best to answer, and often an <strong>annotated diagram</strong> will be useful along with the written part of your answer.</p>
<i><a href="../pdf-plugin-243.dmg"><strong>pdf</strong> Firefox plug-in for Mac OS 10.6</a> if pdfs don\'t open within your browser.</i><br><br>
<p>Topic 1 - <a href="AssessmentStatements_Former_Curriculum/topic1FromSyllabus.php">System Life Cycle &amp; Software Development</a></p>
<p>Topic 2 - <a href="AssessmentStatements_Former_Curriculum/topic2FromSyllabus.php">Program Contstruction in Java</a></p>
<p>Topic 3 - <a href="AssessmentStatements_Former_Curriculum/topic3FromSyllabus.html">Computing System Fundamentals</a></p>
<p>Topic 4 - <a href="AssessmentStatements_Former_Curriculum/topic4fromSyllabus.html">Computer Mathematics &amp; Logic</a></p>
<p>Topic 5 - <a href="AssessmentStatements_Former_Curriculum/topic5FromSyllabus.php">Abstract Data Structures &amp; Algorithms</a></p>
<p>Topic 6 - <a href="AssessmentStatements_Former_Curriculum/topic6fromSyllabus.html">Further System Fundamentals</a></p>
<p>Topic 7 - <a href="AssessmentStatements_Former_Curriculum/topic7fromSyllabus.html">File Organization</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
	<p></p>	
</body>
</html>';


?>