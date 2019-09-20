@extends('layouts.app')
@section('posts')

<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
    
@endsection