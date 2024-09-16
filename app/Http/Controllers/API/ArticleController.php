<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $articles = Article::all();
        return response()->json(['data' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article = Article::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'user_id' => Auth::id(),
        ]);

        return response()->json(['data' => $article]);
    }

    /**
     * Display the specified resource.
     */
    public function view(string $id)
    {
        $article = Article::where('id', $id)->first();
        return response()->json(['data' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, string $id)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);


        $article = Article::findOrFail($id);


        if ($article->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }


        $article->update([
            'title' => $validated['title'],
            'body' => $validated['body'],
        ]);


        return response()->json(['message' => 'Article updated successfully', 'article' => $article], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {

        $article = Article::findOrFail($id);


        if ($article->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }


        $article->delete();


        return response()->json(['message' => 'Article deleted successfully'], 200);
    }
}
