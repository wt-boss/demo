<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


    public function index(){
        $posts= Post::all();
        return view('articles' , compact('posts'));
    }
    
    public function show ($id){
        $post =Post::findOrfail($id);

        return view('article' , compact('post'));

    }

    public function create (){

        return view('create');
    }


    public function store(Request $request){

         $request->validate([
             'title'=>'required',
             'content'=>'required'

         ]);

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]);
        dd("create");
 
    }

    public function contact(){
        return view('contact');
    }

}

