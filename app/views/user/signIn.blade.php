@extends('template.default')

@section('content')

<h3>Üye Girişi</h3>

<hr>

@if ($errors->count() > 0)

    <div class="alert alert-danger">
      
        <ul>
        @foreach ($errors->all() as $msg)
        <li>{{ $msg }}</li>
        @endforeach
        </ul>
    </div>

@endif

{{ 
    Form::open(array( 
        'role'    => 'form', 
        'method'=> 'post',
        'url' =>URL::route('signIn')
    ))
 }}
    <div class="form-group">
    {{ Form::label('inputMail','Mail Adresiniz :') }}
    <div class="controls">
      {{ Form::email('email',Input::old('email'), array('class' => 'form-control', 'placeholder' => 'E-Mail', 'id' => 'inputMail')) }}
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('inputPassword','Şifreniz :') }}
    <div class="controls">
      {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Min. 4 Haneli Şifreniz', 'id' => 'inputPassword')) }}
    </div>
  </div>
  
 {{ Form::submit('Oturum Aç', array('class' => 'btn')); }}
 
{{ Form::close() }}
@stop