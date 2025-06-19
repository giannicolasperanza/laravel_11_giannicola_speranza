<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleEditRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $img=null;

        if($request->file('img')){
            $img=$request->file('img')->store('img', 'public');
        }

        // dd($request->all());
        $article=Article::create([
        'title'=> $request->title,
        'text_article'=> $request->text_article,
        'img' => $img

        ]);
        
        return redirect('index')->with('message', 'Articolo caricato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // dd($article);
        return view('detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->update([


            $article->title = $request->title,
            $article->text_article= $request->text_article,
            
        ]);

        if($request->img){
            $request->validate(['img'=>'image']);
            $article->update([

            $article->img=$request->file('img')->store('img', 'public')
            ]);
        }

        return redirect('index')->with('message', 'modifica avvenuta con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('index');
    }



}
