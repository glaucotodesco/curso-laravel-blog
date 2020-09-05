@extends('layouts.app')
@section('content')
    <h1>Postagens</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> {{ Illuminate\Support\Str::limit($post->body, $limit = 5, $end = '...') }}</h5>
                    <?php //<small class="card-text">Data: {{$post->created_at->format('d-m-Y H:i:s') }}</small> ?>
                    <small class="card-text">
                        Data: {{ date('d-m-Y H:i:s',strtotime(str_replace('-','/', $post->created_at)))}}
                    </small>
                </div>
            </div>
        @endforeach
    @endif
@endsection
