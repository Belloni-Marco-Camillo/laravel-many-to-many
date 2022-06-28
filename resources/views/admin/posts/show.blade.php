@extends('layouts.admin')

@section('content')
    <h1>numero di post {{$post['id']}}</h1>
    <img src="{{asset('storage/' . $post->cover_img)}}" alt="" >
@endsection