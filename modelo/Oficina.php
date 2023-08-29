<?php
require_once './core/Modelo.php';
class Oficina extends Modelo {
    private $_tabla='oficinas';
    public function __construct(){
        parent::__construct($this->_tabla);
    }

    public function mostrar(){
        return $this->getAll();
    }
}