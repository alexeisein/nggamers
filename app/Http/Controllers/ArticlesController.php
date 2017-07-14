<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;
use Session;

class ArticlesController extends Controller
{
    public function __contruct()
    {
        $this->middleware('admin', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the Articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest('id')->paginate(5);
        return view('articles.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category_name', 'id');
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        flash()->success("Blog successfully created !");
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified Article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.view_article', compact('article'));
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::pluck('category_name','id');
        return view('articles.edit_article', compact(['article', 'categories']));
    }

    /**
     * Update the specified Article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($request->input('slug') == $article->slug) {
            $this->validate($request,[
                'title' => 'required|max:225',
                'body' => 'required',
            ]);
        }else{
            $this->validate($request,[
                'title' =>'required|max:225',
                'body' => 'required',
                'slug' => 'required|unique:articles,slug|alpha_dash|min:5|max:255',
            ]);
        }
        $article = Article::findOrFail($id);
        $article->update($request->all());       

        flash()->success('Blog updated successfully');
        return redirect()->route('articles.show', $article->id);
    }

    /**
     * Remove the specified Article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        flash()->success('Blog successfully deleted');
        return redirect()->route('articles.index');
    }
}
