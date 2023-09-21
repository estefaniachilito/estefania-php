<?php

class Usuario {
    private $strName;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

    function __construct(string $nombre, string $email, string $tipo) {
        $this->strName = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand();
        $this->strFechaRegistro = date('Y-m-d H:m:s');
    }

    public function getMail() {
        return $this->strEmail;
    }

    public function getName() {
        return $this->strName;
    }

    public function getTipo() {
        return $this->strTipo;
    }

    public function getPerfil() {
        echo "<br>";
        echo $this->strName."<br>";
        echo $this->strEmail."<br>";
        echo $this->strTipo."<br>";
        echo $this->strClave."<br>";
        echo $this->strFechaRegistro."<br>";
        echo self::$strEstado;
    }

    public function setCambiarclave($pass) {
        $this->strClave = $pass;
    }


}