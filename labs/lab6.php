<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/lab1.css">
<script src = "processing.js"></script>
<title>
BTC640
</title>
</head>
<body>

<?php
include('menu.php');
?>

</br>
</br>

<h1>Picture using processing.js</h1>

<center>
<p id="para">

<b> I have tried to make a house using processing.js</br>
The house in the first picture is the one I have made,</br>
whereas the house in the second picture is taken from internet.</br></br>
</b>

Created picture
</br>

<canvas data-processing-sources="sketch.pde"></canvas>

</br></br>

Original image used as reference

</br>
<img src="../media/house.png" alt="house" height="200" width="200">
</br></br>

<b> <u>sketch.pde</u></b></br>
void setup()
 {</br>
  size(280, 280);</br>
  background(255,240,245);</br>
  stroke(#8B008B);</br>
  fill(180,82,205);</br>
  triangle(135,20,80,120,180,120);</br>
  stroke(#00CED1);</br>
  fill(0,134,139);</br>
  rect(80,120,100,120);</br>
  stroke(#FF7F00);</br>
  fill(255,127,0);</br>
  rect(100,150,60,80);
}</br>
</p>

</center>
</br>


<p id="links">

<a href="../labs/oath.php">Student oath</a>

</p>
<p id="time" style="padding-top:30px;">

<script type='text/javascript'>
							dt=new Date(document.lastModified); 
							document.write("<mark> This page was last modified on " + 
											dt.toLocaleString() + "</mark>") 
						</script> 

</p>
</body>
</html>
