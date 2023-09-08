<?php
require_once './core/Controlador.php';
require_once './modelo/Area.php';
require_once './modelo/Oficina.php';

class CtrlArea extends Controlador {
    public function index(){
        $obj = new Area();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Areas',
            'data'=>$data['data']
        ];
        $this->mostrar('areas/mostrar.php',$datos);
    }
    public function nuevo(){
        $obj = new Oficina;
        $data = $obj->mostrar();
        $datos = [
            'oficinas'=>$data['data']
        ];

        $this->mostrar('areas/formulario.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Area($id);
        $data = $obj->getRegistro();

        $obj = new Oficina;
        $dataOficina = $obj->mostrar();
        
        
        $datos = [
            'obj'=>$data['data'][0],
            'oficinas'=>$dataOficina['data']
        ];
        $this->mostrar('areas/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $idOficina=$_POST['idOficina'];

        $esNuevo=$_POST['esNuevo'];

        $obj = new Area($id,$nombre,$idOficina);

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
        $obj = new Area($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}