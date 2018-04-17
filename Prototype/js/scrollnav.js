function Scroll(){
	var top	= document.getElementById('nav');
	var ypos = window.pageYOffset;
	if(ypost > 587 ){
		top.style.opacity = "0";
	} else {
		top.style.opacity ="1";
	}
	window.addEventListener("scroll",Scroll);
}