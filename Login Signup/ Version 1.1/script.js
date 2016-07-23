function logout(){

	location.href='logout.php';
	
}

function closeWindow() {
    window.close();
}

function recovery(){
	var set = "width=800,height=600";
	var URL="recovery.php";

	var myWindow = window.open(URL, "", set);

}



