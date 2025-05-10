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
		<a href="D.3.8.php">Last</a>
	    <a href="D.3.10.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.9</p>
<p>Discuss the features of modern programming languages that enable internationalization.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, use of UNICODE character sets.</p>
<p>INT When organizations interact, particularly on an international basis, there may be issues of language differences.</p>
	<br /></div>

<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>In relation to the Doctor object, outline the need for extended character sets as used<br />
  by modern programming languages.</p>
<p>----</p>
<p>Discuss the features of modern programming languages that enable the program to be<br />
  sold in other countries</p>
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
<p>JSR Notes:
</p>
<p><strong>Related Links</strong></p>
<p>For an introductory understanding of  ASCII and UNICODE, do take a look at this &quot;<a href="../../_Pro_IT/myLaptop/howComputersWork/howComputersWorkDay1.html">How Computers Work - Day 1</a>&quot;.</p>
<p>And for a more complete understanding of UNICODE,  a big part of <a href="http://johnrayworth.info/jsr/_IB_Common/_topic2AssessmentStatements/2.1.10.php">2.1.10</a> is an in-depth discussion of UNICODE.</p>
<p><strong><br />
  Internationalization vs. Localization</strong></p>
<p>There are two parts/steps for enabling a program to be ready to be used in many different countries/regions. <br />
  <br />
  Step 1 - <strong>Internationalization</strong> <br />
  This is done once, and includes adding all of the features that &quot;<strong>set up</strong>&quot; a program <strong>for potential</strong> use/customization in a particular market. </p>
<p>Step 2 - <strong>Localization</strong> <br />
  This 
  is a <strong>specific customizing process</strong> of readying a program for a particular market, or &quot;<strong>locale</strong>&quot;.</p>
<p>&nbsp;</p>
<h3>  Internationalization</h3>
<p>Software application that are intended for an international market need to be designed and engineered so that they can potentially be adapted to various languages and regions <strong>without further engineering </strong>(i.e. programming)<strong> changes</strong>. And even if you are not sure where the program will be used, you should do your best to include <strong>flexibility</strong> in several areas, such as:</p>
<ul>
  <li>language</li>
  <li>spelling</li>
  <li>calendar</li>
  <li>number</li>
  <li>currency formatting</li>
</ul>
<p>A good place to get a flavor (or is that flavo<strong>u</strong>r? :-) of this is the Language and Region System Preference of the Mac OS, a software program most certainly well internationalized:</p>
<p align="center"><img src="Images/International-Preference.jpeg" width="668" height="492" alt=""/></p>
<p align="center"><img src="Images/International-1.jpeg" width="671" height="492" alt=""/></p>
<p align="center"><img src="Images/International-2.jpeg" width="670" height="491" alt=""/></p>
<p align="center"><img src="Images/International-3.jpeg" width="669" height="492" alt=""/></p>
<p align="center"><img src="Images/International-4.jpeg" width="668" height="581" alt=""/></p>
<p><strong><br />
</strong></p>
<p>&nbsp;</p>
<h3>Localization</h3>
<p><strong>Localization</strong> is the process of <strong>adapting</strong> internationalized software <strong>to a</strong> <strong>specific</strong> <strong>country</strong> or region  by enabling locale-specific components, and double-checking to make sure all required locale-specific features are present, and properly functioning. </p>
<p>Localization will be potentially performed multiple times, for different locales, using the programmed flexibility provided by internationalization. In the process of localization, core programming should not have to be re-engineered; ideally, that core internationalization is programmed only once.</p>
<p>So to reiterate, internationalization is done once, implementing flexibility from the start. And localization is done as/when needed for a specific localized context - for example enabling Thai script, and the Thai calendar to an application for use in Thailand. </p>
<p><strong>Who does Localization?</strong></p>
<p>Note that in the Mac OS example above, it is the user themselves who can do the localization. But most of the time, for specific software applications, the localization will be done by the software company itself on a country-by-country basis, or alternatively by the distributor, or even a technician at a retail outlet.</p>
<p class="green">&nbsp;</p>
<h3>Key Features enabling Internationalization and Localization</h3>
<p>When making programming decisions, two things can help add to the flexibility of your internationalization.</p>
<ol>
  <li>Platform independent high level languages (like <strong>Java</strong>) enable code to run on many platforms.</li>
  <li>Use of common character sets, which support many languages and scripts, like <strong>UNICODE.</strong><br />
     </li>
</ol>
<p><strong>Java Cross-platform Independence</strong></p>
<p>The way Java works as a programming language, it can run on any computer that has an operating system which  has a &quot;Java Virtual Machine&quot;, and  all mainstream operating systems do support this ability. So you don't have to worry that users in a particular region can't use your program because of a particular operating system used there. And neither do you need to produce several different versions of your program, one for each operating system. All you need to do is produce one.</p>
<p>The technical details are covered elsewhere in the curriculum, but basically, when a Java program is compiled, it is only actually &quot;half-compiled&quot; to a .class file, which then goes on to being  compiled the rest of the way, or translated, by the particular Java Virtual Machine installed on a particular kind of computer.</p>
<p>Frankly, this is as much an &quot;intra&quot;-national advantage as it is  an international advantage, but the point is that the more flexible you can make all aspects of your program, the more easily and widely distributed it can be.</p>
<p align="center"><img src="Images/Java-Compilation.jpeg" width="370" height="auto" alt=""/></p>
<div></div>
<p><strong>UNICODE</strong></p>
<p>Unicode is a computing industry standard for the consistent encoding, representation, and handling of text expressed in most of the world's writing systems, maintained by the Unicode Consortium. On June 20th, 2017,  they released the latest version, UNICODE 10.0.0. </p>
<p align="center"><img src="Images/Unicode-Logo.png" width="226" height="216" /></p>
<p><a href="https://unicode-table.com/en/#control-character" target="_blank">https://unicode-table.com/en/#control-character</a> </p>
<p>When it was first devised, UNICODE used 16 bits per character, and so supported, 2 ^ 16, or 65,536 characters. But even though it presently still uses a 16 bit code set, Unicode allows for 17 <a href="http://en.wikipedia.org/wiki/Plane_%28Unicode%29">planes</a>, each of 65,536 possible characters (or 'code points'). This gives a total of over a million possible characters. At present, about 128,000 of this space has been allocated for around 135 modern and historic scripts, along with multiple symbol sets.</p>
<p>Java  developed the char data type in a strictly 16-bit way. So at the point when UNICODE was expanded,  Java could not change its 16 bit char. But there is a workaround for the now possible &quot;supplementary characters&quot;, which is to use a pair of chars. And so Java is still able to work with characters from most scripts in the world.</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:</p>
<p>&quot;Discuss the features of modern programming languages that enable internationalization.&quot;</p>
<p>The features that enable the program to be used in many countries include the use of international character sets, such as UNICODE (so not being limited by ASCII),   having other localization features available due to proper internationalization at the time of initial engineering, and being programmed in &quot;portable&quot; programming languages such as Java.</p>
<div title="Page 21">
  <div>
    <div></div>
  </div>
</div>
<p class="green">&nbsp;</p>
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