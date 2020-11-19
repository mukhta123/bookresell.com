function valid()
{
    var y=document.getElementById('user').value;
    var n=document.getElementById('pass').value;
    var m=document.getElementById('mob').value;
    var e=document.getElementById('email').value;

    
    var h="@" 

    var t='_' 
    var s= y[0];

    var g=Number

 if(y=='') 

 { 
    document.getElementById('i1').innerHTML =  '*this field not should be blank'; 

 }  
else if(y[0]==h || y[0]==t || y[0]==(1||2||3||4||5||6||7||8||9||0))
{
    document.getElementById('i1').innerHTML =  'username should not start with @ ,_, or number'; 

}
else
{
    document.getElementById('i1').innerHTML =  ' '; 
}
if(n=="")
{
     document.getElementById('i2').innerHTML =  '*this field not should be blank';   
}

else if(n.length<8)
{
    document.getElementById('i2').innerHTML =  'password size not less than 8'; 

}
else
{
    document.getElementById('i2').innerHTML =  ' '; 
 
}
if(e=="")
{
     document.getElementById('i3').innerHTML =  '*this field not should be blank'; 
}
else
{
    document.getElementById('i3').innerHTML =  ' '; 
 
}
if(m==" ")
{
     document.getElementById('i4').innerHTML =  '*this field not should be blank';  
}
else if(m==NaN)
{
     document.getElementById('i4').innerHTML =  'mobile number contain only digits';    
}
else if(m.length!=10)
{
     document.getElementById('i4').innerHTML =  'mobile number accept excat 10 digits'; 

}
else
{
    document.getElementById('i4').innerHTML =  ' '; 
}
                
     

}