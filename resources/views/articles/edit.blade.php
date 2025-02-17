@extends('layout')
@section('content')
<form action="/article/{{$article->id}}" method="post">
@csrf
@method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">Date public</label>
    <input name="datePublic" type="date" class="form-control" id="" value="{{$article->datePublic}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="" value="{{$article->title}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea name="desc" class="form-control" id="">{{$article->desc}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection