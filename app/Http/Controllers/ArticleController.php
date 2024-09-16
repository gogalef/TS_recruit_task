<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function list()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(2);
        return view('article.list', ['articles' => $articles]);
    }
    public function view($id)
    {
        $article = Article::where('id', $id)->first();
        return view('article.view', ['article' => $article]);
    }
}
