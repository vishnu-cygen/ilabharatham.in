<!DOCTYPE html>
<title>About Us</title>
<?php
$con = mysql_connect("localhost","ilabh9qc_reg", "register");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ilabh9qc_details", $con);

$req=mysql_query("INSERT INTO info (fnm,lnm,pno,emailid,ccity,occup,coll,dept,passout,bloodgrp,add1,add2,add3,city,pincode,bdnr,vlntr,updt,gender,year,month,date)
VALUES('$_POST[fnm]','$_POST[lnm]','$_POST[pno]','$_POST[emailid]','$_POST[ccity]','$_POST[occup]','$_POST[coll]','$_POST[dept]','$_POST[passout]','$_POST[bloodgrp]','$_POST[add1]','$_POST[add2]','$_POST[add3]','$_POST[city]','$_POST[pincode]','$_POST[bdnr]','$_POST[vlntr]','$_POST[updt]','$_POST[gender]','$_POST[year]','$_POST[month]','$_POST[date]')");
if($req=0)
echo "error in registering please check your email address or your already registered";
else
echo"<H1>thanks for registering</H1>";
mysql_close($con);
?>





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
      <li class="active"><a href="about.html">About Us</a></li>
      <li><a href="activities.html">Activities</a></li>
      <li><a href="events.html">Events</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="database.php">Database</a></li>
            <li class="last"><a href="contact.html">Contact</a></li>
    </ul>
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
      <li class="current"><a href="about.html">About Us</a></li>
    </ul>
</div>
<br />
<br />

    <div class="box">
        <h1>Introduction</h1>
        <p><div>
        <h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size="+2">I</font>LA BHARATHAM was born for making the nation a better place to live in, by extending our support to the needy from different horizons. Our emphasis is to assist the needs of the children in a right way, helping them to flourish in their talents. We value the operational freedom which stems from being a non-profitable trust which is independent of any religious or political affiliation and which does not discriminate on the basis of race, gender, ethnicity, age, religion or politics.</p>

       <br/><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Though started by a bunch of youngsters, we believe that Every journey starts with a first step, trying to make a change in the nation and an impact only when we are supported and encouraged by the people around us with the skill that they profess so as to educate the children, by giving out their valuable time to express their love.We are also in need of your support ,time, money, skills and so on as we all know "Unity Is Strength" always so as to fulfill our mission.</p></h5>
        
</div></p>
		
    <div class="clear"></div>

<br />
      <h1>Mission</h1>
        <p><div>
        <h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+2">T</font>o unite the younger generation for a noble cause and to increase the awareness among people, encourage them to provide a helping hand and the imbalance in todays rapidly changing world needs to be put back into equilibrium.

</p></h5>
        
</div></p>
		
    <div class="clear"></div>

<br />

<h1>Vision</h1>
        <p><div>
        <h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size="+2">I</font>labharatam was born not just out of curiosity but out off concern to help the under priviledged people in the society.Its emphasis is to ensure that every child gets a proper life with good benefits. It strives for the welfare of the differently abled children and nurtures them in all possible ways so as to make them independent.

</p></h5>
        
</div></p>
		
    <div class="clear"></div>

<br />
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

</body>
</html>