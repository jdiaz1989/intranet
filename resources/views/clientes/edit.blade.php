@extends('layouts.default')

@section('content')

@include('partials/errors')

<h1>Editar Cliente</h1>



{!! Form::model($client, array('class' => 'form-horizontal','method'=> 'patch','route' => array('clientes.update', $client->id))) !!}


<div class="form-group">
{!!  Form::label('name','Nombre:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('name',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('site_web','Sitio Web:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('site_web',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('address','Dirección:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('address',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('name_contact','Contacto:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('name_contact',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('office','Cargo:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('office',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('email','Email:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::Email('email',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('phone','Telefono:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('phone',null,['class'=>'form-control'])  !!}
</div>
</div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Ejecutivo</label>
    <div class="col-sm-5">
{!! Form::select('user_id', $user, $selected,array('class' => 'form-control')) !!}
</div>
</div>


 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-5">
 {!! Form::select('status', array(
    
    '0' => 'Inactivo',
    '1' => 'Activo'
    ), null, array('class' => 'form-control'))
!!}
</div>
</div>



<div class="form-group">
<div class="col-sm-6">
{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>								
</div>

{!! Form::close()!!}

@stop
