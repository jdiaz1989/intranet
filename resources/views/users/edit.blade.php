@extends('layouts.default')

@section('content')

@include('partials/errors')

<h1>Editar Usuario </h1>




{!! Form::model($user, array('class' => 'form-horizontal','method'=> 'patch','route' => array('users.update', $user->id))) !!}


<div class="form-group">
{!!  Form::label('username','Username:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::text('username',null,['class'=>'form-control'])  !!}
</div>
</div>


<div class="form-group">
{!!  Form::label('email','Email:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::email('email',null,['class'=>'form-control'])  !!}
</div>
</div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Rol Usuario</label>
    <div class="col-sm-5">
       {!! Form::select('role', array(
    
    'admin' => 'Administrador',
    'vendedor' => 'Vendedor'
    
    ), null, array('class' => 'form-control'))
!!}
    </div>
  </div>

  <div class="form-group">
{!!  Form::label('password','Password:', array('class' => 'col-sm-2 control-label'))  !!} 
<div class="col-sm-6">
{!!  Form::password('password',array('class'=>'form-control'))  !!}
</div>
</div>


<div class="form-group">
<div class="col-sm-6">
{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>								
</div>


{!!  Form::close() !!}

@stop
