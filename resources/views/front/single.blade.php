@extends('layouts.master')

@section('content')
<h2>{{$post->title}}</h2>

<img src="{{url($post->url_thumbnail)}}" alt="">

<p>{{$post->content}}</p>
@endsection