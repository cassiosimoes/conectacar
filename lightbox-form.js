

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}


// Open the lightbox


function openbox(formtitle, fadin,foto)
{
  	
  var box = document.getElementById('box'); 
  document.getElementById('shadowing').style.display='block';
  document.getElementById("idfoto").value = foto;   


  
  
  if(fadin)
  {
	 gradient("box", 0);
	 fadein("box");
  }
  else
  { 	
    box.style.display='block';
  }  	
}


// Close the lightbox

function closebox()

{
	
	id=document.getElementById("idfoto").value;
	if (id==1){
	document.getElementById("foto1").src = "fotos/foto1.jpg";
}
if (id==2){
	document.getElementById("foto2").src = "fotos/foto2.jpg";
}
if (id==3){
	document.getElementById("foto3").src = "fotos/foto3.jpg";
}
   document.getElementById('box').style.display='none';
   document.getElementById('shadowing').style.display='none';
}



