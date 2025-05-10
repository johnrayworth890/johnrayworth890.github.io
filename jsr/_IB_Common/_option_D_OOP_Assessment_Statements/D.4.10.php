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
		<a href="D.4.9.php">Last</a>
	    <a href="D.4.11.php">Next</a></p>
</div>
	<div class="backgroundDiv">


<div class="roundedCornerDiv">
<p>D.4.10</p>
<p>Construct list algorithms using object references.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Lists will be restricted to singly linked types. Methods that should be known are add (head and tail), insert (in order), delete, list, isEmpty, isFull.<br />
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
<p><span class="darkblue">List ADT D.: Coding List as Dynamic</span></p>
<p><strong>Context</strong> of D.4.10  in terms of algorithms responsibility  (A repeat of this)</p>
<blockquote>
  <p class="gray">D.4.6 - There, we weren't necessarily thinking about a list, we just wanted to see <strong>generally how  linking is achieved through self-referential pointers</strong>. (Though what we looked at there ended up being a list, it also could have been a tree.)</p>
  <p>D.4.10 -  Here it's the employment of self-referential classes for <strong>implementations of general lists</strong> - and though not necessarily thinking stacks or queues,  certainly these are useful ways of using lists.</p>
  <p class="gray">D.4.11 - The use of self-referential classes in lists via the <strong>specific ADTs ArrayList and LinkedList</strong>. And though able to treat lists as stacks and queues, also searching, deleting, adding in order through whole lists. <br />
    <br />
    And D.4.12 is for tracing through such algorithms.</p>
</blockquote>
<p>&nbsp;</p>
<p><strong>Intro Miscellaneous</strong></p>
<p>From the Teaching Note, first of all note that isFull( ) should not be included in the methods; that's the whole point to lists, they are dynamic - they are never &quot;full&quot;. Yes, and ArrayList can be, and so can any static implementation of a stack or queue via an array, but not an actual list.</p>
<p>Next, when reproducing algorithms, make sure you remember the importance if <strong>isEmpty( )</strong> when trying to add to or access lists.</p>
<p>And also note that in terms of OOP and inheritance, this does not require you to <strong>extend List class to a Stack class and a Queue class</strong>, but that that is actually really easy to do: for a Stack class, push just calls addLast, and pop calls removeLast - and with Queue extending List, enqueue just calls addFirst, and dequeue calls removeFirst.</p>
<p>&nbsp;</p>
<p><strong>A Fundamental Memory-based Understanding</strong></p>
<p>If you wish, this animation is great to slow things down and look at what's literally happening line by line, and at the memory level. Note though that the insertion happens from the front, so it is an enqueue.</p>
<p><a href="/jsr/_IB_Common/Java-Revolution/Linked-List-Animation.php" target="_blank">Animation of Adding to A List</a> - With this you can go step by step.</p>
<p>YouTube Video of the Animation with Commentary:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/l2IU8EUckQI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <p>(<a href="../../../largeFilesOutsideJSR/__IB-Other/Videos/List-Animation-Explanation.mp4" target="_blank">back up of that video</a>)  <a href="/jsr/_IB_Common/Java-Revolution/_Code-As-JPEGS/Queue.jpg"></a></p>
  <p><strong><br />
  A Repeat here in the Option at a Deeper Level</strong></p>
  <p>A lot of this you have recently seen in Topic 5. Remember that for Topic 5, it is to a level of diagramatic understanding, but with the OOP Option Extension, it is to an algorithmic, coding level.</p>
  <p>Link: <a href="../_topic5AssessmentStatements/5.1.7.php">5.1.7</a> - stack at a diagramatic level</p>
  <ul>
    <li>push( ) *</li>
    <li class="gray">pop( ) </li>
    <li>isEmpty( ) *</li>
  </ul>
  <p>Link: <a href="../_topic5AssessmentStatements/5.1.9.php">5.1.9</a> - queue at a diagramatic level</p>
  <ul>
    <li>enqueue( ) *</li>
    <li class="gray">dequeue( ) </li>
    <li>isEmpty( ) *</li>
  </ul>
  <p><strong>And here - List at an algorithmic/coding level</strong></p>
  <ul>
    <li><strong>add at tail</strong> - <span class="comment">which would be push</span> *</li>
    <li><strong>add at head</strong> - <span class="comment">which would be enqueue</span> *</li>
    <li><strong>insert (in order)</strong></li>
    <li><strong>delete</strong></li>
    <li><strong>list</strong></li>
    <li><strong>isEmpty</strong> *</li>
  </ul>
  <p>&nbsp;</p>
  <p>You can learn these two four different levels, and any of the top three could be the means of testing them:</p>
  <blockquote>
    <p>I Ok, I get what's going on with the algorithm.</p>
    <p>II. I can diagram it.</p>
    <p>III. I can write pseudocode for it.</p>
    <p>IV. I can code it in Java</p>
  </blockquote>
  <p>&nbsp;</p>
<h3>Add (Head)</h3>
<blockquote>
  <p>which could be  a <strong>stack push( )</strong></p>
</blockquote>
<p>In words: since we have access to the head, this is easy:</p>
<ul>
  <li>And before even doing this, we need to check to make sure the list is not empty. </li>
  <li>And if it is, just make head to be the new Node.</li>
  <li>Make your new Node, and link it to head.</li>
  <li>Then make the head variable to be changed to be your new Node. </li>
  <li>(You actually don't need the first check of isEmpty( ); it will work without it since setNext(head) will properly set the next to be null.)</li>
</ul>
<pre><span class="s0"><a name="l16"></a> 
<a name="l17"><span class="ln">17</span></a>    </span><span class="s1">public void </span><span class="s0">insertAtHead(Object data){ <span class="gray">//This is the same as addToFront in the D.4.6 Basic List class</span>
<a name="l19" id="l19"><span class="ln">18</span></a>          if(isEmpty()){
<a name="l19" id="l"><span class="ln">19</span></a>              head = new Node(data);
<a name="l19" id="l5"><span class="ln">20</span></a>            }
<a name="l19" id="l2"><span class="ln">21</span></a>          else{
<a name="l18"><span class="ln">22</span></a>              Node newNode= </span><span class="s1">new </span><span class="s0">Node(data); 
<a name="l19"></a><a name="l19" id="l3"><span class="ln">23</span></a>              newNode.setNext(head); 
<a name="l20"><span class="ln">24</span></a>              head = newNode; 
<a name="l19" id="l4"><span class="ln">25</span></a>           }
<a name="l21"><span class="ln">26</span></a>    }</span>
</pre>
<h3><img src="Images/List-Reference-Type-Algorithms/List-Add-Head.png" width="832" height="576" alt=""/></h3>
<h3>&nbsp;</h3>
<h3>Add (Tail) </h3>
<blockquote>
  <p>which could be a <strong>queue enqueue( )</strong></p>
</blockquote>
<p>In words: for this, since we only have access to the head, we will have to first traverse the list from the head to the tail</p>
<ul>
  <li>And before even doing this, we need to check to make sure the list is not empty. </li>
  <li>And if it is, just make the head to be the new Node.</li>
  <li>Else, we traverse:    </li>
  <li>Make a Node called &quot;current&quot;, and set it initially to head.</li>
  <li>Then, while we are not to the end of the list (which we know because getNext( )will not be null)<br />
    shift the current one link up each time.</li>
  <li>Then, after we have reached the end (which we'll know because getNext( ) will be null), </li>
  <li>Set the next of the current (which is was the tail) to be the new Node. </li>
</ul>
<pre>
<span class="s0">
<a name="l23"><span class="ln">23</span></a>    </span><span class="s1">public void </span><span class="s0">insertAtTail(Object data){ </span><span class="gray">//This is the same as addToEnd in the D.4.6 Basic List class</span><span class="s0">
<a name="l24"><span class="ln">24</span></a>        </span><span class="s1">if</span><span class="s0">(isEmpty()){ 
<a name="l25"><span class="ln">25</span></a>            head = </span><span class="s1">new </span><span class="s0">Node(data); 
<a name="l26"><span class="ln">26</span></a>        } 
<a name="l27"><span class="ln">27</span></a>        </span><span class="s1">else</span><span class="s0">{ 
<a name="l28"><span class="ln">28</span></a>            Node newNode = </span><span class="s1">new </span><span class="s0">Node(data); 
<a name="l29"><span class="ln">29</span></a>            Node current = head; 
<a name="l30"><span class="ln">30</span></a>            </span><span class="s1">while</span><span class="s0">(current.getNext() != </span><span class="s1">null</span><span class="s0">){ 
<a name="l31"><span class="ln">31</span></a>                current = current.getNext(); 
<a name="l32"><span class="ln">32</span></a>            } 
<a name="l33"><span class="ln">33</span></a>            current.setNext(newNode); 
<a name="l34"><span class="ln">34</span></a>        } 
<a name="l35"><span class="ln">35</span></a>    }</span></pre>
<h3><img src="Images/List-Reference-Type-Algorithms/List-Add-Tail.png" width="888" height="585" alt=""/><br />
  <br />
  </h3>
<h3>Insert (In Order)</h3>
<p>In words: We will need to traverse up the chain (assuming it's already in order) and when what we have is greater than where we are at, that's where our new node goes.</p>
<ul>
  <li>So start with a new Node, and &quot;current&quot; starting at the head.</li>
  <li>But you will also need to keep track of the &quot;previous&quot; node for linking purposes later on.</li>
  <li>Check first of all for the possibility that your new Node is the least in the order and so needs to be the head:</li>
  <li>Using a compare operation, if this is the case, your newNode needs to point to the head, and then it becomes the head.</li>
  <li>Otherwise, you will loop through the list, each time, checking if the node where you are at is greater than the node you are adding, and each time moving the previous up to the last current.</li>
  <li>When it is no longer the case that your node is greater, you have found the position for the new node.</li>
  <li>So you will link it there by setting the &quot;previous&quot;'s next to be your newNode, and your newNode's next to be the current.</li>
</ul>
<pre>
<span class="s0">
<a name="l60"><span class="ln">60</span></a>    </span><span class="s1">public void </span><span class="s0">insertInOrder(Object data){ 
<a name="l61"><span class="ln">61</span></a>        Node newNode = </span><span class="s1">new </span><span class="s0">Node(data); 
<a name="l62"><span class="ln">62</span></a>        Node current = head; 
<a name="l63"><span class="ln">63</span></a>        Node previous = </span><span class="s1">null</span><span class="s0">; 
<a name="l64"><span class="ln">64</span></a>        </span><span class="s1">if</span><span class="s0">(data.toString().compareTo(head.toString()) &lt; </span>0<span class="s0">){ <a name="l65"></a>
<a name="l66"><span class="ln">66</span></a>            newNode.setNext(head)
<a name="l66" id="l66"><span class="ln">66</span></a>            head = newNode; 
<a name="l67"><span class="ln">67</span></a>        }</span><span class="s1">else</span><span class="s0">{ 
<a name="l68"><span class="ln">68</span></a>            </span><span class="s1">while</span><span class="s0">(newNode.getData().toString().compareTo(current.getData().toString()) &gt; </span>0 <span class="s0">
<a name="l69"><span class="ln">69</span></a>                    &amp;&amp; current.getNext() != </span><span class="s1">null</span><span class="s0">){ 
<a name="l70"><span class="ln">70</span></a>                previous = current; 
<a name="l71"><span class="ln">71</span></a>                current = current.getNext(); 
<a name="l72"><span class="ln">72</span></a>            } 
<a name="l73"><span class="ln">73</span></a>            previous.setNext(newNode); 
<a name="l74"><span class="ln">74</span></a>            newNode.setNext(current); 
<a name="l75"><span class="ln">75</span></a>        } 
<a name="l76"><span class="ln">76</span></a>    }</span></pre>
<h3><img src="Images/List-Reference-Type-Algorithms/Insert-In-Order.png" width="888" height="585" alt=""/><br />
  </h3>
<h3>&nbsp;</h3>
<h3>Delete</h3>
<p>In words: The idea here is to locate the node you want to delete and link around it.</p>
<ul>
  <li>Start with a current and a previous node, as with all list traversals.</li>
  <li>Before you get going check to see if the head is equal to what you want to delete, and if so, set head to be its next.</li>
  <li>If that wasn't the case you need to keep looking, one step at at time.</li>
  <li>As with other traversals, as long as the getNext( ) does not return null, keep on looking.</li>
  <li>And if at any point you find what you are looking for with a .equals, you need to link around it with:</li>
  <li>Make the previous point to what the current currently is pointing to. That breaks the link to current.</li>
</ul>
<pre>
<span class="s1">       public void </span>delete(Object data){<span class="s1"> 
<a name="l77"><span class="ln">77</span></a>        </span>Node current = head; <span class="s1">
<a name="l78"><span class="ln">78</span></a>        </span>Node previous =<span class="s1"> </span><span class="s1">null</span><span class="s1">; 
<a name="l79"><span class="ln">79</span></a>        </span><span class="s1">if</span>(head.getData().toString().equals(data.toString())){ <span class="s1">
<a name="l80"><span class="ln">80</span></a>            </span>head = head.getNext(); <span class="s1">
<a name="l81"><span class="ln">81</span></a>        </span>} <span class="s1">
<a name="l82"><span class="ln">82</span></a>        </span><span class="s1">while</span>(current.getNext() !<span class="s1">= </span><span class="s1">null</span><span class="s1">){ 
<a name="l83"><span class="ln">83</span></a>            </span>previous = current; <span class="s1">
<a name="l84"><span class="ln">84</span></a>            </span>current = current.getNext(); <span class="s1">
<a name="l85"><span class="ln">85</span></a>            if</span>(current.getData().toString().equals(data.toString())){ <span class="s1">
<a name="l86"><span class="ln">86</span></a>               </span> previous.setNext(current.getNext()); <span class="s1">
<a name="l87"><span class="ln">87</span></a>                </span><span class="s1">break</span><span class="s1">; 
<a name="l88"><span class="ln">88</span></a>            </span>}<span class="s1"> 
<a name="l89"><span class="ln">89</span></a>        </span>} <span class="s1">
<a name="l90"><span class="ln">90</span></a>    </span>}</pre>
<h3><img src="Images/List-Reference-Type-Algorithms/Delete.png" width="888" height="563" alt=""/><br />
  </h3>
<h3>&nbsp;</h3>
<h3>List (i.e. list out all items)</h3>
<p>In words: This is simply traversing through and doing something at each node.................................</p>
<ul>
  <li>Only not if isEmpty( ),</li>
  <li>Starting with a &quot;current&quot; node being the head.</li>
  <li>Until you get to a current whose getNext( ) is null.</li>
  <li>One step at a time, print out the data at each node.</li>
  <li>And you'll have to print out one last time outside of the loop when you get to the end.</li>
</ul>
<pre>
<span class="s0">
<a name="l94"><span class="ln">94</span></a>    </span><span class="s1">public void </span><span class="s0">listAll(){ 
<a name="l95" id="l95"><span class="ln">95</span></a>        </span>if<span class="s0">(!isEmpty()){ 
<a name="l95" id="l7"><span class="ln">95</span></a>             </span><span class="comment">//Note, class of 2020, I had an extra printout here, 
<a name="l95" id="l8"><span class="ln">95</span></a>             //for the head, which was not needed</span><span class="s0">
<a name="l95"><span class="ln">95</span></a>            Node current = head; 
<a name="l96"><span class="ln">96</span></a>            </span><span class="s1">while</span><span class="s0">(current.getNext() != </span><span class="s1">null</span><span class="s0">){ 
<a name="l97"><span class="ln">97</span></a>                System.out.println(current.getData().toString()); 
<a name="l98"><span class="ln">98</span></a>                current = current.getNext(); 
<a name="l99"><span class="ln">99</span></a>            } 
<a name="l100" id="l6"><span class="ln">100</span></a>          System.out.println(current.getData().toString()); 
<a name="l100" id="l100"><span class="ln">100</span></a>        }
<a name="l100"><span class="ln">101</span></a>    }</span>
</pre>
<h3><br />
  isEmpty</h3>
<p>In words: The list is empty if the head is null.</p>
<ul>
  <li>So we return the boolean true or false of head == null.</li>
</ul>
<pre>
<span class="s0">
<a name="l13"><span class="ln">13</span></a>    </span><span class="s1">public boolean </span><span class="s0">isEmpty(){ 
<a name="l14"><span class="ln">14</span></a>        </span><span class="s1">return </span><span class="s0">(head == </span><span class="s1">null</span><span class="s0">); 
<a name="l15"><span class="ln">15</span></a>    }</span></pre>
<h3>&nbsp;</h3>
<p><strong>And though not included in the Teaching Note, the most important of all, since it is used by both stack and queue would be get first:</strong></p>
<h3>getFirst</h3>
<blockquote>
  <p>which could be both a <strong>stack pop( )</strong> and a <strong>queue dequeue( )</strong></p>
  </blockquote>
<p>In words:</p>
<ul>
  <li>Make a temporary Node the head, so as not to lose acces to its data.</li>
  <li>Make the head to be the head.getNext( ).</li>
  <li>Return the data of the temporary Node.<br />
    <br />
  </li>
</ul>
<pre><span class="s1">public </span>Object<span class="s1"> </span><span class="s0">getFirst(){ 
    Node temp = head; 
</span>    head = head.getNext()<span class="s0">{ 
    return temp.getData();
 }</span></p></pre>
<p>&nbsp;</p>
<p>The IntelliJ project from which the code above came: <a href="Lists-IntelliJ-Implementation.zip">Lists-IntelliJ-Implementation.zip</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>--------------------------------------</p>
<p>EXTRA OLDER CURRICULUM NOTES - NOT NEEDED BUT YOU MAY WANT TO TAKE A LOOK:</p>
<pre>2175     <a href="/jsr/_IB_Common/Java-Revolution/Stacks-and-Queues-From-List.php">notes</a>  Stacks (implement by a linked list)                                             
2177      <a href="/jsr/_IB_Common/Java-Revolution/_Code-As-JPEGS/Stack.jpg">code</a>   
2180 <a href="/jsr/_IB_Common/Java-Revolution/Linked-List-Animation.php">animation</a>  (From the List section above.)</pre>
<p>&nbsp; </p>
<pre>2182     <a href="/jsr/_IB_Common/Java-Revolution/Stacks-and-Queues-From-List.php">notes</a>  Queues (implement by a linked list) (same as Stacks notes above)                 <br />2185      <a href="/jsr/_IB_Common/Java-Revolution/_Code-As-JPEGS/Queue.jpg">code</a></pre>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
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
<style type="text/css">
.ln { color: #999999; font-weight: normal; font-style: normal; }
.s0 { color: rgb(0,0,0); }
.s1 { color: rgb(0,0,128); font-weight: bold; }
.s2 { color: rgb(128,128,128); font-style: italic; }
.s3 { color: rgb(0,128,0); font-weight: bold; }
.s4 { color: rgb(0,0,255); }
</style>