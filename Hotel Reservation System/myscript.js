function loadData(name){
	if(name == "button1"){
	document.getElementById("img1").src = "images/unnamed.jpg";
	document.getElementById("img2").src = "images/91.jpg";
	document.getElementById("para").innerHTML = "single room price:2000/= per day <br> attach bathroom available <br> The view from the rooms is greenish and relaxing. You can see the tea estate and surrounded mountains from the balcony. ";
	}else if(name == "button2"){
	document.getElementById("img1").src = "images/double room2.jpg";
	document.getElementById("img2").src = "images/double room1.jpg";
	document.getElementById("para").innerHTML = "double room price:5000/= per day <br> attach bathroom available <br> The view from the rooms is greenish and relaxing. You can see the tea estate and surrounded mountains from the balcony.";
	}else if(name == "button3"){
	document.getElementById("img1").src = "images/triple-room-1.jpg";
	document.getElementById("img2").src = "images/triple 1.jpg";
	document.getElementById("para").innerHTML = "triple room price:10000/= per day <br> attach bathroom available <br> The view from the rooms is greenish and relaxing. You can see the tea estate and surrounded mountains from the balcony.";
	}else if(name == "button4"){
	document.getElementById("img1").src = "images/family-room-2.jpg";
	document.getElementById("img2").src = "images/family room1.jpg";
	document.getElementById("para").innerHTML = "family room price:15000/= per day <br> attach bathroom available <br>The view from the rooms is greenish and relaxing. You can see the tea estate and surrounded mountains from the balcony.";
	}
	
		
}