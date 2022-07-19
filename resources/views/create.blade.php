@extends('layouts.app')
@section('content')
 <h1>creer un post</h1>
 <br>


 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li class="text-red-500">{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif


 <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" class="border-blue-600 border-2">
    @error('title')
        <div class="text-red-500">veuillez saisir un texte correct</div>        
    @enderror
    <textarea name="content" id="" cols="30" rows="10" class="border-blue-600 border-2"></textarea>
    <button type="submit"  value="create" class="border-2 border-blue-400">CREATE</button>


</form>

@endsection 