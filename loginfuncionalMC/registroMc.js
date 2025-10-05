

// Obtener una referencia al formulario completo
const registroForm = document.querySelector('.login-form');

// Obtener las referencias a los campos de entrada usando sus ID unicos
const usuarioInput = document.getElementById('usuario');
const contrasenaInput = document.getElementById('contrasena');
const correoInput = document.getElementById('correo');



// Esta funcion se ejecuta cuando el usuario hace clic en Registrarse
function validarRegistro(event) {
    
    // Detenemos el envio por defecto del formulario asi evitamos que vaya a registro.php si hay errores
    event.preventDefault(); 
    
    // Obtenemos los valores escritos en los campos, eliminando espacios iniciales y finales
    const usuario = usuarioInput.value.trim();
    const contrasena = contrasenaInput.value.trim();
    const correo = correoInput.value.trim();

    // Verificacion de si alguno esta vacio 
    
    if (usuario === '' || contrasena === '' || correo === '') {
        
        // se muestra la alerta si uno esta vacio
        alert('ERROR: Todos los campos (Usuario, Contraseña y Correo) son obligatorios para el registro.');
        
        // aqui finalizamos la funcion, no se envia si estan vacios
        return; 
    }

    // Aqui si la validacion es exitosa
    
    alert('Datos de registro válidos. Procesando registro...'); 
    
    // Si la validación local es exitosa enviamos el formulario a la acción definida en HTML (registro.php)
    registroForm.submit(); 
}


// Escuchamos el envio del formulario y llamamos a la función validarRegistro
registroForm.addEventListener('submit', validarRegistro);