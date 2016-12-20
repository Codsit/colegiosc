<?php

namespace App\Repositories;


use App\DocMatricula;

class DocMatriculaRepository extends BaseRepository {



    public function __construct(DocMatricula $docMatricula)
    {
        $this->model = $docMatricula;
    }

    /**
     * Create or update a post.
     *
     * @param  App\Models\Post $post
     * @param  array  $inputs
     * @param  bool   $user_id
     * @return App\Models\Post
     */
    private function saveDocMatricula($doc_matricula, $inputs)
    {
        $doc_matricula->doc_partida_naci = $inputs['doc_partida_naci'];
        $doc_matricula->doc_libreta_nota = $inputs['doc_libreta_nota'];
        $doc_matricula->doc_f_matricula = $inputs['doc_f_matricula'];
        $doc_matricula->doc_certf_estud = $inputs['doc_certf_estud'];
        $doc_matricula->doc_certif_conduc = $inputs['doc_certif_conduc'];
        $doc_matricula->doc_otros = $inputs['doc_otros'];
        $doc_matricula->doc_foto = $inputs['doc_foto'];

        $doc_matricula->save();

        return $doc_matricula;
    }
   private function getId(){

   }



}
