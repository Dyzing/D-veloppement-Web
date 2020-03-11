let lesh1 = document.querySelectorAll('h1');
//let lesdiv2 = document.querySelectorAll('.chapitre');
let i = 0;

let newDiv = document.createElement("div");
let newOl = document.createElement("ol");


var currentDiv = document.getElementById('sommaire');

let buttonsommaire = document.createElement("button");
let buttontext = document.createTextNode("Effacer le sommaire");
var estcache = true;

function oncache()
{
	if(estcache)
	{
		newDiv.style.visibility = "hidden";
		buttontext.textContent = "Afficher le sommaire";
		estcache = false;
	}

	else
	{
		newDiv.style.visibility = "visible";
		buttontext.textContent = "Effacer le sommaire";		
		estcache = true;
	}
}

buttonsommaire.addEventListener('click', oncache );

buttonsommaire.appendChild(buttontext);
currentDiv.appendChild(buttonsommaire);


lesh1.forEach(function(elem){
//	let lesh2 = lesdiv2.querySelectorAll('h2');	
	let lesdiv2 = elem.nextElementSibling;


	let newLi = document.createElement("li");
	let text = document.createTextNode(elem.textContent);
	elem.setAttribute("id", "ancre-"+i);
	

	if(lesdiv2.nodeName = "DIV")
	{
		let j = 0;
		let lesh2 = lesdiv2.querySelectorAll('h2');


		var newDiv2 = document.createElement("div");
		var newOl2 = document.createElement("ol");

		lesh2.forEach(function(elem2){
			let mylink2 = document.createElement("a");	
			let newLi2 = document.createElement("li");
			let text2 = document.createTextNode(elem2.textContent);
			elem2.setAttribute("id", "ancre-"+i+"-"+j);

			mylink2.setAttribute("href", "#ancre-"+i+"-"+j);

			mylink2.appendChild(text2);
			newLi2.appendChild(mylink2);
			newOl2.appendChild(newLi2);
			++j;
		})
	}

	let mylink1 = document.createElement("a");
	mylink1.setAttribute("href", "#ancre-"+i);

	newDiv2.appendChild(newOl2);
	
	mylink1.appendChild(text);
	newLi.appendChild(mylink1);


	newLi.appendChild(newDiv2);

	newOl.appendChild(newLi);
	++i;
});

newDiv.appendChild(newOl);
currentDiv.appendChild(newDiv);
newDiv.style.border = "1px solid black";
newDiv.style.width = "240px";

document.body.insertBefore(buttonsommaire, currentDiv);

document.body.insertBefore(newDiv, currentDiv);


let lesh1gris = document.querySelectorAll('div#contenu h1');
lesh1gris.forEach(function(elem3){
	elem3.style.backgroundColor = "lightgrey";
})
