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
	<h2>May 2016 Hotels</h2>
	<br />
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Client.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2016_hotels; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Client 
<a name="l4"><span class="ln">4    </span></a>{ </span><span class="s0">private int </span><span class="s1">customerID; 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String name; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private </span><span class="s1">Dates arrive; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">Dates leave; 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s0">private </span><span class="s1">Room bedroom; 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">public </span><span class="s1">Client(</span><span class="s0">int </span><span class="s1">id, String c, Dates dateIn, Dates dateOut, Room r) 
<a name="l10"><span class="ln">10   </span></a>    { setCustomerID(id); 
<a name="l11"><span class="ln">11   </span></a>        setName(c); 
<a name="l12"><span class="ln">12   </span></a>        setArrive(dateIn); 
<a name="l13"><span class="ln">13   </span></a>        setLeave(dateOut); 
<a name="l14"><span class="ln">14   </span></a>        setBedroom(r); 
<a name="l15"><span class="ln">15   </span></a>    } 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public void </span><span class="s1">setCustomerID(</span><span class="s0">int </span><span class="s1">id) {customerID = id;} 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s0">public void </span><span class="s1">setName(String c) {name = c;} 
<a name="l18"><span class="ln">18   </span></a>    </span><span class="s0">public void </span><span class="s1">setArrive(Dates dateIn) {arrive = dateIn;} 
<a name="l19"><span class="ln">19   </span></a>    </span><span class="s0">public void </span><span class="s1">setLeave(Dates dateOut) {leave = dateOut;} 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s0">public void </span><span class="s1">setBedroom(Room r) {bedroom = r;} 
<a name="l21"><span class="ln">21   </span></a>    </span><span class="s0">public int </span><span class="s1">getCustomerID() {</span><span class="s0">return </span><span class="s1">customerID;} 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s0">public </span><span class="s1">String getName() {</span><span class="s0">return </span><span class="s1">name;} 
<a name="l23"><span class="ln">23   </span></a>    </span><span class="s0">public </span><span class="s1">Dates getArrive() {</span><span class="s0">return </span><span class="s1">arrive;} 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s0">public </span><span class="s1">Dates getLeave() {</span><span class="s0">return </span><span class="s1">leave;} 
<a name="l25"><span class="ln">25   </span></a>    </span><span class="s0">public </span><span class="s1">Room getBedroom() {</span><span class="s0">return </span><span class="s1">bedroom;} 
<a name="l26"><span class="ln">26   </span></a>    </span><span class="s0">public void </span><span class="s1">bill() 
<a name="l27"><span class="ln">27   </span></a>    { </span><span class="s2">// ...method that calculates the bill for this client</span><span class="s1"> 
<a name="l28"><span class="ln">28   </span></a>    } 
<a name="l29"><span class="ln">29   </span></a>} 
<a name="l30"><span class="ln">30   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Dates.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2016_hotels; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Dates 
<a name="l4"><span class="ln">4    </span></a>{ </span><span class="s0">private int </span><span class="s1">day; 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">month; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">year; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">Dates(</span><span class="s0">int </span><span class="s1">day, </span><span class="s0">int </span><span class="s1">month, </span><span class="s0">int </span><span class="s1">year) 
<a name="l8"><span class="ln">8    </span></a>    { </span><span class="s0">this</span><span class="s1">.day = day; 
<a name="l9"><span class="ln">9    </span></a>        </span><span class="s0">this</span><span class="s1">.month = month; 
<a name="l10"><span class="ln">10   </span></a>        </span><span class="s0">this</span><span class="s1">.year = year; 
<a name="l11"><span class="ln">11   </span></a>    } 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s0">public int </span><span class="s1">getDay() {</span><span class="s0">return </span><span class="s1">day;} 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s0">public int </span><span class="s1">getMonth() {</span><span class="s0">return </span><span class="s1">month;} 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public int </span><span class="s1">getYear() {</span><span class="s0">return </span><span class="s1">year;} 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public static int </span><span class="s1">StayDays(Dates x, Dates y) 
<a name="l16"><span class="ln">16   </span></a>    { </span><span class="s2">// method that calculates the number of nights between x and y</span><span class="s1"> 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s0">return </span><span class="s1">-</span><span class="s3">999</span><span class="s1">; </span><span class="s2">//just so the return red squiggly goes away</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a>} 
<a name="l20"><span class="ln">20   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Group.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2016_hotels; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Group 
<a name="l4"><span class="ln">4    </span></a>{ 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private </span><span class="s1">String name; </span><span class="s2">// name of group</span><span class="s1"> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">number; </span><span class="s2">// number of rooms allocated to the group</span><span class="s1"> 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">Group(String name, </span><span class="s0">int </span><span class="s1">number) 
<a name="l8"><span class="ln">8    </span></a>    { 
<a name="l9"><span class="ln">9    </span></a>        </span><span class="s0">this</span><span class="s1">.name = name; 
<a name="l10"><span class="ln">10   </span></a>        </span><span class="s0">this</span><span class="s1">.number = number; 
<a name="l11"><span class="ln">11   </span></a>    } 
<a name="l12"><span class="ln">12   </span></a>    </span><span class="s0">public </span><span class="s1">String getName() {</span><span class="s0">return </span><span class="s1">name;} 
<a name="l13"><span class="ln">13   </span></a>    </span><span class="s0">public int </span><span class="s1">getNumber() {</span><span class="s0">return </span><span class="s1">number;} 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">int</span><span class="s1">[] gRooms = </span><span class="s0">new int</span><span class="s1">[number]; 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s2">// array to hold room numbers allocated to the group</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>    </span><span class="s0">public double </span><span class="s1">bill(</span><span class="s0">int</span><span class="s1">[] gRooms) 
<a name="l17"><span class="ln">17   </span></a>    { </span><span class="s2">// ...method that calculates the bill for the group</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>        </span><span class="s0">return </span><span class="s1">-</span><span class="s3">999.9</span><span class="s1">;</span><span class="s2">//just to get rid of the red squigglies of the return</span><span class="s1"> 
<a name="l19"><span class="ln">19   </span></a>    } 
<a name="l20"><span class="ln">20   </span></a>} 
<a name="l21"><span class="ln">21   </span></a></span></pre>
	
	<TABLE CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#c0c0c0" >
<TR><TD><CENTER>
<FONT FACE="Arial, Helvetica" COLOR="#000000">
Room.java</FONT>
</center></TD></TR></TABLE>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">may2016_hotels; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Room { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">private int </span><span class="s1">roomNumber; 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">beds; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private double </span><span class="s1">price; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private boolean </span><span class="s1">empty; 
<a name="l8"><span class="ln">8    </span></a> 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">public </span><span class="s1">Room(){ 
<a name="l10"><span class="ln">10   </span></a> 
<a name="l11"><span class="ln">11   </span></a>    } 
<a name="l12"><span class="ln">12   </span></a>} 
<a name="l13"><span class="ln">13   </span></a></span></pre>
	
	
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

