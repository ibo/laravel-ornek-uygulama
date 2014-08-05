@extends('template.default')

@section('content')

<div class="alert alert-warning text-center">
    Bu script, Laravel Framework'e yeni başlayanlar için taslak olarak hazırlanmıştır.
</div>

<div class="row">
    <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Yeni Gönderilen Sorular</h3>
                </div>
                @foreach ($lastQuestions as $question)
                <a href="{{ URL::route('getQuestion', array('id' => $question->id)) }}" class="list-group-item">
                  <h5 class="list-group-item-heading">{{ mb_strlen($question->title) > 76 ? mb_substr($question->title, 0, 76) . '...' : $question->title }}</h5>
                  <small class="list-group-item-text"><b>{{ $question->user->username }}</b> tarafından soruldu</small>
                </a>
                @endforeach
            </div>
    </div>
    <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Son Cevap Yazılan Sorular</h3>
                </div>
                @foreach ($lastComments as $row)
                <a href="{{ URL::route('getQuestion', array('id' => $row->questions->id)) }}" class="list-group-item">
                  <h5 class="list-group-item-heading">{{ mb_strlen($row->questions->title) > 76 ? mb_substr($row->questions->title, 0, 76) . '...' : $row->questions->title }}</h5>
                  <small class="list-group-item-text"><b>{{ $row->user->username }}</b> tarafından cevaplandı</small>
                </a>
                @endforeach
            </div>
    </div>
</div>


@stop