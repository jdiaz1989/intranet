@extends('layouts.default')


@section('content')

<div class="container boxed">
    <div class="row">
        <div class="col-sm-3 sidebar">
            <div class="docs-sidebar hidden-print hidden-xs spy menujq">
                <ul>
                    @foreach ($clientes_actuales as $client_actual)
                    <li>
                        <div id="accordion">
                            <h3><a href="{{ url('clientes/ver',$client_actual->id)}}">{{ $client_actual->nombre_cliente}}</a></h3>
                            <div>
                                <p>
                                    <ul>
                                        <li><a href="#cliente">Datos del cliente</a></li>
                                        <li><a href="#servidor">Accesos de servidor</a></li>
                                        <li><a href="#email">Accesos de e-mail</a></li>
                                        <li><a href="#sociales">Accesos de redes sociales</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-9 bg-white">
            <div id="documenter_content" class="contenido">
                <section class="mb25 clearfix" id="cliente">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/cliente.png') }}" alt="">Datos del cliente</h2><a href="{{ route('clientes.edit',$clientes->id) }}" type="button" class="btn btn-primary">Editar</a>
                    </div>
                    <div class="col-sm-8">
                        <p><b>Nombre del cliente: {{$clientes->nombre_cliente}} </b> </p> 
                        <p><b>Web: {{$clientes->web}} </b> </p> 
                        <p><b>Nombre del contacto: {{$clientes->nombre_contacto}} </b> </p> 
                        <p><b>Dirección: {{$clientes->direccion}} </b> </p> 
                        <p><b>Cargo: {{$clientes->cargo}} </b> </p> 
                        <p><b>Correo: {{$clientes->correo}} </b> </p> 
                        <p><b>Teléfono: {{$clientes->telefono}} </b> </p>
                        <div class="row">
                            <div class="col-sm-8 alert alert-info"><i class="fa-user"></i> Ejecutivo a cargo: {{$clientes->ejecutivo_a_cargo}}  </div>
                        </div>
                        <p><b>Teléfono del ejecutivo: </b> </p>
                        <p><b>Correo del ejecutivo:</b> </p>
                    </div>
                    <div class="col-sm-4">
                        <span><img src="@if($clientes->status == 0){{ asset('images/activo.png') }} @else {{ asset('images/inactivo.png') }} @endif" alt=""><p>@if($clientes->status == 0)Cliente Activo @else Cliente Inactivo @endif</p></span>
                   </div>
               </section> <!-- end cliente -->

               <section class="mb25 clearfix" id="servidor">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/servidor.png') }}" alt="">Accesos de Servidor</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>FTP</code>
                            <p><b>Host: {{$clientes->ftp_host}} </b> </p>
                            <p><b>IP: {{$clientes->ftp_ip}} </b> </p>
                            <p><b>User: {{$clientes->ftp_user}} </b> </p>
                            <p><b>Pass: {{$clientes->ftp_pass}} </b> </p>
                            <p><b>Url: {{$clientes->ftp_url}} </b> </p>
                        </div>
                        <div class="row">
                            <code>CMS/CARRO</code>
                            <p><b>User: {{$clientes->cms_user}} </b> </p>
                            <p><b>Pass: {{$clientes->cms_pass}} </b> </p>
                            <p><b>Url: {{$clientes->cms_url}} </b> </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>AUTH BASIC</code>
                            <p><b>User: {{$clientes->auth_user}} </b> </p>
                            <p><b>Pass: {{$clientes->auth_pass}} </b> </p>
                            <p><b>Url: {{$clientes->auth_url}} </b> </p>
                        </div>
                    </div>
                </section>

                <section class="mb25 clearfix" id="email">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/mail.png') }}" alt="">Accesos de E-mail</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><b>E-mail: {{$clientes->email_email}} </b> </p>
                            <p><b>Pass: {{$clientes->email_pass}} </b> </p>
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
                            <p><b>User: {{$clientes->face_user}} </b> </p>
                            <p><b>Pass: {{$clientes->face_pass}} </b> </p>
                            <p><b>Url: {{$clientes->face_url}} </b> </p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/pint.png') }}" alt=""><b>Pinterest</b></p>
                            <p><b>User: {{$clientes->pint_user}} </b> </p>
                            <p><b>Pass: {{$clientes->pint_pass}} </b> </p>
                            <p><b>Url: {{$clientes->pint_url}} </b> </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><img src="{{ asset('images/twit.png') }}" alt=""><b>Twitter</b></p>
                            <p><b>User: {{$clientes->twit_user}} </b> </p>
                            <p><b>Pass: {{$clientes->twit_pass}} </b> </p>
                            <p><b>Url: {{$clientes->twit_url}} </b> </p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/linke.png') }}" alt=""><b>Linkedin</b></p>
                            <p><b>User: {{$clientes->link_user}} </b> </p>
                            <p><b>Pass: {{$clientes->link_pass}} </b> </p>
                            <p><b>Url: {{$clientes->link_url}} </b> </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> 
</div><!-- end row -->

@stop
