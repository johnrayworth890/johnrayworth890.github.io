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
		<a href="D.2.5.php">Last</a>
	    <a href="D.2.7.php">Next</a></p>
</div>	
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.6</p>
<p>Explain the advantages of polymorphism.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>For example, an action in a child object may choose to override actions of a parent object. This allows an external program to use the same action on a family of objects without knowing the implementation detail.<br />
	</p></div>
<p>&nbsp;</p>
<p><span class="line-number">Sample Question: </span></p>
<p>----</p>

      <p>Q1. Outline the advantages of polymorphism, using the <em>Xyz</em> class as an example.<br />
  ----<br />
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
<p>JSR Notes:
</p>
<p>The first thing to note here is that if you stick to the simple cases of overloaded constructors and overriding toString( ) - which are classic, easy examples of polymorphism - you are left a bit underwhelmed. Neither seems to be that big of a deal, certainly compared to the other &quot;big two&quot; OOP features, encapsulation and inheritance. So you really do need to get to the point of understanding what is behind the Teaching Note's reference to  &quot;using the same action on a family of objects without knowing the implementation detail&quot; (see the Advantage subsection #2B below).</p>
<h3>1. Overloading &amp; Advantages<br />
  (including overloaded constructors)</h3>
<p>Recall that there are indeed two general examples of polymorphism: overloading, and overriding.</p>
<p><strong>Overloading</strong> is when the same method name is used more than once within the same class, and this is possible because each of the similarly name methods has a unique signature, due to each having a unique parameter list.<br />
</p>
<p><strong>Overloaded Constructors</strong> - This is the most common example of overloading. Quite often, one or more constructors beyond the default - no parameters - constructor are made. Taking this approach, objects of that class can then be made different ways depending on the data available to be sent from the user class during instantiation. Note that sometimes some or all default values will do fine, and other times we'll want to set them at the time of instantiation. Look back at <a href="D.2.3.php">D.2.3</a> for examples of this.</p>
<p>To reiterate, you know it's &quot;overloading&quot; because there are two or more methods <strong><em>in the same class</em></strong> with the <strong><em>same name</em></strong> (but different parameter lists).</p>
<p><strong>Advantage of Overloading</strong></p>
<p>To be clear about the <strong>advantages</strong> of overloading constructors: it adds to <strong>flexibility in the way that objects of the class can be made/instantiated</strong>, depending on the data available at the time of instantiation, and/or the variable necessity to change default values of data attributes.</p>
<h3></h3>
<h3><br />
  2. Overriding &amp; Advantages</h3>
<p><strong>Overriding in General</strong></p>
<p>Recall that overriding is where one child sub-class totally overrides a method found above it in the inheritance chain. So the same exact spelling and in fact same order and number of parameters can have different results depending on which class it is called from.</p>
<p>You know it's &quot;overriding&quot; when it's a method with the same name as another method in <em><strong>one of the classes above it or to its side in an inheritance hierarchy</strong></em>. So, putting it another way, it is &quot;re-doing&quot; a particular method, with the exact same signature, at a lower, or the same level of a particular inheritance hierarchy. </p>
<p><strong><br />
  2A. Advantages of Overriding toString( )</strong></p>
<p>Overriding toString( ), which is originally defined in the Object class, is the most common example of this, and it is generally expected that it will always be overridden, so that it offers users of that class a way to see a string representation of the data it works with.</p>
<p>Refer back to <a href="D.2.3.php">D.2.3</a>, but here is another example of overriding toString() at two levels of the same hierarchy.</p>
<pre>public class Car{
    private String name = &quot;not set yet&quot;;<br />    private String color = &quot;black&quot;;

    public Car(String name, String color){
        this.name = name;<br />        this.color = color;
    }
  <span class="gray"> //gets and sets...</span>
    public String toString(){ <span class="comment">//overridden the Object implementation of toString()</span>
        return &quot;All the car details are: &quot; + name + &quot; &quot; + color  + &quot;.&quot;;
    }
}</pre>
In the above class, toString() is overridden from its Object class implementation. Next we  see <strong>further</strong> polymorphic overriding of the toString() method in a sub-class of the above class.
<pre>public class SportsCar extends Car{
    private boolean hasSpoiler = false;
    
    public SportsCar(String name, String color, boolean hasSpoiler){
        super(name, color);
        this.hasSpoiler = hasSpoiler;

    }
   <span class="gray"> //gets and sets...</span>
    public String toString(){ <span class="comment">//overriden the Car implementation of toString()</span>
        return &quot;All the sports car details are: &quot; + name + &quot; &quot; + color + &quot;that it has a spoiler is &quot; + hasSpoiler + &quot;.&quot;;
}<br />
  <br /></pre>
<p>So in terms of the advantages that toString() being overriden, it's mainly the idea that it can be expected that <strong>all classes can show a string outputted representation</strong> of the data the work with, which is useful to see to know what data the class works with.</p>
<p>&nbsp;</p>
<p><strong>2B. Advantage of Other Overriding through an Ineritance Hierarchy</strong></p>
<p>As the Teaching Note puts it: &quot;this allows an external program to use the same action on a family of objects without knowing the implementation detail.&quot; So specifically, this is practice of using a loop to iterate through an array of different objects from the same inheritance hierarchy (or &quot;family&quot;), allowing runtime decisions about which particular overridden method to use for each object. And this really is very useful indeed. Here's a copy and paste from the full example of this given back in <a href="http:johnrayworth.info/jsr/_IB_Common/_option_D_OOP_Assessment_Statements/D.2.3.php">D.2.3</a>:</p>
<pre>
public class MainForMarket{
    public static void main(String[] args){
        MarketItem [] items = new MarketItem[2];
        items[0] = new FoodItem(&quot;Celery&quot;, 20);
        items[1] = new LuxuryItem(&quot;Caviar&quot;, 300);
		double totalBill = 0;
        for(int i = 0; i &lt; items.length; i++){
            totalBill += items[i].<strong>calculateCheckoutCost();</strong>            
            <span class="comment">//When this program runs the correct overriden methods will each be executed.
            //Actually, in this example we know items[0] is a FoodItem and items[1] a Luxury
            //item at compile time, but look below for a runtime decision situation.</span>
        }
       System.out.println(&quot;Your total bill is &quot; + totalBill.)
    }
}</pre>
<p>From the example above, recall how  the array of <em>MarketItem</em> objects is actually different objects of various classes below MarketItem in the inheritance hierarchy. And so each one of the <em>items</em> array has different version of calculateCheckoutCost() bound to it.</p>
<p>So, back to the advantage, yes, that's a pretty powerful feature of a programming language: runtime decisions based on how objects get declared during a particular running of the program. Cool.</p>
<p>&nbsp;</p>
<h3><strong>3. The General Advantage of <br />
  Consistent Naming of Similar Methods</strong></h3>

  <p>In a sentence, <strong>the advantage is that you can keep the same name for similar, yet slightly different methods</strong>. </p>
  <p>So firstly, taking the example of <em>overloaded constructors</em>, all  constructors for a certain class can be called the same thing - the name  of the class - even though they operate differently with their different list of parameters. <br />
    <br />
  And in the case of <em>overriding</em> of inherited methods, such as toString(), the same name can be used for  similar, yet slightly different, methods.  </p>
  <p>By keeping consistency of  naming in this way, other programmers can get a hint as to the  functionality of a method by recognizing the name. The assumption can be  made that the overridden methods with names we recognize will have  certain functionality based on the familiar name.<br />
  </p>
  <blockquote>
    <h3>&nbsp;</h3>
    <h3>A Couple of  Interesting Related Points<br />
    </h3>
    <p><strong>Consistency of Instance Variable/Parameter Names</strong></p>
    <p>Interestingly,  a preference to keep similar methods named the same reflects the way that most Java programmers prefer to use the same name for both  parameters and the internal attributes that they get assigned to. We  would prefer to call, for example, a student's name studentName, whether  it be the name being received as a parameter, or the attribute it gets  assigned to. &quot;studenName&quot; is the perfect identifier, so why change it  for one of those two variables. (And you'll recall we solve the  potential mixing up of the two with the &quot;this.&quot; clarification.) </p>
    <p>So it's  kind of the same with &quot;toString( )&quot;, for example. The toString( ) method returns a String representation of an object, so when coming up with a  specific representation of an object of a particular class, why make a  method by some other name? &quot;toString&quot; is perfect. And all programmers  familiar with Java will know what to expect from it, through the  particular implementation.<br />
    </p>
    <p><strong>&quot;Overloaded&quot; Operators<br />
    </strong></p>
    <p>
    If fact, a bit more about  polymorphism will help reinforce this desire to have consistent terms  and so on. Using operators in various ways, depending on the kind of  operand(s) being worked with, can be, in fact, seen as another example of  polymorphism. The + operator in-between two integers works one way  (arithmetically adding them together), but another way in-between two  strings (it concatenates them together). These are different, yet  similar uses, so we prefer to have only one operator, in this case +, used  dependent on the context.
    </p>
    <pre>System.out.println(2 + 4); <span class="comment">//Output: 6</span>         
System.out.println(&quot;Hello&quot; + &quot;world&quot;); <span class="comment">//Output: Helloworld</span></pre>
    <p>&nbsp;</p>
  </blockquote>
  <p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Explain the advantages of polymorphism.</p>
<p>(Beyond just overloaded constructors) polymorphism allows an external &quot;main&quot; class to use the same named method  on all subclasses, with each subclass' implementation of the polymorphic method remaining unique. </p>
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