
var kpleft = document.getElementById('KPleft').innerHTML;
var kpenter = document.getElementById('KPused').innerHTML;
var poop;
function ajax(val,cfc)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  poop=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  poop=new ActiveXObject("Microsoft.XMLHTTP");			//
  }														//

poop.onreadystatechange= cfc;							//
poop.open("GET",val,true);
poop.send();

}
  ///////////////////////////////////////////////////////
function Changelvl(action, sknumber)
{
var kpleft = document.getElementById('KPleft').innerHTML;
var kpenter = document.getElementById('KPused').innerHTML;

ajax("Changelvl.php?a="+action+"&sk="+sknumber+"&kpleft="+kpleft+"&kpenter="+kpenter, function()
  {
		  if (poop.readyState==4 && poop.status==200)
		    {		 	
		
			 document.getElementById(sknumber).innerHTML = poop.responseText.substr(4);	
			 document.getElementById('KPleft').innerHTML = poop.responseText.substr(2,2);	 
			 document.getElementById('KPused').innerHTML = poop.responseText.substr(0,2);	
		
			//document.getElementById('testing').innerHTML = poop.responseText;
		    }
		  }); 
}
/////////////////////////////////////////////////////////
function ShowSkill(val, lav)
{
if(lav == 1){
//document.getElementById("boss").innerHTML  = val;
ajax("skillDP.php?q="+lav+"&sk="+val, function()
  {
  if (poop.readyState==4 && poop.status==200)
    {
    
    	//'b'+val
	 	document.getElementById('b'+val).innerHTML= poop.responseText;
    }
  });

timee = setTimeout(function(){ajax("skillDP.php?q="+2+"&sk="+val, function()
  {
  if (poop.readyState==4 && poop.status==200)
    {
    
    	//'b'+val
	 	document.getElementById('b'+val).innerHTML= poop.responseText;
    }
  })},5000);


}
else if(lav ==2)
//document.getElementById("boss").innerHTML  = "";
ajax("skillDP.php?q="+lav+"&sk="+val, function()
  {
  if (poop.readyState==4 && poop.status==200)
    {
    
    	//'b'+val
	 	document.getElementById('b'+val).innerHTML= poop.responseText;
    }
  });

}

function Reset(){
var i = 1;
while( i < 25){

ajax("Reset.php?q="+i, function()
  {
  if (poop.readyState==4 && poop.status==200)
    {
    
    	//'b'+val
	 	document.getElementById(i).innerHTML= poop.responseText;
    }
  });
  i++;


}


  
}


function DPskill(val, kal)
{
if(kal == 1){
var obj =  document.getElementById('b'+val);
obj.style.visibility='visible';
}
else if(kal == 2){

	 var obj= document.getElementById('b'+val);
obj.style.visibility='hidden';
}
}