<?php
require_once './core/Controlador.php';
require_once './modelo/Cargo.php';

class CtrlCargo extends Controlador {
    public function index(){
        $obj = new Cargo();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Cargos',
            'data'=>$data['data']
        ];
        $this->mostrar('cargos/mostrar.php',$datos);
    }
    public function nuevo(){
        $this->mostrar('cargos/formulario.php');
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];

        $obj = new Cargo($id,$nombre);
        $respuesta = $obj->guardar();

        $this->index();

    }
    public function eliminar(){
        $id = $_GET['id'];
        $obj = new Cargo($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}