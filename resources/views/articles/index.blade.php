@extends('layout')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Desc</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article['datePublic']}}</th>
      <td><a href="/article/{{$article->id}}">{{$article['title']}}</a></td>
      <td>{{$article['desc']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$articles->links()}}
@endsection