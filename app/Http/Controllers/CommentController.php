<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $comments = Comment::with('user')->latest()->get();
        } else {
            $comments = collect();
        }

        return view('comments.index', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::user()->role === 'admin' || Auth::id() === $comment->user_id) {
            $comment->delete();
            return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus komentar ini.');
    }
}
