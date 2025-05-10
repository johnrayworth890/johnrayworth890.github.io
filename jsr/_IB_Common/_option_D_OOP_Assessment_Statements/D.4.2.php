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
		<a href="../_recursion_Topic5andOOPFromSyllabus.php">Recursion</a>
		<a href="../_topic5AssessmentStatements/5.1.2.php">Last</a>
	    <a href="D.4.3.php">Next</a></p>
</div>
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.4.2</p>
<p>Describe the application of recursive algorithms.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Students should understand that recursion can be applied to a small subset of programming problems to produce elegant solutions. Students should also understand that recursive algorithms are rarely used in practice.</p>
<p>LINK Thinking abstractly, thinking recursively.</p>
	<br /></div>

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
<p class="green">***** If used in 2020-21, with Topic 5, the dark grey highlighted sections are not so important.*****</p>
<p class="darkGray"><strong>Rationale for the depth of these notes</strong></p>
<p class="darkGray">The thing is, with all of this, and particularly with the tracing assessment statements, if you are going to be able to truly spot <em>and appreciate</em> recursive situations, and <strong>if you are going to be able to trace recursive functions</strong>, you need to go a bit beyond both the Topic 5 and the OOP Extension assessment statements. You can't just dip into recursion to truly understand it, you have to truly understand it to truly understand it! So here goes!</p>
<h3><br />
  Recursion Brief Intro.</h3>
<p>Recursion is a way to iterate (to loop) without using the traditional  for and while control structures. With recursion, <strong>repetition/iteration</strong> is accomplished by calling other instances of a the same  method from within the method itself. You'll quite often hear recursion  referred to as a method calling itself. But this is not actually true  since what happens is <strong>new instances</strong> of the method are loaded into memory  as the recursive &quot;loop&quot; progresses. </p>
<p>As the looping progresses, each instance of the method will be <strong>interrupted</strong>  by a  call to another instance of that method.  And so on and so on. <strong>Eventually,  one of the instances will reach its base case</strong>, and will not call another instance of the method, thus  ending the iteration. From there, when that instance of the method is finished, the the flow of control goes back to the instance before which called it, and so on, up through the stack of yet unfinished instances, eventually getting back to the initial call, which also ends.</p>
<p> To appreciate this  rather complex series of events, consider the following examples of   recursive methods:</p>
<pre>    public static void countDownToZero(int i){
        System.out.println(i);
        if (i > 0) { //The base case which, when we arrive at it we end.
            i--;
            countDownToZero(i);
        }
    } </pre>
<p>If called as <em><strong>zeroToThree(4)</strong>, </em>this will print out: </p>
<p>4<br />
  3<br />
  2<br />
  1<br />
  0
  <br />
</p>
<p><br />
  Here is a variation of the above method  that can count up from any number to any other number. So it will have to <strong>take</strong> two <strong>parameters</strong>, which is fine.:</p>
<pre>

public static void countingUp(int i, int j) {
        System.out.println(i);
        i++;
        if (i &lt;= j) { <span class="comment">//When this is false, we will have arrived 
                           //at the base case, and skip to return</span>
            countingUp(i, j);
        }
        return
    }</pre>
<p>So, if 15 and 18 were sent as parameters, the output would be:</p>
<p>15<br />
  16<br />
  17<br />
  18 </p>
<p>Trace through it on paper or in your head. As you do so just remember that the i goes up each time, but the j stays the same in each instance.</p>
<p>&nbsp;</p>
<h3>A Little More on Base Case</h3>
<p>The base case is the boundary value toward which any loop must move if it is to ever end. So even  for loops and while loops have base cases; they are the situations at which the continue condition becomes false. Take the for loop in the next section for example; the base case is <em>when i is not less than 4</em> - the loop ends at that base case.</p>
<p>With recursion, we think of the base case as being the  call to the recursive function where finally there is some sort of resolution; we finally have &quot;<em>gotten to the bottom of it!</em>&quot;, as the saying goes.  For example in in the next section, the same as with the for loop, <em>when i is not less than 4</em>, we return from that recursive call. And taking another example, in a recursive binary search one base case is when we find the key.</p>
<p>In any recursive situation, we can say that all of the calls but one are recursive calls, and one and only one is the base case.</p>
<h3><em><br />
</em>For, While,  Do While, and Recursion All Accomplish Iteration</h3>
<p>All three non-recursive looping control structures can accomplish the same kind of looping, though whiles should be used when the number of times a loop is to iterate is unknown.  But recursion can do the same thing also. For example, the following two code segments accomplish the same output (assuming that in the case of zeroToThree, it is sent the parameter 0):</p>
<pre>
    public static void forLoopCountDown(){
        for(int i = 4; i &gt; -1; i++){
            System.out.println(i);
        }
    }
</pre>
<h3>So Why Recursion?</h3>
<p>So if <em>for</em> loops and <em>while</em> and <em>do while</em> loops (i.e. &quot;iterative&quot; solutions) can accomplish looping, then why would we want to use recursion. Well, you could argue one reason it that it's cooler, but that's certainly not a great reason. Recursive solutions are usually way more inefficient than iterative versions, if they exist; just consider the <strong>memory efficiency penalty</strong> of having multiple large unfinished methods in memory all at the same time. So being &quot;cooler&quot; is not a reason to pick a recursive solution.<br />
  <br />
  So even though recursive algorithms are <strong>rarely used in practice</strong>, here are three situations where we can usefully apply recursion. (Copied and pasted from 5.1.1.)<br />
</p>
<p><strong>1. The recursive solution mirrors real life</strong></p>
<p>In real life there are sometimes problems that are <strong>solved by solving a similar problem</strong> <strong>with a different set of values</strong>, and that problem, in turn, is solved by solving a similar problem with still different values, and so on,and so on, until an overall resolution is found. These are actual recursive situations, which therefore can, and should, have recursive solutions coded for them.</p>
<p><br />
  <strong>2. Recursive solutions are often more &quot;elegant&quot;</strong></p>
<p>Recursive solutions often will be more elegant than their &quot;iterative&quot; counterparts, in that they take up a lot <strong>less lines of code</strong>. By choosing such a shorter, more elegant recursive solution, it often will be <strong>easier to read and follow</strong>. Though keep in mind that the reason this is possible goes back to reason 1; it mirrors the real life situation.</p>
<p><br />
  <strong>3. No iterative solution is possible</strong></p>
<p>This is the case where you actually <em><strong>require</strong></em> recursion. Often times with such recursive solutions, there actually is no  iterative solution. So that is the definitive reason to use a recursive solution: <strong>there is no other way to do so</strong>.</p>
<p>&nbsp;</p>
<h3>But also, why NOT recursion</h3>
<p>From the Teaching Notes &amp; Limitations of Recursion note that:</p>
<p>1. &quot;Students should understand that recursion can be applied to a <strong>small subset of programming problems</strong> to produce elegant solutions.&quot; </p>
<p>2. &quot;Students should also understand that recursive algorithms are <strong>rarely used in practice</strong>.&quot;</p>
<p> This is partly because recursion <strong>takes tons of system memory resources</strong>, since instance after instance after instance of a particular method is called, leading to potentially large stacks of un-finished recursive calls.You should never use recursion for the sake of using recursion - just to be fancy. Furthermore, it can be hard to follow, compared to simple iterative solutions.</p>
<p>&nbsp;</p>
<h3><br />
  Two Classic Recursive Examples Explained</h3>
<p>The two standard algorithms in the IB CS curriculum that are recursive are the <strong>recursive binary search</strong> and <strong>traversals of binary trees</strong>. With both of them, if you think on an algorithmic level, you can see how they take the same strategy and apply it to smaller and smaller sub-divisions of the array. But whereas the binary search can be done, and done more efficiently the iterative way, the traversal of the binary tree cannot.</p>
<p><strong>1. Recursive Binary Search</strong></p>
<p>Even though there is an iterative approach to this, and we know it works well, in terms of looking at recursion, the recursive binary search is relatively easy to understand. To do a binary search in a recursive way, you repeat the following steps on smaller and smaller sub-arrays: </p>
<ul>
  <li>you look at the middle element, </li>
  <li>and if what you are looking for is there, you are finished, </li>
  <li>otherwise, you make that element the new low if the element you are looking for is larger than it, or the new high if the element you are looking for is smaller than it. </li>
  <li>This exact same thing is done with each increasingly smaller sub array. </li>
</ul>
<p>Here it is. (We'll look at it in detail later, buy for now, just try to see how it is recursive, in that it breaks down a big problem into smaller ones talked the same way.)</p>
<pre>
public static int recursiveBinarySearch(int[] arr, int low, int high, int key) {
    
    if (low &lt; high) {
        int mid = low + (high - first) / 2; 
        if (key &lt; sorted[mid]) {
            return <strong>recursiveBinarySearch</strong>(arr, low, mid-1, key);
            
        } else if (key &gt; sorted[mid]) {
            return <strong>recursiveBinarySearch</strong>(arr, mid+1, high , key);
            
        } else {
            return mid;  
        }
    }
    return -1;  
}
</pre>
<p><br />
</p>
<h3><strong>2. (Recursive) Traversal of a Binary Tree</strong></h3>
<p>As is covered in Topic 5, a binary search tree is an Abstract Data Structure that has both the advantages of an array in that it is binarily searchable, and also the advantages of a list, in that elements can be added and deleted dynamically. So it really is an ideal data structure.</p>
<p>The only challenge a binary search tree presents is how to traverse it; i.e. how to visit all of the elements in its structure. Think about trying to visit all of the leaves in a real tree; how are you going to approach it, and in particular, how are you going to keep track of where you have already visited? So, in fact, <strong>no  iterative approach on its own works</strong>. (Though you can enlist the help of a stack structure.)</p>
<p>You can't use a for loop, since it's a branching structure, and you can't simply go straight through... Well, recursion to the rescue!! What you can do is, from every branch, check left and right, and then check left and right from each of those and so on, and so on. </p>
<p>One thing, as is also covered in Topic 5 is there are three versions of the binary tree traversal: post, pre, an in-order. </p>
<p>Here's the pre-order traversal of a binary search tree recursive solution. Not only is it brief, and easy enough to read, keep in mind that there is no other straight-forward way to do it.</p>
<pre>
psvm{
        System.out.println(traverseInOrder(studentTree, &quot;&quot;); <span class="darkGray">
        //assume a binary tree of Student objects, called studentTreemade, made before this</span>
}
private String traverseInOrder(StudentNode p, String inOrderString){ <span class="darkGray">// 'p' chosen for &quot;pointer&quot;</span>
    if(p != null){
        <strong>traverseInOrder</strong>(p.getLeft(), inOrderString);
        inOrderString += p.getValue().getName();
        <strong>traverseInOrder</strong>(p.getRight(), inOrderString);
    }
    return inOrderString;
}
</pre>
<p>Here's an animation of the recursive traversal of a binary tree, remembering that it's  the only real, appropriate, and necessary, application of recursion that we have seen/coded in the course.</p>
<p>
  <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="900" height="900">
    <param name="movie" value="../Java-Revolution/_Flash/Binary-Search-Tree-Traversal.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="9.0.115.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="../../../Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="../Java-Revolution/_Flash/Binary-Search-Tree-Traversal.swf" width="900" height="900">
      <!--<![endif]-->
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="9.0.115.0" />
      <param name="expressinstall" value="../../../Scripts/expressInstall.swf" />
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</p>
<p>&nbsp;</p>
<p><strong>Repeat of a basic example, like above, but with a step-by-step &quot;trace through&quot; below.</strong></p>
<p>Though this is much better done live on the whiteboard.</p>
<p>&nbsp;</p>
<p>Consider the following recursive method:</p>
<pre><span class="comment1">1.</span>   public static void <strong>zeroToThree</strong>(int i) {        
<span class="comment1">2. </span>           System.out.println(i);        
<span class="comment1">3.</span>             i++;        
<span class="comment1">4.</span>             if (i &lt; 4) { <span class="gray">//The base case which, when we arrive at it 
</span>5.<span class="gray">                              //being false, no more recursion will be needed  </span>          
<span class="comment1">6.</span>                 <strong>zeroToThree</strong>(i);         
<span class="comment1">7.</span>             }
8.             return;  
<span class="comment1">9.</span>   } </pre>
<p>If called as <em><strong>zeroToThree(0)</strong>, </em>this will print out: </p>
<p>0<br />
  1<br />
  2<br />
  3<br />
  <br />
</p>
<h3 class="darkGray">Now, Step-by-Step</h3>
<p class="darkGray">What follows is a line-by-line explanation of what happens, from the example above. So fasten your safety belt, and take it one step at a time:</p>
<blockquote>
  <p class="darkGray"><em>First Instance:</em></p>
</blockquote>
<p class="darkGray">The first instance of the zeroToThree( ) will first print out 0 at line #2. This is because 0 is what i is in this particular instance, since 0 is what was inititally sent as a parameter to the initial call, say from the main() method.</p>
<blockquote>
  <p class="darkGray"><em>Output so far:<br />
    0 </em></p>
</blockquote>
<p class="darkGray">The next line of the method has i go up by one, so in this case from 0 to 1. With the next line, line #4, the condition if(i &lt; 4) evaluates to true, so <em>another instance</em> of zeroToThree is called. (<strong>Though note that the first instance of zeroToThree is still in memory, unfinished</strong>, since it has not yet reached the last brace of itself.)</p>
<blockquote>
  <p class="darkGray"><em>First Instance Interrupted and placed on the unfinished stack. Second Instance Called</em>:</p>
</blockquote>
<p class="darkGray">As the second instance of zeroToThree() starts, its variable i, which has been passed to it, will be printed - so another line of output; this time 1. </p>
<blockquote>
  <p class="darkGray"><em>Output far:<br />
    0<br />
    1</em><br />
  </p>
</blockquote>
<p class="darkGray"> The i then goes up to 2, which is still less than 4, so a third instance of zeroToThree is called (and this second instance of zeroToThree is also left in an un-finished state).</p>
<blockquote>
  <p class="darkGray"><em>Second Instance Interrupted and placed on the unfinished stack. Third Instance Called</em>:</p>
</blockquote>
<p class="darkGray">So then the third instance of zeroToThree starts, and prints out what it was sent, which is 2. </p>
<blockquote>
  <p class="darkGray"><em>Output so far:<br />
    0<br />
    1<br />
    2</em></p>
</blockquote>
<p class="darkGray">And as in the other instances, i goes up by one, so this time to 3, and 3 is less than 4, so a fourth instance of zeroToThree is called (and this third instance of zeroToThree left unfinished like the previous two instances of the method).</p>
<blockquote>
  <p class="darkGray"><em>Third Instance Interrupted and placed on the unfinished stack. Fourth Instance Called</em>:<br />
  </p>
</blockquote>
<p class="darkGray">The fourth instance of zeroToThree  receives 3 as its parameter, so with its first line, 3 is printed out. </p>
<blockquote>
  <p class="darkGray"><em>Output so far:<br />
    0<br />
    1<br />
    2<br />
    3</em><br />
  </p>
</blockquote>
<p class="darkGray"> Then i goes up to 4, <strong>and for the first time in this sequence of execution, the loop control condition is not met, since 4 is not less than 4</strong>. **This is the <strong>base case</strong>; i.e. the case with which &quot;<em>an answer</em>&quot; is easily found, and there is no need to call another instance of the function recursively.**</p>
<p class="darkGray">So this particular instance of zeroToThree by-passes making another call to another instance of zeroToThree, and instead easily finishes off and so is garbage collected out of memory.</p>
<blockquote>
  <p class="darkGray"><em>Fourth instance of zeroToThree ends.</em></p>
</blockquote>
<p class="darkGray">And this is the point where all of the instance end, one at a time, from the last one called on up to the first one called - it may make your head spin a bit, but give it a go. <br />
  <br />
  Since that call, which was made in the third call to zeroToThree, is finished, the third call to zeroToThree can also be finished. </p>
<blockquote>
  <p class="darkGray"><em>Third instance of zeroToThree ends and is popped off the stack.</em></p>
</blockquote>
<p class="darkGray">And since the third call to zeroToThree is finished, the method which called it - the second instance of zeroToThree, can finish. </p>
<blockquote>
  <p class="darkGray"><em>Second instance of zeroToThree ends and is popped off the stack.</em></p>
</blockquote>
<p class="darkGray">And since the second call to zeroToThree is finished, what called it - the first call to zeroToThree, can also finish. </p>
<blockquote>
  <p class="darkGray"><em>First (original) instance of zeroToThree ends and is popped off the stack.</em></p>
</blockquote>
<p class="darkGray">And that's it for zeroToThree(0).</p>
<p>&nbsp;</p>
<p><br />
  Here is a variation of the above method  that can count up from any number to any other number. So it will have to <strong>take</strong> two <strong>parameters</strong>, which is fine.:</p>
<pre>

public static void countUp(int i, int j) {
        System.out.println(i);
        i++;
        if (i &lt;= j) { <span class="comment1">//When this is false, we will have arrived 
                           //at the base case, and skip to return</span>
            countUp(i, j);
        }
        return
    }</pre>
<p>So, if 15 and 18 were sent as parameters, the output would be:</p>
<p>15<br />
  16<br />
  17<br />
  18 </p>
<p>Trace through it on paper or in your head. As you do so just remember that the i goes up each time, but the j stays the same in each instance.</p>
<p></p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
<p>&nbsp;</p>
<p>THE FOLLOWING IS NOT NECESSARY for IB CS any more, BUT GLANCING AT IT WOULDN'T HURT... at least it wouldn't hurt all that much...</p>
<p>And full code links for the binary search tree, with its recursive traversals: </p>
<pre>
2222</span>      <a href="../Java-Revolution/Binary-Search-Tree-Code.html">code</a>  Binary Search Tree and Node Class Code
<span class="gray">2223</span>      <a href="../Java-Revolution/_Images/Binary-Tree-Implementation.jpg">code</a>  <em>Specific</em> Binary Search Tree Implementation 
</pre>
<p> Explanation of recursive traversals (among more details) </p>
<pre>
<span class="gray">2210</span>     <span class="sky"><a href="../Java-Revolution/Binary-Tree-Traversal-Notes.php">notes</a></span>  Binary Search Trees - Traversing Recursively     <span class="sky">                         </span>     <span class="gray"></span><em></em>


</pre>
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