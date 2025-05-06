<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('detail.show', compact('article'));
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('detail', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'nullable',
        ]);
    
        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content ?? '',
            'user_id' => Auth::id(),
        ]);
        
    
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan!');
    }
}