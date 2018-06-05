function main(event) {
	// body...
	let btn=event.currentTarget;

	let div = btn.parentNode;
	let array = div.childNodes;
	array[1].style.textDecoration="line-through";
	btn.removeEventscript2.jsListener('click',main);
}
let buttons =  document.querySelectorAll('button');


for (button of buttons){
	let button=addEventListener('click',main);
}