@extends('layouts.app')
@section('content')
   <h1>Postagens</h1>    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <h3>{{$post->title}}</h3>
                <h5> {{Illuminate\Support\Str::limit($post->body, $limit =5, $end = '...') }}</h5>
                <small>Data: {{$post->created_at->format('d-m-Y H:i:s')}}</small>
            </div>    
        @endforeach
    @endif
@endsection
