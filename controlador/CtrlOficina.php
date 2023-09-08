<?php
require_once './core/Controlador.php';
require_once './modelo/Oficina.php';

class CtrlOficina extends Controlador {
    public function index(){
        $obj = new Oficina();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Oficinas',
            'data'=>$data['data']
        ];
        $this->mostrar('oficinas/mostrar.php',$datos);
    }
    public function nuevo(){
        $this->mostrar('oficinas/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Oficina($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $this->mostrar('oficinas/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new Oficina($id,$nombre);

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
        $obj = new Oficina($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}