
const btn = document.querySelector("#btn-send");
const form = document.querySelector("#form");
btn.addEventListener("click", (e) =>{
	e.preventDefault();
	const data = new FormData(form);
	fetch('contact/store',{
		method: 'post',
		body:data
	})
	.then(response => response.json())
	.then(result => {
		console.log(result)
		if (result.alert == "danger") {
			
			let firstName = document.querySelector(".errors-first-name");
			firstName.textContent = result.firstName[0];

			let lastName = document.querySelector(".errors-last-name");
			lastName.textContent = result.lastName[0];

			let email = document.querySelector(".errors-email");
			email.textContent = result.email[0];

			let message = document.querySelector(".errors-message");
			message.textContent = result.message[0];

			let badge = document.querySelectorAll(".badge");
			badge.forEach(span => { 
				span.style.display = "block"
				span.style.textAlign = "left";
			});

			setTimeout(() => {
			badge.forEach(span => { 
				span.style.display = "none";
			});
			}, 4000);

		}

		if (result.alert == "success") {
			const success = document.querySelector(".alert");
			success.textContent = "El formulario se valido correctamente";
			success.style.display = "block";
		}
		
	})
});