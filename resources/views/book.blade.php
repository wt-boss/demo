@extends('layouts.app')

@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" value="Le Monde comme volonté et comme représentation">
    

    <input type="text" name="author" value="Arthur Schopenhauer">
    

    <input type="number" name="price" step="0.01" value="19.99">
    
    <textarea name="description">Œuvre majeure d'Arthur Schopenhauer regroupant 4 livres chacun traitant un thème essentiel : épistémologie, métaphysique, esthétique et éthique.
    </textarea>
    
    <button  class= "border-blue-4 border-2" type="submit" value="Envoyer" class="">envoyer</button>
</form>
    
@endsection



