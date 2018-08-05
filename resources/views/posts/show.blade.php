@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$post->titulo}}</div>

                    <div class="card-body">
                        {{$post->body}}
                        @include('posts.comments.comment')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
