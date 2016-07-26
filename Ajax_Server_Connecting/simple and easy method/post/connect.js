function insert(){
	
	if(window.XMLHttpRequest){

		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	

	xmlhttp.onreadystatechange = function(){
			
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById('message').innerHTML = xmlhttp.responseText;	
		}
	}
	parameters = 'text_value='+ document.getElementById('text_value').value;
		
	xmlhttp.open('POST', 'search.inc.php', true);
	xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xmlhttp.send(parameters);
	
}