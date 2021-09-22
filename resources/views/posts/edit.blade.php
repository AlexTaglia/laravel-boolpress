@extends('layouts.app')

@section('content')

<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $post)}}" method='post'>
        
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo:</label>
            <input class="form-control" type="text" name="title" id="title" maxlength="255" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="title">Contenuto:</label>
            <input class="form-control" type="text" name="content" id="content" value="{{ $post->content }}">
        </div>

        <div class="form-group">
            <label for="img">Immagine:</label>
            <input class="form-control" type="text" name="img" id="img" value="{{ $post->img }}">
        </div>

        <div class="form-group">
        <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id">
                
                @foreach($categories as $category)
                    <option value="{{$category->id ++}}" {{ $category->id == $post->category->id + 1 ? 'selected' : '' }}>{{ $category->category }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Salva">
        </div>

    </form>

</div>

@endsection
