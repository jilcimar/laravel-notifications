@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem dos posts</div>

                    <div class="card-body">
                        @forelse($posts as $post)
                            <a href="{{route('posts.show',$post->id)}}">
                                <p>{{$post->titulo}}</p>
                            </a>
                            <hr>
                        @empty
                            Não há posts cadastrados
                        @endforelse
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
