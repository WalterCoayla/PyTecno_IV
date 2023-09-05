<?php
require_once './core/Controlador.php';
require_once './modelo/FactorForma.php';

class CtrlFactorForma extends Controlador {
    public function index(){
        $obj = new FactorForma();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Factores de Forma',
            'data'=>$data['data']
        ];
        $this->mostrar('factoresForma/mostrar.php',$datos);
    }
    public function nuevo(){
        $this->mostrar('factoresForma/formulario.php');
    }

    public function editar(){
        $id = $_GET['id'];
        $obj = new FactorForma($id);
        $data = $obj->getFactor();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $this->mostrar('factoresForma/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new FactorForma($id,$nombre);

        switch ($esNuevo) {
            case '0': # Editar
                $respuesta = $obj->actualizar();
                break;
            
            default:
                $respuesta = $obj->guardar();
                break;
        }

        
        

        $this->index();

    }
    public function eliminar(){
        $id = $_GET['id'];
        $obj = new FactorForma($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}