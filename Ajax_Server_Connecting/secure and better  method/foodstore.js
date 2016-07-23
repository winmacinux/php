var xmlHttp = createXmlHttpRequestObject();


function createXmlHttpRequestObject(){
	var xmlHttp;

	if(window.ActiveXObject){
		try{
			//Checking the user does using the internet Explorer.
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			
		}catch(e){
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();

			
		}catch(e){
			xmlHttp = false;
		}
	}

	if(!xmlHttp){
		alert("Cannt Create the object hoss!");
	}else{
		return xmlHttp;
	}
}

function process(){

	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){

		var food = encodeURIComponent(document.getElementById('userInput').value);
		
		xmlHttp.open("GET", "foodstore.php?food="+food, true);

		xmlHttp.onreadystatechange = handleServerResponse;	//update our client webpage when the respone is get back

		xmlHttp.send(null);

	}else{
		setTimeout('process()', 1000);	//if the server is busy its wwill help in communicating wtih the server.
	}
}

function handleServerResponse(){
	if(xmlHttp.readyState==4){

		if(xmlHttp.status==200){
	
			var xmlResponse = xmlHttp.responseXML;

    		var xmlDocumentElement = xmlResponse.documentElement;

			var message = xmlDocumentElement.firstChild.data;

			document.getElementById("underInput").innerHTML = '<span style="color:blue">'+message+'</span';
			setTimeout('process()',1000);
			
		}else{
			alert('Something went wrong.');
		}

	}
}
