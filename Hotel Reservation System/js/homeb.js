function loadData(name){

    if(name=="button1")
    {
        document.getElementById("paragraph1").innerHTML= "We have 3 Different Banquets. These are Rainbow , Princes and Diamond. If you need beach wedding we can organize it also"
		
		document.getElementById("image1").src="images/h8.jpg";
		document.getElementById("image2").src="images/h10.jpg";
		document.getElementById("image3").src="images/h12.jpg";

	}

    else if(name=="button2")
	{
		document.getElementById("paragraph2").innerHTML= "Specially Birthday Parties and Garden type parties, We can arrange for you"
		document.getElementById("image4").src="images/hb1.jpg";
		document.getElementById("image5").src="images/hb2.jpg";
	}
	
	 else if(name=="button3")
	{
		document.getElementById("paragraph3").innerHTML= "Annual General Meetings and Board Meetings"
		document.getElementById("image6").src="images/ct1.jpg";
		document.getElementById("image7").src="images/ct2.jpg";
	}
	
	 else if(name=="button4")
	{
		document.getElementById("paragraph4").innerHTML= "And also we have a indoor pool"
		document.getElementById("image8").src="images/p5.jpg";
	}
	
	 else if(name=="button5")
	{
		document.getElementById("paragraph5").innerHTML= "Public Bar for weddings and mini bar is there 24x7"
		document.getElementById("image9").src="images/bt1.jpg";
		document.getElementById("image10").src="images/bt2.jpg";
		
	}
	
	 else if(name=="button6")
	{
		document.getElementById("paragraph6").innerHTML= "Curry Leaf restaurant and Graze Kitchen"
		document.getElementById("image11").src="images/rt2.jpg";
		document.getElementById("image12").src="images/rt1.jpg";
	}

    else{
        alert("invalid");
    }
}