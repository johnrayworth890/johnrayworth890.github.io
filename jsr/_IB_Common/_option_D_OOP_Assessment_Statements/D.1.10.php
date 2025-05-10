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
		<a href="D.1.9.php">Last</a>
	    <a href="D.2.1.php">Next</a></p>
</div>
	
	
	<div class="backgroundDiv">
	  <div class="roundedCornerDiv">
	    <p>D.1.10</p>
<p>Describe how data items can be passed to and from actions as parameters.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Parameters will be restricted to pass-by-value of one of the four types in D.1.6. (JSR note: probably meant to be D.1.9, not D.1.6.) Actions may return at most one data item.<br />
	</div>
</p>
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

?><p>JSR Notes:
</p>
<p>Viewed initially, this assessment statement can stick out like a bit of a soar thumb, since it's here in the middle of some OOP material. Parameter passing will have been covered in the middle of Topic 4 - particularly as refered to in the Teaching Note above. But first of all being in the Option, we can go into a bit more depth. And secondly, the assessment statement itself is referring to &quot;data items&quot;, and so we can take from that that this is mainly geared at objects being passed as paremeters, not necessarily primitives.</p>
<p>First, here's some &quot;deja vu&quot; notes for a kick start if you need one.</p>
<p>         <em>Additional Coding Notes</em>: <a href="http://johnrayworth.info/jsr/_IB_Common/Java-Revolution/Methods-Part-2.php" target="_blank">Methods Notes - Part 2 - The Return Part</a><br />
           <em>Additional Coding Notes</em>: <a href="http://johnrayworth.info/jsr/_IB_Common/Java-Revolution/Methods-Parameters-and-Return-Values.php" target="_blank">Methods Notes - Part 3 - Parameter Passing</a></p>
<h3><strong><br />
  Parameter Basics</strong></h3>
<p>Paremeters are values sent to and &quot;taken in&quot; by a method, which the method requires to function as intended. In both the method definition, and the method call, the parameters list follows the method name, and is enclosed in a pair of <strong>parentheses</strong>. If there are not parameters required to be received (nor, therefore sent), the parentheses remain empty.</p>
<p>Example of a method which is supposed to recieve parameters:</p>
<blockquote>
  <p>public static void someMethod(int x, Car y)</p>
</blockquote>
<p>And the call to it from another place:</p>
<blockquote>
  <p>someMethod(2, hondaAccord2018) <span class="comment">//correct because int and String sent</span></p>
</blockquote>
<p><br />
  Example of a method which requires no parameters:</p>
<blockquote>
  <p>public static void anotherMethod( )</p>
</blockquote>
<p>And the call to it from another place:</p>
<blockquote>
  <p>anotherMethod( )</p>
</blockquote>
<p>&nbsp;</p>
<p><strong>Matching the Number, Order, and Type</strong></p>
<p>The parameters have to be of a <strong>particular number, and type and order when sent</strong>, to match, exactly the parameter list which is part of the specific method &quot;signature&quot;. </p>
<p><strong>Method Signatures</strong></p>
<p>The signature of a method is it's specific: </p>
<ul>
  <li>accessibility (public/private/protected)</li>
  <li>whether it is static or not, </li>
  <li>return type, </li>
  <li>name, </li>
  <li>and parameter list - ALL OF number, type, and order of the parameters</li>
</ul>
<p>Here is a method signature of a public static method called method1, which takes in three parameters, an int, a boolean, and an array of Car objects, and which is void of a return value:</p>
<blockquote>
  <p>public static void method1(int x, boolean b, Car [ ] cArr)</p>
</blockquote>
<p>And below is another different method. It is different because it has a different signature; namely the order of the parameters. Like the first example, this one is  public and statc,  it is also called method1, and it even takes in an int and a boolean and array of Car objects, just not in the same order as the method above:</p>
<blockquote>
  <p>public static void method1(boolean b, Car [ ] cArr, int x) <br />
    // Ok. This is a different signature than above.</p>
</blockquote>
<p>With the different order of parameters we can say that the two signatures are different. And since they are different signatures, both of these methods could exist in the same class.</p>
<p>But the following method could not be in the same class as the first one above:</p>
<blockquote>
  <p>public static void method1(int num, boolean isRaining, Car [ ] carArray) <br />
    // Not Ok. Such a signature already exists.</p>
</blockquote>
<p>This signature is already taken by the first method above. (Note that the identifier names of the parameters makes no difference, it's their number, type, and order that counts.)</p>
<p><br />
  <br />
  <strong> Full Example
</strong></p>
<p>So, for example, a method might be:</p>
<pre><br />public static void aMethod(boolean b, Car [] c){
    if(b){
    for(int i = 0; i &lt; c.length; i++){
        sout(c[i].getCarMake());
    }
    else{
        sout(&quot;Sorry, you sent false as the boolean variable!&quot;);
    }
}<br />
</pre>
<p>If using this method, we would have to send three, and exactly two, &quot;arguments&quot;, to be received as &quot;parameters&quot;, and send them in exactly the following order: boolean, Car [ ], such as: </p>
<pre><br />aMethod(true, Car [] cars);<br />
</pre>
<p>And the output of this might be:</p>
<blockquote>
  <p>Ford<br />
    Mercedes<br />
    Chevrolet
  </p>
</blockquote>
<p>&nbsp;</p>
<h3><strong>Arguments vs. Parameters</strong></h3>
<p>It's actually not a bad idea  to get nitpicky with this and note that the data that is sent to the method call is best refered to as &quot;arguments&quot;, and the <strong>copy</strong> of that data received by the method is what is best refered to as &quot;parameters&quot;. The reason this is good to note is that in memory, they really are <strong>two differnent things</strong>. Copies, yes, but two different things in memory. This has two major implications, in two situations.</p>
<p><strong>Primitives sent (copied) as Arguments</strong></p>
<p>A primitive value &quot;sent&quot; to a method, where the copy of that method is altered, is not itself changed back where it was &quot;sent&quot;.</p>
<pre>public static void main(String [ ] args){
    int x = 3;
    System.out.printnln(x); <span class="comment">// we see 3</span>
    aMethod(x);
    System.out.printnln(x); <span class="comment">// we still see 3. x was not changed, a copy of it was</span>
}
public static void aMethod(int a){
    System.out.printnln(a); <span class="comment">// we see 3</span>
    a = a * 2;
    System.out.printnln(a); <span class="comment">// we see 6</span>
}

//Overall Output:<br />3<br />3
6
3
</pre>
<p><strong>Objects'  <em>ADDRESS</em> sent (copied) as Arguments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(This includes Arrays)</strong></p>
<p>When an object (including an array) is &quot;sent&quot; as an argument, the same thing happens: a copy of it is made in the receiving method. <strong>But</strong> that copy is <strong><em>A COPY OF THE ADDRESS</em></strong>  at which the original array resides. So any changes made via the copied address (the received parameter) will be reflected in what both are pointing to, the object or array itself. So changes to the array in the called method will be changes to the array in the calling method.</p>
	<pre>
public static void main(String [] args){
    int [] arr = {101, 103, 106, 109};
    System.out.printnln(arr[2]); <span class="comment">// we see 106</span>
    aMethodTakingAnObject(x);
    System.out.printnln(arr[2]); <span class="comment">// we don't see 106. We see 206, </span>
                                        <span class="comment">reflecting the changes made to the array in aMethod().</span>
}<br />
public static void aMethodTakingAnObject(int [] a){
    System.out.println(arr[2]); <span class="comment">// we see 106</span>
    arr[2] = arr[2] + 100;
    System.out.printnln(arr[2]); <span class="comment">// we see 206</span>
}

//Overall output
106
106
206
206

</pre>
	<h3>Final Thoughts</h3>
<p>And one final term point is that in some programming environments we talk of formal and actual parameters, but with Java and OOP, just calling the data sent and taken in &quot;parameters&quot; is fine. </p>
<p>Finally, do match all of this up with OOP constructors, set methods, and other methods which take in parameters. It would be good to look at a full OOP program with the above information on parameters in mind.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
	<p></p>	
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