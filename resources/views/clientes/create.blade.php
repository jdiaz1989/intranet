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
           {!! Form::open(['route'=>'clientes.store', 'class' => 'form-horizontal'])!!}
            <div id="documenter_content">
                <section class="mb25 clearfix" id="cliente">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/cliente.png') }}" alt="">Datos del cliente</h2> 
                    </div>

@include('partials/errors')
                    <div class="col-sm-8">
                        <p><b>Nombre del cliente: {!!  Form::text('nombre_cliente',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Web:</b>{!!  Form::text('web',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Nombre del contacto:</b>{!!  Form::text('nombre_contacto',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Dirección:</b>{!!  Form::text('direccion',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Cargo:</b>{!!  Form::text('cargo',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Correo:</b>{!!  Form::Email('correo',null,['class'=>'form-control-2'])  !!}</p> 
                        <p><b>Teléfono:</b>{!!  Form::text('telefono',null,['class'=>'form-control-2'])  !!}</p>
                        <p><b>Estado:</b> {!! Form::select('status', array(
                                                ''=> 'Seleccione un estado',
                                                '0' => 'Activado',
                                                '1' => 'Desactivado'
                                                ), null, array('class' => 'form-control-2'))
                                            !!}</p>
                        <div class="row">
                            <div class="col-sm-8 alert alert-info"><i class="fa-user"></i>
                             Ejecutivo a cargo: {!!  Form::text('ejecutivo_a_cargo',null,['class'=>'form-control-2'])  !!}
                            </div>
                        </div>
                    </div>
       
               </section> <!-- end cliente -->

               <section class="mb25 clearfix" id="servidor">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/servidor.png') }}" alt="">Accesos de Servidor</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>FTP</code>
                            <p><b>Host:</b>{!!  Form::text('ftp_host',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>IP:</b>{!!  Form::text('ftp_ip',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>User:</b>{!!  Form::text('ftp_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('ftp_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('ftp_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                        <div class="row">
                            <code>CMS/CARRO</code>
                            <p><b>User:</b>{!!  Form::text('cms_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('cms_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('cms_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>AUTH BASIC</code>
                            <p><b>User:</b>{!!  Form::text('auth_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('auth_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('auth_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                    </div>
                </section>

                <section class="mb25 clearfix" id="email">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/mail.png') }}" alt="">Accesos de E-mailing Marketing</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><b>E-mail:</b>{!!  Form::text('email_email',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('email_pass',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                </section>

                <section class="mb25 clearfix" id="sociales">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/redes.png') }}" alt="">Accesos de redes sociales</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><img src="{{ asset('images/face.png') }}" alt=""><b>Facebook</b></p>
                            <p><b>User:</b>{!!  Form::text('face_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('face_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('face_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/pint.png') }}" alt=""><b>Pinterest</b></p>
                            <p><b>User:</b>{!!  Form::text('pint_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('pint_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('pint_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><img src="{{ asset('images/twit.png') }}" alt=""><b>Twitter</b></p>
                            <p><b>User:</b>{!!  Form::text('twit_user',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Pass:</b>{!!  Form::text('twit_pass',null,['class'=>'form-control-2'])  !!}</p>
                            <p><b>Url:</b>{!!  Form::text('twit_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/linke.png') }}" alt=""><b>Linkedin</b></p>
                            <p><b>User:</b> {!!  Form::text('link_user',null,['class'=>'form-control-2'])  !!} </p>
                            <p><b>Pass:</b>{!!  Form::text('link_pass',null,['class'=>'form-control-2'])  !!} </p>
                            <p><b>Url:</b> {!!  Form::text('link_url',null,['class'=>'form-control-2'])  !!}</p>
                        </div>
                        
                        <div class="col-sm-6">
                        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
                        </div>
                    </div>
                </section>
            </div>
            {!! Form::close()!!}
            @stop
        </div>
    </div>
</div><!-- end row -->

