<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/lab1.css">

<title>
BTC640
</title>
</head>
<body>
<?php include '../labs/menu.php'; ?>

</br>

<h1>animate.pde</h1>

<p id="para">

float positionX=0;
</br>
PImage a;
</br>
a = loadImage("../asgns/fish1.jpg");
</br>
b = loadImage("../asgns/fish2.jpg");
</br>
c = loadImage("../asgns/fish3.jpg");
</br>
d = loadImage("../asgns/fish4.jpg");
</br>
e = loadImage("../asgns/fish5.jpg");
</br>
f = loadImage("../asgns/fish6.jpg");
</br>
g = loadImage("../asgns/fish7.jpg");
</br>
h = loadImage("../asgns/fish8.jpg");
</br>
i = loadImage("../asgns/fish9.jpg");
</br>
j = loadImage("../asgns/fish10.jpg");
</br>
void setup()</br>
{</br>
   size(500,300); 
   </br>
   frameRate(5);
</br>
}</br>

void draw()</br>
{</br>
	background(224,255,255);
   </br>
    stroke(139,125,123);
	</br>
	fill(139,137,137);
 </br>
	ellipse(0+positionX, 150, 80, 40); 
	</br>
	positionX ++;
   </br> 
    if(positionX>width)</br>
    {</br>
       positionX=0;</br>
    }  </br>
	
    image(a, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(b, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(c, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(d, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(e, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(f, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(g, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(h, 0+random(10,500),0+random(10, 500), 70, 70);
    </br>
	image(i, 0+random(10,500),0+random(10, 500), 70, 70);
	</br>
	image(j, 0+random(10,500),0+random(10, 500), 70, 70);
</br>
}

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
