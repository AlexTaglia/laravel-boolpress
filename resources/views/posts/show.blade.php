@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
    
            <div class="card mb-4">
                <h2>#{{$allPosts->id}} - {{$allPosts->title}}</h2>
                <p class="">{{$allPosts->created_at}}</p>
                <div class="d-flex flex-wrap">
                        <div class="left col-4 p-0">
                            <img class="img-fluid" src="{{ $allPosts->img }}" alt="{{$allPosts->title}}"/>
                        </div>
                        <div class="right col-8">
                            <p>{{$allPosts->content}}</p>
                        </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection
