@extends('back.app')
@section('head')
@endsection
@section('main')
    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                {{ trans('back/matricula.title') }}
            </h3>
            <div class="example-box-wrapper">
                <div class="row">
                    <section>
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Matricula">
                            <span class="round-tab">
                                <i class="glyph-icon icon-folder-open-o"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyph-icon icon-child"></i>
                            </span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyph-icon icon-user"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyph-icon icon-file"></i>
                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {!! Form::open(array('route' => 'matricula.store','method'=>'Post','id'=>'upload_form')) !!}
                            <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <h3>Matricula</h3>
                                        <p>Datos Matricula</p>
                                        <div class="content-box">
                                            <h3 class="content-box-header bg-default">
                                                Matricula
                                            </h3>
                                            <div class="content-box-wrapper" id="form-01">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <div class="thumbnail-box thumbnail-box-inverse">
                                                        <a class="thumb-link" data-toggle="modal" data-target=".bs-example-modal-sm" title=""></a>
                                                        <div class="thumb-content">
                                                            <div class="center-vertical">
                                                                <div class="center-content">
                                                                    <i class="icon-helper icon-center animated rotateIn font-white glyph-icon icon-linecons-camera"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-overlay bg-blue-alt"></div>
                                                        <img id="resul_img" src="../../assets/image-resources/stock-images/img-16.jpg" alt="">
                                                        <input id="img_matricula" type="hidden" value="../../assets/image-resources/stock-images/img-16.jpg">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <fieldset class="form-group">
                                                            <label for="nivel_acad">Nivel Académico:</label>
                                                            <select class="form-control" id="nivel_acad" name="nivel_acad" required>
                                                                <option value="P">Primaria</option>
                                                                <option value="S">Segundaria</option>
                                                                <option value="A">Academia</option>

                                                            </select>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="grado">Grado: </label>
                                                            <input name="grado" type="text" class="form-control" id="grado" placeholder="Grado">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset class="form-group">
                                                            <label for="anio_escolar">Año Escolar: </label>
                                                            <input name="anio_escolar" type="text" class="form-control" id="anio_escolar" placeholder="Año Escolar">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <h3>Alumno</h3>
                                        <p>Datos Alumnos</p>
                                        <div class="content-box">
                                            <h3 class="content-box-header bg-black">
                                                Datos Alumno
                                            </h3>
                                            <div class="content-box-wrapper">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <fieldset class="form-group">
                                                            <label for="dni">Nº DNI: </label>
                                                            <input name="dni" type="number" class="form-control" id="dni" placeholder="Documento de Indentidad">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <fieldset class="form-group">
                                                            <label for="n_c_e">C.E.Nº: </label>
                                                            <input name="n_c_e" type="number" class="form-control" id="n_c_e" placeholder="C.E">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f_naci_alum" class="col-sm-4 control-label">Fecha de Nacimiento</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-prepend input-group">
                                                                        <span class="add-on input-group-addon">
                                                                            <i class="glyph-icon icon-calendar"></i>
                                                                        </span>
                                                                    <input name="f_naci_alum" id="f_naci_alum" type="text" class="bootstrap-datepicker form-control" value="{{date('m-d-Y')}}" data-date-format="mm/dd/yy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="apellido_p">Apellido Paterno: </label>
                                                            <input name="apellido_p" type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="apellido_m">Apellido Materno: </label>
                                                            <input name="apellido_m" type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="nombre">Nombre: </label>
                                                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="distrito">Distrito:</label>
                                                            <input name="distrito" type="text" class="form-control" id="distrito" placeholder="Distrito">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="regio">Region:</label>
                                                            <input name="region" type="text" class="form-control" id="region" placeholder="Region">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="pais">Pais:</label>
                                                            <input name="pais" type="text" class="form-control" id="pais" placeholder="Pais">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="dieccion">Direccion:</label>
                                                            <input name="direccion" type="text" class="form-control" id="direccion" placeholder="direccion">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="telefono">Telefono fijo:</label>
                                                            <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Telefono">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="celular">celular:</label>
                                                            <input name="celular" type="text" class="form-control" id="celular" placeholder="Celular">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="correo">Correo:</label>
                                                            <input name="correo" type="text" class="form-control" id="correo" placeholder="correo">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="c_procedencia">Colegio Procedencia:</label>
                                                            <input name="c_procedencia" type="text" class="form-control" id="c_procedencia" placeholder="Colegio Procedencia">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Seguro de Salud</label>
                                                            <div class="col-sm-6">
                                                                <input name="seguro" type="checkbox" class="input-switch-alt" checked data-size="medium" data-on-text="On" data-off-text="Off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <h3>Apoderado</h3>
                                        <p>Datos del Apoderado</p>
                                        <div class="content-box">
                                            <h3 class="content-box-header bg-green">
                                                Datos del Apoderado
                                            </h3>
                                            <div class="content-box-wrapper">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <fieldset class="form-group">
                                                            <label for="a_dni">Nº DNI: </label>
                                                            <input name="a_dni" type="number" class="form-control" id="a_dni" placeholder="Documento de Indentidad">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <fieldset class="form-group">
                                                            <label for="n_c_e_a">C.E.Nº: </label>
                                                            <input name="n_c_e_a" type="number" class="form-control" id="n_c_e_a" placeholder="C.E">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f_naci_apoderado" class="col-sm-4 control-label">Fecha de Nacimiento</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-prepend input-group">
                                                                        <span class="add-on input-group-addon">
                                                                            <i class="glyph-icon icon-calendar"></i>
                                                                        </span>
                                                                    <input name="f_naci_apoderado" type="text" class="bootstrap-datepicker form-control" id="f_naci_apoderado" value="{{date('m,d,Y')}}" data-date-format="mm/dd/yy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="apellido_p_a">Apellido Paterno: </label>
                                                            <input name="apellido_p_a" type="text" class="form-control" id="apellido_p_a" placeholder="Apellido Paterno">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="apellido_m_a">Apellido Materno: </label>
                                                            <input name="apellido_p_a" type="text" class="form-control" id="apellido_p_a" placeholder="Apellido Materno">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="nombre_a">Nombre: </label>
                                                            <input name="nombre_a" type="text" class="form-control" id="nombre_a" placeholder="Nombre">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row"    >
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="distrito_a">Distrito:</label>
                                                            <input name="distrito_a" type="text" class="form-control" id="distrito_a" placeholder="Distrito">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="region_a">Region:</label>
                                                            <input name="region_a" type="text" class="form-control" id="region_a" placeholder="Region">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="pais_a">Pais:</label>
                                                            <input name="pais_a" type="text" class="form-control" id="pais_a" placeholder="Pais">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="dieccion_a">Direccion:</label>
                                                            <input name="dieccion_a" type="text" class="form-control" id="dieccion_a" placeholder="direccion">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="telefono_a">Telefono fijo:</label>
                                                            <input name="telefono_a" type="text" class="form-control" id="telefono_a" placeholder="Telefono">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="celular_a">celular:</label>
                                                            <input  name="celular_a" type="text" class="form-control" id="celular_a" placeholder="Celular">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="correo_a">Correo:</label>
                                                            <input name="correo_a" type="text" class="form-control" id="correo_a" placeholder="correo">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <fieldset class="form-group">
                                                            <label for="ocupacion">Ocupacion</label>
                                                            <input name="ocupacion" type="text" class="form-control" id="ocupacion" placeholder="Ocupacion">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label">Vive con el Estudiante</label>
                                                            <div class="col-sm-6">
                                                                <input name="v_con_estudiante" type="checkbox" class="input-switch-alt" checked data-size="medium" data-on-text="si" data-off-text="no">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Grado de Instruccion</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class=" radio-inline">
                                                                    <label>
                                                                        <input type="radio" id="inlineRadio110" name="grado_instruccion" class="custom-radio" value="prima">
                                                                        Primaria
                                                                    </label>
                                                                </div>
                                                                <div class=" radio-inline">
                                                                    <label>
                                                                        <input type="radio" id="inlineRadio111" name="grado_instruccion" class="custom-radio" value="coleg">
                                                                        Colegio
                                                                    </label>
                                                                </div>
                                                                <div class=" radio-inline">
                                                                    <label>
                                                                        <input type="radio" id="inlineRadio112" name="grado_instruccion" class="custom-radio" value="uni_inst">
                                                                        Universidad o instituto
                                                                    </label>
                                                                </div>
                                                                <div class=" radio-inline">
                                                                    <label>
                                                                        <input type="radio" id="inlineRadio113" name="grado_instruccion" class="custom-radio" value="pos_grado">
                                                                        Porst Grado
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="complete">
                                        <h3>Documentos</h3>
                                        <p>Documentos requeridos para la Matricula</p>
                                        <div class="content-box">
                                            <h3 class="content-box-header bg-info">
                                                Documentos
                                            </h3>
                                            <div class="content-box-wrapper">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6"> Parida de Nacimiento
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_partida_naci" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6"> Libreta de Notas
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_libreta_nota" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">Ficha de Matricula</div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_f_matricula" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">Certificado de Estudios</div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_certf_estud" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6"> Certificado de Conducta
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_certif_conduc" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">Otros</div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_otros" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no" required>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">Foto</div>
                                                            <div class="col-sm-6">
                                                                <input type="checkbox" data-on-color="primary" name="doc_foto" class="input-switch"  data-size="medium" data-on-text="si" data-off-text="no" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        Confirmado
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="Registar" class="btn btn-primary">
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </section>
                </div>

            </div>


        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Subir Foto</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data','id'=>'upload_form')) !!}
                        <div class="row cancel">
                            <div class="file-field input-field" style="margin-left: 10px; margin-right: 10px;">
                                <div class="btn">
                                    <span>File</span>
                                    {!! Form::file('image', array('class' => 'image','id'=>'uploadfile')) !!}
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Subir Imagenes">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input  class="btn btn-primary" id="subir" type="submit">Guardar</input>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! HTML::script('js/matricula/Matricula.js')!!}
    {!! HTML::script('../../assets/widgets/parsley/parsley.js')!!}
@endsection