var qrcode1 = new QRCode("qrcode1");

function makeCode () {		
    var textcode1 = document.getElementById("textcode1");
	
	if (!textcode1.value) {
		alert("Input a text");
		textcode1.focus();
		return;
    }
    
	
    qrcode1.makeCode(textcode1.value);

}

makeCode();
