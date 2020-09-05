@extends('layouts.app')
@section('content')
<h1>{{$post->title}}</h1>    
<p>{{$post->body}}</p>
<hr> 
<small>Data: {{$post->created_at}}</small>   
@endsection
