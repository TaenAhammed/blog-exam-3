@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    @if (Auth::user()->name === 'admin')
                    <h3>Create Post</h3>
                    <form action="/posts" method="POST" class="mb-2">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{ $user_id ?? 2 }}">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <h2>Delete Post</h2>
                    <ul class="list-group">
                        @foreach ($posts as $post)
                        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $post->title }}
                            <form action="posts/{{ $post->id }}/edit" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="badge badge-danger badge-pill">u</button>
                            </form>
                            <form action="posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge badge-danger badge-pill">x</button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
