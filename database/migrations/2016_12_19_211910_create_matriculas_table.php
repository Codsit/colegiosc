<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_matricula', function (Blueprint $table) {
            $table->increments('id_doc_matricula');
            $table->string('doc_partida_naci');
            $table->string('doc_libreta_nota');
            $table->string('doc_f_matricula');
            $table->string('doc_certf_estud');
            $table->string('doc_certif_conduc');
            $table->string('doc_otros');
            $table->string('doc_foto');
        });

        Schema::create('apoderado', function (Blueprint $table) {
            $table->increments('id_apoderado');
            $table->string('a_dni');
            $table->string('n_c_e_a');
            $table->string('f_naci_apoderado');
            $table->string('apellido_p_a');
            $table->string('nombre_a');
            $table->string('distrito_a');
            $table->string('region_a');
            $table->string('pais_a');
            $table->string('dieccion_a');
            $table->string('telefono_a');
            $table->string('celular_a');
            $table->string('correo_a');
            $table->string('ocupacion');
            $table->string('v_con_estudiante');
            $table->string('grado_instruccion');

        });
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->string('dni',8)->unique();
            $table->string('n_c_e',20);
            $table->string('f_naci_alum');
            $table->string('apellido_p',20);
            $table->string('apellido_m',20);
            $table->string('nombre',20);
            $table->string('distrito',20);
            $table->string('region',20);
            $table->string('pais',20);
            $table->string('direccion',50);
            $table->string('telefono',15);
            $table->string('celular',15);
            $table->string('correo',50);
            $table->string('c_procedencia',50);
            $table->string('seguro',2);

            $table->integer('apoderado_id')->unsigned();
            $table->foreign('apoderado_id')->references('id_apoderado')->on('apoderado');

        });

        Schema::create('matricula', function (Blueprint $table) {
            $table->increments('id_matricula');
            $table->string('anio_escolar');
            $table->string('nivel_acad');
            $table->string('grado');
            //--------------------key foreing
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id_alumno')->on('alumno');
            //--------------------key foreing
            $table->integer('doc_id')->unsigned();
            $table->foreign('doc_id')->references('id_doc_matricula')->on('doc_matricula');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matriculas');
    }
}
