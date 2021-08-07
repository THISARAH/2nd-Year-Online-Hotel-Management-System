function form()
{
var fn=document.forms["regform]["firstname"].value;
var ln=document.forms["regform]["lastname"].value;
var gn=document.forms["regform]["gender "] ;
var mv=document.forms["regform]["movie "] ;

if(fn==null||fn=="")
{
alert("First name cannot be blank");
return false;
}
else if(ln==null||ln=="")
{
alert("Last name cannot be blank");
return false;
}
else if((gn[0].checked==false)&&(gn[1].checked==false))
{
alert("Please enter your gender");
return false;
}
else if(mv.selectedIndex=0)
{alert("Enter Movie");
return false;
}
}
