<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $articles = Article::where('author_name', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->latest()
                ->get();
        } else {
            $articles = Article::latest()->get();
        }

        return view('artikel', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('artikel.show', compact('article'));
    }

    // buat nampilin form buat artikel
    public function create()
    {
        return view('artikel.create');
    }

    // buat simpen artikel baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_name' => 'required|max:100',
            'profile_picture' => 'required|url',
            'content' => 'required',
            'header_image' => 'nullable|url'
        ]);

        Article::create([
            'title' => $validatedData['title'],
            'author_name' => $validatedData['author_name'],
            'profile_picture' => $validatedData['profile_picture'],
            'content' => $validatedData['content'],
            'header_image' => $validatedData['header_image'] ?? null,
            'created_at' => now()
        ]);

        if (empty($validatedData['author_name'])) {
            $validatedData['author_name'] = 'Guest Writer';
        }

        return redirect()->route('artikel.index')
            ->with('success', 'Artikel berhasil dipublikasikan!');
    }
}