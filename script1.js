function clickMe() {
	var i = parseInt(document.querySelector("#f11").value)*(parseInt(document.querySelector("#f22").value)*parseInt(document.querySelector("#f33").value) - parseInt(document.querySelector("#f23").value)*parseInt(document.querySelector("#f32").value));
	var j = parseInt(document.querySelector("#f12").value)*(parseInt(document.querySelector("#f21").value)*parseInt(document.querySelector("#f33").value) - parseInt(document.querySelector("#f23").value)*parseInt(document.querySelector("#f31").value));
	var k = parseInt(document.querySelector("#f13").value)*(parseInt(document.querySelector("#f21").value)*parseInt(document.querySelector("#f32").value) - parseInt(document.querySelector("#f22").value)*parseInt(document.querySelector("#f31").value));	
	var ans = i - j + k;
	document.querySelector("#answer").innerHTML = ans;
}

document.querySelector("#find").addEventListener("click", clickMe);