float positionX=0;

PImage a;

a = loadImage("../asgns/fish1.jpg");

b = loadImage("../asgns/fish2.jpg");

c = loadImage("../asgns/fish3.jpg");

d = loadImage("../asgns/fish4.jpg");

e = loadImage("../asgns/fish5.jpg");

f = loadImage("../asgns/fish6.jpg");

g = loadImage("../asgns/fish7.jpg");

h = loadImage("../asgns/fish8.jpg");

i = loadImage("../asgns/fish9.jpg");

j = loadImage("../asgns/fish10.jpg");

void setup()
{
   size(500,300); 
   
   frameRate(5);

}

void draw()
{
	background(224,255,255);
   
    stroke(139,125,123);
	
	fill(139,137,137);
 
	ellipse(0+positionX, 150, 80, 40); 
	
	positionX ++;
    
    if(positionX>width)
    {
       positionX=0;
	   
    }  
	
    image(a, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(b, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(c, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(d, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(e, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(f, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(g, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(h, 0+random(10,500),0+random(10, 500), 70, 70);
    
	image(i, 0+random(10,500),0+random(10, 500), 70, 70);
	
	image(j, 0+random(10,500),0+random(10, 500), 70, 70);

}