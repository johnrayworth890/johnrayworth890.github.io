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
		a {text-decoration:none}
.ln { color: #999999; font-weight: normal; font-style: normal; }
.s0 { color: rgb(0,0,128); font-weight: bold; }
.s1 { color: rgb(0,0,0); }
.s2 { color: rgb(0,0,255); }
.s3 { color: rgb(0,128,0); font-weight: bold; }
</style>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
	
	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_From_Syllabus.php">OOP Option</a>
		<a href="D.1.10.php">Last</a>
	    <a href="D.2.2.php">Next</a></p>
</div>	
	
	
	
	
	
	
	<div class="backgroundDiv">


<h2>D.2 Features of OOP (4 hours)</h2>
<p>Students should be able to describe the features of OOP that distinguish it from other approaches to computer programming.</p>
<p align="center">______________________________________________</p>
<p align="center">&nbsp;</p>
<h3>Intro to OOP - Three Super Powers</h3>
<p>There are many different ways of approaching programming, and each has its advantages and rationales. Functional programming and procedural programming are two other approaches you will often hear of. The main reason that OOP has risen to the fore in the past couple of decades is that it results, for a variety of reasons, in more stable, bug free code.</p>
<p>The stability and utility of Object Oriented Programming really comes down to three main concepts. And when compared to other ways of programming, they really do seem like superpowers:</p>
<p><strong>Encapsulation</strong> - This makes our OOP superhero impenetrable to outside threats, like the Avengers   collectively putting their shields up to protect Earth from Thanos<em></em>.</p>
<p><strong>Inheritance</strong> - In the same way that Wonder Woman and Donna Troy have inherited powers from their mother Hippolyta, and indeed from Zeus himself, classes in OOP programming are able to use strengths that come from further up an inheritance hierarchy, and in doing so they avoid the problems that can come from duplication.<br />
</p>
<p><strong>Polymorphism</strong> - Just like with The Hulk/Bruce Banner, our OOP superhero methods can take on very different forms, depending on their context, adding a great degree of flexibility to the operation of programs.<br />
</p>
<p align="center">______________________________________________</p>
<p>&nbsp;</p>
<p><br />
</p>
<div class="roundedCornerDiv">
D.2.1</p>
<p>Define the term encapsulation.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Data and actions are limited to the object in which they are defined.<br />
	</div>
</p>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>Define the term encapsulation.</p>
<p><span class="line-number"><br />
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
<blockquote>
  <p><strong>Encapsulation Preface - Java .class Files</strong></p>
  <p>To totally understand a few of the things coming up in the following notes, you should  have a bit of insight into the way OOP files are passed around to different programmers to be used. Here are the three main files types used and developed when coding in Java:</p>
  <p><strong>.java</strong> file - the actual text file that programmers work on (like the ones we work on in IntelliJ). If you sent this to another programmer, they can directly open it up and work on it.</p>
  <p><strong>.class</strong> file - the partially compiled file. When sent to another programmer, <strong>they can use the file</strong> (just like we use System or Scanner etc. classes) <strong>but they cannot open it and edit it</strong>. (Though, for the record, it actually can be de-compiled with a hack, but the whole point of OOP is it is not intended to be.)</p>
  <p>It is this file which is most often shared among programmers and programming teams.</p>
  <p><strong>.jar</strong> file - this is the single compressed file we make when we are ready for our project to be used/sold as a stand alone app.</p>
  <p align="center"><img src="Images/Structure-of-Superheros-Game.jpeg" width="267" height="383" alt=""/></p>
  <p align="center">Above: An IntelliJ IDEA Project Structure - note the <strong>.java</strong> file, its associate <strong>.class</strong> file, and the overall <strong>.jar</strong> file<br />
    <br />
  </p>
  <p align="center"><img src="Images/Game-Java.jpeg" width="488" height="451" alt=""/></p>
  <p align="center">Above: A .java file - this is editable by anyone.</p>
  <p align="center">&nbsp;</p>
  <p align="center"><img src="Images/Game-Class-File.jpeg" width="355" height="451" alt=""/></p>
  <p align="center">Above: The associated .class file -  not editable in this form.</p>
</blockquote>
<p>&nbsp;</p>
<h3>OOP Super Power # 1: Encapsulation </h3>
<p>&ldquo;<em>If we can&rsquo;t protect the Earth, you can be damned well sure we'll avenge it</em>.&rdquo; - Tony Stark (With OOP encapsulation, no avenging needed!)<br />
  <br />
</p>
<p><strong>General Definition</strong></p>
<p>One of the primary concepts of OOP is that both the attributes of a class and the methods that act upon them are together, &quot;encapsulated&quot;. This implies that they are both together, and are protected. </p>
<p>The only way that attributes can be worked with by any other class is via the public interface of those methods. The methods control/manage the way that the attributes can be worked with. In this way, the programmer of a particular class has complete control over how data is worked with.</p>
<p><strong>Encapsulated Against What?</strong></p>
<p>The reasons that we don't want attributes to be altered from other classes are many. One reason is to protect security in the conventional sense; i.e. to protect money and information from being altered/accessed inappropriately. For example, if a class keeps track of the amount of money you have in the bank, the bank wouldn't want you to be able to hack into the data regarding your balance, as you could make this any value you wish. And though encapsulation does help security in this sense, it is used more generally to make programs more secure as in the stability sense. Encapsulation helps programs maintain the integrity of how their attributes are supposed to be handled.</p>
<p>Ultimately it is the programmer him/herself of particular code who knows best how the attributes in that code could/should be worked with. They know intimately the sorts of things that need to be avoided so that the data is not corrupted, compromised or rendered either problematic or useless. Compare this to the situation where the data in one class can be altered anyway another class chooses. We can assume that the programmers within a certain company or organization are not trying to sabotage each other's classes/programs, but it is much easier for them make mistakes when allowed to directly use the attributes of other colleague's code. There are just too many exceptional cases which need to be considered, and the author him/herself of each individual piece of code is best placed to handle these.</p>
<h3><strong><br />
  Protection...</strong></h3>
<p>Encapsulation means the &quot;<strong>protection</strong>&quot; of the data attributes of a class, so that  objects of that class can only be used in ways that the programmer of that class permits. </p>
<p>This is done by keeping the <strong>data attributes themselves private</strong>, and only making available to other classes  certain public methods which work with the data in specific, controlled ways. And further, it is <strong>only the signature of the methods which is publicly visible</strong> and accessible (i.e. only the method name, its return type and required parameters). The actual implementation of all methods (both public and private)  are hidden from the other classes which use them. </p>
<p>So when encapsulation principles are followed, the using class cannot directly access attributes, and when it uses the public methods of the other class, it can't see or manipulate the contents of the method. It can only see what is referred to as the public interface, which is the method name, it's parameter list (number and kind of parameters) and return type.</p>
<h3><strong>...Via Grouping/Association</strong></h3>
<p>In some respects you could say that the grouping of attributes and methods that work on them is incidental - of course we group in this way. And for sure it's less the grouping than the protection within the groups that is most important. Never-the-less, the grouping, in-and-of itself offers its own distinct advantages, like easier testing and faster development, by splitting a big job into smaller, discrete, testable parts that can be worked on by various teams at the same time.</p>
<p>&nbsp;</p>
<h3><strong>Java and Encapsulation</strong></h3>
<p>The Java keywords which enable encapsulation are mainly: <strong>private</strong>, and <strong>public</strong>, (though <strong>protected</strong> can also be useful).</p>
<blockquote>
  <p><strong>private</strong> allows only access from within the class. So attributes are &quot;protected&quot; by being made private.</p>
  <p><strong>public</strong> allows all other classes access, so the methods which will be available to all other classes are made public. Do note that there may indeed be many methods which are private, which means they can only be used by other methods within that class. Such private methods are often referred to as &quot;helper&quot; methods.</p>
  <p>(<strong>protected</strong> allows only other classes in the same package to have access. It is usually methods which are protected rather than attributes.)</p>
</blockquote>
<p><strong><br />
  Private Attributes</strong></p>
<p>The Java reserve word <strong>private</strong> keeps data attributes (and some methods also) from being visible and accessible outside of the class in which they are defined. For example:</p>
<pre><br /><strong>private</strong> double checkingAccountBalance;<br />
</pre>
<p><strong>Public Methods</strong> - <strong>but it's the Header only that is public</strong></p>
<p>Even when a method is designated public (with the public reserve word), only it's header, i.e. it's signature that is visible to other classes. </p>
<p>So in a template class itself, which implements encapsulation, none of the body of the  method  can be seen by the using class. The only thing from the encapsulated method adjustCkBalance (in the class below) that the using class would see - via the documentation or the IDE - would be the method name, parameter list and return type: </p>
<p><img src="Images/CheckingAccount.jpg" width="661" height="163" alt=""/></p>
<p>And note that in the class below, since the checkingAccountBalance attribute is private, you could not directly do the following:</p>
<p>joesBankAccount.<strong>checkingAccountBalance</strong> += 1000000; <span class="comment"><br />
  
  //ERROR - NOT POSSIBLE - checkingAccountBalance is a <strong>private attribute</strong>, not a public method intended to return the amount.</span></p>
<pre><strong></strong><a name="l1" id="l1"><span class="ln">1    </span></a><span class="s0">package </span><span class="s1">forbankaccountexample; 
<a name="l2" id="l2"><span class="ln">2    </span></a> 
<a name="l3" id="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">BankAccount { 
<a name="l4" id="l4"><span class="ln">4    </span></a> 
<a name="l5" id="l5"><span class="ln">5    </span></a>    </span><span class="s0">private double </span><span class="s1">checkingAccountBalance = -</span><span class="s2">999</span><span class="s1">; 
<a name="l6" id="l6"><span class="ln">6    </span></a> 
<a name="l7" id="l7"><span class="ln">7    </span></a> 
<a name="l8" id="l8"><span class="ln">8    </span></a>    </span><span class="s0">public </span><span class="s1">String adjustCkBalance(String pw, </span><span class="s0">double </span><span class="s1">amt) { 
<a name="l9" id="l9"><span class="ln">9    </span></a>        String returnString = </span><span class="s3">&quot;not set yet&quot;</span><span class="s1">; 
<a name="l10" id="l10"><span class="ln">10   </span></a>        </span><span class="s0">if </span><span class="s1">(pw.equals(</span><span class="s3">&quot;!asdf@#$sdfLJk&quot;</span><span class="s1">)) { 
<a name="l11" id="l11"><span class="ln">11   </span></a>            </span><span class="s0">if </span><span class="s1">(amt &lt; </span><span class="s2">0 </span><span class="s1">&amp;&amp; amt &lt; checkingAccountBalance) { 
<a name="l12" id="l12"><span class="ln">12   </span></a>                returnString = </span><span class="s3">&quot;Sorry, withdraw amount is less than current balance.&quot;</span><span class="s1">; 
<a name="l13" id="l13"><span class="ln">13   </span></a>            } </span><span class="s0">else </span><span class="s1">{ 
<a name="l14" id="l14"><span class="ln">14   </span></a>                checkingAccountBalance += amt; 
<a name="l15" id="l15"><span class="ln">15   </span></a>            } 
<a name="l16" id="l16"><span class="ln">16   </span></a>        } 
<a name="l17" id="l17"><span class="ln">17   </span></a>        </span><span class="s0">else</span><span class="s1">{ 
<a name="l18" id="l18"><span class="ln">18   </span></a>                returnString = </span><span class="s3">&quot;Sorry, wrong password.&quot;</span><span class="s1">; 
<a name="l19" id="l19"><span class="ln">19   </span></a>        }</span><span class="s0">return </span><span class="s3">&quot;Your new balance is &quot; </span><span class="s1">+ checkingAccountBalance; 
<a name="l20" id="l20"><span class="ln">20   </span></a>    } 
<a name="l21" id="l21"><span class="ln">21   </span></a>} 
<a name="l22" id="l22"><span class="ln"></span></a><a name="l23" id="l23"><span class="ln"> </span></a></span><br />
</pre>
<p align="center">_________________________________________</p>
<p><strong><br />
  Advantages of Encapsulation</strong></p>
<p>Refer to <a href="D.2.4.php">D.2.4</a> for the reasons all of this encapsulation is a good idea. (But - spoiler alert! - in the example above, the user class would not be able to directly withdraw or add money to the account, nor would the user class be able to see the password in the body of the method, to take an obvious advantage.)</p>
<p>&nbsp;</p>
<h3><strong>Full Encapsulation Example </strong></h3>
<p>(Adapted from a past paper question.)</p>
<p>The problem with trying to explain encapsulation as an introduction to OOP is that encapsulation in many ways is every part of OOP except for inheritance and polymorphism - or put another way, encapsulation **is** OOP; it is grouping attributes with the methods that work on those attributes. So to see a full example, at least one which is useful in a &quot;protection of attributes&quot; sort of way, you pretty well have to see a ***full*** example. So here you go, a FULL OOP example. (The only things missing are inheritance and polymorphism.)</p>
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">public class </span><span class="s1">BookLoan { 
<a name="l2"><span class="ln">2    </span></a>    </span><span class="s0">private int </span><span class="s1">bookID; 
<a name="l3"><span class="ln">3    </span></a>    </span><span class="s0">private </span><span class="s1">String bookTitle; 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">static int </span><span class="s1">numBooksLoaned = </span><span class="s2">0</span><span class="s1">; 
<a name="l5"><span class="ln">5    </span></a> 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s3">//Constructors</span><span class="s1"> 
<a name="l7"><span class="ln">7    </span></a>    </span><span class="s0">public </span><span class="s1">BookLoan(){ 
<a name="l8"><span class="ln">8    </span></a> 
<a name="l9"><span class="ln">9    </span></a>    } 
<a name="l10"><span class="ln">10   </span></a> 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s0">public </span><span class="s1">BookLoan(</span><span class="s0">int </span><span class="s1">bookID, String bookTitle){ 
<a name="l12"><span class="ln">12   </span></a>        </span><span class="s0">this</span><span class="s1">.bookID = bookID; 
<a name="l13"><span class="ln">13   </span></a>        </span><span class="s0">this</span><span class="s1">.bookTitle = bookTitle; 
<a name="l14"><span class="ln">14   </span></a>        numBooksLoaned = numBooksLoaned ++; 
<a name="l15"><span class="ln">15   </span></a>    } 
<a name="l16"><span class="ln">16   </span></a> 
<a name="l17"><span class="ln">17   </span></a>    </span><span class="s3">//&quot;Gets&quot;, i.e. Accessor Methods</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a>    </span><span class="s0">public int </span><span class="s1">getBookID(){ 
<a name="l19"><span class="ln">19   </span></a>        </span><span class="s0">return this</span><span class="s1">.bookID; 
<a name="l20"><span class="ln">20   </span></a>    } 
<a name="l21"><span class="ln">21   </span></a> 
<a name="l22"><span class="ln">22   </span></a>    </span><span class="s0">public </span><span class="s1">String getBookTitle(){ 
<a name="l23"><span class="ln">23   </span></a>        </span><span class="s0">return this</span><span class="s1">.bookTitle; 
<a name="l24"><span class="ln">24   </span></a>    } 
<a name="l25"><span class="ln">25   </span></a> 
<a name="l26"><span class="ln">26   </span></a>    </span><span class="s3">//&quot;Sets&quot;</span><span class="s1"> 
<a name="l27"><span class="ln">27   </span></a>    </span><span class="s0">public void </span><span class="s1">setBookID(</span><span class="s0">int </span><span class="s1">id){ 
<a name="l28"><span class="ln">28   </span></a>        </span><span class="s0">this</span><span class="s1">.bookID = id; 
<a name="l29"><span class="ln">29   </span></a>    } 
<a name="l30"><span class="ln">30   </span></a> 
<a name="l31"><span class="ln">31   </span></a>    </span><span class="s0">public void </span><span class="s1">setBookTitle(String title){ 
<a name="l32"><span class="ln">32   </span></a>        </span><span class="s0">this</span><span class="s1">.bookTitle = title; 
<a name="l33"><span class="ln">33   </span></a>    } 
<a name="l34"><span class="ln">34   </span></a>} 
<a name="l35"><span class="ln">35   </span></a></span>

</pre>
	
	
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">import </span><span class="s1">java.util.ArrayList; 
<a name="l2"><span class="ln">2    </span></a> 
<a name="l3"><span class="ln">3    </span></a></span><span class="s0">public class </span><span class="s1">Student { 
<a name="l4"><span class="ln">4    </span></a>    </span><span class="s0">private </span><span class="s1">String studentName = </span><span class="s2">&quot;not set yet&quot;</span><span class="s1">; 
<a name="l5"><span class="ln">5    </span></a>    </span><span class="s0">private int </span><span class="s1">grade = -</span><span class="s3">999</span><span class="s1">; 
<a name="l6"><span class="ln">6    </span></a>    </span><span class="s0">private boolean </span><span class="s1">isIBDiploma = </span><span class="s0">false</span><span class="s1">; 
<a name="l7"><span class="ln">7    </span></a>    <span class="s0">private</span> ArrayList&lt;BookLoan&gt; bookLoans = </span><span class="s0">new </span><span class="s1">ArrayList&lt;BookLoan&gt;(); 
<a name="l8"><span class="ln">8    </span></a>    </span><span class="s4">//so an example of aggregation; Student objects have BookLoans</span><span class="s1"> 
<a name="l9"><span class="ln">9    </span></a> 
<a name="l10"><span class="ln">10   </span></a>    </span><span class="s4">//Constructors</span><span class="s1"> 
<a name="l11"><span class="ln">11   </span></a>    </span><span class="s0">public </span><span class="s1">Student(){ 
<a name="l12"><span class="ln">12   </span></a> 
<a name="l13"><span class="ln">13   </span></a>    } 
<a name="l14"><span class="ln">14   </span></a> 
<a name="l15"><span class="ln">15   </span></a>    </span><span class="s0">public </span><span class="s1">Student(String name, </span><span class="s0">int </span><span class="s1">grade){ 
<a name="l16"><span class="ln">16   </span></a>        studentName = name; 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s0">this</span><span class="s1">.grade = grade; 
<a name="l18"><span class="ln">18   </span></a>    } 
<a name="l19"><span class="ln">19   </span></a> 
<a name="l20"><span class="ln">20   </span></a>    </span><span class="s0">public </span><span class="s1">Student(String name, </span><span class="s0">int </span><span class="s1">grade, </span><span class="s0">boolean </span><span class="s1">isIBDiploma){ 
<a name="l21"><span class="ln">21   </span></a>        studentName = name; 
<a name="l22"><span class="ln">22   </span></a>        </span><span class="s0">this</span><span class="s1">.grade = grade; 
<a name="l23"><span class="ln">23   </span></a>        </span><span class="s0">this</span><span class="s1">.isIBDiploma = isIBDiploma; 
<a name="l24"><span class="ln">24   </span></a>    } 
<a name="l25"><span class="ln">25   </span></a> 
<a name="l26"><span class="ln">26   </span></a>    </span><span class="s4">//THE FOLLOWING ARE ALL EXAMPLES OF THE &quot;GROUPING/ASSOCIATION&quot;</span><span class="s1"> 
<a name="l27"><span class="ln">27   </span></a>    </span><span class="s4">//PART OF ENCAPSULATION - ALL OF THE METHODS THAT WORK WITH</span><span class="s1"> 
<a name="l28"><span class="ln">28   </span></a>    </span><span class="s4">//THE ABOVE ATTRIBUTES ARE GROUPED HERE IN THIS CLASS</span><span class="s1"> 
<a name="l29"><span class="ln">29   </span></a>    </span><span class="s4">//PARTICULARLY NOTE THE addLoan() METHOD BELOW...</span><span class="s1"> 
<a name="l30"><span class="ln">30   </span></a> 
<a name="l31"><span class="ln">31   </span></a>    </span><span class="s4">//&quot;Gets&quot;, i.e. Accessor Methods</span><span class="s1"> 
<a name="l32"><span class="ln">32   </span></a>    </span><span class="s0">public </span><span class="s1">String getStudentName() { 
<a name="l33"><span class="ln">33   </span></a>        </span><span class="s0">return </span><span class="s1">studentName; 
<a name="l34"><span class="ln">34   </span></a>    } 
<a name="l35"><span class="ln">35   </span></a> 
<a name="l36"><span class="ln">36   </span></a>    </span><span class="s0">public int </span><span class="s1">getGrade() { 
<a name="l37"><span class="ln">37   </span></a>        </span><span class="s0">return </span><span class="s1">grade; 
<a name="l38"><span class="ln">38   </span></a>    } 
<a name="l39"><span class="ln">39   </span></a> 
<a name="l40"><span class="ln">40   </span></a>    </span><span class="s0">public </span><span class="s1">ArrayList&lt;BookLoan&gt; getBookLoans(){ 
<a name="l41"><span class="ln">41   </span></a>        </span><span class="s0">return </span><span class="s1">bookLoans; 
<a name="l42"><span class="ln">42   </span></a>    } 
<a name="l43"><span class="ln">43   </span></a> 
<a name="l44"><span class="ln">44   </span></a>    </span><span class="s0">public boolean </span><span class="s1">isIBDiploma() { 
<a name="l45"><span class="ln">45   </span></a>        </span><span class="s0">return </span><span class="s1">isIBDiploma; 
<a name="l46"><span class="ln">46   </span></a>    } 
<a name="l47"><span class="ln">47   </span></a> 
<a name="l48"><span class="ln">48   </span></a>    </span><span class="s4">//&quot;Sets&quot;</span><span class="s1"> 
<a name="l49"><span class="ln">49   </span></a>    </span><span class="s0">public void </span><span class="s1">setGrade(</span><span class="s0">int </span><span class="s1">grade){ 
<a name="l50"><span class="ln">50   </span></a>        </span><span class="s0">this</span><span class="s1">.grade = grade; 
<a name="l51"><span class="ln">51   </span></a>    } 
<a name="l52"><span class="ln">52   </span></a> 
<a name="l53"><span class="ln">53   </span></a>    </span><span class="s0">public void </span><span class="s1">setIBDiploma(</span><span class="s0">boolean </span><span class="s1">isIBDiploma){ 
<a name="l54"><span class="ln">54   </span></a>        </span><span class="s0">this</span><span class="s1">.isIBDiploma = isIBDiploma; 
<a name="l55"><span class="ln">55   </span></a>    } 
<a name="l56"><span class="ln">56   </span></a> 
<a name="l57"><span class="ln">57   </span></a>    </span><span class="s4">//Other &quot;Modifier&quot; Methods</span><span class="s1"> 
<a name="l58"><span class="ln">58   </span></a> 
<a name="l59"><span class="ln">59   </span></a>    </span><span class="green">//... SO NEXT IS THE MOST IMPORTANT METHOD TO BE &quot;GROUPED/ASSOCIATED&quot;</span><span class="s1"> 
<a name="l60"><span class="ln">60   </span></a>    </span><span class="green">//WITH THE DATA ATTRIBUTES ABOVE. ONLY THIS METHOD CAN DETERMIN</span><span class="s4">E</span><span class="s1"> 
<a name="l61"><span class="ln">61   </span></a>    </span><span class="green">//WHETHER OR NOT ANOTHER BOOK CAN BE LOANED. AND THE IMPLEMENTATION</span><span class="s1"> 
<a name="l62"><span class="ln">62   </span></a>    </span><span class="green">//OF THAT IS ALL HIDDEN TO OTHER CLASSES. THE ONLY THING THAT THE</span><span class="s4">Y</span><span class="s1"> 
<a name="l63"><span class="ln">63   </span></a>    </span><span class="green">//CAN SEE IS THE PUBLIC HEADER BELOW.</span><span class="s1"> 
<a name="l64"><span class="ln">64   </span></a> 
<a name="l65"><span class="ln">65   </span></a>    </span><span class="s0">public void </span><span class="s1">addLoan(BookLoan newLoan){ 
<a name="l66"><span class="ln">66   </span></a>        </span><span class="s0">if</span><span class="s1">(bookLoans.size() &gt; </span><span class="s3">0 </span><span class="s1">&amp;&amp; (</span><span class="s0">this</span><span class="s1">.grade &lt; </span><span class="s3">11 </span><span class="s1">|| !isIBDiploma)){ 
<a name="l67"><span class="ln">67   </span></a>            System.out.println(</span><span class="s2">&quot;Sorry you cannot take out another book&quot;</span><span class="s1">); 
<a name="l68"><span class="ln">68   </span></a>            </span><span class="s0">if</span><span class="s1">(</span><span class="s0">this</span><span class="s1">.grade &lt; </span><span class="s3">11</span><span class="s1">){ 
<a name="l69"><span class="ln">69   </span></a>                System.out.println(</span><span class="s2">&quot;because of your grade level.</span><span class="s0">\n</span><span class="s2">&quot;</span><span class="s1">);
<a name="l70"><span class="ln">70   </span></a>            }
<a name="l71"><span class="ln">71   </span></a>            </span><span class="s0">else</span><span class="s1">{\
<a name="l72"><span class="ln">72   </span></a>                System.out.println(</span><span class="s2">&quot;even though you are grade 11 or 12, because&quot; </span><span class="s1">+ 
<a name="l73"><span class="ln">73   </span></a>                        </span><span class="s2">&quot; you are not a full IB diploma student.</span><span class="s0">\n</span><span class="s2">&quot;</span><span class="s1">); 
<a name="l74"><span class="ln">74   </span></a>            } 
<a name="l75"><span class="ln">75   </span></a>        } 
<a name="l76"><span class="ln">76   </span></a>        </span><span class="s0">else</span><span class="s1">{ 
<a name="l77"><span class="ln">77   </span></a>            bookLoans.add(newLoan); 
<a name="l78"><span class="ln">78   </span></a>        } 
<a name="l79"><span class="ln">79   </span></a> 
<a name="l80"><span class="ln">80   </span></a>    } 
<a name="l81"><span class="ln">81   </span></a>} 
<a name="l82"><span class="ln">82   </span></a></span>

</pre>	
	
	
<pre>
<a name="l1"><span class="ln">1    </span></a><span class="s0">public class </span><span class="s1">MainClass { 
<a name="l2"><span class="ln">2    </span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l3"><span class="ln">3    </span></a> 
<a name="l4"><span class="ln">4    </span></a>        Student[] borrowers = </span><span class="s0">new </span><span class="s1">Student[</span><span class="s2">2000</span><span class="s1">]; 
<a name="l5"><span class="ln">5    </span></a>        </span><span class="s3">//(BTW, note the use of an array instead of an ArrayList, so lots of elements wasted</span><span class="s1"> 
<a name="l6"><span class="ln">6    </span></a>        </span><span class="s3">//here, since there are only three students created, but 2000 elements made.)</span><span class="s1"> 
<a name="l7"><span class="ln">7    </span></a> 
<a name="l8"><span class="ln">8    </span></a>        Student zangChi = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s4">&quot;Zan Chi&quot;</span><span class="s1">, </span><span class="s2">11</span><span class="s1">, </span><span class="s0">true</span><span class="s1">); 
<a name="l9"><span class="ln">9    </span></a>        zangChi.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">345</span><span class="s1">, </span><span class="s4">&quot;The Animals&quot;</span><span class="s1">)); 
<a name="l10"><span class="ln">10   </span></a>        zangChi.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">678</span><span class="s1">, </span><span class="s4">&quot;War and Peace&quot;</span><span class="s1">)); 
<a name="l11"><span class="ln">11   </span></a>        </span><span class="s3">//OK, since a book already on loan, but in grade 11, and is IBDiploma student.</span><span class="s1"> 
<a name="l12"><span class="ln">12   </span></a>        borrowers[</span><span class="s2">0</span><span class="s1">] = zangChi; 
<a name="l13"><span class="ln">13   </span></a> 
<a name="l14"><span class="ln">14   </span></a>        Student SooYongKim = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s4">&quot;Soo Yong Kim&quot;</span><span class="s1">, </span><span class="s2">10</span><span class="s1">); 
<a name="l15"><span class="ln">15   </span></a>        SooYongKim.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">1234</span><span class="s1">, </span><span class="s4">&quot;The Odyssey&quot;</span><span class="s1">)); 
<a name="l16"><span class="ln">16   </span></a>        SooYongKim.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">56645</span><span class="s1">, </span><span class="s4">&quot;Don Quixote&quot;</span><span class="s1">)); 
<a name="l17"><span class="ln">17   </span></a>        </span><span class="s3">//NOT OK, GRADE 10 AND ALREADY WITH A BOOK ON LOAN.</span><span class="s1"> 
<a name="l18"><span class="ln">18   </span></a> 
<a name="l19"><span class="ln">19   </span></a>        </span><span class="s3">//-------&gt;&gt;&gt;&gt; SO THIS IS AN EXAMPLE OF THE &quot;PROTECTION&quot; PART OF ENCAPSULATION</span><span class="s1"> 
<a name="l20"><span class="ln">20   </span></a>        </span><span class="s3">//DOING ITS JOB; THIS MainClass PROGRAM CANNOT DO ANYTHING TO TAKE OUT ANY</span><span class="s1"> 
<a name="l21"><span class="ln">21   </span></a>        </span><span class="s3">//MORE BOOKS FOR THIS STUDENT; NOTHING **HERE** CAN BE DONE TO CHANGE THAT.</span><span class="s1"> 
<a name="l22"><span class="ln">22   </span></a>        </span><span class="s3">//IT IS ALL CONTROLLED BACK IN THE HIDDEN PART OF addLoan().
<a name="l22" id="l24"><span class="ln">22  </span></a></span><span class="s1">
<a name="l23"><span class="ln">23   </span></a>        borrowers[</span><span class="s2">1</span><span class="s1">] = SooYongKim; 
<a name="l24"><span class="ln">24   </span></a> 
<a name="l25"><span class="ln">25   </span></a>        Student JoeNguyen = </span><span class="s0">new </span><span class="s1">Student(</span><span class="s4">&quot;Joe Nguyen&quot;</span><span class="s1">, </span><span class="s2">12</span><span class="s1">, </span><span class="s0">false</span><span class="s1">); 
<a name="l26"><span class="ln">26   </span></a>        JoeNguyen.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">23423</span><span class="s1">, </span><span class="s4">&quot;The Ocean&quot;</span><span class="s1">)); 
<a name="l27"><span class="ln">27   </span></a>        JoeNguyen.addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">75675</span><span class="s1">, </span><span class="s4">&quot;Love in the Time of Cholera&quot;</span><span class="s1">)); 
<a name="l28"><span class="ln">28   </span></a>        </span><span class="s3">//Not OK, grade 11 and already a book on loan, and not IBDiploma student.</span><span class="s1"> 
<a name="l29"><span class="ln">29   </span></a>        borrowers[</span><span class="s2">2</span><span class="s1">] = JoeNguyen; 
<a name="l30"><span class="ln">30   </span></a> 
<a name="l31"><span class="ln">31   </span></a> 
<a name="l32"><span class="ln">32   </span></a>        borrowers[</span><span class="s2">1</span><span class="s1">].addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">8778</span><span class="s1">, </span><span class="s4">&quot;Wuthering Heights&quot;</span><span class="s1">)); 
<a name="l33"><span class="ln">33   </span></a>        </span><span class="s3">//Not OK, grade 10 and still a book on loan.</span><span class="s1"> 
<a name="l34"><span class="ln">34   </span></a>        borrowers[</span><span class="s2">0</span><span class="s1">].addLoan(</span><span class="s0">new </span><span class="s1">BookLoan(</span><span class="s2">868</span><span class="s1">, </span><span class="s4">&quot;The Spooks&quot;</span><span class="s1">)); 
<a name="l35"><span class="ln">35   </span></a>        </span><span class="s3">//OK, since a book already on loan, but in grade 11, and is IBDiploma student.</span><span class="s1"> 
<a name="l36"><span class="ln">36   </span></a> 
<a name="l37"><span class="ln">37   </span></a> 
<a name="l38"><span class="ln">38   </span></a> 
<a name="l39"><span class="ln">39   </span></a> 
<a name="l40"><span class="ln">40   </span></a>        System.out.println(</span><span class="s4">&quot;----------------&quot;</span><span class="s1">); 
<a name="l41"><span class="ln">41   </span></a>        System.out.println(borrowers[</span><span class="s2">0</span><span class="s1">].getStudentName() + </span><span class="s4">&quot;:&quot;</span><span class="s1">); 
<a name="l42"><span class="ln">42   </span></a>        </span><span class="s0">for</span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s1">; i &lt; borrowers[</span><span class="s2">0</span><span class="s1">].getBookLoans().size(); i++){ 
<a name="l43"><span class="ln">43   </span></a>            System.out.println(borrowers[</span><span class="s2">0</span><span class="s1">].getBookLoans().get(i).getBookTitle()); 
<a name="l44"><span class="ln">44   </span></a>        } 
<a name="l45"><span class="ln">45   </span></a> 
<a name="l46"><span class="ln">46   </span></a>        System.out.println(</span><span class="s4">&quot;----------------&quot;</span><span class="s1">); 
<a name="l47"><span class="ln">47   </span></a>        System.out.println(borrowers[</span><span class="s2">1</span><span class="s1">].getStudentName() + </span><span class="s4">&quot;:&quot;</span><span class="s1">); 
<a name="l48"><span class="ln">48   </span></a>        </span><span class="s0">for</span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s1">; i &lt; borrowers[</span><span class="s2">1</span><span class="s1">].getBookLoans().size(); i++){ 
<a name="l49"><span class="ln">49   </span></a>            </span><span class="s3">//Do note that the size of the arraylist is 1, but this will still work.</span><span class="s1"> 
<a name="l50"><span class="ln">50   </span></a>            System.out.println(borrowers[</span><span class="s2">1</span><span class="s1">].getBookLoans().get(i).getBookTitle()); 
<a name="l51"><span class="ln">51   </span></a>        } 
<a name="l52"><span class="ln">52   </span></a> 
<a name="l53"><span class="ln">53   </span></a>        System.out.println(</span><span class="s4">&quot;----------------&quot;</span><span class="s1">); 
<a name="l54"><span class="ln">54   </span></a>        System.out.println(borrowers[</span><span class="s2">2</span><span class="s1">].getStudentName() + </span><span class="s4">&quot;:&quot;</span><span class="s1">); 
<a name="l55"><span class="ln">55   </span></a>        </span><span class="s0">for</span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s1">; i &lt; borrowers[</span><span class="s2">2</span><span class="s1">].getBookLoans().size(); i++){ 
<a name="l56"><span class="ln">56   </span></a>            System.out.println(borrowers[</span><span class="s2">2</span><span class="s1">].getBookLoans().get(i).getBookTitle()); 
<a name="l57"><span class="ln">57   </span></a>        } 
<a name="l58"><span class="ln">58   </span></a>    } 
<a name="l59"><span class="ln">59   </span></a>} 
<a name="l60"><span class="ln">60   

</span><p>OUTPUT</p><p>Sorry you cannot take out another book<br />because of your grade level.</p><p>Sorry you cannot take out another book<br />even though you are grade 11 or 12, because you are not a full IB diploma student.</p><p>Sorry you cannot take out another book<br />because of your grade level.</p><p>----------------<br />Zang Chi:<br />The Animals<br />War and Peace<br />The Spooks<br />----------------<br />Soo Yong Kim:<br />The Odyssey<br />----------------<br />Joe Nguyen:<br />The Ocean</p></a></span></pre>	
	
	
	
<p>(Here is a <a href="For-Encapsulation-Notes.zip">link to the above IntelliJ IDEA project</a>.)</p>
<p>&nbsp;</p>
<h3>Stability and Reliability of Programs </h3>
<p>It is important to note, though hard to show without the aid of much more complex programs, that the main thing encapsulation <strong>protects against is poor programming choices with code that a programmer may not be familiar enough with</strong>.</p>
<p>So it's not so much keeping a user from using a program a certain way, for instance changing the number of books that can be loaned by a student, or withdrawing money from a bank account directly. Rather it's acknowledging the point that the original programmer/programming team knows all the ins and outs and peculiarities of its classes much, much better than any other programmer/team simply using those classes. </p>
<p>So the programmers using those classes should not be able to go in willy-nilly and change things. Sure, if they really took their time and knew their stuff, they may not make any errors. But OOP encapsulation principles ensures that this risk is not taken. Via encapsulation, the receiving programmer/team simply cannot dig inside and edit unfamiliar code - they are not permitted. Yet they are perfectly welcome to use those public method in the controlled ways which are permitted. </p>
<p>In &quot;the olden days&quot;, pre-OOP, such digging around in other people's code was allowed, and it caused many stability and reliability problems. <strong>So it's the improved stability and reliability of programs which is the actual real benefit of OOP encapsulation</strong>.</p>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Define the term encapsulation.  <br />
</p>
<p>Encapsulation is the OOP practice of protecting of data by grouping data attributes and their associated methods together, and making the attributes themselves private. The attributes can only be accessed indirectly through  public accessor methods, which work with the data in safe, controlled ways. This makes programs much more reliable.</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre>&nbsp;

</pre>
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