<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to laravel!';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=> 'Usluge',
            'services'=> ['Prodaja' , 'Korisnička potpora' , 'Jednostavnost pristupa online tržistu']
        );
        return view('pages.services')->with($data);
    }
    public function baskets($id){
        $post =  Post::find($id);
        return view('pages.baskets')->with('post',$post);
    }
    public function basket(){
        $title='Basket'; 
        return view('pages.basket')->with('title',$title);
    }
    
}
