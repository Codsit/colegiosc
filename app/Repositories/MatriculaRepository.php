<?php

namespace App\Repositories;



use App\Alumno;
use App\Apoderado;
use App\DocMatricula;
use App\Matricula;

class MatriculaRepository extends BaseRepository {

    protected $apoderado;
    protected $docMatricula;
    protected $alumno;

    public function __construct(Apoderado $apoderado, DocMatricula $docMatricula, Matricula $matricula,Alumno $alumno )
    {
        $this->model = $matricula;
        $this->apoderado = $apoderado;
        $this->docMatricula = $docMatricula ;
        $this->alumno = $alumno;
    }

    /**
     * Create or update a post.
     *
     * @param  App\Models\Post $post
     * @param  array  $inputs
     * @param  bool   $user_id
     * @return App\Models\Post
     */
    private function saveMatricula($matricula, $inputs, $alumno_id,$doc_id)
    {
        $matricula->anio_escolar = $inputs['anio_escolar'];
        $matricula->nivel_acad = $inputs['nivel_acad'];
        $matricula->grado = $inputs['grado'];
        $matricula->alumno_id = $alumno_id;
        $matricula->doc_id = $doc_id;

        $matricula->save();

        return $matricula;
    }




}
