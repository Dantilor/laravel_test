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
</div>
@endsection