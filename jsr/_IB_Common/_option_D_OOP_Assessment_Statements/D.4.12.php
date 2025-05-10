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
		<a href="D.4.11.php">Last</a>
	    <a href="D.4.13.php">Next</a></p>
</div>

	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.12</p>
<p>Trace algorithms using the implementations described in assessment statements D.4.9–D.4.11.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>In examination questions, definitions of ArrayList and LinkedList methods will be given where necessary.<br />
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
<p><span class="darkblue">List ADT F.: Tracing usage of ArrayList &amp; Linked List</span></p>
<p>This assessment statement states algorithms described in D.4.9 - D.4.11, so it's <strong>not just LinkedList</strong> from the last assessment statement, it's a static implementation of lists, the List ADT, and both ArrayList and LinkedList. For <em>making</em> algorithms (as in D.4.10), yes, it's just with the methods listed. But in this case, <strong>for tracing</strong>, it's not just tracing programs with that subset of methods, <strong>it's all of them</strong>. Though, as the Teaching Note suggests, definitions of the methods used will be given.</p>
<p><br />
  See the <a href="../IBO-Documents/Sample-Papers-2014.pdf" target="_blank">sample paper pages 43-46 (below)</a> for sure, along with former papers to get practice with any kind of tracing.</p>
<p>From past paper printouts that can't leave the class, look up the following questions.<br />
  <span class="gray">(JSR Note: The digital version of these is in a folder &quot;Past Papers LOOK INSIDE&quot;.)</span></p>
<p>As with all past papers, it is best to prioritize the latest exams. So working backward:</p>
<p>Nov. 2017: Q 18 - page 18<br />
  May 2017: Q 15 - page 16<br />
Nov. 2016: Q 20 - page 15<br />
<span class="gray">May 2016: Q 17 (a) and (b) - page 17 - but not really; more arrays only</span><br />
Nov. 2015: Q 18 - page 18<br />
May 2015: Q 18 (c) and (d) - page 16 Most of these others are construction questions primarily.<br />
Nov. 2014: Q 17 - page 18<br />
May 2014: Q 17, - page 19</p>
<p>Since there are very few tracing questions from past papers, the best thing to do would be to look at the Marking Schemes of the above questions.</p>
<p><a href="LinkedList-Exam-Questions-Coallated.rtfd.zip">Practice questions</a> .rtfd compressed file.</p>
<p>&nbsp;</p>
<h3>Tracing Examples</h3>
<p>Though, as noted above, tracing can be any of the ADTs mentioned in the previous three assessment statements, the most likely is still LinkedList, so here are three examples.</p>
<pre>
Q1. What is the output after the following code is run?
The output of the following code is done for you by way of comments to the side.
 1 
 2 <span class="literal">import</span> java.util.LinkedList;
 3 
 4 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">UsingLinkedList</span> {
 5     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">main</span>(String[] args) {
 6         <span class="ST2">stackOfStrings</span>();
 7     }
 8     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">stackOfStrings</span>(){
 9         LinkedList&lt;String&gt; namesList = <span class="literal">new</span> LinkedList&lt;String&gt;();
10         namesList.addFirst(<span class="string">&quot;</span><span class="string">Joe</span><span class="string">&quot;</span>);                   <span class="comment">//Joe</span>
11         namesList.addFirst(<span class="string">&quot;</span><span class="string">Betty</span><span class="string">&quot;</span>);                 <span class="comment">//Betty Joe</span>
12         namesList.addFirst(<span class="string">&quot;</span><span class="string">Phil</span><span class="string">&quot;</span>);                  <span class="comment">//Phil Betty Joe</span>
13         System.<span class="ST3">out</span>.println(namesList.removeFirst()); <span class="comment"> //Betty Joe         //Phil output</span>
14         System.<span class="ST3">out</span>.println(namesList.getFirst());     <span class="comment">//Betty Joe         //Betty output</span>
15         namesList.removeFirst();                     <span class="comment">//Joe</span>
16         namesList.addFirst(<span class="string">&quot;</span><span class="string">Sue</span><span class="string">&quot;</span>);                   <span class="comment">//Sue Joe</span>
17         namesList.addFirst(<span class="string">&quot;</span><span class="string">Charles</span><span class="string">&quot;</span>);               <span class="comment">//Charles Sue Joe</span>
18         namesList.removeFirst();                     <span class="comment">//Sue Joe</span>
19         namesList.addFirst(<span class="string">&quot;</span><span class="string">Chisanga</span><span class="string">&quot;</span>);              <span class="comment">//Chisanga Sue Joe</span>
20         System.<span class="ST3">out</span>.println(namesList.removeFirst()); <span class="comment"> //Sue Joe            //Chisanga output</span>
21     }
22 }


Q2. What is the output after the following code is run?</pre>
		
		


<pre>
 1 <span class="literal">import</span> java.util.LinkedList;
 2 
 3 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">MoreLinkedListQs</span> {
 4     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">main</span>(String[] args) {
 5         LinkedList&lt;Integer&gt; numbers = <span class="literal">new</span> LinkedList&lt;Integer&gt;();
 6         numbers.addLast(99);
 7         numbers.addLast(888);
 8         numbers.addLast(11);
 9         System.<span class="ST2">out</span>.println(numbers.element());
10         numbers.addLast(22);
11         numbers.addLast(33);
12         System.<span class="ST2">out</span>.println(numbers.removeLast());
13         System.<span class="ST2">out</span>.println(numbers.removeFirst());
14         System.<span class="ST2">out</span>.println(numbers.getFirst());
15         numbers.clear();
16         System.<span class="ST2">out</span>.println(numbers.size());
17     }
18 }


Q3. What is the output after the following code is run?</pre>
		
		
		
		
		
		
		

<pre>
 1 <span class="literal">import</span> java.util.LinkedList;
 2 
 3 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">MoreLinkedListQs</span> {
 4     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">main</span>(String[] args) {
 5         LinkedList&lt;String&gt; countries = <span class="literal">new</span> LinkedList&lt;String&gt;();
 6         countries.addFirst(<span class="string">&quot;</span><span class="string">Canada</span><span class="string">&quot;</span>);
 7         countries.addFirst(<span class="string">&quot;</span><span class="string">USA</span><span class="string">&quot;</span>);
 8         countries.addLast(<span class="string">&quot;</span><span class="string">Thailand</span><span class="string">&quot;</span>);
 9         countries.addLast(<span class="string">&quot;</span><span class="string">Malaysia</span><span class="string">&quot;</span>);
10         countries.addLast(<span class="string">&quot;</span><span class="string">Madagascar</span><span class="string">&quot;</span>);
11         countries.remove(3);
12         countries.add(2, <span class="string">&quot;</span><span class="string">Ethiopia</span><span class="string">&quot;</span>);
13         countries.addFirst(<span class="string">&quot;</span><span class="string">Zimbabwe</span><span class="string">&quot;</span>);
14         countries.add(2, <span class="string">&quot;</span><span class="string">Botswana</span><span class="string">&quot;</span>);
15         <span class="literal">for</span>(<span class="literal">int</span> i = 0; i &lt; countries.size(); i++){
16             System.<span class="ST2">out</span>.println(countries.get(i));
17         }
18     }
19 }

.....</pre>
		
		
		
		
		
		
		
		
		
		
		

<p>The following class shows the two different ways you can implement a List as a queue, and then the two different ways you can implement a List as a stack. This is good review of Topic 5, but also good practice for tracing.</p>
<h3>List as Queue, with Adding First, <br />
  &amp; List as Queue with Adding Last</h3>
<p>First up, queue. Queue's just need to work in a FIFO way, so the removing and adding just need to be at opposite ends, so either adding first, or adding last works, as long as you remove from the opposite end.</p>
<pre>
 1 
 2 <span class="literal">import</span> java.util.LinkedList;
 3 
 4 
 5 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">MoreLinkedList</span> {
 6     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">main</span>(String[] args) {
 7         <span class="literal"></span> <span class="literal"></span><span class="ST2">listAsQueueAddingFirst</span>();
 8        <span class="literal"></span>  <span class="literal"></span><span class="ST2">listAsQueueAddingLast</span>();
 9        <span class="literal"></span>  <span class="literal"></span><span class="ST2">listAsStackUsingFirst</span>();
10        <span class="literal"></span>  <span class="literal"></span><span class="ST2">listAsStackUsingLast</span>(); 
12     }
14     <span class="comment">/*</span>
15 <span class="comment">     With stacks we work only at one end (be it &quot;first&quot; or &quot;last&quot;</span>
16 
17 <span class="comment">     But with queues, we work with both ends (be it &quot;add to first, and get from last&quot;</span>
18 <span class="comment">     or &quot;add to last and get from first - which makes more sense.)</span>
20 <span class="comment">    */</span>
23     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">listAsQueueAddingLast</span>(){
24         LinkedList&lt;Integer&gt; intList = <span class="literal">new</span> LinkedList&lt;Integer&gt;();
25         intList.addLast(62);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//<strong>62</strong></span>
26         intList.addLast(55);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//62  <strong>55</strong></span>
27         intList.addLast(44);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//62  55  <strong>44</strong></span>
28         intList.addLast(88);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="comment">//62  55  44  <strong>88</strong></span>
29         intList.addLast(99);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//62  55  44  88  <strong>99</strong></span>
<span class="gray">//queue so remove from opposite end as added</span>
30         System.<span class="ST3">out</span>.println(intList.removeFirst());&#32;&#32;<span class="comment">//55  44  88  99    Output 62</span>
31         System.<span class="ST3">out</span>.println(intList.removeFirst());&#32;&#32;<span class="gray">//44  88  99        Output 55</span>
32         System.<span class="ST3">out</span>.println(intList.removeFirst());&#32;&#32;<span class="gray">//88  99            Output 44</span>
33     }
34 
36     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">listAsQueueAddingFirst</span>(){
37         LinkedList&lt;Integer&gt; intList = <span class="literal">new</span> LinkedList&lt;Integer&gt;();
38         intList.addFirst(62);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//<strong>62</strong></span>
39         intList.addFirst(55);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//<strong>55</strong> 62</span>
40         intList.addFirst(44);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//<strong>44</strong> 55  62</span>
41         intList.addFirst(88);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="gray">//<strong>88</strong>  44  55  62</span>
42         intList.addFirst(99);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;<span class="comment">//<strong>99</strong>  88  44  55  62</span>
<span class="gray">//queue so remove from opposite end as added:</span>
43         System.<span class="ST3">out</span>.println(intList.removeLast());  <span class="gray">  //99  88  44  55</span><span class="comment"><span class="comment1">    Output 62</span></span>
44         System.<span class="ST3">out</span>.println(intList.removeLast());   <span class="gray"> //99  88  44        Output 55</span>
45         System.<span class="ST3">out</span>.println(intList.removeLast());   <span class="gray"> //99  88            Output 44</span>
47     }
</pre>
<h3>List as Stack, Using Last/Last, <br />
  &amp; List as Stack Using First/First
</h3>
<p>Next up, stack. And like queue, there are two ways to do it. But unlike queues both the removing and the adding will happen at the same end, whether working with the first or the last nodes; last/last or first/first.</p>
<pre>
48 
53     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">listAsStackUsingLast</span>(){
54         LinkedList&lt;Integer&gt; intList = <span class="literal">new</span> LinkedList&lt;Integer&gt;();
55         intList.addLast(62);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//<strong>62</strong></span>
56         intList.addLast(55);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//62  <strong>55</strong></span>
57         intList.addLast(44);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//62  55  <strong>44</strong></span>
58         intList.addLast(88);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//62  55  44  <strong>88</strong></span>
59         intList.addLast(99);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//62  55  44  88  <strong>99</strong></span>
<span class="gray">//stack so remove from same end as added</span>
60         System.<span class="ST3">out</span>.println(intList.removeLast());     <span class="comment">//62  55  44  88<span class="comment1">    </span>Output 99</span>
61         System.<span class="ST3">out</span>.println(intList.removeLast());     <span class="comment">//62  55  44        Output 88</span>
62         System.<span class="ST3">out</span>.println(intList.removeLast());     <span class="gray">//62  55            Output 44 </span>
63     }
64 
65     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">listAsStackUsingFirst</span>(){
66         LinkedList&lt;Integer&gt; intList = <span class="literal">new</span> LinkedList&lt;Integer&gt;();
67         intList.addFirst(62);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//<strong>62</strong></span>
68         intList.addFirst(55);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;<span class="gray">//<strong>55</strong>  62</span>
69         intList.addFirst(44);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;&#32;<span class="gray">//<strong>44</strong>  55  62</span>
70         intList.addFirst(88);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;&#32;&#32;<span class="gray">//<strong>88</strong>  44  55  62</span>
71         intList.addFirst(99);&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;  &#32;<span class="gray">//<strong>99</strong>  88  44  55  62</span>
<span class="gray">//stack so remove from same end as added</span>
72         System.<span class="ST3">out</span>.println(intList.removeFirst());    <span class="comment"> //88  44  55  62<span class="comment1">    Output 99</span></span>
73         System.<span class="ST3">out</span>.println(intList.removeFirst());     <span class="gray">//44  55  62        Output 88</span>
74         System.<span class="ST3">out</span>.println(intList.removeFirst());     <span class="gray">//55  62            Output 44</span>
75     }
76 }
77 
</pre>
<p>&nbsp;</p>
<p><strong>A copy and past of the Sample Paper question (page 46) which deals with lists.</strong></p>
<div title="Page 46">
  <div>
    <div>
      <p>D4. The bus company decides to run a simulation over a particular route to see what happens when several buses are started on the route a set time apart. A queue will be used to hold the individual Bus instances. </p>
      <p>(a) Identify three features of a queue that make it suitable for this purpose. [3] </p>
    </div>
  </div>
  <div>
    <div>
      <p>(b) Construct a diagram of the queue after the following code has been executed. [3] </p>
      <p>public class BusSim{ </p>
      <p>  private LinkedList&lt;Bus&gt; busQueue; </p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args){ <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new BusSim(); <br />
        &nbsp;&nbsp;&nbsp;&nbsp;} <br />
        &nbsp;&nbsp;&nbsp;&nbsp;public BusSim() </p>
      <p><span class="gray">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Create new LinkedList for Bus instances</span><br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;busQueue = new LinkedList&lt;Bus&gt;();<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BusRoute route = new BusRoute(903, &quot;Nerang Creek Road&quot;); <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus bus1 = new Bus(2011, &quot;C Humbley&quot;, route);<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus bus2 = new Bus(3943, &quot;M Hillier&quot;, route);<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus bus3 = new Bus(4923, &quot;J Inglis&quot;, route); <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;busQueue.addFirst(bus1);<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;busQueue.addFirst(bus2); <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;busQueue.addFirst(bus3);<br />
        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
        }      </p>
    </p>
    </div>
  </div>
  <div>
    <div>
      <p>(c) Construct the method removeBus(int pos) which attempts to remove a bus from the queue at the speci ed position, and returns true if successful and false if it fails. [4] </p>
      <p>A large company might have several hundred buses running. Each one has a unique id stored with the Bus instance. </p>
      <p>(d) Explain how a binary tree could be used to store these ids such that they can be quickly retrieved (if they exist) by a search. [3] </p>
      <p>The tree stores the ids 2045, 3474, 5877, 1099, 9644.<br/>
        (e) Draw a diagram of an ordered binary tree containing these keys assuming they were inserted in the order given. [5] </p>
      <p>A binary tree node may be inserted iteratively or recursively.<br/>
        (f) Identify two disadvantages of the recursive algorithm. [2] </p>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<p>D4. </p>
<p>(a) Award up to [3 marks max].<br />
  A queue is a first in first out structure;<br />
  Buses/objects should not be inserted in the middle of a queue;<br />
  Logically the first bus to leave/enter the queue will be the first to arrive/leave the queue;<br />
  Random access will not be required to a particular instance, making a queue more suitable than an array; [3 marks]<br />
</p>
<p>(b) Award marks as follows up to [3 marks max].<br />
  Award [1 mark] for three objects clearly representing a bus by some identifier (number or driver);<br />
  Award [1 mark] for objects in the correct sequence as represented by arrows </p>
<p>or otherwise;<br />
  Award [1 mark] for labeled start and end of queue;<br />
  Example diagram:</p>
<p><img src="Images/D4-exam-q-diagram.jpeg" width="459" height="119" alt=""/>[3 marks]</p>
<p>(c) Award marks as follows up to [4 marks max].<br />
  Award [1 mark] for correct return type of Boolean;<br />
  Award [1 mark] for correct test for pos less than queue size;<br />
  Award [1 mark] for correct test for pos &gt; 0;<br />
  Award [1 mark] for correct return value;<br />
  </p>
<p>Example answer:<br /><pre>
private boolean removeBus(int pos){
    if ((pos &lt; busQueue.size()) &amp;&amp; (pos &gt;= 0)){
        busQueue.remove(pos);
        return true;
    }
    else{
        return false;
    }
} </p></pre>
<p>[4 marks]</p>
<p>(d) Award up to [3 marks max].<br />
  A binary tree has pointers to left and right nodes;<br />
  Nodes can be ordered;<br />
  Such that smaller values are placed to the left/right of a node;<br />
  Which reduces search time;<br />
  To O(log(n)); [3 marks]</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
<h2>&nbsp;</h2>
<div></div>
<p>&nbsp;</p>
<h2>&nbsp;</h2>
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