<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{

	public function index()
	{
		$article = Articles::latest()->get();
	    return view('articless',['articles'=>$article]);
	}


    public function show($aid)
    {
       $article = Articles::findOrFail($aid);

       return view('articles',['articles'=>$article]);
    }

    public function create()
    {
    	return view('create');
    }

    public function store()
    {
    	$article = new Articles();
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');

    	$article->save();

    	return redirect('/articles');	

    }

     public function edit($aid)
    {
       $article = Articles::find($aid);

        return view('edit',['articles'=>$article]);
    }

     public function update($aid)
    {
        $article = Articles::find($aid);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }
}
