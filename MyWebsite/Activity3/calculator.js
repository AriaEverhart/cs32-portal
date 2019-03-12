function calculate(){	
	var x = parseInt(document.getElementById("numOne").value);
	var y = parseInt(document.getElementById("numTwo").value);
	
	document.getElementById("sum").value = x+y;
	document.getElementById("diff").value = x-y;
	document.getElementById("product").value = x*y;
	document.getElementById("quotient").value = x/y;
	document.getElementById("exp").value = Math.pow(x,y);
}

function swap(){
	var x = parseInt(document.getElementById("numOne").value);
	var y = parseInt(document.getElementById("numTwo").value);
	
	x = x+y;
	y = x-y;
	x = x-y;
	document.getElementById("numOne").value = x;
	document.getElementById("numTwo").value = y;
	
	calculate();
}

