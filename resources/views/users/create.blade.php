@extends('layouts.default')

@section('content')

<div class="container boxed">
    <div class="row">
        <div class="col-sm-3 sidebar">
            <div class="docs-sidebar hidden-print hidden-xs spy menujq">
                <!-- <ul>
                    <li><a href="javascript:void();"><b>Sin registro</b></a>
                        <ul>
                            <li><a href="#cliente">Datos del cliente</a></li>
                            <li><a href="#servidor">Accesos de servidor</a></li>
                            <li><a href="#email">Accesos de e-mail</a></li>
                            <li><a href="#sociales">Accesos de redes sociales</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sin registro</a></li>
                    <li><a href="#">Sin registro</a></li>
                    <li><a href="#">Sin registro</a></li>
                    <li><a href="#">Sin registro</a></li>
                    <li><a href="#">Sin registro</a></li>
                </ul> -->
            </div>
        </div>

        <div class="col-sm-9 bg-white">
            <div id="documenter_content">
                <section class="mb25 clearfix" id="cliente">
                    @include('partials/errors')
                    <div class="page-header">
                        <h2><img src="{{ asset('images/redes.png') }}" alt="">Crear Usuario</h2>
                    </div>
                    {!! Form::open(['route'=>'users.store', 'class' => 'form-horizontal']) !!}
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!!  Form::label('username','Nombre:', array('class' => 'col-sm-2 control-label'))  !!} 
                            <div class="col-sm-6">
                                {!!  Form::text('username',null,['class'=>'form-control'])  !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!  Form::label('telefono','Teléfono:', array('class' => 'col-sm-2 control-label'))  !!} 
                            <div class="col-sm-6">
                                {!!  Form::text('telefono',null,['class'=>'form-control'])  !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!  Form::label('email','Email:', array('class' => 'col-sm-2 control-label'))  !!} 
                            <div class="col-sm-6">
                                {!!  Form::email('email',null,['class'=>'form-control'])  !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!  Form::label('password','Password:', array('class' => 'col-sm-2 control-label'))  !!} 
                            <div class="col-sm-6">
                                {!!  Form::password('password',array('class'=>'form-control'))  !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Rol Usuario</label>
                            <div class="col-sm-5">
                                {!! Form::select('role', array(

                                'admin' => 'Administrador',
                                'cuentas' => 'Cuentas',
                                'ingenieria' => 'Ingenieria',
                                'redes' => 'Redes',
                                'diseño' => 'Diseño',
                                'gerencia' => 'Gerencia'


                                ), null, array('class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-5">
                                {!! Form::select('status', array(
                                '' => 'Seleccione',
                                '1' => 'Activo',
                                '0' => 'Inactivo'

                                ), null, array('class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
                            </div>								
                        </div>
                    </div>
                    {!!  Form::close() !!}
                </section>
            </div>
        </div>
    </div>
</div>


@stop
