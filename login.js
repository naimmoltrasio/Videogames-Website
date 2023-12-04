//Accedemos al fichero donde tenemos el Form y el evento que realizaremos
//es esperar a que clique en submit para ejectura la funcion login
document.getElementById('loginForm').addEventListener('submit', login);

function login(event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const email = formData.get('email');
    const password = formData.get('password');

    if (!email || !password) {
        showErrorMessage('Introduce el Correo/Contrseña');
        return;
    }
    .then(data => {

        if (data.error) {
        mostrarError(data.error);
    } else {
    // Si todo es correcto se le redirije al cliente a su cuenta
        window.location.href = '/dashboard';
    }
})
    .catch(error => mostrarError('Ha habido un error intentelo nuevamente'));
}

function mostrarError(mensaje) {
    const errorDiv = document.getElementById('mensajeError');
    errorDiv.textContent = mensaje;
    errorDiv.style.display = 'block';
}
