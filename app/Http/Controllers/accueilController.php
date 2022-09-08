<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class accueilController extends Controller
{
function index(){
    $articles= Article::take(5)->get();
    

    return view('accueil',compact(['articles']));
}
    
    
}
