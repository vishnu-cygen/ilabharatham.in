<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_POST['email'] ;
  $subject = $_POST['name'] ;
  $message = $_POST['comments'] ;
  mail("info@ilabharatham.in", $subject." ".$email,
  $message, "From:contact@ilabharatham.in");
  echo "Thank you for using our mail form";
  }
?>

<!DOCTYPE html>
<title>Ilabharatham</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />

<script src="scripts/elegant-press.js" type="text/javascript"></script>

<script type="text/javascript">

<!--

var image1=new Image()

image1.src="images/banner.gif"

var image2=new Image()

image2.src="images/banner2.gif"

//-->

</script>

</head>

<body>

<div class="main-container">

  <header>

    <center>

    

    <img src="images/banner.gif" name="slide" width="960" height="200"  alt="banner">

    <script>

<!--

var step=1

function slideit(){

if (!document.images)

return

document.images.slide.src=eval("image"+step+".src")

if (step<2)

step++

else

step=1

setTimeout("slideit()",2500)

}



slideit()



//-->



</script></center>



  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Tel: 9655511198 | Mail: <a href="mailto:info#ilabharatham.in">info@ilabharatham.in</a></p></div>
    <div class="tagline_right">
      <form action="register.html">
        <fieldset>
          <input type="submit" name="go" id="go" value="Register" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li class="active"><a href="index.html">Homepage</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="activities.html">Activities</a></li>
      <li><a href="events.html">Events</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="database.php">Database</a></li>
      <li class="last"><a href="contact.html">Contact</a></li>    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
  <div id="mySlides">
    <div id="slide1">    
        <img src="images/slider1.jpg" alt="Slide" width="960" height="350"/>
        <span><b class="slideheading">Louis Braille School</b><br />This is the only Govt blind school in Chennai<a href="profile.html" title="Coolness" class="readmore">Read More!</a></span>
	</div>    	
    <div id="slide2">
        <img src="images/slider2.JPG" alt="Slide" width="960" height="350"/>
        <span><b class="slideheading">A child trying to hear us </b><br />even though we are so advanced in technologies <br/>we are still unable to help these innocent ones.</span>
    </div>   
	<div id="slide3">
        <img src="images/slider3.jpg" alt="Slide" width="960" height="350"/>
        <span><b class="slideheading">The right to get educated</b><br />Our country still has so many young children who are still uneducated but have the urge for Learning.
    </div>
</div>

<div id="myController">
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
</div>

<section class="jFlowPrev"><div></div></section>
<section class="jFlowNext"><div></div></section>
<br />
<br />

    <article class="box" id="home_featured21">
      <div class="block"><h2>Who Are We</h2>
        <p> Ilabharatam was born not just out of curiosity but out off concern to help the under priviledged people in the society.Its emphasis is to ensure that every child gets a proper life with good benefits. It strives for the welfare of the differently abled children and nurtures them in all possible ways so as to make them independent. <br />
<a href="about.html" class="read_more">Read More</a> 
</p>
      </div>
      <div class="block">
        <h2>Goals</h2>
        <br /><br />
        <ul id="list">
        <li>To unite the students together for a common cause to help the needy and to bring am idea of nationalism.</li>
        <li>To work towards making India a country with zero poverty.</li>
        <li>We not only help the poor by helping them for their basic needs but also educate them so that they can be independent of it.</li>
       
        </ul>

      </div>
      <div class="block last"><h2>What We Do</h2>
        <p>Ilabharatham focuses and satisfies the needs of the people who are in search of basic requirements and in view of providing education to the students.
        <br/>Ilabharatham will also be a solution for those who are in search of any help <br />
<br />
<a href="activities.html" class="read_more">Read More</a></p>
      </div>
      <div class="clear"></div>
    </article>
    
 </div>
 

</div> 
<br /><br />

     
<div class="main-container">
 </div>
 
<div class="callout"> 
    <div class="calloutcontainer"> 
        <div class="container_12"> 
            <div class="grid"> 
                 <article class="footbox">
      <h2>Quotes</h2>
      <ul>
        <li><a href="#">Failure is the steping stones for sucess</a><br />
        
		</li>
        <li><a href="#">Helping Hands Are Holier Than Praying Minds</a><br />
       
        </li>
         <li><a href="#">If You Light A Lamp For Somebody It Will Also Brighten Your Path</a></li>     
       </ul>
    </article>
    <article class="footbox last">
      <h2>Its Time To Relieve Them</h2><br/>
      <a href="images/q3.jpg" data-gal="prettyPhoto[gallery]" title="Children Being Forced to work for their Survival">
      <img src="images/q3.jpg" width="215" height="190" alt="child labour"></a> </article>
  <article class="latestgallery">
      <h2>Latest Work</h2>
      <ul>
		<li><a href="images/footer/q4.jpg" data-gal="prettyPhoto[gallery]" title="Child holding a barille book"><img src="images/footer/q4.jpg" alt="" width="150" height="95" /></a></li>
        <li><a href="images/footer/q1.jpg" data-gal="prettyPhoto[gallery]" title="young gifted children havin a shower in the open"><img src="images/footer/q1.jpg" alt=""  width="150" height="95" /></a></li>
        <li><a href="images/footer/q2.jpg" data-gal="prettyPhoto[gallery]" title="Writing using braille"><img src="images/footer/q2.jpg" alt=""  width="150" height="95" /></a></li>
        <li><a href="images/footer/q3.jpg" data-gal="prettyPhoto[gallery]" title="Students of Louis Braille School Praying"><img src="images/footer/q3.jpg" alt=""  width="150" height="95" /></a></li>       
      </ul>
    </article>
    
            <div class="clear"></div> 
        </div> 
        <div class="calloutoverlay"></div> 
        <div class="calloutoverlaybottom"></div> 
    </div> 
</div> </div> 
 <footer>
    <p class="tagline_left">Copyright &copy; 2012 - All Rights Reserved - <a href="http://www.ilabharatham.in">ilabharatham.in</a></p>
    <p class="tagline_right">Design by <a href="mailto:vishnu667@gmail.com" title="Pritesh Gupta" target="_blank" >Vishnu Prasad</a></p>
    <br class="clear" />
  </footer>

<br />
<br />

</body>
</html>