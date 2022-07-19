@extends('layouts.app')

@section('content')
<h1>liste des article</h1>
@if($posts->count()>0)
    @foreach($posts as $post)
        <br>
        <a href="{{route('post.show' , ['id'=>$post->id])}}"><h2>{{$post->title}}</h2></a>
    @endforeach
        
@else
<h2>aucun post</h2>
@endif
@endsection