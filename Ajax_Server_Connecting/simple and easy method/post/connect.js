function insert(){
	if(window.XMLHttpRequest()){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.httpstatus==200){
			document.getElementById('message').innerHTMl=xmlhttp.responseText;
		}
	}
	parameters='text?='+ document.getElementById('text').value;
	xmlhttp.open('POST', 'search.inc.php', true);
	xmlhttp.setRequestHeader('Content-Type', 'application/X-www-form-urlencoded');
	xmlhttp.send(parameters);
}