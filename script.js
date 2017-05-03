function validateFields(id){
		var str = document.getElementById(id).value;
		if(str.length == 0){
			return false;
		}
	return true;
	}
	
var xmlhttp;
function sendRequest(serverPage, id){
	xmlhttp = new XMLHttpRequest();
	if(!xmlhttp){
		alert("Your browser doesn't support AJAX!");
	}
	xmlhttp.open("GET",serverPage);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			document.getElementById(id).innerHTML = xmlhttp.responseText;
		}		
	xmlhttp.send(null);
}
function sendRequest(serverPage, id, login, password){
	xmlhttp = new XMLHttpRequest();
	var params = "login="+login+"&"+"password="+password;
	if(!xmlhttp){
		alert("Your browser doesn't support AJAX!");
	}
	xmlhttp.open("POST",serverPage,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			document.getElementById(id).innerHTML = xmlhttp.responseText;
		}	
	alert(params);	
	xmlhttp.send(params);
}
function confirmPassword(){
	var password1 = document.getElementById("password").value;
	var password2 = document.getElementById("confirm_password").value;
	if(password1 != password2){
		document.getElementById("confirm_password").style.backgroundColor = "rgba(240,120,120,.5)";
	}
	else if(password1 == password2){
		document.getElementById("confirm_password").style.backgroundColor = "rgba(151,252,152,.5)";
	}
	else if(password2 == null){
		document.getElementById("confirm_password").style.backgroundColor = "white";
	}
}
