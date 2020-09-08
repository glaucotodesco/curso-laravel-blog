@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Voltar</a>
<h1>{{$post->title}}</h1>    
<p>{{$post->body}}</p>
<hr> 
<small>Data: {{$post->created_at}}</small>
<hr> 
<div>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'pull-right' ]) !!}
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Editar Mensagem</a>
    {{Form::submit('Remover',['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
</div>

@endsection
