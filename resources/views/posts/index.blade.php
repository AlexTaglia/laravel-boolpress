@extends('layouts.app')

@section('content')

<div class="container index-container">

<a href="{{ route('post.create') }}"><i class="far fa-plus-square"></i> Add post</a>

<table class="table post-table ">
        <thead class="text-uppercase">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Published on</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allPosts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td class="d-none d-md-block content">{{$post->content}}</td>
                    <td><img src="{{$post->img}}" alt="Image of {{$post->title}}"></td>
                    <td>{{$post->created_at}}</td>
                    <td class="text-center">
                        <a href="{{ route('post.show', $post) }}"><i class="fas fa-search-plus"></i></a>
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href=""><i class="far fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
