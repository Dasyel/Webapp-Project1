function loadGame(url){
	var xmlhttp;
	var question;

	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			question =xmlhttp.responseText;
			document.getElementById("myDiv").innerHTML = question;
		}
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}
