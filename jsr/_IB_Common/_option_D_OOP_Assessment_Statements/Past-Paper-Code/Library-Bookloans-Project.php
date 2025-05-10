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

<!--<link href="../../../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />-->
	<style type="text/css">
.ln { color: #999999; font-weight: normal; font-style: normal; }
.s0 { color: rgb(0,0,128); font-weight: bold; }
.s1 { color: rgb(0,0,0); }
		.backgroundDiv {
    background-color: #FFFFFF;
    padding-left: 140px;
    padding-right: 140px;
    padding-top: 40px;
    padding-bottom: 20px;
    margin-left: 100px;   /*was 10%, should be same as .sideNav width forSideBar */
    margin-right: 10%;
		
	overflow-x: hidden; /*so no horizontal scrolling when whole div width visible on screen,, along with margin: 0 auto;*/
}

</style></head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p><div class="backgroundDiv"> 
	<h2>May 2015 Library Bookloans</h2>
	<br />
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Student.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2015_library_bookloans; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">import </span><span class="s1">java.util.*; 
<a name="l4"><span class="ln">4    </span></a></span><span class="s0">public class </span><span class="s1">Student 
<a name="l5"><span class="ln">5    </span></a>{ 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">studentID; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">String studentName; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private </span><span class="s1">Loan[] booksBorrowed = </span><span class="s0">new </span><span class="s1">Loan[</span><span class="s2">10</span><span class="s1">]; 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">private int </span><span class="s1">numBooks = </span><span class="s2">0</span><span class="s1">; 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">Student(</span><span class="s0">int </span><span class="s1">studentID, String studentName) 
<a name="l11"><span class="ln">11   </span></a>    { 
<a name="l12"><span class="ln">12   </span></a>        </span><span class="s0">this</span><span class="s1">.studentID=studentID; 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s0">this</span><span class="s1">.studentName=studentName; 
<a name="l14"><span class="ln">14   </span></a>    } 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public </span><span class="s1">Loan getLoan (</span><span class="s0">int </span><span class="s1">x) 
<a name="l16"><span class="ln">16   </span></a>    { 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s0">return this</span><span class="s1">.booksBorrowed[x]; 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a>    </span><span class="s0">public void </span><span class="s1">addLoan(Loan book) 
<a name="l20"><span class="ln">20   </span></a>    { 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s0">this</span><span class="s1">.booksBorrowed[numBooks] = book; 
<a name="l22"><span class="ln">22   </span></a>        numBooks++; 
<a name="l23"><span class="ln">23   </span></a>    } 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s0">public int </span><span class="s1">getStudentID() 
<a name="l25"><span class="ln">25   </span></a>    { 
<a name="l26"><span class="ln">26   </span></a>        </span><span class="s0">return this</span><span class="s1">.studentID; 
<a name="l27"><span class="ln">27   </span></a>    } 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s0">public </span><span class="s1">String getStudentName() 
<a name="l29"><span class="ln">29   </span></a>    { 
<a name="l30"><span class="ln">30   </span></a>        </span><span class="s0">return this</span><span class="s1">.studentName; 
<a name="l31"><span class="ln">31   </span></a>    } 
<a name="l32"><span class="ln">32   </span></a>}</span></pre>
	
	<BODY BGCOLOR="#ffffff">
<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Loan.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2015_library_bookloans; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">import </span><span class="s1">java.util.*; 
<a name="l4"><span class="ln">4    </span></a></span><span class="s0">public class </span><span class="s1">Loan 
<a name="l5"><span class="ln">5    </span></a>{ 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">bookID; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">String bookTitle; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private </span><span class="s1">Date d; 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">static int </span><span class="s1">numBooksLoaned = </span><span class="s2">0</span><span class="s1">; 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">Loan(</span><span class="s0">int </span><span class="s1">bookID, String bookTitle) 
<a name="l11"><span class="ln">11   </span></a>    { 
<a name="l12"><span class="ln">12   </span></a>        </span><span class="s0">this</span><span class="s1">.bookID = bookID; 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s0">this</span><span class="s1">.bookTitle = bookTitle; 
<a name="l14"><span class="ln">14   </span></a>        </span><span class="s0">this</span><span class="s1">.d = </span><span class="s0">new </span><span class="s1">Date(); </span><span class="s3">//set date borrowed</span><span class="s1"> 
<a name="l15"><span class="ln">15   </span></a>        numBooksLoaned = numBooksLoaned +</span><span class="s2">1</span><span class="s1">; 
<a name="l16"><span class="ln">16   </span></a>    } 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public int </span><span class="s1">getBookID() 
<a name="l18"><span class="ln">18   </span></a>    { 
<a name="l19"><span class="ln">19   </span></a>        </span><span class="s0">return this</span><span class="s1">.bookID; 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s0">public </span><span class="s1">String getBookTitle() 
<a name="l22"><span class="ln">22   </span></a>    { 
<a name="l23"><span class="ln">23   </span></a>        </span><span class="s0">return this</span><span class="s1">.bookTitle; 
<a name="l24"><span class="ln">24   </span></a>    } 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">public </span><span class="s1">Date getDate() 
<a name="l26"><span class="ln">26   </span></a>    { 
<a name="l27"><span class="ln">27   </span></a>        </span><span class="s0">return this</span><span class="s1">.d; 
<a name="l28"><span class="ln">28   </span></a>    } 
<a name="l29"><span class="ln">29   </span></a>    </span><span class="s0">public void </span><span class="s1">setBookID(</span><span class="s0">int </span><span class="s1">id) 
<a name="l30"><span class="ln">30   </span></a>    { 
<a name="l31"><span class="ln">31   </span></a>        </span><span class="s0">this</span><span class="s1">.bookID = id; 
<a name="l32"><span class="ln">32   </span></a>    } 
<a name="l33"><span class="ln">33   </span></a>    </span><span class="s0">public void </span><span class="s1">setBookTitle(String title) 
<a name="l34"><span class="ln">34   </span></a>    { 
<a name="l35"><span class="ln">35   </span></a>        </span><span class="s0">this</span><span class="s1">.bookTitle = title; 
<a name="l36"><span class="ln">36   </span></a>    } 
<a name="l37"><span class="ln">37   </span></a>    </span><span class="s0">public void </span><span class="s1">setDate(Date d) 
<a name="l38"><span class="ln">38   </span></a>    { 
<a name="l39"><span class="ln">39   </span></a>        </span><span class="s0">this</span><span class="s1">.d = d; 
<a name="l40"><span class="ln">40   </span></a>    } 
<a name="l41"><span class="ln">41   </span></a>} 
<a name="l42"><span class="ln">42   </span></a></span></pre>
		
		<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
MainForLibrary.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2015_library_bookloans; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForLibrary { 
<a name="l4"><span class="ln">4    </span></a> 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l6"><span class="ln">6    </span></a>        Student temp; 
<a name="l7"><span class="ln">7    </span></a>        Student[] borrowers = </span><span class="s0">new </span><span class="s1">Student[</span><span class="s2">100000</span><span class="s1">]; 
<a name="l8"><span class="ln">8    </span></a>        temp = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s2">93001</span><span class="s1">, </span><span class="s3">&quot;Jones&quot;</span><span class="s1">); 
<a name="l9"><span class="ln">9    </span></a>        temp.addLoan(</span><span class="s0">new </span><span class="s1">Loan(</span><span class="s2">210001</span><span class="s1">, </span><span class="s3">&quot;The Sky&quot;</span><span class="s1">)); 
<a name="l10"><span class="ln">10   </span></a>        borrowers[</span><span class="s2">93001</span><span class="s1">] = temp; 
<a name="l11"><span class="ln">11   </span></a>        temp = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s2">3012</span><span class="s1">, </span><span class="s3">&quot;Zang&quot;</span><span class="s1">); 
<a name="l12"><span class="ln">12   </span></a>        temp.addLoan(</span><span class="s0">new </span><span class="s1">Loan(</span><span class="s2">210121</span><span class="s1">, </span><span class="s3">&quot;The Animals&quot;</span><span class="s1">)); 
<a name="l13"><span class="ln">13   </span></a>        borrowers[</span><span class="s2">3012</span><span class="s1">] = temp; 
<a name="l14"><span class="ln">14   </span></a>        borrowers[</span><span class="s2">93001</span><span class="s1">].addLoan(</span><span class="s0">new </span><span class="s1">Loan(</span><span class="s2">210002</span><span class="s1">, </span><span class="s3">&quot;The Spooks&quot;</span><span class="s1">)); 
<a name="l15"><span class="ln">15   </span></a>        temp = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s2">93002</span><span class="s1">, </span><span class="s3">&quot;Nguyen&quot;</span><span class="s1">); 
<a name="l16"><span class="ln">16   </span></a>        temp.addLoan(</span><span class="s0">new </span><span class="s1">Loan(</span><span class="s2">210011</span><span class="s1">, </span><span class="s3">&quot;The Ocean&quot;</span><span class="s1">)); 
<a name="l17"><span class="ln">17   </span></a>        borrowers[</span><span class="s2">93002</span><span class="s1">] = temp; 
<a name="l18"><span class="ln">18   </span></a>        System.out.println(borrowers[</span><span class="s2">93001</span><span class="s1">].getStudentName()); 
<a name="l19"><span class="ln">19   </span></a>        System.out.println(borrowers[</span><span class="s2">93001</span><span class="s1">].getLoan(</span><span class="s2">1</span><span class="s1">).getBookTitle()); 
<a name="l20"><span class="ln">20   </span></a>        System.out.println(borrowers[</span><span class="s2">3012</span><span class="s1">].getLoan(</span><span class="s2">0</span><span class="s1">).getBookTitle()); 
<a name="l21"><span class="ln">21   </span></a> 
<a name="l22"><span class="ln">22   </span></a>        System.out.println(borrowers[</span><span class="s2">93001</span><span class="s1">].getStudentName()); 
<a name="l23"><span class="ln">23   </span></a>        System.out.println(borrowers[</span><span class="s2">93001</span><span class="s1">].getLoan(</span><span class="s2">1</span><span class="s1">).getBookTitle()); 
<a name="l24"><span class="ln">24   </span></a>        System.out.println(borrowers[</span><span class="s2">3012</span><span class="s1">].getLoan(</span><span class="s2">0</span><span class="s1">).getBookTitle()); 
<a name="l25"><span class="ln">25   </span></a>    } 
<a name="l26"><span class="ln">26   </span></a>} 
<a name="l27"><span class="ln">27   </span></a></span></pre>
	</div>	

</body>
</html>

<?php
ini_set('session.gc_maxlifetime', '7200');
ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../../../phpHelperScripts/allThreeScriptsHelper.php'); 
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

