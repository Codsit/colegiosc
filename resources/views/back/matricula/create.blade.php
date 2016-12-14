@extends('back.app')
@section('main')
    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                {{ trans('back/matricula.title') }}
            </h3>
            <div class="example-box-wrapper">
                <div id="form-wizard-3" class="form-wizard">
                    <ul>
                        <li class="active">
                            <a href="#step-1" data-toggle="tab" aria-expanded="true">
                                <label class="wizard-step">1</label>
                                <span class="wizard-description">
                         Matricula
                         <small>matricula del nuevo alumno</small>
                                 </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#step-2" data-toggle="tab">
                                <label class="wizard-step">2</label>
                                <span class="wizard-description">
                          Datos del Alumno
                         <small>Datos personales del Alumno Nuevo</small>
                      </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#step-3" data-toggle="tab">
                                <label class="wizard-step">3</label>
                                <span class="wizard-description">
                         Datos Apoderado
                         <small>Datos del Padre o apoderado del Alumno</small>
                      </span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="step-1">
                            <div class="content-box">
                                <h3 class="content-box-header bg-default">
                                    Matricula
                                </h3>
                                <div class="content-box-wrapper">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="thumbnail-box thumbnail-box-inverse">
                                            <a class="thumb-link" href="#" title=""></a>
                                            <div class="thumb-content">
                                                <div class="center-vertical">
                                                    <div class="center-content">
                                                        <i class="icon-helper icon-center animated rotateIn font-white glyph-icon icon-linecons-camera"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-overlay bg-blue-alt"></div>
                                            <img src="../../assets/image-resources/stock-images/img-16.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="service1">Nivel Académico:</label>
                                                <select class="form-control" id="service1">
                                                    <option>Primaria</option>
                                                    <option>Segundaria</option>
                                                    <option>Academia</option>

                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="fullname1">Año Escolar: </label>
                                                <input type="text" class="form-control" id="fullname1" placeholder="Año Escolar">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="step-2">
                            <div class="content-box">
                                <h3 class="content-box-header bg-black">
                                    Datos Alumno
                                </h3>
                                <div class="content-box-wrapper">
                                    Lorem ipsum dolor sic amet dixit tu.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="step-3">
                            <div class="content-box">
                                <h3 class="content-box-header bg-green">
                                    Third
                                </h3>
                                <div class="content-box-wrapper">
                                    Lorem ipsum dolor sic amet dixit tu.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection