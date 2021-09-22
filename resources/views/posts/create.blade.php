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

    <form action="{{route('posts.store')}}" method='post'>
        @csrf
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input class="form-control" type="text" name="title" id="title" maxlength="255">
        </div>

        <div class="form-group">
            <label for="title">Contenuto:</label>
            <input class="form-control" type="text" name="content" id="content">
        </div>

        <div class="form-group">
            <label for="img">Immagine:</label>
            <input class="form-control" type="text" name="img" id="img">
        </div>

        <div class="form-group">
        <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id">
            <option selected>Scegli una categoria...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{ $category->category }}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Salva">
        </div>

    </form>

</div>

@endsection
