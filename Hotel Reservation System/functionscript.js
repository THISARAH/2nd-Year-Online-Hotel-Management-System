function loadmydata(name){
	if(name=='button1'){
		document.getElementById("img1").src="images/e1a84f4bf1ade0d8aeddb54ac616d33b.jpg";
		document.getElementById("para").innerHTML="Our themes";
		document.getElementById("para2").innerHTML="A fairy tale theme is sometimes referred to as a Cinderella wedding. Weddings with this theme incorporate elements that will make the couple, and their guests, feel like they are a prince and princess. Horse-drawn carriages, rhinestone-studded ballgowns, orchestra music, and more are all frequently incorproated into this wedding. Sometimes pop culture comes into play through Disney songs and invitations.";
		document.getElementById("para3").innerHTML="Fairy Tale Theme";
		
		
		document.getElementById("imge1").src="images/unnamed.jpg";
		document.getElementById("parag2").innerHTML="Spring and summer are the perfect season for hosting a garden themed wedding. The wedding might be inside a greenhouse, at a park, in a gazebo, or at a botanical garden. Backyard weddings aren't out of place, either. Butterflies, flowers, and greenery are front and center with this theme. You could even add vintage or Victorian elements, depending on your personal wedding style.";
		document.getElementById("parag3").innerHTML="Garden Theme";
		
		document.getElementById("image1").src="images/beach-wedding-theme-shutterstock_673824292.jpg";
		document.getElementById("paragr2").innerHTML="A beach themed wedding is often dictated by the location: the beach of a lake, river, ocean, or sea. Starfish, sandcastles, and seashells are prominently displayed throughout the spaces. Lightweight netting and tulle with tropical centerpieces and flowers help bring the beach to an indoor reception at your destination beach wedding.";
		document.getElementById("paragr3").innerHTML="Beach Theme";
	}
	else if(name='button2'){
		document.getElementById("img1").src="images/unnamed.jpg";
		document.getElementById("para2").innerHTML="Spring and summer are the perfect season for hosting a garden themed wedding. The wedding might be inside a greenhouse, at a park, in a gazebo, or at a botanical garden. Backyard weddings aren't out of place, either. Butterflies, flowers, and greenery are front and center with this theme. You could even add vintage or Victorian elements, depending on your personal wedding style.";
		document.getElementById("para3").innerHTML="Garden Theme";
	}
	else if(name='button3'){
		document.getElementById("img1").src="images/w1";
		document.getElementById("para").innerHTML="BLA BLA BLA BLA";
	}
	else if(name='button4'){
		document.getElementById("img1").src="images/w1";
		document.getElementById("para").innerHTML="BLA BLA BLA BLA";
	}
	else if(name='button5'){
		document.getElementById("img1").src="images/w1";
		document.getElementById("para").innerHTML="BLA BLA BLA BLA";
	}
	else{
		alert("invalid");
	}
}


