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
		<a href="D.3.9.php">Last</a>
	    <a href="D.3.10.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.10</p>
<p>Discuss the ethical and moral obligations of programmers.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, adequate testing of products to prevent the possibilities of commercial or other damage. Acknowledging the work of other programmers. The main aims of the Open Source movement should be known.</p>
<p>S/E, AIM 8 An awareness of the ethical considerations when developing new code.</p>
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
<p>----</p>
<p>Explain two ethical issues which should be taken into account when working on the project.</p>
<p>----</p>
<p>In relation to the Treatment object, discuss one ethical consideration when designing software that stores patients and their illnesses.</p>
<p>----</p>
<p>Outline the responsibilities that the programmer has when updating the program.</p>
<p>----</p>
<p>&nbsp;</p>
<h3>Moral Obligations (to The Public)</h3>
<strong>Adequate Testing</strong>
<p>It could be all too easy to simply release your product and &quot;walk away&quot;. But that is definitely not ethical. Certainly for life and death kinds of applications this is obvious. There are myriad programs on which all of our lives depend, whether they be obvious, like the control of our water systems and air-traffic control applications, or others not so obvious like those that control quality of food, or help manage traffic systems, and more. </p>
<p>But even non-life-threatening programs should be coded to properly handle a wide variety of possible exceptions. Not having a program robust like this is no different than a company selling shoes that fall apart in a matter of days, or a clock which loses a minute a day within a few months of use. </p>
<p>Testing is therefore a huge part of any respectable IT company or individual programmer. One bad product, or even a bad version, like Windows 7, can cause customers to &quot;head for the exit&quot; and switch company. (See the obligations to employer section below.)</p>
<p>But, ultimately, it is unethical to produce, and either sell, or even distribute, shoddy work of any form.<br />
  </p>
<p><strong>Public Welfare  Considerations</strong></p>
<p>Programmers have a moral obligation to keep public welfare foremost in their considerations, and not to pursue development of any software which could potentially do harm to people. Software developed solely for <strong>malicious purposes should be shunned</strong>. And adequate care and consideration needs to be taken with controversial and potentially harmful unknown areas such as artificial intelligence. </p>
<p><strong>Privacy Considerations</strong></p>
<p>Every effort should be taken to assure private information of individuals is kept private, and that only necessary information stored, and stored in a secure way. Programmers need do also do their best to assure the private nature of personal information is never used as a means for profit.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Ethical Obligations (to Other Programmers)<br />
</h3>
<p><strong>Acknowledging the Work of Other Programmers</strong></p>
<p>Another thing that is all too easy with software is to use others' work via simple copy and paste. Certainly a lot out there on the Internet is fair game to be used, but even in that case, it should be acknowledged. And certainly the act of taking other code not freely offered is stealing, it's as simple as that. Though copyright laws took a while to catch up to new IT situations, there are now many laws around the world which protect the intellectual property rights of coders of original material.</p>
<p><strong>Obligations to Client &amp; </strong><strong> Employer</strong></p>
<p>As an employee of a company a programmer has an obligation to abide by the code of conduct for that company, and to work towards its benefit, as long as this does not contravene other moral and ethical statutes. And the programmer has an obligation not just to the user of his/her software, but to the client who requisitions its development. The reputation of both the client and the employer stands to be judged on the quality of the software, not just the reputation of the programmer. </p>
<p>&nbsp;</p>
<p align="center"><strong>___________________________________________<br />
  <br />
</strong></p>
<h3><strong>The Open Source Movement</strong></h3>
<p>The open source movement is a  movement of individual programmers who support the use of open source licenses for  software. Open source software is software  made available for anybody to use <em><strong>or</strong></em> modify; its source code is made public ally available.</p>
<p>Finnish software engineer <a href="http://en.wikipedia.org/wiki/Linus_Torvalds" title="Linus Torvalds">Linus Torvalds</a> was among the first to get the open source movement going, with the development of his Linux free operating system. Since then, many groups have come together to produce quality software for free. Indeed, this website, as its backbone, uses  a MySQL database system and PHP scripting, which are both open source. And you very well may be reading this through Firefox, from Mozilla, another key open source group. </p>
<p>The main difference between open source and traditional &quot;proprietary&quot; software is in  the conditions of use imposed on the user by the owner of the software license. With open source software users are granted the right to use both the application itself, and also the code it is programmed in. With proprietary software programs, such as Microsoft Office, users only have the rights to its functionality, i.e .to use MS Word, not see how it was programmed. </p>
<p><strong>Aims and Rationale</strong></p>
<p>Often enough, the rationale for a programmer to take part in the open source movement is to &quot;<strong class="darkblue">make a name for themselves</strong>&quot; by contributing to open source projects, and so career advancement can be a prime motivator of this. Ego also likely enters into the reasons people contribute to the open source movement.</p>
<p>But  there are also many admirable reasons people contribute to the open source movement. For many it is  the simple human <span class="darkblue"><strong>desire to</strong> <strong>create</strong></span>, and share that process. And at the heart of most contribution is also a desire to <strong class="darkblue">help</strong> others and society in general. </p>
<p>Furthermore, most open  source contributors see the value of letting anyone and everyone contribute to solving a big problem, and feel that this approach of &quot;uber&quot; sharing and collaboration can lead to both <strong class="darkblue">better and more novel solutions</strong>, compared to the closed, sterile corporate environment of a Big IT.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:</p>
<p>&quot;Discuss the ethical and moral obligations of programmers.&quot;</p>
<p>Ethical and moral obligations of programmers  relate to both the public, and to those with whom the programmer works with and for. </p>
<p>He/she has an obligation to proved bug-free programs that adhere to high standards of quality so that the user experience is a good one. And these public obligations extend to issues of general public welfare and individual privacy. </p>
<p>The programmers should adhere to these high standards, not just for their own reputation but for that of their client and employer. And to other programmers, the need to respect copyright, acknowledging work which is not their own.</p>
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