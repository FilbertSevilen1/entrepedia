<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->where('author_id', Auth::user()->id)->get();

        return view('author_home', compact('articles'));
    }

    public function show($id) {
        $article = Article::where('id', $id)->first();

        return view('article', compact('article'));
    }

    public function addPage() {
        return view('add_article');
    }

    public function insert(Request $request) {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'file'=>'required|file|image'
        ]);

        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalExtension();

        Storage::putFileAs('public/image/article', $image, $imageName);
        $imageName = 'image/article/'.$imageName;

        Article::create([
            'title'=>$request->title,
            'details'=>$request->content,
            'imgurl'=> $imageName,
            'author_id'=>Auth::user()->id,
        ]);
        return redirect('author')->with('message', 'Article successfully created!');
    }

    public function editPage($id) {
        $article = Article::where('id', $id)->first();
        return view('edit_article', compact('article'));
    }

    public function update(Request $request) {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'file'=>'required|file|image'
        ]);

        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalExtension();

        if (Storage::exists('public/'.$request->old_img)) {
            Storage::delete('public/'.$request->old_img);
        }

        Storage::putFileAs('public/image/article', $image, $imageName);
        $imageName = 'image/article/'.$imageName;

        Article::where('id', $request->id)->update([
            'title'=>$request->title,
            'details'=>$request->content,
            'imgurl'=> $imageName,
        ]);
        return redirect('author')->with('message', 'Article successfully updated!');
    }

    public function delete(Request $request) {
        $article = DB::table('articles')->where('id', $request->id);
        $article_img = $article->first();
        if (Storage::exists('public/'.$article_img->imgurl)) {
            Storage::delete('public/'.$article_img->imgurl);
        }

        $article->delete();

        //redirect
        return redirect()->back()->with('message', 'Article successfully deleted!');
    }
}
