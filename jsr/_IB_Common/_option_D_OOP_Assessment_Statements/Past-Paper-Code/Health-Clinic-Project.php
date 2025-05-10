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
	<h2>November 2015 Health Clinic</h2>
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Patient.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2015_healthclinic; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Patient 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">id; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private </span><span class="s1">String name; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private int </span><span class="s1">priority; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private </span><span class="s1">String doctor; 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">Patient(){ 
<a name="l11"><span class="ln">11   </span></a> 
<a name="l12"><span class="ln">12   </span></a>    } 
<a name="l13"><span class="ln">13   </span></a> 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public </span><span class="s1">Patient(</span><span class="s0">int </span><span class="s1">i, String n, </span><span class="s0">int </span><span class="s1">p) 
<a name="l15"><span class="ln">15   </span></a>    { 
<a name="l16"><span class="ln">16   </span></a>        id = i; 
<a name="l17"><span class="ln">17   </span></a>        name = n; 
<a name="l18"><span class="ln">18   </span></a>        priority = p; 
<a name="l19"><span class="ln">19   </span></a>        doctor = </span><span class="s0">null</span><span class="s1">; 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a> 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s0">public void </span><span class="s1">setId(</span><span class="s0">int </span><span class="s1">i) { id = i; } 
<a name="l23"><span class="ln">23   </span></a>    </span><span class="s0">public void </span><span class="s1">setName(String n) { name = n; } 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s0">public void </span><span class="s1">setPriority(</span><span class="s0">int </span><span class="s1">p) { priority = p; } 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">public void </span><span class="s1">setDoctor(String d) { doctor = d; } 
<a name="l26"><span class="ln">26   </span></a> 
<a name="l27"><span class="ln">27   </span></a>    </span><span class="s0">public int </span><span class="s1">getId() { </span><span class="s0">return </span><span class="s1">id; } 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s0">public </span><span class="s1">String getName() { </span><span class="s0">return </span><span class="s1">name; } 
<a name="l29"><span class="ln">29   </span></a>    </span><span class="s0">public int </span><span class="s1">getPriority() { </span><span class="s0">return </span><span class="s1">priority; } 
<a name="l30"><span class="ln">30   </span></a>    </span><span class="s0">public </span><span class="s1">String getDoctor() { </span><span class="s0">return </span><span class="s1">doctor; } 
<a name="l31"><span class="ln">31   </span></a> 
<a name="l32"><span class="ln">32   </span></a>    </span><span class="s0">public </span><span class="s1">String toString() { </span><span class="s0">return </span><span class="s1">id+</span><span class="s2">&quot; &quot;</span><span class="s1">+name+</span><span class="s2">&quot; &quot;</span><span class="s1">+priority+</span><span class="s2">&quot; &quot;</span><span class="s1">+doctor; } 
<a name="l33"><span class="ln">33   </span></a>} 
<a name="l34"><span class="ln">34   </span></a></span></pre>
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
WaitingRoom.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2015_healthclinic; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">WaitingRoom 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">Patient[] patients = </span><span class="s0">new </span><span class="s1">Patient[</span><span class="s2">10</span><span class="s1">]; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s3">// uses default constructor</span><span class="s1"> 
<a name="l7"><span class="ln">7    </span></a> 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">public void </span><span class="s1">add(Patient newPatient) 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s3">// adds the new patient in the next empty array location</span><span class="s1"> 
<a name="l10"><span class="ln">10   </span></a>    { 
<a name="l11"><span class="ln">11   </span></a>        </span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s1">; 
<a name="l12"><span class="ln">12   </span></a>        </span><span class="s0">while </span><span class="s1">((patients[i] != </span><span class="s0">null</span><span class="s1">) &amp;&amp; (i &lt; </span><span class="s2">10</span><span class="s1">)) 
<a name="l13"><span class="ln">13   </span></a>        { 
<a name="l14"><span class="ln">14   </span></a>            i=i+</span><span class="s2">1</span><span class="s1">; 
<a name="l15"><span class="ln">15   </span></a>        } 
<a name="l16"><span class="ln">16   </span></a>        </span><span class="s0">if </span><span class="s1">(i==</span><span class="s2">10</span><span class="s1">) { System.out.println(</span><span class="s4">&quot;No more space in the waiting room.&quot;</span><span class="s1">); } 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s0">else </span><span class="s1">{ patients[i] = newPatient; } 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a> 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s0">public void </span><span class="s1">callNextPatient() 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s3">// finds the next patient, outputs their details</span><span class="s1"> 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s3">// and removes the patient from the array</span><span class="s1"> 
<a name="l23"><span class="ln">23   </span></a>    { 
<a name="l24"><span class="ln">24   </span></a>        </span><span class="s0">int </span><span class="s1">index = </span><span class="s2">0</span><span class="s1">; 
<a name="l25"><span class="ln">25   </span></a>        </span><span class="s0">if </span><span class="s1">(patients[</span><span class="s2">0</span><span class="s1">]==</span><span class="s0">null</span><span class="s1">) 
<a name="l26"><span class="ln">26   </span></a>        { 
<a name="l27"><span class="ln">27   </span></a>            System.out.println(</span><span class="s4">&quot;The waiting room is empty.&quot;</span><span class="s1">); 
<a name="l28"><span class="ln">28   </span></a>        } 
<a name="l29"><span class="ln">29   </span></a>        </span><span class="s0">else</span><span class="s1"> 
<a name="l30"><span class="ln">30   </span></a>        { 
<a name="l31"><span class="ln">31   </span></a>            index = findNextPatientIndex(); 
<a name="l32"><span class="ln">32   </span></a>            remove(index); 
<a name="l33"><span class="ln">33   </span></a>        } 
<a name="l34"><span class="ln">34   </span></a>    } 
<a name="l35"><span class="ln">35   </span></a> 
<a name="l36"><span class="ln">36   </span></a>    </span><span class="s0">private int </span><span class="s1">findNextPatientIndex() 
<a name="l37"><span class="ln">37   </span></a>    </span><span class="s3">// returns the index of the first patient with the</span><span class="s1"> 
<a name="l38"><span class="ln">38   </span></a>    </span><span class="s3">// highest priority in the array patients</span><span class="s1"> 
<a name="l39"><span class="ln">39   </span></a>    { 
<a name="l40"><span class="ln">40   </span></a>        </span><span class="s0">int </span><span class="s1">max = </span><span class="s2">0</span><span class="s1">; 
<a name="l41"><span class="ln">41   </span></a>    </span><span class="s3">//... code missing ...</span><span class="s1"> 
<a name="l42"><span class="ln">42   </span></a>        </span><span class="s0">return </span><span class="s1">max; 
<a name="l43"><span class="ln">43   </span></a>    } 
<a name="l44"><span class="ln">44   </span></a> 
<a name="l45"><span class="ln">45   </span></a>    </span><span class="s0">private void </span><span class="s1">remove(</span><span class="s0">int </span><span class="s1">n) 
<a name="l46"><span class="ln">46   </span></a>    </span><span class="s3">// outputs the data of the patient instance at array index n</span><span class="s1"> 
<a name="l47"><span class="ln">47   </span></a>    </span><span class="s3">// and removes that patient by shifting all remaining patients</span><span class="s1"> 
<a name="l48"><span class="ln">48   </span></a>    </span><span class="s3">// by one index towards the front of the array</span><span class="s1"> 
<a name="l49"><span class="ln">49   </span></a>    { 
<a name="l50"><span class="ln">50   </span></a>    </span><span class="s3">//... code missing ...</span><span class="s1"> 
<a name="l51"><span class="ln">51   </span></a>    } 
<a name="l52"><span class="ln">52   </span></a>} 
<a name="l53"><span class="ln">53   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
WaitingRoomDynamic.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2015_healthclinic; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">import </span><span class="s1">java.util.LinkedList; 
<a name="l4"><span class="ln">4    </span></a> 
<a name="l5"><span class="ln">5    </span></a></span><span class="s0">public class </span><span class="s1">WaitingRoomDynamic 
<a name="l6"><span class="ln">6    </span></a>{ 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">LinkedList&lt;Patient&gt; PatientList = </span><span class="s0">new </span><span class="s1">LinkedList&lt;Patient&gt;(); 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s2">// methods</span><span class="s1"> 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public void </span><span class="s1">add(Patient P) 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s2">// adds a patient at the end of the list</span><span class="s1"> 
<a name="l12"><span class="ln">12   </span></a>    { 
<a name="l13"><span class="ln">13   </span></a>        PatientList.addLast(P); 
<a name="l14"><span class="ln">14   </span></a>    } 
<a name="l15"><span class="ln">15   </span></a> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public void </span><span class="s1">remove() 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s2">// outputs the name of the next patient to see a doctor and</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>    </span><span class="s2">// removes this patient instance from the list</span><span class="s1"> 
<a name="l19"><span class="ln">19   </span></a>    { 
<a name="l20"><span class="ln">20   </span></a>        </span><span class="s0">int </span><span class="s1">index = findNextPatientIndex(); 
<a name="l21"><span class="ln">21   </span></a>        System.out.println(PatientList.get(index).getName()); 
<a name="l22"><span class="ln">22   </span></a>        PatientList.remove(index); 
<a name="l23"><span class="ln">23   </span></a>    } 
<a name="l24"><span class="ln">24   </span></a> 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">private int </span><span class="s1">findNextPatientIndex() 
<a name="l26"><span class="ln">26   </span></a>    { 
<a name="l27"><span class="ln">27   </span></a>        </span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s1">, result = </span><span class="s3">0</span><span class="s1">; 
<a name="l28"><span class="ln">28   </span></a>        Patient current, firstup; 
<a name="l29"><span class="ln">29   </span></a>        firstup = </span><span class="s0">new </span><span class="s1">Patient(); 
<a name="l30"><span class="ln">30   </span></a>        firstup.setPriority(</span><span class="s3">0</span><span class="s1">); 
<a name="l31"><span class="ln">31   </span></a>        </span><span class="s0">while </span><span class="s1">(i &lt; PatientList.size()) 
<a name="l32"><span class="ln">32   </span></a>        { 
<a name="l33"><span class="ln">33   </span></a>            current = PatientList.get(i); 
<a name="l34"><span class="ln">34   </span></a>            </span><span class="s0">if </span><span class="s1">(current.getPriority() &gt; firstup.getPriority()) 
<a name="l35"><span class="ln">35   </span></a>            { 
<a name="l36"><span class="ln">36   </span></a>                firstup = current; 
<a name="l37"><span class="ln">37   </span></a>                result = i; 
<a name="l38"><span class="ln">38   </span></a>            } 
<a name="l39"><span class="ln">39   </span></a>            i=i+</span><span class="s3">1</span><span class="s1">; 
<a name="l40"><span class="ln">40   </span></a>        } 
<a name="l41"><span class="ln">41   </span></a>        </span><span class="s0">return </span><span class="s1">result; 
<a name="l42"><span class="ln">42   </span></a>    } 
<a name="l43"><span class="ln">43   </span></a>} 
<a name="l44"><span class="ln">44   </span></a></span></pre>
	
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

