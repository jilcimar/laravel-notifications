<hr>
@if(auth()->check())

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    <form action="{{route('comment.store')}}" method="post" class="form">
        @csrf
        <label for="titulo" class="col-md-6 col-form-label text-md-left">Título</label>
        <div class="col-md-6">
            <input id="titulo" type="text" placeholder="Título do comentário" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ old('titulo') }}" required autofocus>
        </div>

        <label for="body" class="col-md-6 col-form-label text-md-left">Comentário</label>
        <div class="col-md-6">
            <textarea id="body" type="text" placeholder="Comentário" class="form-control" name="body" required> </textarea>
        </div>

        <br>

        <input type="hidden" name="post_id" value="{{$post->id}}">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Comentar</button>
        </div>
    </form>
@else
    <p>Precisa estar logado para comentar <a href="{{route('login')}}">Clique aqui para entrar</a></p>
@endif

<br>

<h3>Comentários ({{$post->comments->count()}})</h3>
@forelse($post->comments as $comment)
    <p>
        <b>{{$comment->user->name}} comentou:</b>
            {{$comment->titulo}} - {{$comment->body}}
    </p>
@empty
    Sem comentários
@endforelse