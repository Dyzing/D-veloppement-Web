let lesh1 = document.querySelectorAll('h1');
let lesh2 = document.querySelectorAll('h2');
console.log(lesh1);

var currentDiv = document.getElementById('sommaire');

let newDiv = document.createElement("div");
let newOl = document.createElement("ol");

lesh1.forEach(function(elem){

	let newLi = document.createElement("li");
	let text = document.createTextNode(elem.textContent);
	
	
	newLi.appendChild(text);
	newOl.appendChild(newLi);
});

newDiv.appendChild(newOl);
currentDiv.appendChild(newDiv);

document.body.insertBefore(newDiv, currentDiv);
