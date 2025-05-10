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
		<a href="D.2.2.php">Last</a>
	    <a href="D.2.4.php">Next</a></p>
</div>
	
	<div class="backgroundDiv">

<div class="roundedCornerDiv">
<p>D.2.3</p>
<p>Define the term polymorphism.</p>
<p>&nbsp;</p>
<p><em>Teaching Note:</em></p>
<p>Actions have the same name but different parameter lists and processes.<br />
	</p></div>
<p><br />
  <span class="line-number">Sample Questions</span></p>
<p>----</p>
<p>Q1. Discuss the use of polymorphism that occurs in this suite of programs (in the exam paper).</p>
<p>-----</p>
<p>Q2. Explain why having a getWeight() method in both the Train and Wagon classes does not cause a compiler error, even though the Train class does not inherit from theRollingStock class.</p>
<p>----</p>
<p>Q3. By making reference to OOP features, outline why it is possible for the Xyz class to have two constructors.</p>
<p>----</p>
<p>
  <?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
$loggedInUser = $_SESSION['validUser7'];
if($loggedInUser == 'examPrepUser'){
	echo '<p class="line-number"><u>Marks Scheme</u><br><br>
	Award up to [2 marks max].<br>
Feature in which the same operation;<br>
Can be applied to different objects/objects of different types;<br>
Correct use of terms overloading and overriding;<br> [2 marks]';
	
}

?>
</p>
<p>JSR Notes:</p>
<h3>OOP Super Power # 3: Polymorphism </h3>
<p>&ldquo;<em>That&rsquo;s my secret Cap, I&rsquo;m always angry</em>.&quot; - Bruce Banner (who morphs into The Hulk when angry) to Captain America.</p>
<p><strong><br />
  Basic Definition</strong></p>
<p>(In true superhero fashion,) the simplest definition of polymorphism can be taken by appreciating the two Ancient Greek roots of its name, &quot;poly&quot;, meaning many/multiple, and &quot;morph&quot;, meaning form. Polymorphism is the OOP feature in which <strong>a method can take on multiple forms</strong>. </p>
<p><strong><br />
  Beyond the Basics</strong></p>
<p>With polymorphism, within one program, two or more methods can be spelled exactly the same way, yet work differently. This can happen from two different situations, overloading, and overriding. Overloading is implemented at compile time, and overriding happens at runtime.</p>
<blockquote>
  <p><strong>Compile time vs. Runtime</strong></p>
  <p>Before going any further, it would be a good idea to be clear on compile time vs. runtime. Compile time is when the code is checked for errors and, in the case of Java, made into an intermediary .class file. For us, using IntelliJ IDEA to program, IntelliJ automatically compiles the program each time just before we run our program. </p>
  <p>Meantime runtime is the time during which the code is actually being run by the computer, and the user is interacting with it. It is important to note that the state of various parts of the program can change each particular time the program is run.</p>
</blockquote>
<p> <strong>Overloading Polymorphism</strong> (at compile time) - this is where, <strong>within the same class</strong>, there is more than one method with the same name. This is possible because each overloaded method takes a <strong>particular number and type of parameters</strong>, different from the other methods with the same name. Or using more technical words, each overloaded method's <strong>signature</strong> (which describes its header line) is different, because of a different parameter list.</p>
<p>Most commonly, overloading of methods is seen with the constructor methods, i.e. <strong>overloaded constructors</strong>.</p>
<p>Java Example</p>
<pre>public class Student{
    String name = &quot;not set yet&quot;;
    int grade = -999;

    public Student<strong>( )</strong>{ <span class="comment">//default constructor</span>
    }

    public Student<strong>(String name)</strong>{ <span class="comment">//overloaded constructor # 1</span>
        this.name = name;
    }

    public Student<strong>(String name, int grade)</strong>{ <span class="comment">//overloaded constructor # 2</span>
        this.name = name;
        this.grade = grade;
    }
}


public class MainClass{
    public static void main(String[] args){
        Student s = new Student<strong>( )</strong>; <span class="comment">// this will call the default constructor</span>
        Student s1 = new Student<strong>(&quot;Sally&quot;)</strong>;  <span class="comment">//this will call the one-parameter overloaded constructor</span>
        Student s2 = new Student<strong>(&quot;Bobby&quot;, 10)</strong>; <span class="comment">//this will call the two-parameter overloaded constructor</span>
    ....
    }
}</pre>
<p>&nbsp;</p>
<p><strong>Overriding Polymorphism</strong> (at runtime) - this is where, at <strong>different places on an inheritance hierarchy</strong>, there are methods with the <strong>same name </strong>in<strong> different classes</strong> and they even have the same number and type of parameters. The compiler of the program will keep track of whichever class object the method is <strong>bound</strong> to when it is instantiated during that particular run-time.</p>
<p>This is useful because similar functionality which should execute slightly differently for slightly different classes can be called the same thing. And even better, if an array of similar-level sub-classes is made, one spelling of a method can be called through a loop of the array, with the particular overridden method for each element being executed the right way at runtime.</p>
<p>Java Example</p>
<pre>public abstract class MarketItem{
    ...
    ...
    public abstract double <strong>calculateCheckoutCost()</strong>;
}

public class FoodItem extends MarketItem{
    ...
    double stickerPrice = scanner.readLine();
    ...
    public double <strong>calculateCheckoutCost()</strong>{
        return stickerPrice * 1.05; <span class="comment">//so 5% tax on food</span>
    }
}

public class LuxuryItem extends MarketItem{
    ...
   double stickerPrice = scanner.nextDouble();
    ...
    public double <strong>calculateCheckoutCost()</strong>{
        return stickerPrice * 1.4; <span class="comment">//so 40% tax on luxury items</span>
    }
}

public class MainForMarket{
    public static void main(String[] args){
        MarketItem [] items = new MarketItem[2];
        items[0] = new FoodItem(&quot;Celery&quot;, 20);
        items[1] = new LuxuryItem(&quot;Caviar&quot;, 300);
		double totalBill = 0;
        for(int i = 0; i &lt; items.length; i++){
            totalBill += items[i].<strong>calculateCheckoutCost();</strong> 
            <span class="comment">//When this program runs the correct overriden methods will each be executed.</span>
            <span class="comment">//Actually, in this example we know items[0] is a FoodItem and items[1] a Luxury
            //item at compile time, but look below for a runtime decision situation.</span>
        }
       System.out.println(&quot;Your total bill is &quot; + totalBill.)
    }
}

<strong>An Even Better, But More Involved Main:</strong>

public class MainForMarket{
    public static void main(String[] args){
        ArrayList&lt;MarketItem&gt; items = new ArrayList&lt;MarketItem&gt;();
        Scanner scanner = new Scanner(System.in);
        boolean moreItemsToCheckIn = true;
        while(moreItemsToCheckIn){
            System.out.printnl(&quot;What is the next item to check in?&quot;);
            String nextItem = scanner.nextLine();
            System.out.println(&quot;What is its price?&quot;);
            double price = scanner.nextBoolean();
            System.out.println(&quot;Is it a luxury item? true/false&quot;);
            boolean isLuxuryItem = scanner.nextBoolean();
            if(isLuxuryItem){
                items.add(new LuxuryItem(nextItem, price));
            }
            else{
                items.add(new FoodItem(nextItem, price));
            }
            System.out.println(&quot;Do you have more items to check in? true/false&quot;);
            moreItemsToCheckIn = scanner.nextBoolean();
        }
		double totalBill = 0;
        for(int i = 0; i &lt; items.size(); i++){
            totalBill += items[i].<strong>calculateCheckoutCost();</strong> 
            <span class="comment">//Shazam! Here is where <strong>at runtime</strong> the correct overriden methods will be chosen.
            //In this case, what itmes[1] and items[2] are will not even be known until runtime.
            //Polymorphism at its coolest!</span>
        }
       System.out.println(&quot;Your total bill is &quot; + totalBill.)
    }
}</pre>
<p>In the example above, each calculateCheckoutCost() is overriding, in its own particular way the calculateCheckoutCost() method in the hierarchical level just above it.</p>
<p><strong>Overriding toString()</strong></p>
<p>The most common example of overriding that you will see in IB CS (and on IB CS exams) is the overriding of toString( ), which exists in the Object class, so all other classes can override it. You'll note that even though all classes in Java extend Object, &quot;the mother of all classes&quot;,  explicitly stating this in the first line of a program (i.e. <em>class Xyz extends Object</em>) is neither necessary nor expected.</p>
<p>It is   good practice to always overload toString( ). It's generally expected that you will do so, in order to offer users a nicely formatted look to your object. If you don't override toString( ), by default toString( ) just prints out a string representation of the memory address where that object resides (like for a Car object, Car@fd128a95).</p>
<p>So here's a quick override of toString( ) for the FoodItem class used above:</p>
<pre>public String toString(){
    String stringToOutput = &quot;&quot;;
    stringToOutput += &quot;***Food Mart - Number 1 for your Family!!!&quot;;
    stringToOutput += &quot;* Food name: &quot; + foodName;
    stringToOutput += &quot;* Price:         &quot; + price;
    stringToOutput += &quot;***Remember, Your Family, Your Food Mart!!);
    return stringToOutput;
}</pre>
<p>So System.out.println(foodItemXyz.toString()) would give an output like:</p>
<p>***Food Mart - Number 1 for your Family!!!<br />
  * Food name: Celery<br />
  * Price: 20<br />
  ***Remember, Your Family, Your Food Mart!!</p>
<p>&nbsp;</p>
<h3> Full Polymorphism Example with both Overloading and Overriding</h3>
<p>This has both two additional overloaded constructors, and toString( ) overridden.<br />
  (There possibly could be more hierarchical overriding implemented too, since the Teacher and TeachingAide classes both extend TeachingStaff, but this is not done here yet.)
</p>
<pre>
public class SchoolClass{
    private ArrayList&lt;Student&gt; students = new ArrayList&lt;Student&gt;();
    private Teacher teacher = null;
    private TeacherAid teacherAid = null;
    private hasTeacherAide = false;

    public SchoolClass(){ <span class="comment">//default constructor</span>
    }

    public SchoolClass(ArrayList&lt;Student&gt; students, Teacher teacher ){ <span class="comment">//overloaded constructor # 1</span>
        this.students  = students;
        this.teacher = teacher;
    }

    public SchoolClass(ArrayList&lt;Student&gt; students, Teacher teacher, TeacherAide ta ){<span class="comment"> //overloaded constructor # 2</span>
        this.students  = students;
        this.teacher = teacher;
        this.hasTeacherAide = true;
        this.teacherAide = ta;
    }

    public ArrayList&lt;Student&gt; getStudents(){
        return students;
    }

   <span class="comment"> //other get methods</span>

    public void setStudents(Student [] students){
        this.students = students;
    }
<span class="comment">
    //other set methods
    //other mutator methods</span>

    public String toString(){ <span class="comment">//overriding of toString() from Object</span>
        return &quot;Number of students: &quot; + students.size() + &quot; Teacher: &quot; + teacher.getName();
    }
}
   <br />public class Student{
    ...
}

public class Teacher extends TeachingStaff{
    ...
}

public class TeacherAide extends TeachingStaff{
    ...
}

public static void main(String[] args){
	...<br />}
</pre>
<p>&nbsp;</p>
<p><strong>In Summary, Back to the Assessment Statement</strong>:<br />
  Define the term polymorphism.</p>
<blockquote>
  <p>- Polymorphism is the OOP feature in which <strong>a method can take on multiple forms</strong>. </p>
</blockquote>
<p>But just as likely you will get a question which asks &quot;<strong><em>why/how</em></strong> is such-and-such possible&quot;, and it will be an example of polymorphism. So for an overriding situation, like with toString( ), your answer will go a little something like this:</p>
<blockquote>
  <p>- The runtime engine checks to see what class of object the method is bound to and so choose the correct one.</p>
</blockquote>
<p>Or in terms of why/how is an overloaded constructor situation possible:</p>
<blockquote>
  <p>- The two constructors have different parameter lists, and so the compiler can differentiate between the two.<br/>
    It will execute the constructor whose parameter set matches the arguments that were send. This overloading of constructors is an example of polymorphism.</p>
</blockquote>
<p>&nbsp;</p>
<p><img src="../images/Trace-it-Dimmed.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it-Dimmed.png" alt="" width="109" height="60"/></p>
<pre></pre>
<p>&nbsp;</p>
<p class="comment"> <span class="comment1">+ Morelli textbook:                  
pages: 133-136 and 350-353 for overriding                     
and 355-356 for overloading</span></p>
<p class="comment"><a href="http://moosehead.cis.umassd.edu/cis180/restricted/textbook/index.html" target="_blank">On-line</a> textbook (open source) and additional <a href="http://www.cs.trincoll.edu/~ram/jjj/" target="_blank">resources</a>.</p>
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