function main(event){

	let btn = event.currentTarget;

	//btn.style.backgroundColor = 'blue'

	let div = btn.parentNode;

	let array = div.childNodes;
	//array[1].dataset.status = 'done';

	array[1].style.textDecoration = "line-through";//setAttribute("status","done");//[status]="done";

	btn.removeEventscript2.jsListener('click',main)

}

let buttons = document.querySelectorAll('button');

for(let button of buttons){

	button.addEventListener('click',main);

}