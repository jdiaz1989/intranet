<?php

namespace App\Http\Controllers;
use Auth;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;



class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        
      $articles = Article::latest('published_at')->published()->get();
      return view('articles.index', compact('articles'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
    
        $request = $request->all();
        $request['user_id']= Auth::user()->id;
        Article::create($request);

        \Session::flash('flash_message','Your article has been created!');
        
        return redirect('articles');
    }


    public function show(Article $article)
    {
        
        return view('articles.show', compact('article'));
    }

 
    public function edit(Article $article)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }


    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }


    public function destroy($id)
    {
    
   
    }
}
