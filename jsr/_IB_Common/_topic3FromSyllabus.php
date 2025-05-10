<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Topic 3 - Networks</title>

<meta name="description" content="" /><!-- PUT DESCRIPTION OF PAGE HERE -->

<meta name="keywords" content="" /><!-- PUT KEYWORDS HERE; though less supported -->

<link href="../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
<link href="../cssStyleSheets/forSideBarEtc.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../_jwplayer/jwplayer.js"></script>
</head><body>
<p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
	<div class="sidenav">
	  <p><a href="../../index.html">Home</a>
</div>
	<div class="backgroundDiv">
		
<h1>Topic 3—Networks (9 hours)</h1>
<h2>3.1 Networks (9 hours)</h2>
<p><strong><br />
Network fundamentals</strong></p>
<p class="gray">Careful not to spend too much time on any of these first five (other than 3.1.3 when come back to it.<br />
  Do quick first spirals of each, and then before the first test come back and consolidate.<br />
  They are simply not worth the amount of time each could take if you let them.
</p>
<p><a href="_topic3AssessmentStatements/3.1.1.php">3.1.1</a> Identify different types of networks.</p>
<p><a href="_topic3AssessmentStatements/3.1.2.php">3.1.2</a> Outline the importance of standards in the construction of networks.</p>
<p><a href="_topic3AssessmentStatements/3.1.3.php">3.1.3</a> Describe how communication over networks is broken down into different layers. <span class="gray"><br />
  (This can wait until after 3.1.7.)</span></p>
<p><a href="_topic3AssessmentStatements/3.1.4.php">3.1.4</a> Identify the technologies required to provide a VPN.</p>
<p><a href="_topic3AssessmentStatements/3.1.5.php">3.1.5</a> Evaluate the use of a VPN.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/3QhU9jd03a0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p><strong><br />
Data transmission</strong></p>
<p><a href="_topic3AssessmentStatements/3.1.6.php">3.1.6</a> Define the terms: protocol, data packet. <span class="comment">(Now it makes sense to do 3.1.11.)</span><br />
  </p>
    <p><a href="_topic3AssessmentStatements/3.1.11.php">3.1.11</a> Explain how data is transmitted by packet switching.</p>
    <p><a href="_topic3AssessmentStatements/3.1.7.php">3.1.7</a> Explain why protocols are necessary. <span class="comment">(And, now remember to go back to 3.1.3 if skipped before.)</span>      </p>
    <p class="comment">Good place for a test</p>
    <p><a href="_topic3AssessmentStatements/3.1.8.php">3.1.8</a> Explain why the speed of data transmission across a network can vary.</p>
<p><a href="_topic3AssessmentStatements/3.1.9.php">3.1.9</a> Explain why compression of data is often necessary when transmitting across a network.</p>
<p><a href="_topic3AssessmentStatements/3.1.10.php">3.1.10</a> Outline the characteristics of different transmission media.</p>
<iframe width="280" height="157" src="https://www.youtube.com/embed/AEaKrq3SpW8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p><strong><br />
Wireless networking</strong></p>
<p><a href="_topic3AssessmentStatements/3.1.12.php">3.1.12</a> Outline the advantages and disadvantages of wireless networks.</p>
<p><a href="_topic3AssessmentStatements/3.1.13.php">3.1.13</a> Describe the hardware and software components of a wireless network.</p>
<p><a href="_topic3AssessmentStatements/3.1.14.php">3.1.14</a> Describe the characteristics of wireless networks.</p>
<p><a href="_topic3AssessmentStatements/3.1.15.php">3.1.15</a> Describe the different methods of network security.</p>
<p><a href="_topic3AssessmentStatements/3.1.16.php">3.1.16</a> Evaluate the advantages and disadvantages of each method of network security.</p>
<p>And the wireless introduction to the notes video for the class of 2018:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/HSTCfBWLSYM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  <br />
</p>
</div>
	<p></p>	
</body>
</html>

<?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();
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

/* $query3 = "INSERT INTO pro_it_homework VALUES('$loggedInUser','$homework', '$hwAndStudent', '', '', '', '', '', '', '', '')";
mysql_query($query3); */



		//Looping Through all of some query
/* if($section == 'Block_IB_a'){
	$studentsRestult = mysql_query("select * from ib_a_students where section = 'Block_IB_a' and assignType = '".$letterForKindOfGrade."' order by userName", $linkHere);	
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

@charset "UTF-8";
a {
	color: #0000CC;
	text-decoration: none;
}
.linksJSR {
	color: #333333;
}

-->
</style>