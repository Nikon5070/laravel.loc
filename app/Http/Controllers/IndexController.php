<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class IndexController extends Controller
{

    public function index()
    {
        $articles = Article::select(['id', 'title', 'content'])->get();;
        return view('page')->with(['articleList' => $articles]);
    }

    public function show($id)
    {
//        $article = Article::find($id);
        $article = Article::select(['id', 'title', 'content'])->where('id', $id)->first();
//        dump($article);
        return view('article-content')->with(['article' => $article]);
    }


    public function add()
    {
        return view('add-content');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $data = $request->all();

        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect('/');
    }

}
