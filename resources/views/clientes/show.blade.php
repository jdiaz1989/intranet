@extends('layouts.default')

@section('content')


<div class="container boxed">
    <div class="row">
        <div class="col-sm-3 sidebar">
          
            <div class="docs-sidebar hidden-print hidden-xs spy menujq">
                <ul>                    
 @foreach ($clientes as $client)
                    <li><a href="javascript:void();">{{{ $client->nombre_cliente}}}</a></li>
                        <ul>
                            <li><a href="#cliente">Datos del cliente</a></li>
                            <li><a href="#servidor">Accesos de servidor</a></li>
                            <li><a href="#email">Accesos de e-mail</a></li>
                            <li><a href="#sociales">Accesos de redes sociales</a></li>
                        </ul>
                    </li>
@endforeach
                </ul>
            </div>
             
        </div>
        <div class="col-sm-9 bg-white">
            <div id="documenter_content">
                <section class="mb25 clearfix" id="cliente">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/cliente.png') }}" alt="">Datos del cliente</h2> 
                    </div>
                    <div class="col-sm-8">
                        <p><b>Nombre del cliente:</b>{{{ $client->nombre_cliente}}} </p> 
                        <p><b>Web:</b> {{{ $client->web}}} </p> 
                        <p><b>Nombre del contacto:</b>{{{ $client->nombre_contacto}}}</p> 
                        <p><b>Dirección:</b> </p> 
                        <p><b>Cargo:</b> </p> 
                        <p><b>Correo:</b> </p>
                        <p><b>Teléfono:</b> </p>
                        <div class="row">
                            <div class="col-sm-8 alert alert-info"><i class="fa-user"></i> Ejecutivo a cargo: </div>
                        </div>
                        <p><b>Teléfono del ejecutivo:</b> </p>
                        <p><b>Correo del ejecutivo:</b> </p>
                    </div>
                    <div class="col-sm-4">
                       <span><img src="{{ asset('images/activo.png') }}" alt=""><p>Cliente Activo</p></span>
                   </div>
               </section> <!-- end cliente -->

               <section class="mb25 clearfix" id="servidor">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/servidor.png') }}" alt="">Accesos de Servidor</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>FTP</code>
                            <p><b>Host:</b> </p>
                            <p><b>IP:</b> </p>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                        <div class="row">
                            <code>CMS/CARRO</code>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <code>AUTH BASIC</code>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                    </div>
                </section>

                <section class="mb25 clearfix" id="email">
                    <div class="page-header">
                        <h2><img src="{{ asset('images/mail.png') }}" alt="">Accesos de E-mailing Marketing</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><b>E-mail:</b> </p>
                            <p><b>Pass:</b> </p>
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
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/pint.png') }}" alt=""><b>Pinterest</b></p>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <p><img src="{{ asset('images/twit.png') }}" alt=""><b>Twitter</b></p>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                        <div class="row">
                            <p><img src="{{ asset('images/linke.png') }}" alt=""><b>Linkedin</b></p>
                            <p><b>User:</b> </p>
                            <p><b>Pass:</b> </p>
                            <p><b>Url:</b> </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> 
</div><!-- end row -->

<!-- <h1>Listado de Clientes Registrados</h1>


<hr\>
<div class="col-xs-9">
 
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre Cliente </th>
        <th>Web</th>
        <th>Nombre Contacto</th>
        <th>Dirección</th>
        <th>Cargo</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Responsable</th>
        <th>FTP Host</th>
        <th>FTP Ip</th>
        <th>FTP User</th>
        <th>FTP Pass</th>
        <th>FTP Url</th>
        <th>CMS User</th>
        <th>CMS Pass</th>
        <th>CMS Url</th>
        <th>AUTH User</th>
        <th>AUTH Pass</th>
        <th>AUTH Url</th>
        <th>EMAIL Email</th>
        <th>EMAIL Pass</th>
        <th>FACE User</th>
        <th>FACE Pass</th>
        <th>FACE Url</th>
        <th>PINT User</th>
        <th>PINT Pass</th>
        <th>PINT Url</th>
        <th>TWIT User</th>
        <th>TWIT Pass</th>
        <th>TWIT Url</th>
        
    </tr>
    

    <tr>
        <td>{{ $clients->id}}</td>
        <td>{{ $clients->nombre_cliente}}</td>
        <td>{{ $clients->web}}</td>
        <td>{{ $clients->nombre_contacto}}</td>
        <td>{{ $clients->direccion}}</td>
        <td>{{ $clients->cargo}}</td>
        <td>{{ $clients->correo}}</td>
        <td>{{ $clients->telefono}}</td>
        <td>{{ $clients->user->ejecutivo_a_cargo}}</td>
        <td>{{ $clients->ftp_host}}</td>
        <td>{{ $clients->ftp_ip}}</td>
        <td>{{ $clients->ftp_user}}</td>
        <td>{{ $clients->ftp_pass}}</td>
        <td>{{ $clients->ftp_url}}</td>
        <td>{{ $clients->cms_user}}</td>
        <td>{{ $clients->cms_pass}}</td>
        <td>{{ $clients->cms_url}}</td>
        <td>{{ $clients->auth_user}}</td>
        <td>{{ $clients->auth_pass}}</td>
        <td>{{ $clients->auth_url}}</td>
        <td>{{ $clients->email_email}}</td>
        <td>{{ $clients->email_pass}}</td>
        <td>{{ $clients->face_user}}</td>
        <td>{{ $clients->face_pass}}</td>
        <td>{{ $clients->face_url}}</td>
        <td>{{ $clients->pint_user}}</td>
        <td>{{ $clients->pint_pass}}</td>
        <td>{{ $clients->pint_url}}</td>
        <td>{{ $clients->twit_user}}</td>
        <td>{{ $clients->twit_pass}}</td>
        <td>{{ $clients->twit_url}}</td>
    </tr>
  </table>

</div>
-->

@stop