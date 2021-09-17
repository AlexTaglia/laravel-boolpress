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
                        <!-- Show -->
                        <a href="{{ route('posts.show', $post) }}">
                            <button>
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </a>

                        <!-- Edit -->
                        <a href="{{ route('posts.edit', $post) }}">
                        <button>
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        </a>
                        
                        <!-- Delete -->
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>


                        <!--Modal Delete -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn" data-toggle="modal" data-target="#confirmModal{{$post->id}}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="confirmModal{{$post->id}}" aria-labelledby="confirmModalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare il post? #{{$post->id}}
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

                                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>



            @endforeach
        </tbody>
    </table>

</div>
@endsection
