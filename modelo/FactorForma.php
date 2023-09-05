<?php
require_once './core/Modelo.php';
class FactorForma extends Modelo {
    private $id;
    private $nombre;
    private $_tabla='factores_forma';
    public function __construct($id=null,$nombre=null){
        $this->id = $id;
        $this->nombre=$nombre;
        parent::__construct($this->_tabla);
    }

    public function mostrar(){
        return $this->getAll();
    }
    public function getFactor(){
        return $this->getById($this->id);
    }
    public function guardar(){
        $data=[
            'nombre'=>"'$this->nombre'"
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'nombre'=>"'$this->nombre'"
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}