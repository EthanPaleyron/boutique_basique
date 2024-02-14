<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Command;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('dashboard', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('product', compact('article'));
    }
    public function addBasket($id)
    {
        $command = new Command;
        $command->save();
        return view('dashboard', compact('dashboard'));
    }
}
