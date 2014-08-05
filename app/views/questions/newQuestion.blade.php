@extends('template.default')

@section('content')

<h3>Soru Sor</h3>

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
        'url' =>URL::route('newQuestion')
    ))
 }}
    <div class="form-group">
    {{ Form::label('inputTitle','Soru Başlığı:') }}
    <div class="controls">
      {{ Form::text('title',Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Sormak İstediğiniz Sorunun Başlığı', 'id' => 'inputTitle')) }}
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('inputContent','Sorunuza ait detaylar :') }}
    <div class="controls">
      {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'placeholder' => 'Sorunuzun detaylarını yazın', 'id' => 'inputContent')) }}
    </div>
  </div>
  
 {{ Form::submit('Soruyu Gönder', array('class' => 'btn')); }}
 
{{ Form::close() }}
@stop