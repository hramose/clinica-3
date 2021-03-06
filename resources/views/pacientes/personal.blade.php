@extends('templates._maintemplate')

@section('title') Ingresar Cita @endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Informacion Personal: {{ $paciente->name }} / {{ $paciente->id_number }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('pacientes') }}">Pacientes</a></li>
    </ol>
</section>
<div class="header-paciente">
    <div class="row">
        <div class="personal-information col-xs-6 col-md-3 active"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
        @role('doctor')
            <div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
            <div class="summary col-xs-6 col-md-3"><a href="{{ route('paciente.show', $paciente) }}">Resumen Clinico</a></div>
        @endrole
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Crear Cita</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-info" data-paciente="{{ $paciente->id }}" onclick="addNextCita($(this))">Agregar Proxima Cita</button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                    {!! Form::open(['route' => ['paciente.personal.update', $paciente->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Cedula Paciente</label>
                                <div>
                                    <input type="text" class="form-control cedula" name="id_number" id="id_number" value="{{ $paciente->id_number }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Nombre Paciente</label>
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $paciente->name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fecha Nacimiento</label>
                                <div>
                                    <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $paciente->birthday }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Edad</label>
                                <div>
                                    <input type="text" class="form-control" name="edad" id="edad" value="{{ $paciente->getAge() }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $paciente->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Telefono Convencional</label>
                                <div>
                                    <input type="text" class="form-control phone" name="convencional" id="convencional" value="{{ $paciente->convencional }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Telefono Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" name="phone" id="phone" value="{{ $paciente->phone }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Compañia Celular</label>
                                <div>
                                    <select class="form-control" name="compania_phone" id="compania_phone">
                                        <option value="">Seleccione una</option>
                                        <option value="Claro">Claro</option>
                                        <option value="Movistar">Movistar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Referido</label>
                                <div>
                                    <input type="text" name="referido" class="form-control" id="referido" value="{{ $paciente->referido }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Direccion</label>
                                <div>
                                    <input type="text" name="address" class="form-control" id="address" value="{{ $paciente->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Estado Civil</label>
                                <div>
                                    <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ $paciente->estado_civil }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Contacto</label>
                                <div>
                                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $paciente->contacto }}">
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <label>Parentesco</label>
                                <div>
                                    <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{ $paciente->parentesco }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" id="contacto_celular" name="contacto_celular" value="{{ $paciente->contacto_celular }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Lugar de Trabajo</label>
                                <div>
                                    <input type="text" name="trabajo" class="form-control" id="trabajo" value="{{ $paciente->trabajo }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" class="form-control" value="{{ $paciente->escolaridad }}">
                                    <option value="">Selecione Uno</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Universidad">Universidad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>Typo y RH</label>
                                <div>
                                    <select class="form-control" name="tipo_rh" id="tipo_rh" value="{{ $paciente->tipo_rh }}">
                                        <option value="">Selecione Uno</option>
                                        <option value="O Positivo">O Positivo</option>
                                        <option value="A Negativo">A Negativo</option>
                                        <option value="A Positivo">A Positivo</option>
                                        <option value="AB Negativo">AB Negativo</option>
                                        <option value="AB Positivo">AB Positivo</option>
                                        <option value="B Negativo">B Negativo</option>
                                        <option value="B Positivo">B Positivo</option>
                                        <option value="O Negativo">O Negativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Paridad</label>
                                <div>
                                    <input type="text" name="paridad" id="paridad" class="form-control" value="{{ $paciente->paridad }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Morbilidad</label>
                                <div>
                                    <input type="text" name="morbilidad" id="morbilidad" class="form-control" value="{{ $paciente->morbilidad }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-success btn-submit">Actualizar</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.citas._modal')
@include('includes.citas._script')

@endsection

@section('js')
    <script>
        $('#compania_phone').val("{{ $paciente->compania_phone }}");
        $('#escolaridad').val("{{ $paciente->escolaridad }}");
        $('#tipo_rh').val("{{ $paciente->tipo_rh }}");
    </script>
@endsection
