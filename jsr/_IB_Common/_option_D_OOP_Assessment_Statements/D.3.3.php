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
<style type="text/css">
.ln { color: #999999; font-weight: normal; font-style: normal; }
.s0 { color: rgb(0,0,128); font-weight: bold; }
.s1 { color: rgb(0,0,0); }
.s2 { color: rgb(128,128,128); font-style: italic; }
	.s3 { color: rgb(128,128,128); font-style: italic; }
</style>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
	
	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_From_Syllabus.php">OOP Option</a>
		<a href="D.3.2.php">Last</a>
	    <a href="D.3.4.php">Next</a></p>
</div>
	
	
	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.3.3</p>
<p>Define the terms: private, protected, public, extends, static.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>These are generally related to the OOP features described in D.2. See JETS.<br />
	</p></div>
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
<h3><strong>Introduction</strong></h3>
<p>Note that this can be treated on two levels; one is a basic definition kind of understanding, but one is quite deep, particularly with static, but also extends, and to a lesser extent protected. But to take all three of these to coding understanding is a lot. But understanding of them is good stuff for helping to grasp many simpler OOP coding principles.</p>
<h3><br />
  Basic Definitions</h3>
<p><strong>private</strong> - (We'll assume Java-specific implementations for all of these.) A keyword which limits the access of an attribute or method to be within that class only.</p>
<p><strong>protected</strong> - A keyword which limits the access of an attribute or method to be within a package. So one class in a certain package can access that attribute or method if and only if it is in the same package.</p>
<p> <strong>public</strong> - A keyword which declared (explicitly) that an attribute or method can be directly accessed by any other class. If private, nor protected, nor public is written, public is assumed by default.</p>
<p> <strong>extends</strong> - A keyword which indicates that a class inherits from another class all of its attributes and methods.</p>
<p><strong>static</strong> - A keyword which limits the attribute or method to being only one instance; i.e. multiple instances of it cannot be made. This is in contrast to any attributes or methods of &quot;template&quot; classes which by the very nature of being template classes can be made multiple instances. Things called from static methods (such as what main always is) must also themselves be static.</p>
<p>&nbsp;</p>
<h3>More Detailed Definitions and Coding Examples</h3>
<h3>Private, Protected &amp; Public</h3>
<p><strong>private</strong> - <em>(We'll assume Java-specific implementations for all of these.) A keyword which limits the access of an attribute or method to be within that class only</em>.<br />
  So this is a level of access that prohibits other classes to access a particular attribute or method. Attributes should always be private in true Object Oriented Programming programing, so as to obey the concept of encapsulation. Often methods are also made private, since they are only intended to be used within that class as &quot;helper methods&quot;.
  <br />
  <br />
</p>
<p><strong>protected</strong> - <em>A keyword which limits the access of an attribute or method to be within a package. So one class in a certain package can access that attribute or method if and only if it is in the same package</em>.<br />
  So this is a level of access that permits access only within a given package. We don't often use protected because we don't often use multiple packages. But if/when you do in your dossier or beyond, it's a good idea to use protected for your methods, but still not your attributes to keep them encapsulated.
    <br />
    <br />
</p>
<p> <strong>public</strong> - <em>A keyword which declared (explicitly) that an attribute or method can be directly accessed by any other class. If private, nor protected, nor public is written, public is assumed by default</em>.<br />
  So this is a level of access that permits access from anywhere else to the particular attribute or method. We want to use public for everything that other classes can see, and so the methods we intend to be used by other classes. All other attributes and methods should be private and protected. One other note is that class definitions themselves also use the public keyword.    </p>
<p>&nbsp;</p>
<pre>
<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">zooanimals; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Zebra </span><span class="s0">extends </span><span class="s1">ZooAnimal{ 
<span class="ln">4    </span></a>    </span><span class="s0">private int </span><span class="s1">numStripes;  
<span class="ln">5    </span></a>    </span><span class="s2">//private, so can only be accessed in *** this class ***</span><span class="s1"> 
<span class="ln">6    </span></a> 
<span class="ln">7    </span></a>     
<span class="ln">8    </span></a>    </span><span class="s0">public </span><span class="s1">Zebra(){ 
<span class="ln">9    </span></a>         
<span class="ln">10   </span></a>    } 
<span class="ln">11   </span></a>    </span><span class="s2">//public, so can be accessed by any class in the *** whole project ***</span><span class="s1"> 
<span class="ln">12   </span></a> 
<span class="ln">13   </span></a>     
<span class="ln">14   </span></a>    </span><span class="s0">protected int </span><span class="s1">getNumStripes() { 
<span class="ln">15   </span></a>        </span><span class="s0">return </span><span class="s1">numStripes; 
<span class="ln">16   </span></a>    } 
<span class="ln">17   </span></a>    </span><span class="s2">//protected, so can be accessed by any class in the *** same package ***</span><span class="s1"> 
<span class="ln">18   </span></a>}</span></pre>
		<br/>
		<pre>
<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">zooanimals; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForZoo { 
<span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<span class="ln">5    </span></a>        Zebra zoeTheZebra = </span><span class="s0">new </span><span class="s1">Zebra(); 
<span class="ln">6    </span></a>        </span><span class="s2">//accessible because the Zebra() constructor is public</span><span class="s1"> 
<span class="ln">7    </span></a> 
<span class="ln">8    </span></a> 
<span class="ln">9    </span></a>        System.out.println(zoeTheZebra.getNumStripes()); 
<span class="ln">10   </span></a>        </span><span class="s2">//ACCESSIBLE because getNumStripes() is protected,</span><span class="s1"> 
<span class="ln">11   </span></a>        </span><span class="s2">//and we're in the same package, zooanimals.</span><span class="s1"> 
<span class="ln">12   </span></a> 
<span class="ln">13   </span></a> 
<span class="ln">14   </span></a>        System.out.println(zoeTheZebra.</span><span class="Red">numStripes</span><span class="s1">); 
<span class="ln">15   </span></a>        </span><span class="s2">//not possible, since numStripes is private in the Zebra class</span><span class="s1"> 
<span class="ln">16   </span></a>    } 
<span class="ln">17   </span></a>}
</span></pre>
      <p><img src="Images/Project-For-Protected.jpeg" width="172" height="174" alt=""/></p>
      <p><br />
      </p>
	    <pre>
<span class="s0">import </span><span class="s1">zooanimals.Zebra; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">AnotherMain { 
<span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<span class="ln">5    </span></a>        Zebra zoeTheZebra = </span><span class="s0">new </span><span class="s1">Zebra(); 
<span class="ln">6    </span></a>        </span><span class="s2">//accessible because the Zebra() constructor is public</span><span class="s1"> 
<span class="ln">7    </span></a> 
<span class="ln">8    </span></a> 
<span class="ln">9    </span></a>        System.out.println(zoeTheZebra.</span><span class="Red">getNumStripes()</span><span class="s1">); 
<span class="ln">10   </span></a>        </span><span class="s2">//NOT accessible because getNumStripes() is protected,</span><span class="s1"> 
<span class="ln">11   </span></a>        </span><span class="s2">//and we're NOT in the same package.</span><span class="s1"> 
<span class="ln">12   </span></a> 
<span class="ln">13   </span></a> 
<span class="ln">14   </span></a>        System.out.println(zoeTheZebra.</span><span class="Red">numStripes</span><span class="s1">); 
<span class="ln">15   </span></a>        </span><span class="s2">//not possible, since numStripes is private in the Zebra class</span><span class="s1"> 
<span class="ln">16   </span></a>    } 
<span class="ln">17   </span></a>}</span></pre>
</p>
<p>&nbsp; </p>
<h3>Extends as Used in Inheritance</h3>
<p><strong>extends</strong> - <em>A keyword which indicates that a class inherits from another class all of its attributes and methods.</em><br />
  Here is a quick example of a couple of classes which uses extends to inherit from another class:</p>
<pre>
The Super Class

<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">shoesmanufacturing; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">ShoeMaterial { 
<span class="ln">4    </span></a>    </span><span class="s0">private String </span>materialName<span class="s1"> = </span><span class="s2">&quot;ABCD-9999&quot;</span><span class="s1">; 
<span class="ln">5    </span></a>     
<span class="ln">6    </span></a>    </span><span class="s0">public </span><span class="s1">ShoeMaterial(</span><span class="s0">String </span>materialName<span class="s1">){ 
<span class="ln">7    </span></a>        </span><span class="s0">this</span><span class="s1">.</span>materialName<span class="s1"> = </span>materialName<span class="s1">; 
<span class="ln">8    </span></a>    } 
<span class="ln">9    </span></a> 
<span class="ln">10   </span></a>    </span><span class="s0">public String </span><span class="s1">get</span>MaterialName<span class="s1">() { 
<span class="ln">11   </span></a>        </span><span class="s0">return </span><span class="s1">ACMEShoesID; 
<span class="ln">12   </span></a>    } 
<span class="ln">13   </span></a>}</span>


One subclass, made via extends.

<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">shoesmanufacturing; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Suede </span><span class="darkblue"><strong>extends</strong> </span><span class="s1">ShoeMaterial{ 
<span class="ln">4    </span></a>    </span><span class="s0">private double </span><span class="s1">darkness; 
<span class="ln">5    </span></a> 
<span class="ln">6    </span></a>    </span><span class="s0">public </span><span class="s1">Suede(</span><span class="s0">String </span><span class="s1">material, </span><span class="s0">double </span><span class="s1">darkness){ 
<span class="ln">7    </span></a>        </span><span class="s0">super</span><span class="s1">(material); 
<span class="ln">8    </span></a>        </span><span class="s0">this</span><span class="s1">.darkness = darkness; 
<span class="ln">9    </span></a>    } 
<span class="ln">10   </span></a> 
<span class="ln">11   </span></a>    </span><span class="s0">public double </span><span class="s1">getDarkness() { 
<<span class="ln">12   </span></a>        </span><span class="s0">return </span><span class="s1">darkness; 
<span class="ln">13   </span></a>    } 
<span class="ln">14   </span></a>} 
<span class="ln">15   </span></a></span>


Another subclass made via extends

<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">shoesmanufacturing; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Canvas </span><span class="darkblue"><strong>extends</strong> </span><span class="s1">ShoeMaterial{ 
<span class="ln">4    </span></a>    </span><span class="s0">private </span><span class="s1">String color = </span><span class="s2">&quot;not set yet&quot;</span><span class="s1">; 
<span class="ln">5    </span></a> 
<span class="ln">6    </span></a>    </span><span class="s0">public </span><span class="s1">Canvas(</span><span class="s0">String </span><span class="s1">material, String color){ 
<span class="ln">7    </span></a>        </span><span class="s0">super</span><span class="s1">(material); 
<span class="ln">8    </span></a>        </span><span class="s0">this</span><span class="s1">.color = color; 
<span class="ln">9    </span></a>    } 
<span class="ln">10   </span></a> 
<span class="ln">11   </span></a>    </span><span class="s0">public </span><span class="s1">String getColor() { 
<span class="ln">12   </span></a>        </span><span class="s0">return </span><span class="s1">color; 
<span class="ln">13   </span></a>    } 
<span class="ln">14   </span></a>} 
<span class="ln">15   </span></a></span>


Now, looking at a main class using objects of the classes which extend the super class.

<span class="ln">1    </span></a><span class="s0">package </span><span class="s1">shoesmanufacturing; 
<span class="ln">2    </span></a> 
<span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForShoes { 
<span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<span class="ln">5    </span></a>        Canvas bBallCanvas = </span><span class="s0">new </span><span class="s1">Canvas(</span><span class="s2">&quot;BBall Classic 148&quot;</span><span class="s1">,</span><span class="s2">&quot;white&quot;</span><span class="s1">); 
<span class="ln">6    </span></a>        System.out.println(bBallCanvas.getColor()); 
<span class="ln">7    </span></a>        </span><span class="s3">//possible because from the actual Canvas class.</span><span class="s1"> 
<span class="ln">8    </span></a>         
<span class="ln">9    </span></a>        System.out.println(bBallCanvas.getMaterialName()); 
<span class="ln">10   </span></a>        </span><span class="s3">//possible because from the super class of Canvas, ShoeMaterial</span><span class="s1"> 
<span class="ln">11   </span></a>         
<span class="ln">12   </span></a>    } 
<span class="ln">13   </span></a>} 
<span class="ln">14   </span></a></span></pre>
<p>&nbsp;</p>
<p><strong><br />
</strong></p>
<h3>Static &quot;Class&quot; Variables</h3>
<p><strong>static</strong> - <em>A keyword which allows a data attribute or method to be applied class-wide</em>; i.e. all instances of that class share the attribute or method, or in fact there can only ever be one &quot;instance&quot; of the class, as with the Math class, by the way of not even having a constructor.</p>
<p><strong>static and main( )</strong></p>
<p>The first time you encounter  static in the main method of a class, rather than allowing something, it seems to be limiting you, and making your life a tiny bit harder; you realize that any attributes or methods used/called from main have to also be static, and you cannot make multiple instances of any of them. And this is in contrast to any attributes or methods of &quot;template&quot; classes which by the very nature of being template classes can be made multiple instances.</p>
<p>But this all comes from the fact that <em><strong>main has to be one and only one copy</strong></em>; there cannot be multiple instances of Photoshop, for example running. And so a second &quot;useful feature&quot; of static is it  preventing accidental multiple copies of things that can only have one copy.</p>
<p><br />
  So back to the class-wide nature of static variables and methods - also, appropriately called <strong>class variables and methods</strong> -  things that are defined as static need not have an instance variable made to be able to work with them. Rather static variables can be directly accessed via dot notation from the class name. </p>
<p>&nbsp;</p>
<p><strong>Quick Example</strong></p>
<p>Non-static situation: Here, getLength( )must be non-static, because it is used through an instance of Marker.</p>
<pre>Marker m = new Marker();
System.out.println(m.getLength());</pre>
<p>Static situation: Here, PI must be a static class variable, able to be directly accessed from the class.</p>
<pre>System.out.println(Math.PI);
</pre>
<p>&nbsp;</p>
<p><strong>Full Example </strong></p>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">grocerystore; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Employee { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">private static int </span><span class="s1">nextEmployeeNumber = </span><span class="s2">100001</span><span class="s1">; 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s3">//static allows it to be used as a class variable, by all instances of the class</span><span class="s1"> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private int </span><span class="s1">employeeNumber = -</span><span class="s2">999</span><span class="s1">; 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">private </span><span class="s1">String employeeName = </span><span class="s4">&quot;Not set yet&quot;</span><span class="s1">; 
<a name="l8"><span class="ln">8    </span></a> 
<a name="l9"><span class="ln">9    </span></a>    </span><span class="s0">public </span><span class="s1">Employee(){ 
<a name="l10"><span class="ln">10   </span></a>        employeeNumber = nextEmployeeNumber; 
<a name="l11"><span class="ln">11   </span></a>        nextEmployeeNumber++; 
<a name="l12"><span class="ln">12   </span></a>    } 
<a name="l13"><span class="ln">13   </span></a> 
<a name="l14"><span class="ln">14   </span></a>    </span><span class="s0">public </span><span class="s1">Employee(String employeeName){ 
<a name="l15"><span class="ln">15   </span></a>        </span><span class="s0">this</span><span class="s1">.employeeName = employeeName; 
<a name="l16"><span class="ln">16   </span></a>        employeeNumber = nextEmployeeNumber; 
<a name="l17"><span class="ln">17   </span></a>        nextEmployeeNumber++; 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a> 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s0">public static int </span><span class="s1">getNextEmployeeNumber() { 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s0">return </span><span class="s1">nextEmployeeNumber; 
<a name="l22"><span class="ln">22   </span></a>    } 
<a name="l23"><span class="ln">23   </span></a> 
<a name="l24"><span class="ln">24   </span></a>    </span><span class="s0">public </span><span class="s1">String getEmployeeName() { 
<a name="l25"><span class="ln">25   </span></a>        </span><span class="s0">return </span><span class="s1">employeeName; 
<a name="l26"><span class="ln">26   </span></a>    } 
<a name="l27"><span class="ln">27   </span></a> 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s0">public int </span><span class="s1">getEmployeeNumber(){ 
<a name="l29"><span class="ln">29   </span></a>        </span><span class="s0">return </span><span class="s1">employeeNumber; 
<a name="l30"><span class="ln">30   </span></a>    } 
<a name="l31"><span class="ln">31   </span></a>} 
<a name="l32"><span class="ln">32   </span></a></span>



<a name="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">grocerystore; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">MainForGroceryStore { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l5"><span class="ln">5    </span></a>        Employee emma = </span><span class="s0">new </span><span class="s1">Employee(</span><span class="s2">&quot;Emma Watson&quot;</span><span class="s1">); 
<a name="l6"><span class="ln">6    </span></a>        Employee barb = </span><span class="s0">new </span><span class="s1">Employee(</span><span class="s2">&quot;Barbara George&quot;</span><span class="s1">); 
<a name="l7"><span class="ln">7    </span></a>        Employee charlie = </span><span class="s0">new </span><span class="s1">Employee(</span><span class="s2">&quot;Charles Goodfellow&quot;</span><span class="s1">); 
<a name="l8"><span class="ln">8    </span></a> 
<a name="l9"><span class="ln">9    </span></a>        System.out.println(charlie.getEmployeeNumber()); 
<a name="l10"><span class="ln">10   </span></a>        </span><span class="s3">//prints out 100003</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a> 
<a name="l12"><span class="ln">12   </span></a>        System.out.println(</span><span class="s2">&quot;The next employee number will be &quot; </span><span class="s1">+ Employee.getNextEmployeeNumber()); 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s3">//prints out: The next employee number will be 100004</span><span class="s1"> 
<a name="l14"><span class="ln">14   </span></a>        </span><span class="s3">//Note that this was not from an **instance**, like charlie. or barb.,</span><span class="s1"> 
<a name="l15"><span class="ln">15   </span></a>        </span><span class="s3">//it was from the class, Employee.get...</span><span class="s1"> 
<a name="l16"><span class="ln">16   </span></a>        </span><span class="s3">//nextEmployeeNumber is a CLASS VARIABLE (and static keeps it that way)</span><span class="s1"> 
<a name="l17"><span class="ln">17   </span></a> 
<a name="l18"><span class="ln">18   </span></a> 
<a name="l19"><span class="ln">19   </span></a> 
<a name="l20"><span class="ln">20   </span></a>        </span><span class="s3">//Here is another example of using static/class variables. The Math class has a couple</span><span class="s1"> 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s3">//of static variables, and many static/class methods:</span><span class="s1"> 
<a name="l22"><span class="ln">22   </span></a>        System.out.println(Math.PI); 
<a name="l23"><span class="ln">23   </span></a>        System.out.println(Math.E); 
<a name="l24"><span class="ln">24   </span></a>        System.out.println(Math.ceil(</span><span class="s4">1.12</span><span class="s1">)); 
<a name="l25"><span class="ln">25   </span></a>        System.out.println(Math.abs(-</span><span class="s4">234</span><span class="s1">)); 
<a name="l26"><span class="ln">26   </span></a> 
<a name="l27"><span class="ln">27   </span></a>        </span><span class="s3">//In fact all Math variables and methods are static; there is not even a</span><span class="s1"> 
<a name="l28"><span class="ln">28   </span></a>        </span><span class="s3">//constructor to make a Math object.</span><span class="s1"> 
<a name="l29"><span class="ln">29   </span></a>        Math m = </span><span class="s0">new </span><span class="Red">Math()</span><span class="s1">; </span><span class="s3">// WILL NOT WORK; there is no Math class constructor; all it's attributes and methods are class attributes and methods</span><span class="s1"> 
<a name="l30"><span class="ln">30   </span></a> 
<a name="l31"><span class="ln">31   </span></a> 
<a name="l32"><span class="ln">32   </span></a> 
<a name="l33"><span class="ln">33   </span></a>        </span><span class="s3">//Note also that methods called from a static context must also be static.</span><span class="s1"> 
<a name="l34"><span class="ln">34   </span></a> 
<a name="l35"><span class="ln">35   </span></a>        </span><span class="Red">method1</span><span class="s1">();  </span><span class="s3">//This call WILL NOT WORK since method1(), below is not static and is</span><span class="s1"> 
<a name="l36"><span class="ln">36   </span></a>                    </span><span class="s3">//being called from main which is static.</span><span class="s1"> 
<a name="l37"><span class="ln">37   </span></a>        method2();  </span><span class="s3">//Will work; method2() is static</span><span class="s1"> 
<a name="l38"><span class="ln">38   </span></a>    } 
<a name="l39"><span class="ln">39   </span></a> 
<a name="l40"><span class="ln">40   </span></a>    </span><span class="s0">public void </span><span class="s1">method1(){ 
<a name="l41"><span class="ln">41   </span></a>        </span><span class="s3">//...</span><span class="s1"> 
<a name="l42"><span class="ln">42   </span></a>    } 
<a name="l43"><span class="ln">43   </span></a> 
<a name="l44"><span class="ln">44   </span></a>    </span><span class="s0">public static void </span><span class="s1">method2(){ 
<a name="l45"><span class="ln">45   </span></a>        </span><span class="s3">//...</span><span class="s1"> 
<a name="l46"><span class="ln">46   </span></a>    } 
<a name="l47"><span class="ln">47   </span></a>} 
<a name="l48"><span class="ln">48  

 </span></a></span>
</pre>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
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