<?php
if (isset($_REQUEST['email']))
  { 
  $email = $_POST['email'] ;
  $subject = $_POST['name'] ;
  $message = $_POST['comment1'] ;
  mail("info@ilabharatham.in", $subject." ".$email,
  $message, "From:event@ilabharatham.in");
  echo "Thank you for using our mail form";
  }
?>




<!DOCTYPE html>
<title>Events</title>

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
      <li><a href="index.html">Homepage</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="activities.html">Activities</a></li>
      <li class="active"><a href="events.html">Events</a></li>
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
   <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="index.html">Homepage</a></li>
      <li>&#187;</li>
      <li class="current"><a href="events.html">Events</a></li>
    </ul>
</div>
<br />
<br />

    <div class="box">
           <div class="content">
        <h1>Fisrt meet</h1>
        <img class="imgr" src="images/events/e1.JPG" alt="" width="150" height="150" />
        <p><div><div class="date"><span class="day">25</span> <span class="month">Mar</span> <span class="year">2012</span></div>


</div>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+2">I</font>labharatham this is our contribution to Dr.Kalam's dream <b>India 2020</b>.We Youngsters ,even just as students think that we are responsible for The Developement ,The Future and also To Help the needy and bring our country from being an developing country to one of the Developed country.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+2">W</font>e have decided to join together in our place of enlightment the Louis Braille School for The Gifted.</p>
<div class="clear"></div>
        <img class="imgl" src="images/events/d1.jpg" alt="" width="150" height="150" />
        <p><font size="+2">W</font>e the volunteers have have decided to organise our first meet here in this School. This is going to be an MileStone for us the young minds of our country to start taking over the iniative for the developement our country. Which we think should start with home,as for Ilabharatham home has and will always be The Louis Braille School in Poondhamale. We have decided to help the children there by providing them our time and skills in different departments to help these children become independent from organisations like ourselves. </p>
    <br />
<br />
  <h5>Write A Comment</h5>
        <div id="respond">
          <form action="event.php" method="post">
            <p><label>
              <span id="sprytextfield2">
              <input type="text" name="name" id="name" size="22">
              <span class="textfieldRequiredMsg"></span></span>
<label for="name"><small>Name (required)</small></label>
            </p>
            <p>
            <span id="sprytextfield1">
            <label>
              <input type="text" name="email" id="email2" value="" size="22">
              Mail (required)</label>
            <span class="textfieldRequiredMsg"></span><span class="textfieldInvalidFormatMsg"></span></span>
            
            

            </p>
            <p><span id="sprytextarea1">comment
                <textarea name="comment1" id="comment1" cols="45" rows="5"></textarea>
                <span class="textareaRequiredMsg"></span></span>
              
              <label for="comment" style="display:none;"><small>Comment (required)</small></label>
            </p>
            <p>
              <input name="submit" type="submit" id="submit" value="Submit Form" />
              &nbsp;
              <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
            </p>
          </form>
        </div>

      </div>
      
     <div class="sidebar">
       <div id="featured">
          <ul>
            <li>
              <h5>Cricket</h5>
              <p class="imgholder"><img src="images/widgets/w2.jpg" width="220" height="100" alt="" /></p>
              <p><font size="+2">C</font>ricket is tthe game where all we know about is the stardom and the winners, but these young players have proven much more than what we can imagine.Just with the help of their hearing senses they are able to find the ball and go for their runs.The next time you find the nationals for the gifted hope you find your cricket inspiration among these young men.</p>

              
            </li>
          </ul>
        </div>
        <div id="featured">
          <ul>
            <li>
              <h5>Braille</h5>
              <p class="imgholder"><img src="images/widgets/w1.jpg" width="220" height="100" alt="" /></p>
              <p><font size="+2">T</font>he child is using a Braille the pencil and pen for these special ones. Most of us find it difficult to read our daily lessons and do our regular chores. But these children they fell their books and work and put more effort than us to thrive in their fields.</p>

              
            </li>
          </ul>
        </div>
      <div class="clear"></div>
        
      </div>

      
      
      <div class="clear"></div>
    </div>
    
 
 </div>
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


<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>