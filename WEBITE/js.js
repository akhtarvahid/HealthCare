function ajaxRequest(data,errordata)
{
	var var1 = data.value;
	var vars="email="+var1;
	if(window.XMLHttpRequest)
	{
		a= new XMLHttpRequest();
	}
	else
	{
		a= new ActiveXobject("Microsoft.XMLHTTP");
	}
	a.onreadystatechange = function() 
	{
		if (a.readyState == 4 && a.status == 200)
		{	
			var b=a.responseText;	
			
			if(b==="exist")
			{
				errordata.innerHTML="Email already Exist";
				errordata.style.color="red";
				data.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
			   
			}
			else 
			{
				   errordata.innerHTML= var1+" is available";
				   errordata.style.color="green";
				 
			}				
 		}
	}
	a.open("POST","ajax.php",true);
	a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	a.send(vars);          		 
        	
}


function checkrid(id,eid) 
{
 			var filter = /^([0-9]{2})+\/([A-Z]{2})+\/+([0-9]{3})+$/;
				if(id.value=="")
				{
					eid.innerText= "You can't leave this field empty";
					id.style.borderColor="#900";
					id.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
					return 0;
				}
	    		if (filter.test(id.value)){
					id.parentNode.nextSibling.nextSibling.innerHTML='<img src="ok.png" height="30px" width="30px">';
  		  			eid.innerText= "";
					id.style.borderColor="Green";
					return 1;
				}
				
				else {
						eid.innerText="Roll number should be in this format \"14/CA/609\"";
						id.style.borderColor="#900";
						id.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
						return 0;
					}
}
function checkEmail(email,div) 
{
		 	var filter = /^([\w\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/;
				if(email.value=="")
				{
					div.innerText= "You can't leave this field empty";
					email.style.borderColor="#900";
					email.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
					return 0;
				}
	    		if (filter.test(email.value)){
  		  			div.innerText= "";
					email.parentNode.nextSibling.nextSibling.innerHTML='<img src="ok.png" height="30px" width="30px">';
					
					email.style.borderColor="Green";
					ajaxRequest(email,div);
					return 1;
				}
				
				else 
				{
					email.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
						div.innerText="\"" + email.value +"\""+"  is not valid email";
						email.style.borderColor="#900";
						return 0;
				}	
}
function checkname(pname,errorname)
{
		

	var vname= /^[a-zA-Z]+$/;
	if(pname.value=="")
	{
		errorname.innerHTML="You can't leave this field empty";
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
		pname.style.borderColor="#900";
		return 0;
	}
	if(vname.test(pname.value))
	{
		errorname.innerHTML=" ";
		pname.style.borderColor="Green";
		
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="ok.png" height="30px" width="30px">';
		return 1;
	}
	else
	{
		errorname.innerHTML="Invalid name, Please Enter valid First name";
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
		pname.style.borderColor="#900";
		return 0;
	}
}
function checklname(pname,errorname)
{
		var vname= /^([a-zA-Z\ ])+$/;
	if(pname.value=="")
	{
		errorname.innerHTML="You can't leave this field empty";
		pname.style.borderColor="#900";
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
		return 0;
	}
	if(vname.test(pname.value))
	{
		pname.style.borderColor="Green";
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="ok.png" height="30px" width="30px">';
		errorname.innerHTML=" ";
		return 1;
	}
	else
	{
		errorname.innerHTML="Invalid name, Please Enter valid Last name";
		pname.style.borderColor="#900";
		pname.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
		return 0;
	}
}

function checkdept(id,eid)
{
	if(id.value==-1)
	 {
		 eid.innerHTML="please select your Department";
		 id.style.borderColor="#900";
		 id.parentNode.parentNode.nextSibling.nextSibling.innerHTML='<img src="notok.png" height="30px" width="30px">';
		 return 0;
	 }
	 
	 eid.innerHTML="";
	 id.style.borderColor="Green";

	 id.parentNode.parentNode.nextSibling.nextSibling.innerHTML='<img src="ok.png" height="30px" width="30px">';
	 return 1;
}
function checkgender(r1,r2,r3,errorgender)
{
		if((!r1.checked)&& (!r2.checked)&&(!r3.checked))
	{
		errorgender.innerHTML="Select your Gender";
		
		return 0;
	}
	else
	{
		errorgender.innerHTML="";
		
		return 1;
	}
}

	
		
function start()
{
	
	var rid=document.getElementById('rid');
	var erid=document.getElementById('erid');
	var eid=document.getElementById('eid');
	var eeid=document.getElementById('eeid');
	var rname=document.getElementById('rname');
    var btnsbt=document.getElementById('btnsbt');
	var form1=document.getElementById('frmhome');
	var r1=document.getElementById("male");
	var r2=document.getElementById("female");
	var r3=document.getElementById("other");
	var errorgender=document.getElementById("eGender");
	var dept=document.getElementById("dept");
	var edept=document.getElementById("edept");
	btnsbt.onclick=function(evt)
	{
		if(checkrid(rid,erid)&&checkEmail(eid,eeid)&&checkgender(r1,r2,r3,errorgender)&&checkname(rname,ername)&&checklname(rlname,erlname)&&checkdept(dept,edept)){
		  
			  form1.submit();}
		else
		{
			checkrid(rid,erid);
			checkEmail(eid,eeid);
	 		checkgender(r1,r2,r3,errorgender);
			checkname(rname,ername);
			checklname(rlname,erlname);
			checkdept(dept,edept);
			
		}
		 
		   
	};
	r1.onclick=function(evt)
	{
		checkgender(r1,r2,r3,errorgender);
	}
	r2.onclick=function(evt)
	{
			checkgender(r1,r2,r3,errorgender);
	}
	r3.onclick=function(evt)
	{
		checkgender(r1,r2,r3,errorgender);
	}
	dept.onchange=function(evt)
	{
		checkdept(dept,edept);
	}
	dept.onblur=function(evt)
	{
		checkdept(dept,edept);
	}
	
	rid.onblur=function(evt)
		{
			checkrid(rid,erid);			
		};
	rid.onkeyup=function(evt)
		{
			a=rid.value;
			rid.value=a.toUpperCase();
		};
		
		rname.onblur=function(evt)
		{
			checkname(rname,ername);
		};
		rname.onkeyup=function(evt)
		{
			a=rname.value;
			rname.value=a.toUpperCase();
		};
		

		rlname.onblur=function(evt)
		{
			checklname(rlname,erlname);
		};
		rlname.onkeyup=function(evt)
		{
			a=rlname.value;
			rlname.value=a.toUpperCase();
		};
		
		
		eid.onblur=function(evt)
		{
			checkEmail(eid,eeid);
			 
		};
		

};
window.onload=start;