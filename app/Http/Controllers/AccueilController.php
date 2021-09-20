<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Image;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AccueilController extends Controller
{
    public function index(){
        $books= Book::find(15);
        
        
        //dd($books->image->path);
        return view('index', compact('books'));
    }

    public function create(){
        return view('form');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'titre' => 'required|max:255',
            'auteur' => 'required',
            'description' => 'required',
            'date'=>'required',
            'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        // dd($validator->errors()->all());

         

        if (!$validator->fails()) {
            
        
        $author= Author::find($request->auteur);
        $filename=time().'.'.$request->image->extension();

        if($author)
        {
        
        
       $path= $request->image->storeAs('images',$filename,'public');
       $book= Book::create([
            'title'=>$request->titre,
            'author_id'=>$request->auteur,
            'description'=>$request->description,
            'date_of_publication'=>$request->date,
        ]);
        $image= new Image();
        $image->path = $path;
        $book->image()->save($image);
       // $book->author()->save($request->auteur);
       return back()
       ->with('success','Le livre a été créé avec succes.')
       ->with('file', $filename);
        //dd('livre créé');
    }
    else {
        return back()
        ->with('echec','l\'auteur que vous avez mis n\'est pas disponible')
        ->with('file', $filename);
    }

    }
    else{
        return back()
            ->withErrors($validator)
            ->withInput();
        
    }
}
}
