@extends('template.default')

@section('content')

<div class="row">
    <div class="col-md-9">
            <h3>{{{ $question->title }}}</h3>
            <hr>
            <p>{{ nl2br($question->content) }}</p>
            <p class="text-muted">Bu soru <b>{{ $question->user->username }}</b> tarafından soruldu</p>
            
            @if ($comments->count() > 0)
            <hr>
            <h4>Bu soruya <b class="text-info">{{ $comments->count() }}</b> cevap verilmiş :</h4>
            
            <hr>
                @foreach ($comments as $comment)
                <blockquote>
                    <p>{{ nl2br($comment->comment) }}</p>
                    <small class="text-muted"><b>{{ $comment->user->username }}</b> tarafından {{ date('d/m/Y', strtotime($comment->created_at)) }} tarihinde gönderildi</small>
                </blockquote>
                @endforeach
            @endif
            
            @if (Auth::check())
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
                    'url' =>URL::route('newComment')
                ))
             }}
              <div class="form-group">
                {{ Form::label('inputComment','Soruyu Cevaplayın') }}
                <div class="controls">
                  {{ Form::textarea('comment', Input::old('comment'), array('class' => 'form-control', 'placeholder' => 'Bu soruya cevabınız nedir?', 'id' => 'inputComment', 'rows' => 3)) }}
                </div>
              </div>

             {{ Form::hidden('question_id', $question->id) }}
             
             {{ Form::submit('Cevabı Gönder', array('class' => 'btn')) }}

            {{ Form::close() }}
            <hr>
            @endif
    </div>
    <div class="col-md-3">
            <h3>Rastgele Sorular</h3>
            <hr>
            <ul class="list-unstyled">
                @foreach ($randomQuestions as $q)
                <li>{{ HTML::link(URL::route('getQuestion', array('id' => $q->id)), $q->title, array('class' => 'initialism')) }}</li>
                <hr>
                @endforeach
            </ul>
            
            {{ HTML::link(URL::route('newQuestionForm'), 'Sen De Soru Sor', array('class' => 'btn btn-primary btn-lg btn-block')) }}
            
    </div>
</div>

@stop