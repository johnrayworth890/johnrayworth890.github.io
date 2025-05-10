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
<script type="text/javascript" src="../../_jwplayer/jwplayer.js"></script>
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_Extension_From_Syllabus.php">OOP HL</a>
		<a href="D.4.10.php">Last</a>
	    <a href="D.4.12.php">Next</a></p>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.11</p>
<p>Construct algorithms using the standard library collections included in JETS.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>The classes are ArrayList and LinkedList. Students should have a broad understanding of the operation of these lists and their interface (methods) but not of the internal structure.<br />
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

?><p>JSR Notes:</p>
<p><span class="darkblue">List ADT E.: List usage with Collection classes ArrayList &amp; LinkedList</span></p>
<p><strong>Context</strong> of D.4.11 in terms of algorithms responsibility (A repeat of this)</p>
<blockquote>
  <p class="gray">D.4.6 - There, we weren't necessarily thinking about a list, we just wanted to see <strong>generally how  linking is achieved through self-referential pointers</strong>. (Though what we looked at there ended up being a list, it also could have been a tree.)</p>
  <p class="gray">D.4.10 -  There, it was the employment of self-referential classes for <strong>implementations of general lists</strong> - and though not necessarily thinking stacks or queues,  certainly these are useful ways of using lists.</p>
  <p>D.4.11 - Here it's the use of self-referential classes in lists via the <strong>specific ADTs, ArrayList and LinkedList</strong>. And though able to treat lists as stacks and queues, also including searching, deleting, adding in order through whole lists. <br />
    <br />
    <span class="comment">And D.4.12, next, is for tracing through such algorithms.</span></p>
</blockquote>
<p>And of all three, D.4.5, D.4.10, and D.4.11, we have to think that this is the key one, since it says in the Teaching Note &quot;Students should have a broad understanding of the operation of these lists and their interface (methods) <em>but not of the internal structure</em>&quot;, which is what D.4.5 an D.4.10 were really about. Past papers, too, hint strongly at an emphasis on this D.4.11 for algorithmic Paper 2 list questions.</p>
<p>&nbsp;</p>
<h3>Intro - Java Library: Collections</h3>
<p><strong>Libraries Review</strong></p>
<p>Remember that &quot;libraries&quot; are groupings of classes of code, which have been made by others, and are now available for you to use, or in the case of the library analogy, to &quot;borrow&quot;. So there is no need to code your own selection sort, or binary search tree etc. It's nice to make your own for learning purposes, and so that you intimately know how they work, but once you get out in the &quot;real world&quot;, rather than in an educational setting, you will want to be the most efficient you can be, and use pre-made classes and algorithms like the ones mentioned here.</p>
<p><strong>Java Collections Framework</strong> (<span class="ASDFASDFA">not required, but for context</span>)</p>
<p>The Java &quot;Collections&quot; classes come from  the Java Collections Framework (JCF) which includes ArrayList and LinkedList. You don't need to understand the hierarchy of the JCF, but for what it's worth, here it is:</p>
<p align="center"><img src="Images/Java-Collections-Hierarchy.jpg" width="542" height="479" alt=""/></p>
<p align="center">Wikepedia CC BY-SA 4.0</p>
<p><strong>The context of classes within a framework</strong> (<span class="ASDFASDFA">also not required, but for context</span>)</p>
<p>The only things we actually use, as programmers, in a given framework are the classes at the bottom of the hierarchy; and of the six of them in Java the Collections framework, there are two library collections that we are to be familiar with for IB CS; they are  LinkedList and ArrayList. (By the way, interfaces  give an list of methods that must be included by classes which implement them, and abstract classes have actual methods and attributes, from which you can extend classes, but they themselves cannot be instantiated - so both &quot;simply&quot; <em><strong>inform</strong></em> how classes below them in a given hierarchy will be implemented.)<br />
  <br />
</p>
<h3><strong>The Collections Classes</strong></h3>
<p>The six Java Collections classes we can use (including ArrayList and LinkedList) are similar to arrays  in that they  hold references to objects and they can be managed as a group. However, unlike arrays, collections are, or can be dynamic; they can also grow and shrink in size automatically when objects are added or removed. And so, unlike arrays, collections do not need to be assigned a certain size when instantiated. <strong>Collections cannot hold primitive types per se, such as int, long, or double, but they can hold objects from the equivalent Wrapper Classes  such as Integer, Long, or Double</strong>. (Modified from Wikipedia.)</p>
<p>When declaring Collections instances, we declare the <em>type</em> of the collection within the &quot;chevron&quot; symbols following the collections class name. For example:</p>
<blockquote>
  <p>ArrayList&lt;Student&gt; students = new ArrayList&lt;Student&gt;( );</p>
  <p>LinkedList&lt;Integer&gt; idNumbers = new LinkedList&lt;Integer&gt;( );</p>
  <p>&nbsp;</p>
</blockquote>
<p align="center">----------------- &quot; -----------------</p>
<h3></h3>
<p>&nbsp;</p>
<h3>Constructing ArrayList and LinkedList Algorithms</h3>
<p>Now onto the assessment statement itself, &quot;Construct algorithms using the standard library collections included in JETS.&quot;</p>
<p><strong>For this, primarily refer to the &quot;<a href="../IBO-Documents/JETS-Document.pdf" target="_blank">JETS</a>&quot; IB document, page 8, and the pseudocode examples in the Pseudocode in Examinations document, and past papers.</strong> (And see below.)<br />
  <br />
</p>
<p>But, first, let's take a look at the full suite of methods available to us in both the ADTs referred to in the Teaching Note: ArrayList (not in the JETS document), and LinkedList.</p>
<p><img src="Images/ArrayList-Methods-IntelliJ.jpg" width="394" height="570" alt=""/><img src="Images/LinkedList-Methods-IntelliJ.jpg" width="391" height="677" alt=""/></p>
<h3>Java's LinkedList and ArrayList Classes </h3>
<p><strong>LinkedList - list specialist</strong></p>
<p>LinkedList has a more actual methods than ArrayList partly because it is made to work either as stacks or queues, and ArrayList is not. So ArrayList doesn't have all of the functions for working with the ends: addFirst, addLast, peeking, popping and polling. Another thing making the LinkedList list of methods seem more impressive is that there are &quot;doubles&quot;; several processes are represented by two methods - for example, pop( ) is just a more stack-specific name for removeLast( ).</p>
<p><strong>ArrayList - full data set specialist</strong></p>
<p><strong><em>But</em></strong>, of the few  extra functions that ArrayList has that LinkedList does not, there are some really important ones if dealing regularly with a full data set, not just the ends. For starters, there's sort( ). And ArrayLists' ability to iterate through the whole structure is a lot more developed, with methods like forEach( ), iterator( ), and replaceAll( )<br />
  </p>
<p>So when you want stack and/or queue functionality, you would choose LinkedList, but for sure <strong>ArrayList is very useful too when you want to work with not just the ends of a data set</strong>.<br />
  <br />
  <br />
</p>
<h3>JETS - Java Examination Tool Subset</h3>
<p>JETS stands for Java Examination Tool Subset, and is a document that shows you the kind of coding standards to expect on IB CS exams - though it's generally the way we do things, and doing lots of past papers is the best way to be most comfortable with this anyway.</p>
<p>Note that there is an inconsistency between the Teaching Note above and the actual JETs document; <strong>only the LinkedList is  shown in the JETS document</strong>. </p>
<p>Here are all of the functions listed in the original <a href="../IBO-Documents/JETS-Document.pdf">JETS document</a>: Though note that they are just listed - the explanations of what they do are not there. But, on the other hand, the next assessment statement's Teaching Note says the following: &quot;In examination questions, definitions of ArrayList and LinkedList methods will be given where necessary.&quot; One way or the other, you should enter the exam knowing how the following methods do work.<br />
</p>
<div title="Page 8">
  <div>
    <div>
      <div>
        <pre>&nbsp; 		</pre>
        <div title="Page 7">
          <div>
            <div>
              <div>
                <p>LinkedList&lt;E&gt; where E defines the type of elements held in the list </p>
                <p>Constructor LinkedList&lt;E&gt;() </p>
              </div>
            </div>
          </div>
        </div>
        <pre>.add(E e) 
.add(int index, E element)      Inserts the specified element at the specified position in this list.
.addFirst(E e)                  Inserts the specified element at the beginning of this list. 
.addLast(E e)                   Appends the specified element to the end of this list.

.clear()                        Removes all of the elements from this list.
.element()                      Retrieves, but does not remove, the head (first element) of this list.

.get(int index)                 Returns the element at the specified position in this list.
.getFirst()                     Returns the first element in this list.
.getLast()                      Returns the last element in this list.

.remove()                       Retrieves and removes the head (first element) of this list.
.remove(int index)              Removes the element at the specified position in this list.
.removeFirst()                  Removes and returns the first element from this list.
.removeLast()                   Removes and returns the last element from this list.

.size()                         Returns the number of elements in this list.
.isEmpty()                      Returns if the list is empty.
		</pre>
      </div>
    </div>
  </div>
  <br />
</div>
<p><strong>The difference between get( ) and remove( )</strong>: In fact, both return the object, but in the case of remove( ), it is removed also. So if you are looking to work with the data, either one will work, but get( ) will leave it in the list and remove( ) will remove it from the list. So the choice you make should be based on intention; if it is your intent to simply get the data, use get( ), and if your intent is to remove, use remove( ).</p>
<p>And even though remove( ) returns the object, you can still use it if you just want to remove it, even though not receiving the object where the call to remove is made. So, either of the following will remove the element; the first one has it go &quot;poof into thin air&quot;, and the second uses it:</p>
<blockquote>
  <p>myList.removeFirst( );</p>
  </blockquote>
<p>and </p>
<blockquote>
  <p>Student s = myList.removeFirst( );</p>
</blockquote>
<p>(And in terms of the full LinkedList and JETS, remember that many of the methods which are not part of JETS, really are there. For example, peek( ) and poll( ) work the same as getLast( ) and getFirst( ), it's just that they are better stack and queue specific terms. And the same goes for pop( ) and dequeue( ), as they are preferred for stacks and queues, rather than using removeLast( ), and removeFirst( ).)</p>
<p class="comment">&nbsp;</p>
<h3>Past Paper LinkedList Construction Questions</h3>
<p>This is primarily what this assessment statement is geared toward. Though most of the notes above is setting up Collections, and below is possible applications of them.</p>
<p><span class="ASDFASDFA">And the best thing to do at this point is make sure there is lots of time in March and April to do lots, if not all of the following questions. The thing is that the LinkedList parts of the questions come at the end, so it's better to do them all as part of last stage exam preparation</span>.</p>
<p>From past paper printouts that can't leave the class, look up the following questions.<span class="comment"><br />
  <span class="gray">(JSR Note: The digital version of these is in a folder &quot;Past Papers LOOK INSIDE&quot;.)</span></span></p>
<p>As with all past papers, it is best to prioritize the latest exams. So working backward:</p>
<p>Nov. 2017: Q 18 - page 18<br />
May 2017: Q 15 - page 16<br />
Nov. 2016: Q 20 - page 15<br />
<span class="gray">May 2016: Q 17 (a) and (b) - page 17 - but not really; more arrays only</span><br />
Nov. 2015: Q 18 - page 18<br />
May 2015: Q 18 (c) and (d) - page 16 Most of these others are construction questions primarily.<br />
Nov. 2014: Q 17 - page 18<br />
May 2014: Q 17, - page 19</p>
<p><a href="LinkedList-Exam-Questions-Coallated.rtfd.zip">Practice questions</a> .rtfd compressed file.</p>
<p>&nbsp;</p>
<p class="comment">*** JSR Note: Consider adding simpler set-pieces for the middle of Year 2.***</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><br />
  Stack &amp; Queue Class Made from Inheriting LinkedList</h3>
<p>Next, as a possible question, which combines a couple of OOP Option topics, but also as a very good review of  LinkedList, stack &amp; queues, and inheritance, check out this straightforward and nice application of inheritance.</p>
<p>(And here's a reminder of how <a href="D.2.2.php">inheritance</a> works.)</p>
<pre>
 4 <span class="keyword-directive">import</span> MyLinkedList;
 5 <span class="comment"></span>
10 <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> <span class="ST1">My<strong>Stack</strong></span> <span class="keyword-directive">extends</span> MyLinkedList{
11     
12     <span class="keyword-directive">public</span> <span class="ST1">MyStack</span>(){       
14     }
15     
16     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> <span class="ST1">push</span>(Object o){
17         <span class="keyword-directive">super</span>.addFirst(o); <span class="comment">//or the way it was called in D.4.10, insertAtHead</span>
18     }
19     
20     <span class="keyword-directive">public</span> Object <span class="ST1">pop</span>(){
21         <span class="keyword-directive">return</span> <span class="keyword-directive">super</span>.removeFirst();
22     }
23 }
 

 4 <span class="keyword-directive">import</span> MyLinkedList;

10 <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> <span class="ST1">My<strong>Queue</strong></span> <span class="keyword-directive">extends</span> MyLinkedList{
11     
12     <span class="keyword-directive">public</span> <span class="ST1">MyQueue</span>(){     
14     }
15     
16     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> <span class="ST1">enqueue</span>(Object o){ 
17         <span class="keyword-directive">super</span>.addLast(o); <span class="comment">//or the way it was called in D.4.10, insertAtTail</span>
18     }
19     
20     <span class="keyword-directive">public</span> Object <span class="ST1">dequeue</span>(){
21         <span class="keyword-directive">return</span> <span class="keyword-directive">super</span>.removeFirst();
22     } 
24 }
</pre>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">----------------------- &quot; -----------------------</p>
	<p align="center">----------------------- &quot; -----------------------<br />
	  <br />
  </p>
  <h3>LinkedList Applied to a GUI IB CS IA Situation </h3>
	<p>***<span class="ASDFASDFA">This is not necessary for this particular assessment statement</span>*** but it fits in nicely here, and is good reinforcement. This is an example of how to use LinkedList in your IB CS internal assessment. And note that you have a situation that works as either a stack or a queue, you should; the IB expects that you will use &quot;Libraries&quot; which help you not reinvent the wheel. So if you have a situation in which a data structure will grow or shrink in size, you should definitely use a stack or queue rather than an array. And it's not that hard; in fact it's easier than doing it from scratch.</p>
	<p><strong>The GUI class using LinkedList</strong></p>
<p><img src="Images/ArrayList-Project.png" alt="array list project" width="384" height="226" /> <img src="Images/Array-List-Project-2.png" alt="array list project 2" width="379" height="226" /></p>
<pre>
 26 <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> <span class="ST0">GUICars</span> <span class="keyword-directive">extends</span> javax.swing.JFrame {
 27  
 34     <strong>LinkedList &lt;Car&gt; <span class="ST1">carLinkedList</span> = <span class="keyword-directive">new</span> LinkedList();</strong>
 35     
 36     <span class="keyword-directive">public</span> <span class="ST0">GUICars</span>() {
 37         initComponents();
 38         myInit();
 39     }
 40 <span class="ST3">                   </span>                                        
328     <span class="ST4">private</span> <span class="ST4">void</span> <span class="ST5">entryButtonMouseReleased</span><span class="guarded">(</span><span class="guarded">java</span><span class="guarded">.</span><span class="guarded">awt</span><span class="guarded">.</span><span class="guarded">event</span><span class="guarded">.</span><span class="guarded">MouseEvent</span> <span class="guarded">evt</span><span class="guarded">)</span> <span class="guarded">{</span>                                          
330         <span class="keyword-directive">int</span> numDoors = 5;
331         <span class="keyword-directive">if</span>(<span class="ST1">threeDoorRB</span>.isSelected()){
332             numDoors = 3;
333         }<span class="keyword-directive">else</span> <span class="keyword-directive">if</span>(<span class="ST1">fourDoorRB</span>.isSelected()){
334             numDoors = 4;
335         }
336         
337         <span class="ST1"><strong>carLinkedList</strong></span><strong>.add</strong>(<span class="keyword-directive">new</span>  Car (<span class="ST1">carColorTF</span>.getText(),  <span class="ST1">carNameTF</span>.getText(),  <span class="ST1">isManual</span>.isSelected(),  numDoors));
338         <span class="ST1">carColorTF</span>.setText(<span class="character">&quot;&quot;</span>);
339         <span class="ST1">carNameTF</span>.setText(<span class="character">&quot;&quot;</span>);
341     <span class="guarded">}</span>                                         
342 
344     <span class="keyword-directive">private</span> <span class="keyword-directive">void</span> <span class="ST0">displayPanelMouseReleased</span>(java.awt.event.MouseEvent evt){
345          <span class="keyword-directive">for</span>(<span class="keyword-directive">int</span> i = 0; i &lt; <span class="ST1">carLinkedList</span>.size(); i++){
346             <span class="ST1">displayTable</span>.setValueAt<strong>(<span class="ST1">carLinkedList</span>.get(i).getColor(</strong>), i, 0);
347             <span class="ST1">displayTable</span>.setValueAt<strong>(<span class="ST1">carLinkedList</span>.get(i).getName(</strong>), i, 1);
349         }
350     }

</pre>
<p><strong>The Sort&amp;Search Class using LinkedList </strong></p>
<pre>
 6 <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> <span class="ST0">CarSortAndSearch</span> {
 7 
 8     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> <span class="ST0">sortByCarName</span>(<strong>LinkedList &lt;Car&gt; carLinkedList</strong>) { 
                                         //SO HERE'S A SORT OF A LINKED LIST FOR YOU TO USE IF YOU WANT
 9         <span class="keyword-directive">int</span> n = carLinkedList.size();
10         <span class="keyword-directive">boolean</span> sorted = <span class="keyword-directive">false</span>;
11         <span class="keyword-directive">while</span> (!sorted) {
12             n--;
13             sorted = <span class="keyword-directive">true</span>;
14             <span class="keyword-directive">for</span> (<span class="keyword-directive">int</span> i = 0; i &lt; n; i++) {
15                 <span class="keyword-directive">if</span> (<strong>carLinkedList.get(i).getName()</strong>.compareTo(<strong>carLinkedList.get(i).getName()</strong>) &gt; 0) {
16                     <span class="comment">//Swap:</span>
17                     Car temp = c<strong>arLinkedList.get(i)</strong>; <span class="comment">//making a temporary carList object</span>
18                     <strong>carLinkedList.set(i, carLinkedList.get(i+1))</strong>; <span class="comment">//set the first to be the second</span>
19                     <strong>carLinkedList.set(i+1, temp)</strong>;  <span class="comment">//set the second to be the temp       </span>
20                     sorted = <span class="keyword-directive">false</span>;
21                 }
22             }
23         }
24     }
25 
26     <span class="keyword-directive">public</span> <span class="keyword-directive">int</span> <span class="ST0">binarySearchCarName</span>(String carToSearchFor,<strong> LinkedList &lt;Car&gt; carLinkedList</strong>) {
                                         //AND HERE'S A BINARY SEARCH OF A LINKED LIST TO USE IF YOU WANT
27         <span class="keyword-directive">int</span> low = 0;
28         <span class="keyword-directive">int</span> high = <strong>carLinkedList.size()</strong> - 1;
29         <span class="keyword-directive">while</span> (low &lt;= high) {
30             <span class="keyword-directive">int</span> mid = (high + low) / 2;
31             <span class="keyword-directive">if</span> (<strong>carLinkedList.get(mid).getName().equalsIgnoreCase(carToSearchFor)</strong>) {
32                 <span class="keyword-directive">return</span> mid;
33             } <span class="keyword-directive">else</span> <span class="keyword-directive">if</span> (<strong>carLinkedList.get(mid).getName()</strong>.compareTo(carToSearchFor) &lt; mid) {
34                 low = mid + 1;
35             } <span class="keyword-directive">else</span> {
36                 <span class="keyword-directive">if</span> (<strong>carLinkedList.get(mid).getName()</strong>.compareTo(carToSearchFor) &gt; mid) {
37                     high = mid - 1;
38                 }
39             }
40         }
41         <span class="keyword-directive">return</span> -1;
42     }
43     </pre>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
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