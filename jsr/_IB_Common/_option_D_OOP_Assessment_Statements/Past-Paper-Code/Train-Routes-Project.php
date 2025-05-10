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
	<h2>November 2016 Train Routes</h2>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
TrainCompany.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2016_train_routes; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">TrainCompany 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String companyName; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private </span><span class="s1">String companyCode; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private int </span><span class="s1">numberOfJourneys; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private </span><span class="s1">Journey[] journeyHistory = </span><span class="s0">new </span><span class="s1">Journey[</span><span class="s2">100000</span><span class="s1">]; 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s0">public </span><span class="s1">TrainCompany(String x, String y) 
<a name="l11"><span class="ln">11   </span></a>    { 
<a name="l12"><span class="ln">12   </span></a>        </span><span class="s0">this</span><span class="s1">.companyName = x; 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s0">this</span><span class="s1">.companyCode = y; 
<a name="l14"><span class="ln">14   </span></a>        </span><span class="s0">this</span><span class="s1">.numberOfJourneys = </span><span class="s2">0</span><span class="s1">; 
<a name="l15"><span class="ln">15   </span></a>    } 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public </span><span class="s1">TrainCompany(){ 
<a name="l17"><span class="ln">17   </span></a> 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a> 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s0">public </span><span class="s1">String getCompanyName() { 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s0">return </span><span class="s1">companyName; 
<a name="l22"><span class="ln">22   </span></a>    } 
<a name="l23"><span class="ln">23   </span></a> 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s0">public int </span><span class="s1">getNumberOfJourneys() { 
<a name="l25"><span class="ln">25   </span></a>        </span><span class="s0">return </span><span class="s1">numberOfJourneys; 
<a name="l26"><span class="ln">26   </span></a>    } 
<a name="l27"><span class="ln">27   </span></a> 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s0">public </span><span class="s1">String getCompanyCode() { 
<a name="l29"><span class="ln">29   </span></a>        </span><span class="s0">return </span><span class="s1">companyCode; 
<a name="l30"><span class="ln">30   </span></a>    } 
<a name="l31"><span class="ln">31   </span></a> 
<a name="l32"><span class="ln">32   </span></a>    </span><span class="s3">// accessor and mutator methods</span><span class="s1"> 
<a name="l33"><span class="ln">33   </span></a> 
<a name="l34"><span class="ln">34   </span></a>    </span><span class="s0">public </span><span class="s1">Journey getJourney(</span><span class="s0">int </span><span class="s1">x) 
<a name="l35"><span class="ln">35   </span></a>    { 
<a name="l36"><span class="ln">36   </span></a>        </span><span class="s0">return </span><span class="s1">journeyHistory[x]; 
<a name="l37"><span class="ln">37   </span></a>    } 
<a name="l38"><span class="ln">38   </span></a> 
<a name="l39"><span class="ln">39   </span></a>    </span><span class="s0">public void </span><span class="s1">addJourney(Journey j) 
<a name="l40"><span class="ln">40   </span></a>    { 
<a name="l41"><span class="ln">41   </span></a>        journeyHistory[numberOfJourneys] = j; 
<a name="l42"><span class="ln">42   </span></a>        numberOfJourneys++; 
<a name="l43"><span class="ln">43   </span></a>    } 
<a name="l44"><span class="ln">44   </span></a> 
<a name="l45"><span class="ln">45   </span></a>    </span><span class="s0">public double </span><span class="s1">averageDelay() 
<a name="l46"><span class="ln">46   </span></a>    {   </span><span class="s3">//code missing</span><span class="s1"> 
<a name="l47"><span class="ln">47   </span></a>        </span><span class="s0">return </span><span class="s1">-</span><span class="s2">999.9</span><span class="s1">;</span><span class="s3">//just to get rid of the return red squigglies</span><span class="s1"> 
<a name="l48"><span class="ln">48   </span></a>    } 
<a name="l49"><span class="ln">49   </span></a> 
<a name="l50"><span class="ln">50   </span></a>    </span><span class="s3">// returns the average delay for all of a company’s journeys</span><span class="s1"> 
<a name="l51"><span class="ln">51   </span></a>    </span><span class="s0">public </span><span class="s1">String longestDelay(Codes[] c) 
<a name="l52"><span class="ln">52   </span></a>    {   </span><span class="s3">//code missing</span><span class="s1"> 
<a name="l53"><span class="ln">53   </span></a>        </span><span class="s0">return </span><span class="s4">&quot;&quot;</span><span class="s1">;</span><span class="s3">//just to get rid of the return red squigglies</span><span class="s1"> 
<a name="l54"><span class="ln">54   </span></a>    } 
<a name="l55"><span class="ln">55   </span></a>    </span><span class="s3">// returns the route name for the journey with the longest delay</span><span class="s1"> 
<a name="l56"><span class="ln">56   </span></a>    </span><span class="s0">public </span><span class="s1">String toString(Codes[] c) 
<a name="l57"><span class="ln">57   </span></a>    {   </span><span class="s3">//code missing</span><span class="s1"> 
<a name="l58"><span class="ln">58   </span></a>        </span><span class="s0">return </span><span class="s4">&quot;&quot;</span><span class="s1">; 
<a name="l59"><span class="ln">59   </span></a>    } 
<a name="l60"><span class="ln">60   </span></a>} 
<a name="l61"><span class="ln">61   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Journey.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2016_train_routes; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Journey 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String routeCode; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s2">// A unique identifier for a particular route</span><span class="s1"> 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private double </span><span class="s1">delay; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s2">// Minutes late in arriving at the destination</span><span class="s1"> 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">private boolean </span><span class="s1">weatherRelated; 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s2">// Equals true if the journey is affected by the weather,</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s2">// otherwise false.</span><span class="s1"> 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s2">// Constructor which initializes all 3 of the above data items</span><span class="s1"> 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s2">// accessor and mutator methods.</span><span class="s1"> 
<a name="l14"><span class="ln">14   </span></a> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public </span><span class="s1">Journey(String routeCode, </span><span class="s0">double </span><span class="s1">delay, </span><span class="s0">boolean </span><span class="s1">weatherRelated){ 
<a name="l16"><span class="ln">16   </span></a>        </span><span class="s0">this</span><span class="s1">.routeCode = routeCode; 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s0">this</span><span class="s1">.delay = delay; 
<a name="l18"><span class="ln">18   </span></a>        </span><span class="s0">this</span><span class="s1">.weatherRelated = weatherRelated; 
<a name="l19"><span class="ln">19   </span></a>    } 
<a name="l20"><span class="ln">20   </span></a> 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s0">public double </span><span class="s1">getDelay() { 
<a name="l22"><span class="ln">22   </span></a>        </span><span class="s0">return </span><span class="s1">delay; 
<a name="l23"><span class="ln">23   </span></a>    } 
<a name="l24"><span class="ln">24   </span></a> 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">public </span><span class="s1">String getRouteCode() { 
<a name="l26"><span class="ln">26   </span></a>        </span><span class="s0">return </span><span class="s1">routeCode; 
<a name="l27"><span class="ln">27   </span></a>    } 
<a name="l28"><span class="ln">28   </span></a> 
<a name="l29"><span class="ln">29   </span></a>    </span><span class="s0">public boolean </span><span class="s1">getWeatherRelated(){ 
<a name="l30"><span class="ln">30   </span></a>        </span><span class="s0">return </span><span class="s1">weatherRelated; 
<a name="l31"><span class="ln">31   </span></a>    } 
<a name="l32"><span class="ln">32   </span></a>} 
<a name="l33"><span class="ln">33   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Codes.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2016_train_routes; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Codes 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String routeName; </span><span class="s2">// e.g. New Amsterdam – Diamond City</span><span class="s1"> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private </span><span class="s1">String routeCode; 
<a name="l7"><span class="ln">7    </span></a> 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">public </span><span class="s1">Codes(String a, String b) 
<a name="l9"><span class="ln">9    </span></a>    { 
<a name="l10"><span class="ln">10   </span></a>        </span><span class="s0">this</span><span class="s1">.routeName = a; 
<a name="l11"><span class="ln">11   </span></a>        </span><span class="s0">this</span><span class="s1">.routeCode = b; 
<a name="l12"><span class="ln">12   </span></a>    } 
<a name="l13"><span class="ln">13   </span></a> 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public </span><span class="s1">String getRouteCode() 
<a name="l15"><span class="ln">15   </span></a>    { 
<a name="l16"><span class="ln">16   </span></a>        </span><span class="s0">return </span><span class="s1">routeCode; 
<a name="l17"><span class="ln">17   </span></a>    } 
<a name="l18"><span class="ln">18   </span></a> 
<a name="l19"><span class="ln">19   </span></a>    </span><span class="s0">public </span><span class="s1">String getRouteName() 
<a name="l20"><span class="ln">20   </span></a>    { 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s0">return </span><span class="s1">routeName; 
<a name="l22"><span class="ln">22   </span></a>    } 
<a name="l23"><span class="ln">23   </span></a>} 
<a name="l24"><span class="ln">24   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
MainForTrainRoutes.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">november2016_train_routes; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForTrainRoutes { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l5"><span class="ln">5    </span></a>        TrainCompany[] allCompanies = </span><span class="s0">new </span><span class="s1">TrainCompany[</span><span class="s2">3</span><span class="s1">]; 
<a name="l6"><span class="ln">6    </span></a>        allCompanies[</span><span class="s2">0</span><span class="s1">] = </span><span class="s0">new </span><span class="s1">TrainCompany(</span><span class="s3">&quot;Southern&quot;</span><span class="s1">,</span><span class="s3">&quot;T290&quot;</span><span class="s1">); 
<a name="l7"><span class="ln">7    </span></a>        allCompanies[</span><span class="s2">1</span><span class="s1">] = </span><span class="s0">new </span><span class="s1">TrainCompany(</span><span class="s3">&quot;Northern&quot;</span><span class="s1">,</span><span class="s3">&quot;T400&quot;</span><span class="s1">); 
<a name="l8"><span class="ln">8    </span></a>        allCompanies[</span><span class="s2">2</span><span class="s1">] = </span><span class="s0">new </span><span class="s1">TrainCompany(</span><span class="s3">&quot;Eastern&quot;</span><span class="s1">,</span><span class="s3">&quot;T155&quot;</span><span class="s1">); 
<a name="l9"><span class="ln">9    </span></a>        Journey s = </span><span class="s0">new </span><span class="s1">Journey(</span><span class="s3">&quot;J100&quot;</span><span class="s1">,</span><span class="s2">3</span><span class="s1">, </span><span class="s0">false</span><span class="s1">); 
<a name="l10"><span class="ln">10   </span></a>        Journey t = </span><span class="s0">new </span><span class="s1">Journey(</span><span class="s3">&quot;J103&quot;</span><span class="s1">,</span><span class="s2">8</span><span class="s1">, </span><span class="s0">true</span><span class="s1">); 
<a name="l11"><span class="ln">11   </span></a>        Journey u = </span><span class="s0">new </span><span class="s1">Journey(</span><span class="s3">&quot;J104&quot;</span><span class="s1">,</span><span class="s2">10</span><span class="s1">, </span><span class="s0">true</span><span class="s1">); 
<a name="l12"><span class="ln">12   </span></a>        allCompanies[</span><span class="s2">0</span><span class="s1">].addJourney(s); 
<a name="l13"><span class="ln">13   </span></a>        allCompanies[</span><span class="s2">1</span><span class="s1">].addJourney(t); 
<a name="l14"><span class="ln">14   </span></a>        allCompanies[</span><span class="s2">0</span><span class="s1">].addJourney(u); 
<a name="l15"><span class="ln">15   </span></a>        allCompanies[</span><span class="s2">0</span><span class="s1">].addJourney(</span><span class="s0">new </span><span class="s1">Journey(</span><span class="s3">&quot;J101&quot;</span><span class="s1">,</span><span class="s2">6</span><span class="s1">, </span><span class="s0">false</span><span class="s1">)); 
<a name="l16"><span class="ln">16   </span></a>        System.out.println(allCompanies[</span><span class="s2">0</span><span class="s1">].getCompanyCode()); 
<a name="l17"><span class="ln">17   </span></a>        System.out.println(allCompanies[</span><span class="s2">0</span><span class="s1">].getJourney(</span><span class="s2">1</span><span class="s1">).getDelay()); 
<a name="l18"><span class="ln">18   </span></a>        System.out.println(allCompanies[</span><span class="s2">1</span><span class="s1">].getNumberOfJourneys()); 
<a name="l19"><span class="ln">19   </span></a>    } 
<a name="l20"><span class="ln">20   </span></a>} 
<a name="l21"><span class="ln">21   </span></a></span></pre>
	
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

