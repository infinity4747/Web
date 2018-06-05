let country=["Kazakstan","Russion","USA"];
let city_by_county={"Kazakstan":["Almaty","AStana"],"Russion":["Moskva","Piter"],"USA":["New-York","Washington"]};
let con=document.querySelector('#countries');
let cit=document.querySelector('#cities');
for (var i = 0; i < con.length; i++) {
	let n=document.createElement('option');
	n.innerHTML=country[i];
	con.add(n);
}
function add2(argument) {
	// body...
	while(cit.hasChildNodes()){
		cit.removeChild(ct.lastChild);
	}
	let ve=con.value;
	var city=city_by_county[ve];
	for (var i = 0; i < city.length; i++) {
		let n=document.createElement('option');
		n.innerHTML=city;
		cit.add(n);
	}
}
con=document.addEventListener('click',add2);