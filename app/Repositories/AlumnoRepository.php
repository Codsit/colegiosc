<?php

namespace App\Repositories;


use App\Alumno;

class AlumnoRepository extends BaseRepository {



    public function __construct(Alumno $alumno )
    {
        $this->model = $alumno;
    }


    private function saveAlumno($alumno, $inputs, $id_apoderado)
    {
        $alumno->dni = $inputs['dni'];
        $alumno->n_c_e = $inputs['n_c_e'];
        $alumno->f_naci_alum = $inputs['f_naci_alum'];
        $alumno->apellido_p = $inputs['apellido_p'];
        $alumno->apellido_m = $inputs['apellido_m'];
        $alumno->nombre = $inputs['nombre'];
        $alumno->distrito = $inputs['distrito'];
        $alumno->region = $inputs['region'];
        $alumno->pais = $inputs['pais'];
        $alumno->direccion = $inputs['direccion'];
        $alumno->telefono = $inputs['telefono'];
        $alumno->celular = $inputs['celular'];
        $alumno->correo = $inputs['correo'];
        $alumno->c_procedencia = $inputs['c_procedencia'];
        $alumno->seguro = $inputs['seguro'];
        $alumno->apoderado_id = $id_apoderado;


        $alumno->save();

        return $matricula;
    }




}
