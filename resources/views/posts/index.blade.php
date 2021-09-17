@extends('layouts.app')

@section('content')

<div class="container index-container">

<a href="{{ route('posts.create') }}"><i class="far fa-plus-square"></i> Add post</a>

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
                    <td>{{$post->content}}</td>
                    <td><img src="{{$post->img}}" alt="Image of {{$post->title}}"></td>
                    <td>{{$post->created_at}}</td>
                    <td class="text-center">
                        <a href="{{ route('posts.show', $post) }}">
                            <button>
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </a>

                        <a href="{{ route('posts.edit', $post) }}">
                        <button>
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        </a>
                        
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
