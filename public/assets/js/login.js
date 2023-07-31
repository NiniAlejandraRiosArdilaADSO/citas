
const formulario = document.getElementById('formulario')

const user = document.getElementById('user')
const password = document.getElementById('password')

const btnEnviar = document.getElementById('ingresar');

const validarCorreo = correo => {
    // Validamos que eL campo tenga soLo un y un punto
    // eL @ no puede ser eL primer caracter deL correo
    // y eL punto debe it posicionando aL menos un cardcter despuds de La @ 
    return /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correo)

}

const enviarFormulario = (formulario) => {
    formulario.submit()
}
const validacion = (e) => {
    e.preventDefault();


    if (!validarCorreo(user.value)) {
        alert("Por favor, escribe un correo electronico valido");
        correo.focus();
        return false;
    }
    if (password.value === "" ) {
        alert('Por favor, escriba su contraseña')
        nombre.focus()
        return false;
    }

    enviarFormulario(formulario);
};
// cedula.addEventListener('keypress', soloNumeros);
// Deletras.forEach((item) => item.addEventListener('keypress', soloLetras))
btnEnviar.addEventListener('click', validacion);