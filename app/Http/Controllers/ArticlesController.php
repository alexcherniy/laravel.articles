<?php

namespace App\Http\Controllers;


use App\Http\Requests\ArticleRequest;
use Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
   public function index()
   {
       $articles = Article::latest('published_at')->published()->get();

       return view('articles.index', compact('articles'));
   }

    public function show(Article $article)
    {



        return view('articles.show', compact('article'));
    }

    public function create(){

        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        $input = Request::all();


        Article::create(Request::all());

       // \Session::flash('flash_message', 'Статья была создана');
     //   \Session::flash('flash_message_important', true);

        return redirect('articles')->with([
            'flash_message' => 'Статья была создана'
        ]);
    }

    public function edit(Article $article)
    {

        return view ('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
      
        $article->update($request->all());
        return redirect('articles');
    }

}
