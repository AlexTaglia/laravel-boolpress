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

    <form action="{{route('post.store')}}" method='post'>
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
            <input type="submit" value="Salva">
        </div>

    </form>

</div>

@endsection
