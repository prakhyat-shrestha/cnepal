<?php

namespace cnepal\Http\Controllers;

use Illuminate\Http\Request;
use cnepal\Http\Requests;
use cnepal\Http\Controllers\Controller;
use Illuminate\Pagination\LenghAwarePaginator;
use Illuminate\Support\Facades\Auth;

use cnepal\Article;
use cnepal\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{

    /*initialize auth middleware*/

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
        
    }


    /*get all articles and display in homepage*/

    public function index()
    {
    
          $articles = Article::paginate(3,
                                array('id', 'title', 'body',
                                    'excerpt','published_at'));

             return view('articles.index',compact('articles'));
    }


    /*display create articles page */

    public function create()
    {
       return view('articles.create');

    }


    /*show individual article page*/

    public function show($id)
    {
            $article = Article::find($id);

                return view('articles.show', compact('article'));

    }


    /*creates a new article in the database*/
    public function store(CreateArticleRequest $request)
    {
            Article::create([
            'title' => $request['title'],
            'body' => nl2br($request['body']),
            'excerpt' => $request['excerpt'],
            'published_at' =>  date("Y-m-d H:i:s"),
            ] );

             return redirect('/');


    }

    /*display the edit page for an article*/

    public function edit($id)
    {
          
            $article = Article::find($id);

                return view('articles.edit', compact('article'));

    }

    /*get input from request and persist the value in the database*/

    public function update($id,Request $request)
    {
            $article = Article::find($id);
            $article->title = $request['title'];
            $article->body =  nl2br($request['body']);
            $article->excerpt = $request['excerpt'];
            $article->published_at =  date("Y-m-d H:i:s");

            $article->save();

                return redirect ('/');  

    }


    /*delete an article and return to homepage*/

    public function destroy($id)
    {
            $article = Article::find($id);
            $article->delete();

             return redirect('/');
    }

 
}
