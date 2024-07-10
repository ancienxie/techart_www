import {test} from "./test.js";

console.log("test_js");

const form = document.querySelector('.form1');
form.addEventListener('submit', function(event){
	
	event.preventDefault();

	const name = document.querySelector('[name="name"]');
	const email = document.querySelector('[name="email"]');
	const message = document.querySelector('[name="message"]');

	const emailRegex = /^([a-zA-Z]|[0-9])([a-zA-Z]|[0-9]|[\.\_\-])+@([a-zA-Z]|[0-9])+\.[a-zA-Z]+/gm;

	clearErrors();

	let errors = [];

	if (!name.value){
		errors.push("Поле 'Имя' обязательное для заполнения.");
	}

	if (!email.value){
		errors.push("Поле 'Email' обязательное для заполнения.");
	} else if(!emailRegex.test(email.value)){
		errors.push("Поле 'Email' заполнено неверно.");
	}

	if (message.value.length >= 10){
		errors.push("Поле для комментария не должно превышать 10 символов.");
	}

	if(errors.length > 0){
		showErrors(errors);
	} else{
		document.querySelector('.form1').submit();
		document.querySelector('.form1').remove();

		const finalText = document.createElement('p');
		finalText.textContent = "Спасибо за отзыв!";

		finalText.classList.add('success-message');

		const nav = document.querySelector('.nav');

		nav.appendChild(finalText);
		sendMail(name,email,message);
	}
});


function showErrors(errors){
	const errorMessages = document.querySelector('.errorMessages');
	errors.forEach(error => {
		const error_elem = document.createElement('p');
		error_elem.textContent = error;
		error_elem.classList.add('errors-message');
		errorMessages.appendChild(error_elem);
	})
};

function sendMail(name, email, message) {
	fetch("./mail.php", {
		method: "POST",
		body: JSON.stringify({name: name, email: email, message: message}),
	    headers: {
	        'content-type': 'application/json'
	    	}
		});
}

function clearErrors() {
    const errorMessages = document.querySelector('.errorMessages');
    errorMessages.innerHTML = '';
}











// const response = fetch('https://jsonplaceholder.typicode.com/todos/1');
// response.then((data)=>{
// 	data.json().then((data)=>{
// 		console.log(data);
// 	});
// });

// test().then((data)=>{
// 	console.log(data);
// });












const form1 = document.querySelector(".form1");
fetch('form.php',{
	method:"POST",
	body: new FormData(form1)
})

console.log(form1);