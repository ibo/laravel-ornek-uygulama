@extends('template.default')

@section('content')

@foreach ($questions as $question)
    <blockquote>
        <a class="lead text-info" href="{{ URL::route('getQuestion', array('id' => $question->id)) }}"><b>{{{ $question->title }}}</b></a>
        <small class="text-muted"><b>{{ $question->user->username }}</b> tarafından {{ date('d/m/Y', strtotime($question->created_at)) }} tarihinde gönderildi</small>
    </blockquote>
@endforeach

{{ $questions->links() }}

@stop