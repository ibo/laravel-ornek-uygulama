@extends('template.default')

@section('content')

<h3>Üye Ol</h3>

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
        'url' =>URL::route('signUp')
    ))
 }}
    <div class="form-group">
    {{ Form::label('inputUsername','Kullanıcı Adınız :') }}
    {{ Form::text('username',Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Min. 3 Haneli Kullanıcı Adınız', 'id' => 'inputUsername')) }}
   </div>
   <div class="form-group">
    {{ Form::label('inputMail','Mail Adresiniz :') }}
    {{ Form::email('email',Input::old('email'), array('class' => 'form-control', 'placeholder' => 'E-Mail', 'id' => 'inputMail')) }}
    </div>
    <div class="form-group">
    {{ Form::label('inputPassword','Şifreniz :') }}
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Min. 4 Haneli Şifreniz', 'id' => 'inputPassword')) }}
   </div>
   <div class="form-group">
    {{ Form::label('inputPasswordConf','Şifreniz (Yeniden) :') }}
    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Şifrenizi Yeniden Girin', 'id' => 'inputPasswordConf')) }}
   </div>
 
    {{ Form::submit('Üye Ol', array('class' => 'btn')); }}
  
{{ Form::close() }}
@stop