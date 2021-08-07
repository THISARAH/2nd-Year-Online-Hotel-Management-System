function form()
{
var fn=document.forms["regform]["fname"].value;
var em=document.forms["regform]["email"].value;
var tm=document.forms["regform]["time "] ;
var mv=document.forms["regform]["movie "] ;

if(fn==null||fn=="")
{
alert("First name cannot be blank");
return false;
}
else if(em==null||em=="")
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
} alert("hello");
