<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = DB::table('articles')->get();
        // $categories = DB::table('categories')->get();
        $articles = \App\Article::all();
        $categories = \App\Category::all();
        return view('article.home', ['articles' => $articles], ['categories' => $categories]);
    }

    public function indexCategoryBased(\App\Category $categories)
    {
        // $articles = DB::table('articles')->get();
        // $categories = DB::table('categories')->get();
        $articles = \App\Article::all();
        return view('category', ['articles' => $articles], ['categories' => $categories]);
    }

    public function indexUserBased()
    {
        $articles = \App\Article::all();
        return view('blog', ['articles' => $articles]);
    }

    public function indexUserBasedInUserGreeting()
    {
        $articles = \App\Article::all();
        $categories = \App\Category::all();
        return view('user_greeting', ['articles' => $articles], ['categories' => $categories]);
    }

    public function indexUserBasedInAdminGreeting()
    {
        $articles = \App\Article::all();
        $categories = \App\Category::all();
        return view('admin_greeting', ['articles' => $articles], ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required|max:20',
            'category_id' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        \App\Article::create($request->all());
        return redirect('/user/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Article $articles)
    {
        $categories = \App\Category::all();
        return view('article.fullstory', ['articles' => $articles], ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Article $articles)
    {
        \App\Article::destroy($articles->id);
        return redirect('/user/blog');
    }
}
