@extends('layout')
@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->desc}}</p>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/article/{{$article->id}}/edit" class="btn btn-link">Edit</a>
    <form action="/article/{{$article->id}}" method="post">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-link">Delete</button>
    </form>
    </div>
  </div>
  <h2>Comments</h2>
@foreach($article->comments as $comment)
    <div style="margin-bottom: 10px;">
        <strong>{{ $comment->user->name }}:</strong> 
        <p>{{ $comment->body }}</p>
        <small>{{ $comment->created_at->diffForHumans() }}</small>
    </div>
@endforeach
@auth
    <form action="{{ route('comments.store', $article) }}" method="POST">
        @csrf
        <div>
            <label for="body">Leave a comment:</label>
            <textarea name="body" id="body" rows="3" required></textarea>
        </div>
        <button type="submit">Post Comment</button>
    </form>
@endauth
</div>
@endsection