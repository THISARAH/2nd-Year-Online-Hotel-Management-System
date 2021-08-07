function loadData(name){

    if(name=="button1")
    {
        document.getElementById("image1").src="images/birthday.jpg";
        document.getElementById("paragraph1").innerHTML= "Book your any kind of birthday parties in our hotel.We have plenty of food menus, event itmes, cake designs. You can resrve any of them.  Look no further than our birthday party planner team We have the experience and the dedication to deliver your perfect event. We can serve your requirements as well. Just book the hall & enjoy your birthday party.We will be happy to decorate a special table where you can celebrate your special day with friends and family. ";
		document.getElementById("para").style.visibility = "hidden";
		document.getElementById("myImg").style.visibility = "hidden";
	}

    else if(name=="button2")
{
    document.getElementById("image1").src="images/get.jpg";
    document.getElementById("paragraph1").innerHTML= "Please do come on a get together party to get back to the old fun with high spirits. Mark it memorable with your presence! You can reserve your event much you like. We have special kind event handlers for your event. We have some games to play and enjoy with your mates. We have 200 seating capacity in our hall. Also we have buffet for your event. We have attractive photo booth, You can capture your memories. Please reserve and enjoy your get together.We will be happy to decorate a special table where you can celebrate your special day with friends and family."
	document.getElementById("para").style.visibility = "hidden";
		document.getElementById("myImg").style.visibility = "hidden";

}



    else if(name=="button4")
    {
        document.getElementById("image1").src="images/anniver.jpg"
        document.getElementById("paragraph1").innerHTML=" A lifetime of loving, caring, and sharing. This anniversary celebration is designated for more milestone moments, like your 20th, 25th, or 50th . You can celebrate your anniversary with attractive prices in Sachie Hotel. Reserve a anniversary celebreation and Reconnect your partner and realtives as well . We have ample of options to colorfull your event. We provide free musical band for your event. Come and enjoy!.We will be happy to decorate a special table where you can celebrate your special day with friends and family."

		document.getElementById("para").style.visibility = "hidden";
		document.getElementById("myImg").style.visibility = "hidden";
		

    }

    else if(name=="button3")
    {
        document.getElementById("image1").src="images/party.jpg"
        document.getElementById("paragraph1").innerHTML=" We will be happy to decorate a separate area in the hotel where you can celebrate your special occasion with friends and family."
	
		document.getElementById("para").style.visibility = "hidden";
		document.getElementById("myImg").style.visibility = "hidden";

    }


    else{
        alert("invalid");
    }
}

function priceLoop(){
	
	var event=["Birthday Parties (included foods) approximately for 200 persons  =   LKR 150,000","Get Together (included foods) approximately for 200 persons   =   LKR 80,000","Aniversary Parties (included foods) approximately for 200 persons   =   LKR 80,000" , "special celebrate approximately for 50 persons   =   LKR 60,000"];
	var i;
	var length=event.length;
	var txt="";
	
	for(i=0; i<length; i++){
		txt+=event[i]+"<br/>";
	}
	
	document.getElementById("image1").src="images/12.jpg";
	document.getElementById("paragraph1").innerHTML=txt;
	
	document.getElementById("para").style.visibility = "hidden";
	document.getElementById("myImg").style.visibility = "hidden";
}

 