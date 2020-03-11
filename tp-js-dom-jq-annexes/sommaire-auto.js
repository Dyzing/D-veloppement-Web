let lesh1 = document.querySelectorAll('h1');
//let lesdiv2 = document.querySelectorAll('.chapitre');

console.log(lesh1);
console.log(lesh2);

var currentDiv = document.getElementById('sommaire');

let newDiv = document.createElement("div");
let newOl = document.createElement("ol");

lesh1.forEach(function(elem){
//	let lesh2 = lesdiv2.querySelectorAll('h2');	
	let lesdiv2 = elem.nextSibling;


	let newLi = document.createElement("li");
	let text = document.createTextNode(elem.textContent);
	

	if(lesdiv2.name = 'div')
	{
		let lesh2 = lesdiv2.querySelectorAll('h2');
		let newDiv2 = document.createElement("div");
		let newOl2 = document.createElement("ol");

		lesh2.forEach(function(elem2){
			let newLi2 = document.createElement("li");
			let text2 = document.createTextNode(elem2.textContent);
			console.log(text2);
			newLi2.appendChild(text2);
			newOl2.appendChild(newLi2);
		})
	}



	newDiv2.appendChild(newOl2);
	
	newLi.appendChild(text);

	newLi.appendChild(newDiv2);

	newOl.appendChild(newLi);
});

newDiv.appendChild(newOl);
currentDiv.appendChild(newDiv);

document.body.insertBefore(newDiv, currentDiv);
