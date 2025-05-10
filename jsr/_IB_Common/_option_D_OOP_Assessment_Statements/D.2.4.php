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
		<a href="D.2.3.php">Last</a>
	    <a href="D.2.5.php">Next</a></p>
</div>	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.4</p>
<p>Explain the advantages of encapsulation.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, the scope of data should be confined to the object in which it is defined as far as possible in order to limit side effects and dependencies.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>
<p>Q1. By making reference to any of <em>the above classes</em>, describe two benefits that a programming team would gain from the use of encapsulation.</p>

<p>----</p>
<p>Q2. Outline two benefits provided by encapsulation.</p>

<p>----</p>
<p>Q3. When creating objects, encapsulation is an important design consideration. Outline, with direct reference to the Xyz class, how security can be enhanced by using encapsulation.</p>
<p>----</p>

<p>Q4. In relation to the Abc class, outline one advantage of encapsulation.</p>

<p>----</p>
<p>Q5. Outline two advantages that the programming team should expect from using an OOP approach.</p>

-----
<p>(By the way, in case you missed it, 5 questions from five years of past papers, all asking the same thing. Hint, hint...)<span class="line-number"><br />
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
<h3><br />
  Encapsulation Main Advantage - Data Hiding / Security: &quot;Don't mess with me!&quot;  </h3>
<p>We keep our attributes private - that in a nutshell is encapsulation - so that no other classes of objects can &quot;mess with&quot; our attributes. And remember that there are two ways to &quot;mess with&quot; attributes</p>
<blockquote>
  <p><strong>1.</strong> &quot;Don't mess with <em>my data</em>!&quot; in a <strong>traditional data security </strong>sense<strong>,</strong> accessing or changing information.</p>
  <p><strong>2.</strong> &quot;Don't mess with <em>my code</em>!&quot; in order to <strong>prevent data being worked with in a way that is unstable</strong>.</p>
</blockquote>
<p>The BankAccount class makes for a good, classic example of the traditional security situation: only the BankAccount instance should be able to work directly with the attributes savingsBalance, or checkingBalance. Otherwise, someone else could program something to directly access those attributes and change them.</p>
<pre>class BankAccount{</p><br />...<br />   private double savingsBalance = 100;<br />...<br />   public void adjustSavingsBalance(Code authenticationCode, String password, double amount){<br />       for(int i = 0; i &lt; codes.length; i++){<br />            if(codes[i].getAuthenticationCode == authenticationCode)
                if(codes[i].getPassword.equals(password)){<br />                    savingsBalance += amount;
                }
                else{
                    System.out.println(&quot;Wrong password for the entered account.&quot;);
                }<br />            }<br />        }<br />}
</pre>
<p>A person wishing to use a certain BankAccount instance would go, from another class:</p>
<pre>Code myAuthenticationCode = new authenticationCode(&quot;John Rayworth&quot;, 123412134); 
bankAccountInstnace.adjustSavingsBalance(myAuthenticationCode, good@#$pass987word, -10);</pre>
<p>But if they tried to go:</p>
<pre>bankAccountInstnace.savingsBalance = -1000000;
</pre>
<p>It would not work, because savingsBalance cannot be directly accessed outside of the BankAccount class.</p>
<p>Without encapsulation - i.e. if savingsBalance was either &quot;public&quot;, or just non-private double savingBalance, the above line would work! And anyone with access to the code could drain or add to anyone's bank account.</p>
<p>&nbsp;</p>
<h3><strong>Further Advantages of Encapsulation's Modularity</strong></h3>
<p>Here is the  Teaching Note from above, which suggests further advantages of encapsulation:</p>
<p><em>&quot;For example, the scope of data should be confined to the object in which it is defined as far as possible in order to limit side effects and dependencies.</em>&quot;<strong><br />
</strong></p>
<p>This association of Attributes and Methods within one protected class leads also to:  </p>
  <blockquote>
      <p><strong>3. </strong>Modularity  makes for <strong>easier debugging and testing</strong>, and speedier completion. Further there can be a <strong>clearer view</strong>/understanding of each section of the problem. (Compare this to a <a href="https://www.youtube.com/watch?v=J0hDuCa_KlY" target="_blank">punch-card</a> program!!)<br />
    </p>
      <p><strong>4.</strong> <strong>Dependencies are limited</strong> so the issues of broken connections and waterfall issues are minimized, since data is primarily worked with inside the class where it is defined. (Think of an encapsulated castle.)</p>
  </blockquote>
  <p>Protection / Security Via Data-Hiding leads to:</p>
  <blockquote>
    <p><strong><br />
      </strong></p>
    <p>&nbsp;</p>
  </blockquote>
  <blockquote>
    <p>&nbsp;</p>
    </blockquote>
  <p>&nbsp;</p>
  <p><strong>In Summary, Back to the Assessment Statement:<br />
  </strong>Explain the advantages of encapsulation.</p>
  <p>The advantages are actually many, but a couple of key things lead to other advantages, and there's one overall benefit. So:</p>
  <p>By placing all attributes and methods that relate to a particular object/entity together, data is protected; the data can only be manipulated in ways dictated by the methods that work with it. <strong>This results in  improved stability and reliability of programs. </strong></p>
  <p><br />
  </p>
  <p>If you wanted to include all of the above specific advantages into <strong> one Mega answer</strong> it would look something like this:</p>
    <p>Encapsulation brings the primary advantage of stability and reliability in programs. This is done via data protection, in that data attributes, made private, can only be accessed and manipulate in specific ways controlled by their public methods. And the general grouping of attributes and their related methods adds to clarity, resulting in  easier understanding and less errors. Modularity of design, via encapsulation, also adds to the ease of maintenance, testing, and speed of development.</p>
    <p><em><br/>
    </em></p>

<p>&nbsp;</p>
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