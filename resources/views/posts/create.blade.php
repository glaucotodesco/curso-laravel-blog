@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Voltar</a>
    <h1>Novo Post</h1>
    {!! Form::open(['action' => 'PostsController@store']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body']) }}
    </div>

    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
