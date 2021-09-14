@extends('layouts.app')

@section('content')
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
    
            @foreach($allPosts as $post)
            <div class="card mb-4">
                    <h2>{{$post->title}}</h2>
                    <p class="">{{$post->created_at}}</p>
                    <div class="d-flex flex-wrap">
                        <div class="left col-4 p-0">
                            <img class="img-fluid" src="{{ $post->img }}" alt="{{$post->title}}"/>
                        </div>
                        <div class="right col-8">
                            <p>{{$post->content}}</p>
                        </div>
                        <div class="bottom col-12 mt-4">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

-->

@endsection
