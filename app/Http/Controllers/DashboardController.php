<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua artikel dari database
        $articles = Article::all();

        // Kirim data artikel ke view dashboard
        return view('dashboard', compact('articles'));
    }

    public function show($id)
    {
        // Ambil artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Kirim data artikel ke view
        return view('articles.show', compact('article'));
    }
}