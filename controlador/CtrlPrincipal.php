<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Oficina.php';

class CtrlPrincipal extends Controlador {
    public function index(){
        #echo "Hola mundo";
        /* $obj = new Oficina();
        $data = $obj->mostrar(); */

        # var_dump($data);exit;
        $_SESSION['menu']=$this->getMenu();
        $datos = [
            'menu'=>$this->getMenu(),
            'titulo'=>'Sistema IES.',
            'usuario'=>'Walter',
            // 'datos'=>$data['data']
        ];

        $home = $this->mostrar('home.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }

    public function getMenu(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlOficina'=>'Oficinas',
            'CtrlFactorForma'=>'Factores de Forma',
            'CtrlArea'=>'Areas',
            'CtrlProgramaEstudio'=>'Programas de Estudios',
            'CtrlEstudiante'=>'Estudiantes',
        ];
    }
}