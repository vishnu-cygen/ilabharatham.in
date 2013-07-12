<!DOCTYPE html>
<title>Database</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<script src="scripts/elegant-press.js" type="text/javascript"></script>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
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
      <li><a href="events.html">Events</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li class="active"><a href="database.php">Database</a></li>
      <li class="last"><a href="contact.html">Contact</a></li>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
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
      <li class="current"><a href="database.php">Database</a></li>
    </ul>
</div>
<br />
<br />

    <div class="box">
        <h1>Database</h1><br/>
     <form>
       <p>
  <label >
    <select name="users" onChange="showUser(this.value)">
      <option value="vlntr=1">Volunteers</option>
      <option value="organiser=1">Co-ordinators</option>
      <option value="bdnr=1">Blood Donors</option>
      
      </select>
    :Choose Your Options</label>
  </p>
       <p><br/>
       </p>
     </form>
     
     <div id="txtHint"><?php
     
     
      echo "<font size=+1><table width=500 border=2 cellspacing=1 cellpadding=2>
          <tr>
            <th width=7% scope=col>ID</th>
            <th width=46% scope=col>Name</th>
            <th width=25% scope=col>Current City</th>
            <th width=22% scope=col>Blood Group</th>
          </tr>";
          
$username="ilabh9qc_view";
$password="view@123";
$database="ilabh9qc_details";

$con=mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM info WHERE vlntr=1";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
while ($i < $num) {
$field1=mysql_result($result,$i,"id");
$field2=mysql_result($result,$i,"fnm");
$field3=mysql_result($result,$i,"lnm");
$field4=mysql_result($result,$i,"bloodgrp");
$field5=mysql_result($result,$i,"ccity");

echo "<tr><td>$field1</td><td>$field2 &nbsp; $field3</td><td>$field5</td><td>$field4</td></tr>";
$i++;
}  
		  
		  
		  
      echo "</table></font>";
      
      
      ?></div>
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