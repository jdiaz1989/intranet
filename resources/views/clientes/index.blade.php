@extends('layouts.default')

@section('content')

<div class="container boxed">
    <div class="row">
        <div class="col-sm-3 sidebar">
            <div class="docs-sidebar hidden-print hidden-xs spy menujq">
                <ul>
                    
                    @foreach ($clientes as $client)
                    <li>
                        <a class="btn" href="{{ url('clientes/ver',$client->id)}}">{{{ $client->nombre_cliente}}}</a>
                    </li>
                    @endforeach
             

            
                    

                </ul>
            </div>
        </div>
        <div class="col-sm-9 bg-white2">
            <div id="documenter_content" class="contenido">
                <section class="mb25 clearfix" id="cliente">
                    <div class="col-sm-12">
                       <span><img  class="img-second" src="{{ asset('images/ceinegocios.png') }}" alt="CEInegocios"></span>
                    </div>
               </section>
            </div>
        </div>
    </div> 
</div><!-- end row -->

@stop
