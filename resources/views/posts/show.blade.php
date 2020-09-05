@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Voltar</a>
<h1>{{$post->title}}</h1>    
<p>{{$post->body}}</p>
<hr> 
<small>Data: {{$post->created_at}}</small>   
@endsection
