function validateemail(id) {
	var field=id.value;
	var good=false;
	var msg=document.getElementById("emailmsg");
	if(field=="")
	{
		msg.innerHTML="Email can not be empty!";
		msg.className="text-danger";
	}
	else 
	{
		var hasDot=field.indexOf(".");
		var hasAt=field.indexOf("@");
		if(hasDot<=0 ||hasAt<=0)
		{
		msg.innerHTML="Email is not valid!";
		msg.className="text-danger";
		}
		else
		{
			msg.innerHTML="";
			good=true;
		}
	}
	return good;
}

function validatephone(id) {
	var field=id.value;
	var good=false;
	var msg=document.getElementById("phonemsg");
	if(field=="")
	{
		msg.innerHTML="Phone number can not be empty!";
		msg.className="text-danger";
	}
	else 
	{
		if(!(/^[2-9]\d{9}$/.test(field)))
		{
		msg.innerHTML="Phone number is not valid!";
		msg.className="text-danger";
		}
		else
		{
			msg.innerHTML="";
			good=true;
		}
	}
	return good;
}

function validate(form)
{ 
    var emailID=document.getElementById("email");
    var phoneID=document.getElementById("phone");
	var emailGood=validateemail(emailID);
	var phoneGood=validatephone(phoneID);
	if(emailGood&&phoneGood)
	  return true;
	else
	  return false;
}