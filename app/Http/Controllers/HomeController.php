<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $main_articles = Article::latest('id')->get()->take(3);
        $other_articles = Article::latest('id')->get()->skip(3);

        return view('home', compact('main_articles', 'other_articles'));
    }

    public function search(Request $request) {
        $articles = null;

        if ($request->param) {
            $articles = Article::where('title', 'LIKE', '%'.$request->param.'%')->orWhere('details', 'LIKE', '%'.$request->param.'%')->get();
        }   else {
            $articles = Article::all();
        }

        return view('search', compact('articles'));
    }
}
