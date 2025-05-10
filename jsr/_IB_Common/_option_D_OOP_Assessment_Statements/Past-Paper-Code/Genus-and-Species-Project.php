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

</style>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p><div class="backgroundDiv"> 
	<h2>May 2014 Genus & Species</h2>
	<br />
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Genus.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2014_genus_species; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Genus { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">private </span><span class="s1">String genusName; 
<a name="l5"><span class="ln">5    </span></a> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">public </span><span class="s1">Genus(){ 
<a name="l7"><span class="ln">7    </span></a> 
<a name="l8"><span class="ln">8    </span></a>    } 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">Genus(String genusName){ 
<a name="l11"><span class="ln">11   </span></a>        </span><span class="s0">this</span><span class="s1">.genusName = genusName; 
<a name="l12"><span class="ln">12   </span></a>    } 
<a name="l13"><span class="ln">13   </span></a> 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public </span><span class="s1">String getGenusName() { 
<a name="l15"><span class="ln">15   </span></a>        </span><span class="s0">return </span><span class="s1">genusName; 
<a name="l16"><span class="ln">16   </span></a>    } 
<a name="l17"><span class="ln">17   </span></a>} 
<a name="l18"><span class="ln">18   </span></a></span></pre>
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Species.java</FONT>
</center></TD></TR></TABLE>
	<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2014_genus_species; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Species </span><span class="s0">extends </span><span class="s1">Genus{ 
<a name="l4"><span class="ln">4    </span></a> 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String speciesName; 
<a name="l6"><span class="ln">6    </span></a> 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">Species( String s, String g ) 
<a name="l8"><span class="ln">8    </span></a>    { 
<a name="l9"><span class="ln">9    </span></a>        </span><span class="s0">super</span><span class="s1">(g); 
<a name="l10"><span class="ln">10   </span></a>        setSpeciesName(s); 
<a name="l11"><span class="ln">11   </span></a>    } 
<a name="l12"><span class="ln">12   </span></a> 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s0">public void </span><span class="s1">setSpeciesName(String s){ speciesName = s; } 
<a name="l14"><span class="ln">14   </span></a> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public </span><span class="s1">String getSpeciesName(){ </span><span class="s0">return </span><span class="s1">speciesName; } 
<a name="l16"><span class="ln">16   </span></a> 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public </span><span class="s1">String toString() 
<a name="l18"><span class="ln">18   </span></a>    { 
<a name="l19"><span class="ln">19   </span></a>        </span><span class="s0">return </span><span class="s2">&quot;Species: &quot; </span><span class="s1">+ getGenusName() + </span><span class="s2">&quot; &quot; </span><span class="s1">+ speciesName; 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a> 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s0">public boolean </span><span class="s1">equals(Species s) 
<a name="l23"><span class="ln">23   </span></a>    { 
<a name="l24"><span class="ln">24   </span></a>        </span><span class="s0">return </span><span class="s1">speciesName.equals(s.getSpeciesName()); 
<a name="l25"><span class="ln">25   </span></a>    } 
<a name="l26"><span class="ln">26   </span></a>} 
<a name="l27"><span class="ln">27   </span></a></span></pre>
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Specimen.java</FONT>
</center></TD></TR></TABLE>
	<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2014_genus_species; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Specimen 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String name; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">cageNumber; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">Species toa; </span><span class="s2">// &quot;Type Of Animal&quot;</span><span class="s1"> 
<a name="l8"><span class="ln">8    </span></a> 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">public </span><span class="s1">Specimen(String a, </span><span class="s0">int </span><span class="s1">c, Species s) { 
<a name="l10"><span class="ln">10   </span></a>        setName(a); 
<a name="l11"><span class="ln">11   </span></a>        setCage(c); 
<a name="l12"><span class="ln">12   </span></a>        setTOA(s); 
<a name="l13"><span class="ln">13   </span></a>    } 
<a name="l14"><span class="ln">14   </span></a> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public void </span><span class="s1">setName(String a){ name = a; } 
<a name="l16"><span class="ln">16   </span></a> 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public void </span><span class="s1">setCage(</span><span class="s0">int </span><span class="s1">c){ cageNumber = c; } 
<a name="l18"><span class="ln">18   </span></a> 
<a name="l19"><span class="ln">19   </span></a>    </span><span class="s0">public void </span><span class="s1">setTOA(Species s){ toa = s; } 
<a name="l20"><span class="ln">20   </span></a> 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s0">public </span><span class="s1">String getName(){ </span><span class="s0">return </span><span class="s1">name; } 
<a name="l22"><span class="ln">22   </span></a> 
<a name="l23"><span class="ln">23   </span></a>    </span><span class="s0">public int </span><span class="s1">getCage(){ </span><span class="s0">return </span><span class="s1">cageNumber; } 
<a name="l24"><span class="ln">24   </span></a> 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">public </span><span class="s1">Species getTOA(){ </span><span class="s0">return </span><span class="s1">toa; } 
<a name="l26"><span class="ln">26   </span></a> 
<a name="l27"><span class="ln">27   </span></a>    </span><span class="s0">public </span><span class="s1">String toString() 
<a name="l28"><span class="ln">28   </span></a>    { 
<a name="l29"><span class="ln">29   </span></a>        </span><span class="s0">return </span><span class="s1">name + </span><span class="s3">&quot; is a &quot; </span><span class="s1">+ toa + </span><span class="s3">&quot; in cage &quot; </span><span class="s1">+ cageNumber; 
<a name="l30"><span class="ln">30   </span></a>    } 
<a name="l31"><span class="ln">31   </span></a>} 
<a name="l32"><span class="ln">32   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
MainForMay2014.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2014_genus_species; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">import </span><span class="s1">java.util.LinkedList; 
<a name="l4"><span class="ln">4    </span></a> 
<a name="l5"><span class="ln">5    </span></a></span><span class="s0">public class </span><span class="s1">MainForMay2014 { 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l7"><span class="ln">7    </span></a>        Species human = </span><span class="s0">new </span><span class="s1">Species ( </span><span class="s2">&quot;homo&quot;</span><span class="s1">, </span><span class="s2">&quot;sapiens&quot; </span><span class="s1">); 
<a name="l8"><span class="ln">8    </span></a>        System.out.println( human.toString() ); 
<a name="l9"><span class="ln">9    </span></a>    } 
<a name="l10"><span class="ln">10   </span></a> 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s3">//Post conditions: output the number of specimens of the given species in the zoo.</span><span class="s1"> 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s0">public void </span><span class="s1">countSpecimens( Specimen[] animals, Species s ){ 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s3">//To Do</span><span class="s1"> 
<a name="l14"><span class="ln">14   </span></a>    } 
<a name="l15"><span class="ln">15   </span></a> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s3">//Post conditions: will generate a list of the different species in the zoo.</span><span class="s1"> 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public void </span><span class="s1">listSpecies( Specimen[] animals ){ 
<a name="l18"><span class="ln">18   </span></a>        </span><span class="s3">//To Do</span><span class="s1"> 
<a name="l19"><span class="ln">19   </span></a>    } 
<a name="l20"><span class="ln">20   </span></a> 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s0">public </span><span class="s1">LinkedList makeList(Specimen[] animals ) 
<a name="l22"><span class="ln">22   </span></a>    { 
<a name="l23"><span class="ln">23   </span></a>        </span><span class="s3">// insert your code here</span><span class="s1"> 
<a name="l24"><span class="ln">24   </span></a>        </span><span class="s0">return new </span><span class="s1">LinkedList&lt;Species&gt;();</span><span class="s3">//for now just to take away the return red squiggly</span><span class="s1"> 
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





<style type="text/css">
<!--
/*pre {
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
-->*/
</style>