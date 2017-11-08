<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class IndexController extends Controller
{

    public static function index()
    {

        $articles = Article::select(['id','title','content'])->get();
//        dump($articles);
        return view('page')->with(['articleList' => $articles]);
    }

}
