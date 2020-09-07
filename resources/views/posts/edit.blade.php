@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Voltar</a>

    <h1>Editar Postagem</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT' ]) !!}
    <div class="form-group">
        {{ Form::label('title', 'Título') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Título']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Mensagem') }}
        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Mensagem']) }}
    </div>

    {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
