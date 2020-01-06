<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('show', ['article' => $article]);
    }
    public function showAll()
    {
        return view('articles', ['articles' => Article::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Article $article)
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit($id)
    {
        return view('edit', ['article' => Article::find($id)]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function delete()
    { }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
