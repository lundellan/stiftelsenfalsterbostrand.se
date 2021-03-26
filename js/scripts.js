
var count = 0;

function nextImage() {
	count = (count+1) % 15;	
	setImage()
}

function previousImage() {
	count = (count-1) % 15
	if (count < 0) { count = 14 }
	setImage()
}

function setImage() {
    var images = ["./wp-content/uploads/2020/09/1-2.jpg", "./wp-content/uploads/2020/09/2-2.jpg", "./wp-content/uploads/2020/09/3-2.jpg", "./wp-content/uploads/2020/09/4-2.jpg", "./wp-content/uploads/2020/09/5-2.jpg", "./wp-content/uploads/2020/09/6-2.jpg", "./wp-content/uploads/2020/09/7-2.jpg", "./wp-content/uploads/2020/09/8-2.jpg", "./wp-content/uploads/2020/09/9-2.jpg", "./wp-content/uploads/2020/09/10-2.jpg", "./wp-content/uploads/2020/09/11-2.jpg", "./wp-content/uploads/2020/09/12-2.jpg", "./wp-content/uploads/2020/09/13-2.jpg", "./wp-content/uploads/2020/09/14-2.jpg", "./wp-content/uploads/2020/09/15-2.jpg"];
	
	document.getElementById("leftImage").src = images[count-1];
	document.getElementById("centerImage").src = images[count];
	document.getElementById("rightImage").src = images[count + 1];
	
	
	if (count == 0) {
		document.getElementById("leftImage").src = images[images.length-1];
	} else if (count == images.length-1) {
		document.getElementById("rightImage").src = images[0];
	}
}

function resize()	{
	w = document.body.clientWidth;
	var targetWidth = 767;
	if ( w >= targetWidth) {     
		document.getElementById("mobileNav").style.display = "none";
	}
}