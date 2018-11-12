<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>


<link rel="stylesheet" href="style1.css" type="text/css"></link>
<link rel="stylesheet" href="css/bootstrap.css"></link>
<link rel="stylesheet" href="css/bootstrap.min.css"></link>
<link rel="stylesheet" href="style5.css" type="text/css"></link>


<head>
<title>Dance academy</title>
</head>

<body>
<div class="wrapper" style="height:1500px; background-repeat: no-repeat; background:url(pink.jpeg); 
 background-size: cover;"> 

<div class="header">

<div class="logo">

<img src="logo.png"></img>

</div>

<div class="navigation">
<nav>
<ul>
<li><a href="#">Home</a>
 <ul>
        <li><a href="about.html">About Us</a></li>
		<li><a href="#teachers">Teaching Staff</a></li>
		 <li><a href="dance.html">Home page</a></li>
		
		<!--<li><a href="#">Infrastructure</a></li>-->
         
		 </ul>
  </li> 
   
   <li><a href="my.php">Register</a></li>
   
   <li><a href="login.php">Login</a></li>
  


<li><a href="gallery1.php">Gallery</a></li>
<li><a href="sectioncontact.php">Contact-us</a></li>
<li><a href="form4.html">Video</a></li>

</ul>
</nav>
</div>

</div>

<div style="font-size:40px; background-image:URL(pink.jpeg); background-repeat:repeat;  ">

<table style="height:500px; width:1000px; margin-top:150px" align="center">
<tr>
 <th  style='font-family: Comic Sans MS; text-shadow:6px 6px green; color:white'><b>Branch name</b></th>
 <th style='font-family: Comic Sans MS; text-shadow:6px 6px green; color:white'><b>Choreographers</b></th>
  <th style='font-family: Comic Sans MS; text-shadow:6px 6px green; color:white'><b>Mobile No</b></th>
</tr>

<xsl:for-each select="c1/contact">
<tr style="font-family: Helvetica; color:white; text-shadow:2px 2px darkblue; size:40px">
<td><xsl:value-of select="branch"/></td>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="mob"/></td>


<!--<div style="background-color:teal; color:white; padding:4px">
<span style="font-weight:bold"><xsl:value-of select="name"/>
</div>-->
</tr>
</xsl:for-each>

</table>

</div>

<div class="footer" style="margin-top:495px">

<div class="footer1">

<h3 style="margin-top:80px; ">Class-Centers</h3>
<ul style="display:inline; list-style:none">
<li><h4>Mumbai</h4></li>
<li><h4>Delhi</h4></li>
<li><h4>Chennai</h4></li>
<li><h4>Kolkata</h4></li>
</ul>

</div>


<div class="footer2">
<h3 style="margin-top:100px; ">Choreographers</h3>
<ul>
<li><h4>Remo</h4></li>
<li><h4>Terrence</h4></li>
<li><h4>K.K</h4></li>
<li><h4>A.D</h4></li>
</ul>
</div>

<div class="footer3">
<h3 style="margin-top:120px; ">Related-links</h3>
<ul>
<li><a href="#"><h4>dance-academy-mumbai</h4></a></li>
<li><a href="#"><h4>dance-academy-delhi</h4></a></li>
<li><a href="#"><h4>dance-academy-chennai</h4></a></li>
<li><a href="#"><h4>dance-academy-kolkata</h4></a></li>
</ul>
</div>

<div class="footer4">
<h3 style="margin-top:140px; ">Contact-us</h3>
<ul>
<li><h4>0253-226445</h4></li>
<li><h4>a@gmail.com</h4></li>
<li><h4>Fax no:225-33456</h4></li>
<li><h4>www.danceac.com</h4></li>
</ul>
</div>

</div>
</div>
</body>
</html>

</xsl:template>
</xsl:stylesheet>
