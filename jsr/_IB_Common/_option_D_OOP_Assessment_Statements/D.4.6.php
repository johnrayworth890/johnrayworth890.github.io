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
</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_Extension_From_Syllabus.php">OOP HL</a>
		<a href="D.4.5.php">Last</a>
	    <a href="D.4.7.php">Next</a></p>
		<a href="../_topic5AssessmentStatements/5.1.11.php">(5.1.11)</a>
		<a href="../_topic5AssessmentStatements/5.1.12.php">(5.1.12)</a>
</div>
	
<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.6</p>
<p>Construct algorithms that use reference mechanisms.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:<br />
	</em></p></div>
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

?>
<p>JSR Notes:</p>
<p>This assessment statement immediately jumps right into quite sophisticated code, but taken one step at a time, it all makes sense. The other thing to note at this stage is the difference between this, and D.4.10, and D.4.11, and D.4.12, the other three &quot;algorithm&quot; D HL Extension assessment statements.</p>
<p><strong>Context</strong> of this in terms of algorithms responsibility   (Repeated later on):</p>
<blockquote>
  <p> D.4.6 - Here,  we aren't necessarily thinking about a list, we just want to see <strong>generally how  linking is achieved through self-referential pointers</strong>. (Though what we look at here is obviously most ultimately usable in either  trees or lists.)</p>
  <p class="gray">D.4.10 -  The employment of self-referential classes for  <strong>implementations of general lists</strong> - and not necessarily thinking stacks or queues, but certainly these are useful ways of using lists.</p>
  <p class="gray">D.4.11 - The use of self-referential classes in lists via the <strong>specific ADTs ArrayList and LinkedList</strong>. And though able to treat lists as stacks and queues, also searching, deleting, adding in order through whole lists. <br />
    <br />
    And D.4.12 is for tracing through such algorithms.</p>
</blockquote>
<h3><br />
  Basic Referential Algorithms<br />
</h3>
<p>At a basic level, this is how Nodes (of a linked list or binary tree) can be made, to link and point to one another.</p>
<blockquote>
  <p><span class="gray">//<strong>Construct</strong> your Nodes</span><br />
    Node n = new Node();<br />
    Node n1 = New Node();<br />
    Node n2 = new Node();<br />
Node n3 = New Node();<br />
<span class="gray">//etc.</span> </p>
  <p><span class="gray">//<strong>Link</strong> the nodes one to another as a <strong>list</strong>, using the setNext( )s.</span><br />
    n.setNext(n1);<br />
    n1.setNext(n2);<br />
    n2.setNext(n3);<br />
    <span class="gray">//etc.</span><br />
    <span class="gray">//or in the case of a <strong>tree</strong></span><br />
    n.setLeft(n1);<br />
    n.setRight(n2);<br />
    <span class="gray">//etc.</span> </p>
  <p><span class="gray">//<strong>Traverse</strong> through the linked nodes from one node to another (as a list), using getNext( )s.</span><br />
  Node secondStep = 
  n.getNext( );<br />
  Node thirdStep = secondStep.getNext( );<br />
  Node fourthStep = thirdSetp.getNext( );<br />
  <span class="gray">//etc. </span></p>
</blockquote>
<p><br />
  <strong>***</strong>It is the <strong>setNext( )</strong> and <strong>getNext()</strong> methods that <strong>take in as a parameter, or return another Node</strong>, which are key. <strong>The secret is that Nodes are object, and objects are references, so if the &quot;next&quot; attribute of a Node is another Node, then, in fact what &quot;next&quot; is is the *address* of the next Node.</strong>***</p>
<p><img src="Images/Linked-List-Basics.jpg" width="657" height="752" alt=""/></p>
<h3>Actual  Referential Mechanism Algorithms</h3>
<p>Even though <em>applied</em> usage of specific list classes (like in D.4.11) is what is most focused on the Topic D Extension, this particular assessment statement is pretty clear with what it wants: &quot;Construct algorithms that use reference mechanisms&quot; i.e. <em>general</em> algorithms.</p>
<p>So one way or the other, general or specific, here we go, with Java self referential algorithms.  </p>
<p>Taking one step at a time,  helped along by a good white board diagram, you'll see that each  is quite logical. Learning, and even memorizing these will  help you understand referential mechanisms and lists, and also help you with all related construction and tracing questions from this point forward.</p>
<p><strong>A Typical Node Class</strong></p>
<pre>
<a name="l1"><span class="ln">1</span></a><span class="s0">public class </span><span class="s1">Node { 
<a name="l2"><span class="ln">2</span></a>    </span><span class="s0">private </span><span class="s1">Object obj = </span><strong>null</strong><span class="s1">;  </span><span class="gray">//The &quot;data&quot; part. By being Object, all objects will work with this class.</span><span class="s1">
<a name="l3"><span class="ln">3</span></a>    </span><span class="s0">private </span><span class="s1">Node next = </span><span class="s0">null</span><span class="s1">;     </span><span class="gray">//The key part of this class for linking; the self-referential &quot;next&quot; node in the list.</span><span class="s1">
<a name="l4"><span class="ln">4</span></a> 
<a name="l5"><span class="ln">5</span></a>    </span><span class="s0">public </span><span class="s1">Node(){ <a name="l6"></a>
<a name="l7"><span class="ln">7</span></a>    } 
<a name="l8"><span class="ln">8</span></a> 
<a name="l9"><span class="ln">9</span></a>    </span><span class="s0">public </span><span class="s1">Node(Object obj, Node node){ 
<a name="l10"><span class="ln">10</span></a>        </span><span class="s0">this</span><span class="s1">.obj = obj; 
<a name="l11"><span class="ln">11</span></a>        </span><span class="s0">this</span><span class="s1">.next = node; 
<a name="l12"><span class="ln">12</span></a>    } 
<a name="l13"><span class="ln">13</span></a> 
<a name="l14"><span class="ln">14</span></a>    </span><span class="s0">public void </span><span class="s1">setNext(Node node) {    </span> <span class="gray">//To set what the next node will be.</span><span class="s1">
<a name="l15"><span class="ln">15</span></a>        </span><span class="s0">this</span><span class="s1">.next = node; 
<a name="l16"><span class="ln">16</span></a>    } 
<a name="l17"><span class="ln">17</span></a> 
<a name="l18"><span class="ln">18</span></a>    </span><span class="s0">public void </span><span class="s1">setData(Object obj) { 
<a name="l19"><span class="ln">19</span></a>        </span><span class="s0">this</span><span class="s1">.obj = obj; 
<a name="l20"><span class="ln">20</span></a>    } 
<a name="l21"><span class="ln">21</span></a> 
<a name="l22"><span class="ln">22</span></a>    </span><span class="s0">public </span><span class="s1">Node getNext() {     </span><span class="gray">//To allow accessing the next Node in the list.</span><span class="s1">
<a name="l23"><span class="ln">23</span></a>        </span><span class="s0">return </span><span class="s1">next; 
<a name="l24"><span class="ln">24</span></a>    } 
<a name="l25"><span class="ln">25</span></a> 
<a name="l26"><span class="ln">26</span></a>    </span><span class="s0">public </span><span class="s1">Object getObj() { 
<a name="l27"><span class="ln">27</span></a>        </span><span class="s0">return </span><span class="s1">obj; 
<a name="l28"><span class="ln">28</span></a>    } 
<a name="l29"><span class="ln">29</span></a>} 
<a name="l30"><span class="ln">30</span></a></span></pre>	
	<p><strong>A Basic  List Class</strong></p>
	<pre>
<a name="l1"><span class="ln">1</span></a><span class="s0">public class </span><span class="s1">List { 
<a name="l1" id="l1"><span class="ln">1</span></a>
<a name="l2"><span class="ln">2</span></a>    </span><span class="s0">private </span><span class="s1">Node head = </span><span class="s0">null</span><span class="s1">;   </span><span class="gray">//So essentially this is all a List is; just a single &quot;head&quot; node.</span><span class="s1">
<a name="l3"><span class="ln">3</span></a> 
<a name="l4"><span class="ln">4</span></a>    </span><span class="s0">public </span><span class="s1">List(){ 
<a name="l5"><span class="ln">5</span></a> 
<a name="l6"><span class="ln">6</span></a>    } 
<a name="l7"><span class="ln">7</span></a> 
<a name="l8"><span class="ln">8</span></a>    </span><span class="s0">public </span><span class="s1">List(Node head){ 
<a name="l9"><span class="ln">9</span></a>        </span><span class="s0">this</span><span class="s1">.head = head; 
<a name="l10"><span class="ln">10</span></a>    } 
<a name="l11"><span class="ln">11</span></a> 
<a name="l12"><span class="ln">12</span></a>    </span><span class="s0">public void </span><span class="s1">addToFront(Node node){     <a name="l13"></a></span><span class="gray">//Link to D.4.10 - add to head of list</span><span class="s1">
<a name="l17"><span class="ln">17</span></a>            node.setNext(head);   </span><span class="gray">//Stick the new node onto the front by pointing to the present head (even if head is null).</span><span class="s1">
<a name="l18"><span class="ln">18</span></a>            head = node;         </span> <span class="gray">//But then need to make it the new head.</span><span class="s1">
<a name="l19"><span class="ln">19</span></a>        } 
<a name="l20"><span class="ln">20</span></a>    } 
<a name="l21"><span class="ln">21</span></a> 
<a name="l22"><span class="ln">22</span></a> 
<a name="l23"><span class="ln">23</span></a>    </span><span class="s0">public void </span><span class="s1">addToEnd(Node node){   </span><span class="gray">//Link to D.4.10 - add to tail of list</span><span class="s1">
<a name="l24"><span class="ln">24</span></a>        </span><span class="s0">if</span><span class="s1">(isEmpty()){ 
<a name="l25"><span class="ln">25</span></a>            head = node; 
<a name="l26"><span class="ln">26</span></a>        } 
<a name="l27"><span class="ln">27</span></a>        Node current = head;               </span><span class="gray">//Need to traverse to the end of the list.</span><span class="s1">
<a name="l28"><span class="ln">28</span></a>        </span><span class="s0">while</span><span class="s1">(current.getNext() != </span><span class="s0">null</span><span class="s1">){  </span><span class="gray">//We know we are not there yet as long as current does not point to null.</span><span class="s1">
<a name="l29"><span class="ln">29</span></a>            current = current.getNext(); 
<a name="l30"><span class="ln">30</span></a>        } 
<a name="l31"><span class="ln">31</span></a>        current.setNext(node);     </span><span class="gray">//Once to the end, set the pointer of that node to the new one.</span><span class="s1">
<a name="l32"><span class="ln">32</span></a>    } 
<a name="l33"><span class="ln">33</span></a> 
<a name="l34"><span class="ln">34</span></a> 
<a name="l35"><span class="ln">35</span></a>    </span><span class="s0">public </span><span class="s1">Node getAndRemoveFromFront(){ 
<a name="l36"><span class="ln">36</span></a>        </span><span class="s0">if</span><span class="s1">(isEmpty()){ 
<a name="l37"><span class="ln">37</span></a>            </span><span class="s0">return null</span><span class="s1">; 
<a name="l38"><span class="ln">38</span></a>        } 
<a name="l39"><span class="ln">39</span></a> 
<a name="l40"><span class="ln">40</span></a>        Node temp = head;        </span>  <span class="gray">//Will need to keep track of the head before it is lopped off.</span><span class="s1">
<a name="l41"><span class="ln">41</span></a>        head = head.getNext();     </span><span class="gray">//This is what moves the head one up.</span><span class="s1">
<a name="l42"><span class="ln">42</span></a>        </span><span class="s0">return </span><span class="s1">temp;        </span><span class="gray">//Now we do what we said we would and return the (now former) head.</span><span class="s1">
<a name="l43"><span class="ln">43</span></a>    } 
<a name="l44"><span class="ln">44</span></a> 
<a name="l45"><span class="ln">45</span></a> 
<a name="l46"><span class="ln">46</span></a>    </span><span class="s0">public </span><span class="s1">Node getAndRemoveFromEnd(){ 
<a name="l47"><span class="ln">47</span></a>        </span><span class="s0">if</span><span class="s1">(isEmpty()){ 
<a name="l48"><span class="ln">48</span></a>            </span><span class="s0">return null</span><span class="s1">; 
<a name="l49"><span class="ln">49</span></a>        } 
<a name="l50"><span class="ln">50</span></a>        Node current = head;      </span><span class="gray">//Need to traverse to end, starting at head, but...</span><span class="s1">
<a name="l51"><span class="ln">51</span></a>        Node previous = </span><span class="s0">null</span><span class="s1">;     </span><span class="gray">//Will also need to keep track of &quot;previous&quot; for linking purposes later.</span><span class="s1">
<a name="l52"><span class="ln">52</span></a>        </span><span class="s0">while</span><span class="s1">(current.getNext() != </span><span class="s0">null</span><span class="s1">){   </span><span class="gray">//As with other traversing, keep moving up as long as you can.</span><span class="s1">
<a name="l53"><span class="ln">53</span></a>            previous = current;             </span><span class="gray">//Each step along the way, previous can be current current.</span><span class="s1">
<a name="l54"><span class="ln">54</span></a>            current = current.getNext();    </span><span class="gray">//Then the current becomes the next.</span><span class="s1">
<a name="l55"><span class="ln">55</span></a>        } 
<a name="l56"><span class="ln">56</span></a>        previous.setNext(</span><span class="s0">null</span><span class="s1">);   </span><span class="gray">//Once at the end, break the link to the last node (current) with this line.</span><span class="s1">
<a name="l57"><span class="ln">57</span></a>        </span><span class="s0">return </span><span class="s1">current;           </span><span class="gray">//Return this, which is now no longer accessible from the list.</span><span class="s1">
<a name="l58"><span class="ln">58</span></a>    } 
<a name="l59"><span class="ln">59</span></a> 
<a name="l60"><span class="ln">60</span></a>    </span><span class="s0">public boolean </span><span class="s1">isEmpty(){     </span><span class="gray">//Link to D.4.10 - check for empty list</span><span class="s1">
<a name="l61"><span class="ln">61</span></a>        </span><span class="s0">return </span><span class="s1">head == </span><span class="s0">null</span><span class="s1">;     </span><span class="gray">//Needed to be checked above each method in case the list is empty.</span><span class="s1">
<a name="l62"><span class="ln">62</span></a>    } 
<a name="l63"><span class="ln">63</span></a>} <a name="l64"></a></span></pre>
	<strong>	A Simple Testing Class
	</strong>
	<pre>
<a name="l1"><span class="ln">1</span></a><span class="s0">public class </span><span class="s1">MainForTestingList { 
<a name="l2"><span class="ln">2</span></a> 
<a name="l3"><span class="ln">3</span></a>    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
<a name="l4"><span class="ln">4</span></a>        List list = </span><span class="s0">new </span><span class="s1">List(</span><span class="s0">null</span><span class="s1">); 
<a name="l5"><span class="ln">5</span></a>        list.addToFront(</span><span class="s0">new </span><span class="s1">Node(</span><span class="s2">&quot;Bob&quot;</span><span class="s1">, </span><span class="s0">null</span><span class="s1">)); 
<a name="l6"><span class="ln">6</span></a>        list.addToFront(</span><span class="s0">new </span><span class="s1">Node(</span><span class="s2">&quot;Sam&quot;</span><span class="s1">, </span><span class="s0">null</span><span class="s1">)); 
<a name="l7"><span class="ln">7</span></a>        list.addToFront(</span><span class="s0">new </span><span class="s1">Node(</span><span class="s2">&quot;Sally&quot;</span><span class="s1">, </span><span class="s0">null</span><span class="s1">)); 
<a name="l8"><span class="ln">8</span></a>        System.out.println(list.getAndRemoveFromEnd().toString()); 
<a name="l9"><span class="ln">9</span></a>        </span><span class="comment">//should print out Bob </span><span class="s1">
<a name="l10"><span class="ln">10</span></a>      System.out.println(list.getAndRemoveFromEnd().toString());
<a name="l10" id="l2"><span class="ln">11</span></a>      </span><span class="gray">//should print out Sam</span><span class="s1">
<a name="l10" id="l10"><span class="ln">12</span></a>    }  <a name="l11"></a>
<a name="l12"><span class="ln">13</span></a>} 
<a name="l13"></a></span></pre>
	<p>&nbsp;</p>
    <p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
    <p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
    <pre></pre>
	<p>&nbsp;</p>
	<p>---------------------------------</p>
	<p> Maybe a bit more here, but connected to further Topic D assessment statements. <br />
	  <br />
    See this link for diagrams:</p>
    <pre>2195   <a href="/jsr/_IB_Common/Java-Revolution/Binary-Trees-and-Linked-Lists-Intro.php">deja vu</a>  Basics of Lists and Trees</pre>
  <p>And this link for actual code:</p>
    <pre><span class="gray1">2135</span> <a href="../Java-Revolution/List-And-Node-Code.html">code</a> Linked Lists - Generic Node Class &amp; List Class 

</pre>
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
.ln { color: #999999; font-weight: normal; font-style: normal; }
.s0 { color: rgb(0,0,128); font-weight: bold; }
.s1 { color: rgb(0,0,0); }
.s2 { color: rgb(0,128,0); font-weight: bold; }
.s3 { color: rgb(128,128,128); font-style: italic; }
</style>
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