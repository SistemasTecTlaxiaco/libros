const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const telefono = document.getElementById('fecha');
const password2 = document.getElementById('telefono');
const password2 = document.getElementById('estado');
form.addEventListener('submit', e => {
	e.preventDefault();	
	checkInputs();
});

function checkInputs() {	
	const nombreValue = nombre.value.trim();
    const apellidoValue = apellido.value.trim();    
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
    const fechaValue = fecha.value.trim();
    const telefonoValue = telefono.value.trim();
    const estadoValue = estado.value.trim();
	
	if(nombreValue === '') {
		setErrorFor(nombre, 'El campo nombre esta en blanco, ingrese un dato por favor');
	} else {
		setSuccessFor(nombre);
	}
    if(apellidoValue === '') {
		setErrorFor(apellido, 'El campo apellido esta en blanco, ingrese un dato por favor');
	} else {
		setSuccessFor(apellido);
	}	
	if(emailValue === '') {
		setErrorFor(email, 'El campo email esta en blanco, ingrese un dato por favor');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'No ingreso un email válido');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'El campo contraseña esta en blanco, ingrese un dato por favor');
	} else {
		setSuccessFor(password);
	}	
	if(password2Value === '') {
		setErrorFor(password2, 'El campo en donde repite la contraseña esta en blanco, ingrese un dato por favor');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Las contraceñas no coinciden');
	} else{
		setSuccessFor(password2);
	}
    if(fechaValue === '') {
		setErrorFor(fecha, 'El campo fecha esta en blanco, ingrese un dato por favor');
	} else {
		setSuccessFor(fecha);
	}
    if(telefonoValue === '') {
		setErrorFor(telefono, 'El campo telefono esta en blanco, ingrese un dato por favor');
	} else {
		setSuccessFor(telefono);
	}
    if(estadoValue === '' || estadoValue === 'Selecciona alguno') {
		setErrorFor(estado, 'debe seleccionar un estado');
	} else {
		setSuccessFor(estado);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}