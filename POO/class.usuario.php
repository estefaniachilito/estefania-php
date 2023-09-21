<?php

class Usuario {
    public string $nombre = '';
    public string $email = '';
    public string $tipo = '';
    public string $clave = '';

    public function __construct(string $nombre, string $email, string $tipo, string $clave) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->tipo = $tipo;
        $this->$clave = $clave;
    }

    public function registrarse() {
        
    }

    public function verPerfil() {

    }

    public function cambiarClave() {
        
    }
}