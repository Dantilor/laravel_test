@extends('layout')
@section('content')
<h3>Contact</h3>
<p>
    Name: {{$contacts['name']}}
</p>
<p>
    Adress: {{$contacts['adress']}}
</p>
<p>
    Phone: {{$contacts['phone']}}
</p>
<p>
    Mail: {{$contacts['mail']}}
</p>
@endsection