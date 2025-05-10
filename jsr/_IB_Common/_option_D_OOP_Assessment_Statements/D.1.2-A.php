<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>johnrayworth.info</title>

<meta name="description" content="" /><!-- PUT DESCRIPTION OF PAGE HERE -->

<meta name="keywords" content="" /><!-- PUT KEYWORDS HERE; though less supported -->

<link href="../../cssStyleSheets/mainCSSTemplate.css" rel="stylesheet" type="text/css" />
<link href="../../cssStyleSheets/forSideBarEtc.css" rel="stylesheet" type="text/css" />

</head><body><p align="right"><a href="/jsr/logout1.php"><font size="2">Logout</font></a></p>
		
	<div class="sidenav">
	  <p><a href="../../../index.html">Home</a>
	    <a href="../_option_D_OOP_From_Syllabus.php">OOP Option</a>
		<a href="D.1.2.php">Last</a>
	    <a href="D.1.2-B.php">Next</a></p>
</div>
	
	
	<div class="backgroundDiv">
<h3><br>
  OOP &quot;Template&quot; Class - Full Code &amp; Explanation</h3>
<p><br>
  ---------- THIS GOES A BIT BEYOND what is stated explicitly in the IB assessment statements ---------</p>
<p>---------- <strong>BUT</strong> IT IS FOR SURE STUFF YOU SHOULD KNOW ---------</p>
<h3><br>
  Classes</h3>
<p>A class is a fundamental grouping of programming data and instructions. Usually applications are made up of several, if not hundresds of classes, which make instances of each other to accomplish various tasks. So each class is specialized to do certain tasks within an applications. Microsoft Word, for example, probably has classes specialized in spell checking, others specialized in formatting of words, and others still specialized in saving and opening. And there is at least one class in all applications which has a main method. But most classes are what I term a &quot;template&quot; class; they are classes that allows the creation of objects of them, but don't have a main method for running. </p>
<h3><br>
  Classes Are Made Up of Attributes and Methods</h3>
<p>Everything in a class is either data of a certain  data type, which we'll call an attribute, or a method which somehow uses or manipulates one or more of the attributes. Usually we list the attributes with global scope at the top of the program, and then the rest of the program is the various methods that work with these attributes.</p>
<h3><br>
  The Reason For Private Attributes</h3>
<p>With programming constructs prior to the advent of OOP, it was common practice for different classes to share attributes - in fact to share whole libraries of data. But this led to unreliable programs because programmers would end up writing code which altered certain attributes ways that caused problems for other classes that used them. The classic example here is how Windows applications used to share &quot;dll&quot; libraries - Dynamically Linked Libraries. There are real benefits to sharing, and they are primarily related to memory saving issues. But now-a-days, with vast amount of RAM memory, and secondary storage, there is no need to risk the problems associated with sharing attributes, let alone sharing full libraries of data. Rather, OOP constructs speak of &quot;encapsulation&quot;, in which the attributes and methods that manipulate them, of a certain class, are all bundled together. Direct access of attributes by other classes is not permitted, to prevent potential misuse of those attributes. Rather, access to the data attributes is via public methods.</p>
<h3><br>
  Private Attributes, Public Methods</h3>
<p>So when we make template classes, we will always make all of the <strong>attributes</strong> of that class <strong>private</strong>. They will not be able to be accessed directly by other classes using dot notation. This means that any accessing or changing of these attributes will have to take place via public methods that work with them - methods that are fully under the control of the programer making the class. </p>
<p>Only the method <strong>header</strong> can be seen by other programmers using the method. The header is the first line of the method, and its particular <strong>signature</strong> is made up of the method's accessibilty (public, proteceted or private), it's name, what it returns, and the number and type of parameters that are needed to properly use it. We say that this header line of all the public methods therefore make up the <strong>public interface</strong> of a class; headers are what the users of the class can see as pubicly accessible.</p>
<p>So, in Netbeans/IntelliJ, for example, when we make an instance of an class, and then type it and type a dot, we see a list of all the things that are available to use - i.e. all of the public things, which is properly just the methods. Though you'll note that there are both the methods which we have created, and also any of the methods inherited from other classes, in particular the Object class, which all other classes, including the ones we make, are decendants of. The methods implemented in the class itself are usually shown as bold, and those inherited as non-bold.</p>
<p><img src="../Java-Revolution/_Images/Available-Methods.jpg" width="438" height="308" /></p>
<p>So all of the above methods in bold are ones that we made in our EndangeredSpecies class, and all the others come from the Object class, from which all other classes are decended. See the class below to note this. The only other public interface methods not listed above are the contructors themselves.</p>
<p>One other thing to note above from the Netbeans snapshot is that the paramerter list is in the parentheses as normal, but the return values are off to the right.</p>
<pre><span class="line-number"></span>
<span class="line-number"> 2</span> 
<span class="line-number"> 3</span> <span class="keyword-directive">package</span> endangeredspecies;
<span class="line-number"> 4</span> 
<span class="line-number"> 5</span> 
<span class="line-number"> 6</span> <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> EndangeredSpecies {
<span class="line-number"> 7</span> 
<span class="line-number"> 8</span>     <span class="comment">//The &quot;attributes&quot;</span>
<span class="line-number"> 9</span>     <span class="keyword-directive">private</span> String speciesName = &quot;not set yet&quot;;
<span class="line-number">10</span>     <span class="keyword-directive">priva</span><span class="keyword-directive">te</span> <span class="keyword-directive">int</span> numberLeft = 0;
<span class="line-number">11</span>     <span class="keyword-directive">private</span> <span class="keyword-directive">boolean</span> critical = false;
<span class="line-number">12</span> 
<span class="line-number">13</span>     <span class="comment">//The &quot;CONSTRUCTORS&quot; - we&#39;ll make two; the default, and one other.</span>
<span class="line-number">14</span>     
<span class="line-number">15</span>     <span class="comment">//The Default Con</span><span class="comment">structor</span>
<span class="line-number">16</span>     <span class="keyword-directive">public</span> EndangeredSpecies(){
<span class="line-number">17</span>        
<span class="line-number">18</span>     }
<span class="line-number">19</span> 
<span class="line-number">20</span>     <span class="comment">//The First Overloaded Constructor - this one takes in one piece of information - it sets the speciesName only.</span>
<span class="line-number">20a</span>    <span class="comment">//Note that overloaded constructors are an example of &quot;polymorphism&quot;</span>
<span class="line-number">21</span>     <span class="keyword-directive">public</span> EndangeredSpecies(String speciesName){
<span class="line-number">22</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">23</span>     }
<span class="line-number">24</span> 
<span class="line-number">25</span>     <span class="comment">//The Second Overloaded Con</span><span class="comment">structor - this one sets all three attributes to values passed to it.</span>
<span class="line-number">26</span>     
<span class="line-number">27</span>     <span class="comment">//In fact, we don&#39;t use this one in the program the way it works now, but we should implement</span>
<span class="line-number">28</span>     <span class="comment">//it for possible fut</span><span class="comment">ure use as the GUI is worked on.</span>
<span class="line-number">29</span>     
<span class="line-number">30</span>     <span class="keyword-directive">public</span> EndangeredSpecies(String speciesName, <span class="keyword-directive">int</span> numberLeft, <span class="keyword-directive">boolean</span> critical){
<span class="line-number">31</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">32</span>         <span class="keyword-directive">this</span>.numberLeft = numberLeft;
<span class="line-number">33</span>         <span class="keyword-directive">this</span>.critical = critical;
<span class="line-number">34</span>     }
<span class="line-number">35</span> 
<span class="line-number">36</span> 
<span class="line-number">37</span>     <span class="comment">/*The &quot;Set&quot; Methods - one for each attribute</span><span class="comment">,</span>
<span class="line-number">38</span> <span class="comment">    for setting the attributes of a particular Team object.*/</span>
<span class="line-number">39</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setSpeciesName(String speciesName){
<span class="line-number">40</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">41</span>     }
<span class="line-number">42</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setNumberLeft(<span class="keyword-directive">int</span> numberLeft){
<span class="line-number">43</span>         <span class="keyword-directive">this</span>.numberLeft = numberLeft;
<span class="line-number">44</span>     }
<span class="line-number">45</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setCritical(<span class="keyword-directive">boo</span><span class="keyword-directive">lean</span> critical){
<span class="line-number">46</span>         <span class="keyword-directive">this</span>.critical = critical;
<span class="line-number">47</span>     }
<span class="line-number">48</span> 
<span class="line-number">49</span>     <span class="comment">/*The &quot;Get&quot; Methods - one for each attribute,</span>
<span class="line-number">50</span> <span class="comment">    for sending back particular infor</span><span class="comment">mation about a particular Team object.*/</span>
<span class="line-number">51</span>     <span class="keyword-directive">public</span> String getSpeciesName(){
<span class="line-number">52</span>         <span class="keyword-directive">return</span> speciesName;
<span class="line-number">53</span>     }
<span class="line-number">54</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">int</span> getNumberLeft(){
<span class="line-number">55</span>         <span class="keyword-directive">return</span> numberLeft;
<span class="line-number">56</span>     }
<span class="line-number">57</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">boolean</span> getCritical(){
<span class="line-number">58</span>         <span class="keyword-directive">return</span> critical;
<span class="line-number">59</span>     }
<span class="line-number">59a</span>
<span class="line-number">60</span>     <span class="comment">//Other &quot;Mutator&quot; Methods</span>
<span class="line-number">61</span>     <span class="comment">/*This is the other method, which in this case adjus</span><span class="comment">ts the number left based on the number killed.*/</span>
<span class="line-number">62</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> adjustNumberLeft(<span class="keyword-directive">int</span> numberKilled){
<span class="line-number">63</span>         numberLeft -= numberKilled;
<span class="line-number">64</span>         <span class="keyword-directive">if</span>(numberLeft &lt; 1000){
<span class="line-number">65</span>             critical = <span class="keyword-directive">true</span>;
<span class="line-number">66</span>         }
<span class="line-number">67</span>     }
<span class="line-number">67a</span>    <span class="comment">//You should get into the habit of also including &quot;overriding&quot; of the Object method toString, another example of polymorphism.</span>
<span class="line-number">67b</span>    <span class="darkblue">public</span> String toString(){
<span class="line-number">67c</span>        return &quot;Species name: &quot; + speciesName + &quot;, number left: &quot; + numberLeft + &quot;, critical: &quot; + critical + &quot;.&quot;;
<span class="line-number">68</span>     }
<span class="line-number">69</span> }
<span class="line-number">70</span> 
<span class="line-number">71</span></pre>
<h3><br>
  The Four General Kinds of Methods in a Template Class</h3>
<h3>1.  Constructors</h3>
<p>The constructors are the means of making instances of classes, so that other classes can access their methods. The constructor is unique in the way it is written in two ways, firstly, it is exactly the <strong>same name as the class</strong> (even including the fact that it is capitalized), and it has <strong>no return method</strong>, not even void. It can take parameters, though it doesn't have to. </p>
<p>In fact, there can be <strong>more than one constructor</strong>, with the different constructors taking in differnt numbers and kinds of parameters. So, for example, in the program above, it is possible to construct a new EndangeredSpecies object with just an initial speciesName attribute, or we can make a new object of the EndangeredSpecies class and set values to all three variables. And we can even construct a new EndangeredSpecies object without setting any of the attributes at the time of construction. And you'll note that this default constructor does not need to be explicitly written by us; it is compiled behind the scenes regardless.</p>
<p><strong>The Implementation of the Constructors of the EndangeredSpecies Class</strong>:</p>
<pre>
<span class="comment"></span>
<span class="line-number">16</span>     <span class="keyword-directive">public</span> EndangeredSpecies(){
<span class="line-number">17</span>         speciesName = <span class="character">&quot;&quot;</span>;
<span class="line-number">18</span>     }
<span class="line-number">19</span> <span class="line-number"></span><span class="comment"></span>
<span class="line-number">21</span>     <span class="keyword-directive">public</span> EndangeredSpecies(String speciesName){
<span class="line-number">22</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">23</span>     }
<span class="line-number"></span>   
<span class="line-number">30</span>     <span class="keyword-directive">public</span> EndangeredSpecies(String speciesName, <span class="keyword-directive">int</span> numberLeft, <span class="keyword-directive">boolean</span> critical){
<span class="line-number">31</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">32</span>         <span class="keyword-directive">this</span>.numberLeft = numberLeft;
<span class="line-number">33</span>         <span class="keyword-directive">this</span>.critical = critical;
<span class="line-number">34</span>     }
</pre>
<p>When constructors are called by other classes making instances of a certain class, the new operator is used to find a free block of memory apporpriately sized for that class. In the case of the example here, that would be enough memory for one String, one int, and one boolean. (This was shown in the last notes, too.) Here is a line using the above first &quot;overloaded&quot; constructor:
        </p><blockquote>
          <blockquote>
    <blockquote>
    </blockquote>
  </blockquote>
</blockquote>
<blockquote>
  <blockquote>
    <blockquote>
      <p><strong><em>Calling</em> One of the Constructors of the EndangeredSpecies Class in another class</strong></p>
      <pre>
<span class="line-number"></span>    
<span class="line-number">14</span>     EndangeredSpecies es = <span class="keyword-directive">new</span> EndangeredSpecies(<span class="character">&quot;</span><span class="character">Humpback whale</span><span class="character">&quot;</span>);
<span class="line-number">15</span> 
<span class="line-number"></span></pre>
    </blockquote>
    </blockquote>
</blockquote>

<h3>2. &quot;Set&quot; Methods</h3>
<p>The set methods are very similar to the constructors in that they take in parameters, and don't return anything. The are there so that the various attributes can be altered as the program is used. Refer to the code above to see what they look like. And keep in mind that we can initially assign values to the various attributes through the constructor, but then potentially change these for any attributes that have set methods.</p>
<pre><span class="line-number">36</span> 
<span class="line-number">37</span>     <span class="comment">/*The &quot;Set&quot; Methods - one for each attribute,</span>
<span class="line-number">38</span> <span class="comment">    for setting the attributes of a particular Team object.*/</span>
<span class="line-number">39</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setSpeciesName(String speciesName){
<span class="line-number">40</span>         <span class="keyword-directive">this</span>.speciesName = speciesName;
<span class="line-number">41</span>     }
<span class="line-number">42</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setNumberLeft(<span class="keyword-directive">int</span> numberLeft){
<span class="line-number">43</span>         <span class="keyword-directive">this</span>.numberLeft = numberLeft;
<span class="line-number">44</span>     }
<span class="line-number">45</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> setCritical(<span class="keyword-directive">boo</span><span class="keyword-directive">lean</span> critical){
<span class="line-number">46</span>         <span class="keyword-directive">this</span>.critical = critical;
<span class="line-number">47</span>     }
<span class="line-number">48</span>
</p>
</pre>
<h3>3. &quot;Get&quot; Methods</h3>
<p>Since we want our attribues to be private, if we are going to access their values, we will need public methods that return their values. This is exactly what get methods do. Refer to the full program above to see what they look like. But as you would expect, they do return the type of the specific attribute, and they take in no parameters.</p>
<pre>
<span class="line-number">48</span> 
<span class="line-number">49</span>     <span class="comment">/*The &quot;Get&quot; Methods - one for each attribute,</span>
<span class="line-number">50</span> <span class="comment1">    </span><span class="comment">for sending back particular information about a particular Team object.*/</span>
<span class="line-number">51</span>     <span class="keyword-directive">public</span> String getSpeciesName(){
<span class="line-number">52</span>         <span class="keyword-directive">return</span> speciesName;
<span class="line-number">53</span>     }
<span class="line-number">54</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">int</span> getNumberLeft(){
<span class="line-number">55</span>         <span class="keyword-directive">return</span> numberLeft;
<span class="line-number">56</span>     }
<span class="line-number">57</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">boolean</span> getCritical(){
<span class="line-number">58</span>         <span class="keyword-directive">return</span> critical;
<span class="line-number">59</span>     }
<span class="line-number">59a</span>
<br>
</pre>
<h3>4. Other Data Manipulation &quot;Mutator&quot; Methods</h3>
<p>We can group all of the other methods of a class into this category. In fact, in the grand scheme of things these will be the most important methods, since they don't just set or get attributes which could have otherwise just been declared in the calling class. Rather, these supply the real  data manipulation algorithms of the program. Our program above is very simply, but you can imagine that there are an infinite variety of complex things that such methods do.<br>
  </p>
<pre><span class="line-number">59a</span>
<span class="line-number">60</span>     <span class="comment">//Other &quot;Mutator&quot; Methods</span>
<span class="line-number">61</span>    <span class="comment"> /*This is the other method, which in this case adjusts the number left based on the number killed.*/</span>
<span class="line-number">62</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> adjustNumberLeft(<span class="keyword-directive">int</span> numberKilled){
<span class="line-number">63</span>         numberLeft -= numberKilled;
<span class="line-number">64</span>         <span class="keyword-directive">if</span>(numberLeft &lt; 1000){
<span class="line-number">65</span>             critical = <span class="keyword-directive">true</span>;
<span class="line-number">66</span>         }
<span class="line-number">67</span>     }
<span class="line-number">67a</span>    <span class="comment">//You should get into the habit of also including &quot;overriding&quot; of the Object method toString, another example of polymorphism.</span>
<span class="line-number">67b</span>    <span class="darkblue">public</span> String toString(){
<span class="line-number">67c</span>        return &quot;Species name: &quot; + speciesName + &quot;, number left: &quot; + numberLeft + &quot;, critical: &quot; + critical + &quot;.&quot;;
<span class="line-number">68</span>     }
<span class="line-number">69</span> }
<span class="line-number">70</span> </pre>
</p>
<h3>---------------</h3>
<h3>A Class That Uses Our Template Class</h3>
<p>Here is the code for a GUI that uses the above template class. For these notes, it's not necessary to understand all of it, especially the GUI (Graphical User Interface) part, but it is included here for a sense of completion. Primarily look for where instances of the EndangeredSpecies class is made, and where the various methods are called.</p>



<pre>

<span class="line-number"> 12</span> <span class="keyword-directive">package</span> endangeredspecies;
<span class="line-number"> 13</span> <span class="line-number"></span><span class="comment"></span>
<span class="line-number"> 18</span> <span class="keyword-directive">public</span> <span class="keyword-directive">class</span> EndangeredGUI <span class="keyword-directive">extends</span> javax.swing.JFrame {
<span class="line-number"> 19</span> 
<span class="line-number"> 20</span>     <span class="keyword-directive">private</span> <strong>EndangeredSpecies[</strong>] speciesArray = <span class="keyword-directive">new</span> <strong>EndangeredSpecies</strong>[10];
<span class="line-number"> 21</span>     <span class="keyword-directive">private</span> <span class="keyword-directive">int</span> arrayCount = 0;
<span class="line-number"> 22</span> <span class="line-number"></span><span class="comment"></span>
<span class="line-number"> 24</span>     <span class="keyword-directive">public</span> EndangeredGUI() {
<span class="line-number"> 25</span>         initComponents();
<span class="line-number"> 26</span>         myinitComponents();
<span class="line-number"> 27</span>     }
<span class="line-number"> 28</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> myinitComponents(){
<span class="line-number"> 29</span>         <span class="keyword-directive">for</span>(<span class="keyword-directive">int</span> i = 0; i &lt; speciesArray.length ; i++){
<span class="line-number"> 30</span>             speciesArray[i] = <span class="keyword-directive">new</span> <strong>EndangeredSpecies()</strong>;
<span class="line-number"> 31</span>         }
<span class="line-number"> 32</span>         jComboBoxForNames.setModel(<span class="keyword-directive">new</span> javax.swing.DefaultComboBoxModel(<span class="keyword-directive">new</span> String[] { }));
<span class="line-number"> 33</span> 
<span class="line-number"> 34</span>     }<span class="line-number"></span>
<span class="line-number">285</span> 
<span class="line-number">286</span>     <span class="keyword-directive">private</span> <span class="keyword-directive">void</span> jButton1MouseReleased(java.awt.event.MouseEvent evt) {<span class="line-number"></span><span class="comment"></span>
<span class="line-number">288</span>         speciesArray[arrayCount].<strong>setSpeciesName</strong>(jTextFieldNameEntered.getText());
<span class="line-number">289</span>         speciesArray[arrayCount].<strong>setNumberLeft</strong>(Integer.parseInt(jTextFieldPopulationEntered.getText()));
<span class="line-number">290</span>         arrayCount++;
<span class="line-number">291</span>         System.out.println(speciesArray[0].<strong>getSpeciesName()</strong>);
<span class="line-number">292</span>     }
<span class="line-number">293</span> 
<span class="line-number">294</span>     <span class="keyword-directive">private</span> <span class="keyword-directive">void</span> RefreshMouseClicked(java.awt.event.MouseEvent evt) {<span class="line-number"></span><span class="comment"></span>
<span class="line-number">296</span>         <span class="keyword-directive">for</span>(<span class="keyword-directive">int</span> i = 0; i &lt; speciesArray.length; i++){
<span class="line-number">297</span>             jComboBoxForNames.addItem(speciesArray[i].<strong>getSpeciesName()</strong>);
<span class="line-number">298</span>         }
<span class="line-number">299</span>     }
<span class="line-number">300</span> 
<span class="line-number">301</span>     <span class="keyword-directive">private</span> <span class="keyword-directive">void</span> jButton2MouseClicked(java.awt.event.MouseEvent evt) {<span class="line-number"></span><span class="comment"></span>
<span class="line-number">303</span>         String selectedSpecies = jComboBoxForNames.getSelectedItem()+<span class="character">&quot;&quot;</span>;
<span class="line-number">304</span>         <span class="keyword-directive">fo</span><span class="keyword-directive">r</span>(<span class="keyword-directive">int</span> i = 0; i &lt; speciesArray.length; i++){
<span class="line-number">305</span>             <span class="keyword-directive">if</span>(speciesArray[i].<strong>getSpeciesName()</strong>.equals(selectedSpecies)){
<span class="line-number">306</span>                 speciesArray[i].<strong>adjustNumberLeft</strong>(Integer.parseInt(jTextFieldAdditionalKilled.getText()));
<span class="line-number">307</span>                 <span class="keyword-directive">if</span>(speciesArray[i].<strong>getCritical()</strong>){
<span class="line-number">308</span>                     jLabelWarning.setForeground(java.awt.Color.RED);
<span class="line-number">309</span>                     jLabelWarning.setBackground(java.awt.Color.RED);
<span class="line-number">310</span>                     jLabelWarning.setText(<span class="character">&quot;</span><span class="character">Warning!!! Critical!!!</span><span class="character">&quot;</span>);
<span class="line-number">311</span>                     jLabelWarning.setAlignmentX(2);
<span class="line-number">312</span>                 }
<span class="line-number">313</span>             }
<span class="line-number">314</span>         }
<span class="line-number">315</span> 
<span class="line-number">316</span>     }<span class="line-number"></span><span class="comment"></span>
<span class="line-number">321</span>     <span class="keyword-directive">public</span> <span class="keyword-directive">static</span> <span class="keyword-directive">void</span> main(String args[]) {
<span class="line-number">322</span>         java.awt.EventQueue.invokeLater(<span class="keyword-directive">new</span> Runnable() {
<span class="line-number">323</span>             <span class="keyword-directive">public</span> <span class="keyword-directive">void</span> run() {
<span class="line-number">324</span>                 <span class="keyword-directive">new</span> EndangeredGUI().setVisible(<span class="keyword-directive">true</span>);
<span class="line-number">325</span>             }
<span class="line-number">326</span>         });
<span class="line-number">327</span>     }
</pre>
<p><img src="../Java-Revolution/_Images/EndangeredSpecies-1.jpg" width="447" height="387">
  &nbsp;&nbsp;&nbsp;<img src="../Java-Revolution/_Images/EndangeredSpecies-2.jpg" width="456" height="390">
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="../images/Trace-it.png" width="109" height="60" alt=""/></p>
<p><img src="../images/Code-it.png" width="109" height="60" alt=""/></p>
<p>&nbsp;</p>
<p></p>
</div>
</body>
</html>

<?php

ini_set('session.gc_maxlifetime', '7200');
session_start();
require_once('../../../phpHelperScripts/jsrCourses_fns.php'); //********But these will have to be made relative*************
require_once('../../../phpHelperScripts/allThreeScriptsHelper.php'); 
db_connect();
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

/* $query3 = "INSERT INTO pro_it_homework VALUES('$loggedInUser','$homework', '$hwAndStudent', '', '', '', '', '', '', '', '')";
mysql_query($query3); */



		//Looping Through all of some query
/* if($section == 'Block_IB_a'){
	$studentsRestult = mysql_query("select * from ib_a_students where section = 'Block_IB_a' and assignType = '".$letterForKindOfGrade."' order by userName", $linkHere);	
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