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
	<h2>November 2014 RollingStock & Trains</h2>
	<br />
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
RollingStock.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">RollingStock 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">mIDNumber; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private double </span><span class="s1">mWeight; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">RollingStock(</span><span class="s0">int </span><span class="s1">ID, </span><span class="s0">double </span><span class="s1">weight) 
<a name="l8"><span class="ln">8    </span></a>    { 
<a name="l9"><span class="ln">9    </span></a>        mIDNumber = ID; 
<a name="l10"><span class="ln">10   </span></a>        mWeight = weight; </span><span class="s2">// Weight is in kilograms</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a>    } 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s2">// Accessor methods</span><span class="s1"> 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s0">public double </span><span class="s1">getWeight() { </span><span class="s0">return </span><span class="s1">mWeight; } 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public int </span><span class="s1">getID() { </span><span class="s0">return </span><span class="s1">mIDNumber; } 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s2">//...</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s2">// Other methods</span><span class="s1"> 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s2">//...</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>}</span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Engine.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Engine </span><span class="s0">extends </span><span class="s1">RollingStock 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private double </span><span class="s1">mPullingWeight; </span><span class="s2">// maximum weight engine can pull</span><span class="s1"> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">public </span><span class="s1">Engine(</span><span class="s0">int </span><span class="s1">ID) 
<a name="l7"><span class="ln">7    </span></a>    { 
<a name="l8"><span class="ln">8    </span></a>        </span><span class="s0">super</span><span class="s1">(ID, </span><span class="s3">120000</span><span class="s1">); </span><span class="s2">// Engines weigh 120000 kilograms</span><span class="s1"> 
<a name="l9"><span class="ln">9    </span></a>        mPullingWeight = </span><span class="s3">1400000</span><span class="s1">; </span><span class="s2">// Engines can pull 1400000 kilograms</span><span class="s1"> 
<a name="l10"><span class="ln">10   </span></a>    } 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s2">// Accessor methods</span><span class="s1"> 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s0">public double </span><span class="s1">getWeight() { </span><span class="s0">return super</span><span class="s1">.getWeight(); } 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s2">//...</span><span class="s1"> 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s2">// Other methods</span><span class="s1"> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s2">// ...</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>} 
<a name="l17"><span class="ln">17   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Wagon.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Wagon </span><span class="s0">extends </span><span class="s1">RollingStock 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">Parcel[] mParcels; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">mParcelCount; 
<a name="l7"><span class="ln">7    </span></a> 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">public </span><span class="s1">Wagon(</span><span class="s0">int </span><span class="s1">ID) 
<a name="l9"><span class="ln">9    </span></a>    { 
<a name="l10"><span class="ln">10   </span></a>        </span><span class="s0">super</span><span class="s1">(ID, </span><span class="s2">32000</span><span class="s1">); </span><span class="s3">// Empty wagon weighs 32000 kilograms</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a>        mParcels = </span><span class="s0">new </span><span class="s1">Parcel[</span><span class="s2">100</span><span class="s1">]; 
<a name="l12"><span class="ln">12   </span></a>        mParcelCount = </span><span class="s2">0</span><span class="s1">; 
<a name="l13"><span class="ln">13   </span></a>    } 
<a name="l14"><span class="ln">14   </span></a> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s3">// Accessor methods</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public int </span><span class="s1">getWagonID() { </span><span class="s0">return this</span><span class="s1">.getID(); } 
<a name="l17"><span class="ln">17   </span></a> 
<a name="l18"><span class="ln">18   </span></a>    </span><span class="s0">public double </span><span class="s1">getWeight() 
<a name="l19"><span class="ln">19   </span></a>    { 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s3">// Code to be written</span><span class="s1"> 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s0">return </span><span class="s1">-</span><span class="s2">999</span><span class="s1">;</span><span class="s3">//just to get rid of the red squigglies of the return statement</span><span class="s1"> 
<a name="l22"><span class="ln">22   </span></a>    } 
<a name="l23"><span class="ln">23   </span></a>    </span><span class="s3">//...</span><span class="s1"> 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s3">// Other methods</span><span class="s1"> 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s3">//...</span><span class="s1"> 
<a name="l26"><span class="ln">26   </span></a>} 
<a name="l27"><span class="ln">27   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Train.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Train 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">Engine[] mEngines; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private </span><span class="s1">Wagon[] mWagons; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private int </span><span class="s1">mEngineCount; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private int </span><span class="s1">mWagonCount; 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">private int </span><span class="s1">mTrainNumber; 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">private double </span><span class="s1">mWeight; </span><span class="s2">// Total weight in kilograms</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a> 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s0">public </span><span class="s1">Train(</span><span class="s0">int </span><span class="s1">number) 
<a name="l13"><span class="ln">13   </span></a>    { 
<a name="l14"><span class="ln">14   </span></a>        mTrainNumber = number; 
<a name="l15"><span class="ln">15   </span></a>        mEngines = </span><span class="s0">new </span><span class="s1">Engine[</span><span class="s3">6</span><span class="s1">]; </span><span class="s2">// The train can have up to 6 engines</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>        mEngineCount = </span><span class="s3">0</span><span class="s1">; 
<a name="l17"><span class="ln">17   </span></a>        mWagons = </span><span class="s0">new </span><span class="s1">Wagon[</span><span class="s3">100</span><span class="s1">]; </span><span class="s2">// The train can have up to 100 wagons</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>        mWagonCount = </span><span class="s3">0</span><span class="s1">; 
<a name="l19"><span class="ln">19   </span></a>        mWeight = </span><span class="s3">0</span><span class="s1">; 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a> 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s0">public void </span><span class="s1">addEngine( Engine newEngine ) 
<a name="l23"><span class="ln">23   </span></a>    { 
<a name="l24"><span class="ln">24   </span></a>        mEngines[mEngineCount] = newEngine; 
<a name="l25"><span class="ln">25   </span></a>        mEngineCount++; 
<a name="l26"><span class="ln">26   </span></a>    } 
<a name="l27"><span class="ln">27   </span></a> 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s0">public </span><span class="s1">Engine removeEngine() 
<a name="l29"><span class="ln">29   </span></a>    { 
<a name="l30"><span class="ln">30   </span></a>        mEngineCount--; 
<a name="l31"><span class="ln">31   </span></a>        </span><span class="s0">return </span><span class="s1">mEngines[mEngineCount]; 
<a name="l32"><span class="ln">32   </span></a>    } 
<a name="l33"><span class="ln">33   </span></a> 
<a name="l34"><span class="ln">34   </span></a>    </span><span class="s0">public void </span><span class="s1">addWagon( Wagon newWagon ) 
<a name="l35"><span class="ln">35   </span></a>    { 
<a name="l36"><span class="ln">36   </span></a>        mWagons[mWagonCount] = newWagon; 
<a name="l37"><span class="ln">37   </span></a>        mWagonCount++; 
<a name="l38"><span class="ln">38   </span></a>    } 
<a name="l39"><span class="ln">39   </span></a> 
<a name="l40"><span class="ln">40   </span></a>    </span><span class="s0">public </span><span class="s1">Wagon removeWagon() 
<a name="l41"><span class="ln">41   </span></a>    {</span><span class="s2">// Code to be written</span><span class="s1"> 
<a name="l42"><span class="ln">42   </span></a>        </span><span class="s0">return new </span><span class="s1">Wagon(-</span><span class="s3">999</span><span class="s1">);</span><span class="s2">//just to get rid of the return red squigglies</span><span class="s1"> 
<a name="l43"><span class="ln">43   </span></a>    } 
<a name="l44"><span class="ln">44   </span></a> 
<a name="l45"><span class="ln">45   </span></a>    </span><span class="s0">public double </span><span class="s1">getWeight() 
<a name="l46"><span class="ln">46   </span></a>    {</span><span class="s2">// Code to be written</span><span class="s1"> 
<a name="l47"><span class="ln">47   </span></a>        </span><span class="s0">return </span><span class="s1">-</span><span class="s3">999</span><span class="s1">;</span><span class="s2">//just to get rid of the return red squiggies</span><span class="s1"> 
<a name="l48"><span class="ln">48   </span></a>    } 
<a name="l49"><span class="ln">49   </span></a>    </span><span class="s2">//...</span><span class="s1"> 
<a name="l50"><span class="ln">50   </span></a>}</span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Parcel.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Parcel 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">trackingID; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private double </span><span class="s1">weight; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">String destinationAddress; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">public </span><span class="s1">String originAddress; 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">Parcel(</span><span class="s0">int </span><span class="s1">ID) 
<a name="l11"><span class="ln">11   </span></a>    { 
<a name="l12"><span class="ln">12   </span></a>        trackingID = ID; 
<a name="l13"><span class="ln">13   </span></a>        weight = </span><span class="s2">0</span><span class="s1">; 
<a name="l14"><span class="ln">14   </span></a>    } 
<a name="l15"><span class="ln">15   </span></a> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public void </span><span class="s1">setWeight(</span><span class="s0">double </span><span class="s1">newWeight) { weight = newWeight; } 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public double </span><span class="s1">getWeight() { </span><span class="s0">return </span><span class="s1">weight; } 
<a name="l18"><span class="ln">18   </span></a>} 
<a name="l19"><span class="ln">19   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
MainForNovember2014.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2014_rollingStock_trains; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForNovember2014 { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l5"><span class="ln">5    </span></a>        Train A = </span><span class="s0">new </span><span class="s1">Train(</span><span class="s2">123</span><span class="s1">); 
<a name="l6"><span class="ln">6    </span></a>        Engine B = </span><span class="s0">new </span><span class="s1">Engine(</span><span class="s2">7</span><span class="s1">); 
<a name="l7"><span class="ln">7    </span></a>        A.addEngine(B); 
<a name="l8"><span class="ln">8    </span></a>        Wagon C = </span><span class="s0">new </span><span class="s1">Wagon(</span><span class="s2">23</span><span class="s1">); 
<a name="l9"><span class="ln">9    </span></a>        A.addWagon(C); 
<a name="l10"><span class="ln">10   </span></a>        Wagon D = </span><span class="s0">new </span><span class="s1">Wagon(</span><span class="s2">66</span><span class="s1">); 
<a name="l11"><span class="ln">11   </span></a>        A.addWagon(D); 
<a name="l12"><span class="ln">12   </span></a>        Wagon E = </span><span class="s0">new </span><span class="s1">Wagon(</span><span class="s2">71</span><span class="s1">); 
<a name="l13"><span class="ln">13   </span></a>        A.addWagon(E); 
<a name="l14"><span class="ln">14   </span></a>        A.addEngine(</span><span class="s0">new </span><span class="s1">Engine(</span><span class="s2">9</span><span class="s1">)); 
<a name="l15"><span class="ln">15   </span></a> 
<a name="l16"><span class="ln">16   </span></a> 
<a name="l17"><span class="ln">17   </span></a>        Wagon F = A.removeWagon(); 
<a name="l18"><span class="ln">18   </span></a>        F = A.removeWagon(); 
<a name="l19"><span class="ln">19   </span></a>        A.addWagon(</span><span class="s0">new </span><span class="s1">Wagon(</span><span class="s2">214</span><span class="s1">)); 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a>} 
<a name="l22"><span class="ln">22   </span></a></span></pre>
	
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

