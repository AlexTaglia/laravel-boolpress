@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
    
            @foreach($allPosts as $post)
                <div class="card mb-4">
                    <div class="d-flex flex-wrap">
                        <div class="left col-4">
                            <img class="img-fluid" src="{{ $post->img }}" alt="{{$post->title}}"/>
                        </div>
                        <div class="right col-8">
                            <h2>{{$post->title}}</h2>
                        </div>
                        <div class="bottom col-12 mt-4">
                            <p>{{$post->content}}</p>
                            <p class="">{{$post->created_at}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

<div class="container">


</div>

</div>
@endsection
