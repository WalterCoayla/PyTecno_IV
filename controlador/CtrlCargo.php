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
    public function editar(){
        $id = $_GET['id'];
        $obj = new Cargo($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $this->mostrar('cargos/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new Cargo($id,$nombre);

        switch ($esNuevo) {
            case '0': # Editar
                $respuesta = $obj->actualizar();
                break;
            
            default:    #Nuevo
                $respuesta = $obj->guardar();
                break;
        }

        $this->index();

    }
    public function eliminar(){
        $id = $_GET['id'];
        $obj = new Cargo($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}