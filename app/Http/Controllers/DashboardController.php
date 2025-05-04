<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('dashboard', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }
}