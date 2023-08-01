<?php

namespace Adso\controllers;

use Adso\Libs\Controller;

class RegisterController extends Controller
{
    protected $model;

    function __construct()
    {
    }

    function index()
    {
        $data = [
            "titulo" => "Registro",
            "subtitulo" => "Formulario de registro"
        ];

        $this->view('register', $data, 'auth');
    }

    function validate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = array();
            $nombre       = $_POST['nombre'] ?? '';
            $apellidos    = $_POST['apellidos'] ?? '';
            $correo       = $_POST['correo'] ?? '';
            $celular      = $_POST['celular'] ?? '';
            $contrasena   = $_POST['contrasena'] ?? '';
            $confirmar_contrasena = $_POST['confirmar_contrasena'] ?? '';

            if (empty($nombre)) {
                $errors['nombre_error'] = "El campo 'Nombre' es requerido.";
            }
            if (empty($apellidos)) {
                $errors['apellidos_error'] = "El campo 'Apellidos' es requerido.";
            }
            if (empty($correo)) {
                $errors['correo_error'] = "El campo 'Correo electrónico' es requerido.";
            }
            if (empty($celular)) {
                $errors['celular_error'] = "El campo 'Celular' es requerido.";
            }
            if (empty($contrasena)) {
                $errors['contrasena_error'] = "El campo 'Contraseña' es requerido.";
            }
            if (empty($confirmar_contrasena)) {
                $errors['confirmar_contrasena_error'] = "El campo 'Confirmar contraseña' es requerido.";
            } elseif ($contrasena !== $confirmar_contrasena) {
                $errors['confirmar_contrasena_error'] = "Las contraseñas no coinciden.";
            }

            if (empty($errors)) {
                // Aquí deberías realizar la validación completa del formulario de registro,
                // por ejemplo, verificar si el usuario ya existe en la base de datos, si el correo es válido, etc.
                // Si el registro es exitoso, puedes redirigir al usuario a otra página, como la página de inicio de sesión.
                // header("Location: ruta_de_redireccion");
                // exit();
            } else {
                $data = [
                    "titulo" => "Registro",
                    "subtitulo" => "Formulario de registro",
                    "errors" => $errors
                ];
                $this->view('register', $data, 'auth');
            }
        } else {
            die("!Te piye, ingreso no permitido¡");
        }
    }

    function forgetpassword()
    {
        $data = [
            "titulo" => "Recuperar contraseña",
            "subtitulo" => "Formulario recuperar contraseña"
        ];

        $this->view('forget', $data, 'auth');
    }
}




