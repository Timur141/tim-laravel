<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->published()->get();
        return view('index', compact('articles'));
    }

    public function about()
    {
        return view('about.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $all = $this->validate(request(), [
            'slug' => 'required|unique:articles|regex:/^[a-zA-Z0-9-_]+$/',
            'name' => 'required|min:5|max:100',
            'short_description' => 'required|max:255',
            'long_description' => 'required',
            'body' => 'required',
        ]);
        $all['created_at'] = ((request()->get('published') === 'on') ? time() : null);
        Article::create($all);
        return redirect(route('main'));
    }
}
