<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {

        // Almacena la cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena la cita y el Servicio

        // Almacena los servicios con el id de la cita correspondiente
        $idServicios = explode(",", $_POST['servicios']);
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];

            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }
        // Retornamos una respuesta
        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            // Se evitan errores al consultar la base de datos en caso de que alguien modifique el "value" del "input".
            if(filter_var($id, FILTER_VALIDATE_INT)) {
                $cita = Cita::find($id);
            }

            if($cita) {
                $cita->eliminar();
            }

            // Nos redirecciona a la misma página de donde veníamos
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
}