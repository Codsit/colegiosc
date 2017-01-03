<?php

namespace App\Repositories;




use App\Models\Apoderado;

class ApoderadoRepository extends BaseRepository {


    public function __construct(Apoderado $apoderado )
    {
        $this->model = $apoderado;
    }

    /**
     * Create or update a post.
     *
     * @param  App\Models\Post $post
     * @param  array  $inputs
     * @param  bool   $user_id
     * @return App\Models\Post
     */
    private function saveApoderado($apoderado, $inputs)
    {
        $apoderado->a_dni = $inputs['a_dni'];
        $apoderado->n_c_e_a = $inputs['n_c_e_a'];
        $apoderado->f_naci_apoderado = $inputs['f_naci_apoderado'];
        $apoderado->apellido_p_a = $inputs['apellido_p_a'];
        $apoderado->nombre_a = $inputs['nombre_a'];
        $apoderado->distrito_a = $inputs['distrito_a'];
        $apoderado->region_a = $inputs['region_a'];
        $apoderado->pais_a = $inputs['pais_a'];
        $apoderado->dieccion_a = $inputs['dieccion_a'];
        $apoderado->telefono_a = $inputs['telefono_a'];
        $apoderado->celular_a = $inputs['celular_a'];
        $apoderado->correo_a = $inputs['correo_a'];
        $apoderado->ocupacion = $inputs['ocupacion'];
        $apoderado->v_con_estudiante = $inputs['v_con_estudiante'];
        $apoderado->grado_instruccion = $inputs['grado_instruccion'];

        $apoderado->save();

        return $apoderado;
    }




}
