@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('posts.index') }}"><i class="fas fa-angle-left"></i></a>

    <div class="row justify-content-center">
        <div class="col-12">
    
            <div class="card mb-4">
                <h2>#{{$selectedPost->id}} - {{$selectedPost->title}}</h2>
                <p class="">{{$selectedPost->created_at}}</p>
                <div class="d-flex flex-wrap">
                        <div class="left col-4 p-0">
                            <img class="img-fluid" src="{{ $selectedPost->img }}" alt="{{$selectedPost->title}}"/>
                        </div>
                        <div class="right col-8">
                            <p>{{$selectedPost->content}}</p>
                        </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection
