@extends('layouts.app')

@section('content')

<div class="container">

<table class="table post-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Published on</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allPosts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td><img src="{{$post->img}}" alt="Image of {{$post->title}}"></td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{ route('post.show', $post) }}"><i class="fas fa-search-plus"></i></a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
