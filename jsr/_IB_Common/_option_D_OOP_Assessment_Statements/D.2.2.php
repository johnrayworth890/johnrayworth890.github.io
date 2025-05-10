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
		<a href="D.2.1.php">Last</a>
	    <a href="D.2.3.php">Next</a></p>
</div>
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.2</p>
<p>Define the term inheritance.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>A parent object holds common data and actions for a group of related child objects. Multiple inheritance is not required.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Questions: </span></p>
<p>----</p>
<p>Q1. Different modules in a (specific) program (provided in the exam paper) each open up a graphical user interface (GUI). Each GUI has a similar design, but contains differences specific to each module.<br />
</p>
<p>By giving two examples (from this specific program), explain how the principles of inheritance can be incorporated into the design of this administration program.</p>
<p>----</p>
<p>Q2. Separate OriginAddress and DestinationAddress classes will be created. The destination address may contain special instructions to the delivery person. The origin address contains a variable that indicates if the parcel was collected from the customer’s house or from the local post office.<br />
  <br />
  Outline how these two new classes can be created with minimal duplication of code.</p>
<p>(The idea with a question like this is you would be expected to see that inheritance should be used. Having stated that, you could then come up with a good example of a shared attribute, like isLocalAddress, and one example each for particular attributes, like isReturnToSenderAddressAlso for the OriginAddress class, and contactPerson for the DestinationAddress class.)</p>
<p>----</p>
<p>Q3. The Department of Transport wants to expand this program to include similar analysis for bus and airplane journeys.<br />
  <br />
  Describe how inheritance could be used to provide an organized set of classes for all of these forms of transport.</p>
<p>----<br />
  <span class="line-number"><br />
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
<p>JSR Notes:</p>
<h3>OOP Super Power # 2: Inheritance </h3>
<p>&quot;<em>I had no father. My mother sculpted me from clay and I was brought to life by Zeus.</em>&quot; - Diana Prince, Wonder Woman (If Zeus were a Java class, he'd be Object.)</p>
<p><strong><br />
  OOP Definition of inheritance</strong>:</p>
<p>Inheritance is the OOP programming feature where one class can be <strong>extended</strong> to other classes. Those other classes <strong>inherit</strong> all of the super class' attributes, along with the actions which act on those attributes. Each <strong>sub-class</strong> then goes on to extend the functionality of the <strong>super-class</strong>, in its own way, by adding particular attributes of its own, along with the actions that act upon them.</p>
<p>In OOP terms, we call this relationship an &quot;<strong>is a</strong>&quot; relationship. The <strong>child</strong> (sub) class &quot;is a&quot; version of its <strong>parent</strong> (super) class, with a few additional features.</p>
<p>Do note  it is usually the case that there are many sub-classes for one parent &quot;super-class&quot;. And with Java, at the top of all inheritance hierarchies is always the class Object. Object is said to be the mother of all classes. All classes extend Object, though it's not necessary to write &quot;extends Object&quot; in the header. Object only has a few attributes and a handful of methods. Not many of them are often useful to us, but toString( ) we often will want to use.<br />
  <br />
</p>
<h3>General Examples of Inheritance Relationships<br />
</h3>
<p>We'll start with a couple of  general examples. And with them do note that inheritance is great in that it models real world relationships. Note also the interchangeability of the terms &quot;parent&quot; with &quot;super-class, and &quot;child&quot; with &quot;sub-class&quot;.</p>
<p>Parent &quot;super-class&quot;: Animal</p>
<p>Children &quot;sub-classes&quot;:</p>
<ul>
  <li>Dog</li>
  <li>Cat</li>
  <li>Elephant</li>
  <li>Lion</li>
</ul>
<p><br />
  Or an example with different levels of hierarchy:</p>
<p> Parent &quot;super-class: ISB_IT_Equipment</p>
<p>Children &quot;sub-classes&quot; of ISB_IT_Equipment, each with sub-classes of their own</p>
<ul>
  <li>Computer
    <ul>
      <li>DesktopComputer</li>
      <li>LaptopComputer</li>
      <li>IPad</li>
    </ul>
  </li>
  <li>NetworkEquipment
    <ul>
      <li>Server</li>
      <li>Router</li>
      <li>WiFiRouter</li>
    </ul>
  </li>
  <li>Cables
    <ul>
      <li>FiberOptic</li>
      <li>TwistedPair</li>
    </ul>
  </li>
  </ul>
<p><br />
</p>
<h3>Inheritance Hierarchies and UML Diagrams of Them</h3>
<p>Inheritance is much easier to understand and see when represented in hierarchical diagrams, as is typically displayed in UML diagrams. Here first is a diagram of a simple class inheritance hierarchy:</p>
<p align="center"><img src="Images/Simple-Class-Hierarchy.jpg" width="750" height="auto" alt=""/></p>
<p>&nbsp;</p>
<p>And here are the two inheritance hierarchies we had in our SuperHero game:</p>
<p align="center"><img src="Images/Superhero-Game-UML.jpg" width="850" height="auto" alt=""/></p>
<p align="center">&nbsp;</p>
<p align="center">And this is part of the hierarchy of Java Swing classes used for GUI:</p>
<p align="center"><img src="Images/SwingHierarchy1.gif" width="483" height="488" alt=""/></p>
<p>So the best place to look here (above) would be our good old friend JTextField. Every time we make a textField in our GUI, we are making an instance (or actually, it's Netbeans doing it behind the scenes in the generated code) of a class which extends a class called JTextComponent, which, in turn is a class which extends a class called JComponent (which actually happens to extend Container, which extends Component, which extends the mother of all classes, Object).</p>
<p>So everything that Object, and JComponent, and JTextComponent etc. can do, JTextField can do too, along with a number of other methods of its own. It, in turn, is used as the super class for JPassowordField.</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<h3>Inheritance via Java</h3>
<p>Here's a quick example of two classes only from the first diagram above, in which  Vehicle is the super class, and Car extends vehicle (i.e. is one of its sub-classes):</p>
<p>Note the two new Java reserved words needed to implement inheritance:<br />
  <em><strong>extends</strong></em> - this keyword follows the class name of the subclass in the header line of the sub-class; it is used to state which class is its super class.<br />
  <br />
  <em><strong>super</strong></em> - this keyword means the super class. So used alone, it makes a call to the super constructor, or used with dot notation, it gives a class access to the super class' public members.  </p>
<p>So in the case of super being used for calling the superclass constructor, what follows in its parameter list needs to be the correct list and order of parameters of one of the constructors of the superclass.</p>
<p class="comment">(There are three other Java keywords and concepts that are a bit beyond the IB CS curriculum, but I'll include a bit on both just so you know if/when you encounter them; they are: abstract and implements / interface.</p>
<p class="comment"><strong><em>abstract</em></strong> - a class which is declared as abstract is one which itself is not intended to be made instances of. Never-the-less, in its hierarchy, it does supply both common attributes and methods to the classes below it.</p>
<p class="comment">And an abstract method (within an abstract class) is one which does not have any body; rather it is just the header of a method which must be implemented - via overriding - in any non-abstract classes below it in the same hierarchy. </p>
<p class="comment"><strong><em>interface</em></strong> - a class which is declared as an interface is simply a collection of normal and/or abstract methods. Any class in the same project which <em><strong>implements</strong></em>  an interface must override all of the abstract methods of the interface. (<span class="comment1">The Java keyword implements is used in the header of a class which implements an interface - so in the same way a class can extend either an abstract or another normal class, a class can also implement an interface.)</span></p>
<p class="comment"><span class="comment1">A good example of an interface is the Java interface Comparable. Any class which implements Comparable must have a method .equals( ) which takes in two Objects and returns a boolean, like the String class does, for example.</span></p>
<p class="comment">The idea of both abstract classes/methods and interfaces is to provide, within a framework, two things:<br />
  - a common set of method names<br />
  - 
  expectations for a common capability or feature that extending/implementing classes will have</p>
<pre><br /><span class="darkblue">public</span> class Vehicle{
    <span class="darkblue">private int</span> numWheels;<br />    <span class="darkblue">private</span> String color;<p>    <span class="darkblue">public</span> Vehicle(<span class="darkblue">int</span> numWheels, String color<span class="darkblue"></span>){<br />        <span class="darkblue">this</span>.numWheels = numWheels;<br />        <span class="darkblue">this</span>.color = color;<br />    }<br /><br />    <span class="darkblue">public int </span>getNumWheels(){<br />        <span class="darkblue">return</span> numWheels;<br />   }</p><p>    <span class="darkblue">public</span> String getColor(){<br />        <span class="darkblue">return</span> color;<br />    }</p><p>    <span class="darkblue">public</span> <span class="darkblue">void</span> setNumWheels(<span class="darkblue">int</span> numWheels){<br />        <span class="darkblue">this</span>.numWheels = numWheels;<br />    }</p><p>    <span class="darkblue">public void</span> setColor(String color){<br />        <span class="darkblue">this</span>.color = color;<br />    }<br />}</p>
<p><span class="darkblue">public class</span> Car <span class="darkblue"><strong>extends</strong></span> Vehicle{</p><p>   <span class="darkblue"> private boolean</span> isHatchback = <span class="darkblue">false</span>;<br /><br />    <span class="darkblue">public</span> Car(<span class="darkblue">int</span> numWheels, String color, <span class="darkblue">boolean</span> isHatchback){<br />        <span class="darkblue"><strong>super</strong></span>(numWheels, color); <span class="comment">//so this is a call to the super constructor, in this case Vehicle</span><br />        <span class="darkblue">this</span>.isHatchback = isHatchback;<br />    }</p><p>    //gets...</p><p>    //sets...<br /><br />}</p>
</pre>
<p>Here is the IntelliJ project our absolutely fully complete inheritance example from class - the <a href="Game-Project-Intellij.zip">superhere game</a>. And a couple of images of it to get an idea.</p>
<p><img src="Images/Superhero-Game-1A.jpeg" width="900" height="auto" alt=""/></p>
<p><img src="Images/Superhero-Game-2.jpeg" width="900" height="auto" alt=""/></p>
<p>&nbsp;</p>
<p>(And here is <a href="D.4.12.php">another good example</a> of inheritance from further on in the curriculum, where we make &quot;stacks&quot; and &quot;queues&quot; extended from the LinkedList class.)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Full Inheritance Coding Example</h3>
<p>(Adapted from a past paper question.)</p>
<pre>
public class Train{
    private Engine engine;
    private Carriage[] carriages;<br />    private DiningCar[] diningCars;<br />    private int numWagonCount;
    private double totalWeight;<span class="comment"></span>

    public Train(int numCarriages, int numDiningCars){
        engine = new Engine();
        carriages = new Carriages[numCarriages]; 
        diningCars = new DiningCars[numDiningCars];
        numWagonCount = numCarriages + numDiningCars;
    }

    public Carriage [] getCarriages(){
        return carriages;
    }

   <span class="comment"> //plus other accessor methods

    //and sets and other modifiers</span>
}

...

public class Wagon{
    private int idNumber;
    private double weight;
 

    public Wagon(int ID, double weight){
        mIDNumber = ID;
        mWeight = weight; <span class="comment">// Weight is in kilograms</span>
    }
    
    <span class="comment">// Accessor methods</span>
    public double getWeight() { 
        return mWeight; 
    }

    public int getID() { 
        return mIDNumber; 
    }
    
    <span class="comment">// Other methods</span>
    ...
}


public class Carriage <strong>extends</strong> Wagon{
    private double numSeats; 

    public Carriage(int ID, int numSeats){
        super(ID, 12000);  <span class="comment">//Empty carriage weighs 12000 kilograms</span>
        this.numSeats = numSeats; 
    }

   <span class="comment"> // Accessor methods</span>
    public double getNumSeats() {
         return numSeats; 
    }
        ...
    
    <span class="comment">// Other methods</span>
        ...
}

public class DiningCar <strong>extends</strong> Wagon{
    private boolean hasKitchen;
    private int numTables;

    public DiningCar(int ID, boolean hasKitchen, int numTables){
        super(ID, 32000); <span class="comment">// Empty dining car weighs 32000 kilograms</span>
        this.hasKitchen = hasKitchen;
        this.numTables = numTables;
    }

   <span class="comment"> // Accessor methods</span>
    public int getHasKitchen() { 
        return hasKitchen; 
    }

    public double getNumTables(){
        <span class="comment">// Code to be written</span>
    }

<span class="comment">    // Other methods</span>
...
}

--------------------------------------------------------------------</pre>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Define the term inheritance.</p>
<p>The answer can be basically the Teaching Note above. So: Inheritance is an OOP relationship between classes in which &quot;parent object holds common data and actions for a group of related child objects&quot;.</p>
<p>&nbsp;</p>
<p>And if asked to apply this to a specific program given in the exam paper:</p>
<ul>
  <li>
    <p>State how  sub-classes BlahBlahBlah, and BlahBlah can inherit characteristics from a superclass Xyz, </p>
  </li>
  <li>while adding specific characteristics particular to themselves    </li>
</ul>
<p>For example, ZooAnimal and WildAnimal share the animalName attribute from Animal, but ZooAnimal adds the attribute dateAcquiredByZoo, and WildAnimal adds the attribute dateLastSeen.</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
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