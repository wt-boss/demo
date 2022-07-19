@extends('layouts.app')
@section('content')
<h2>{{$post->content}}</h2>
    @forelse ($post->comments as $item)
<br>
        <span>{{ $item->content}} creer le {{$item->created_at->format(' d m y')}}</span>

        @empty
            <span>aucun commentaiire</span>
        
        
    @endforelse
    <hr>
    
    <span>{{$post->image?$post->image->path :"aucune image"}}</span>

    @forelse ($post->tags as $item)
        <div class=""><span>{{$item->nom}}<span></div>
        
    @empty
        
       <div class=""><span>aucun tags</span></div> 
        
    @endforelse

@endsection
