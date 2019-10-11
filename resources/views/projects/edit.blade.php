@if (Auth::user()->name === 'admin')
<h3>Create Post</h3>
<form action="/posts/{{ $post->id }}" method="POST" class="mb-2">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <input type="hidden" name="user_id" value="{{ $user_id ?? 2 }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>

        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $post->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endif
