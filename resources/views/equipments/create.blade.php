@extends('layouts.default')

@section('content')

 <script>
 
  $(function() {
    $("#deliver_date").datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
  });
  </script>

<div class="container">
<div class="row">

@include('partials/errors')
<h1>Crear Equipo</h1>

{!! Form::open(['route'=>'equipments.store', 'class' => 'form-horizontal'])!!}

<div class="form-group">
{!!  Form::label('brand','Marca:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('brand',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('model','Modelo:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('model',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('owner','Dueño:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('owner',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('first_name','Nombres:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('first_name',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('last_name','Apellidos:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('last_name',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('status','Estado:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('status',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('deliver_date','Fecha de entrega:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('deliver_date',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('serial_number','Número de serie:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('serial_number',null,['class'=>'form-control'])  !!}
</div>
</div>

<div class="form-group">
<div class="col-sm-6">
{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>								
</div>

{!! Form::close()!!}
</div>
</div>





@stop
