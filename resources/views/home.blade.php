@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Suas Postagens</h1>
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
