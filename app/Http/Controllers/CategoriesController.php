<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories')); 
    }
    
    public function listArticleByCategory($id){
        $articles = Post::with(['comments','user','image','category','competences'])->paginate(2);
        $categories = Category::with(['posts'])->paginate(10);        
        $listeArticles = Post::with('user','comments')->where('category_id', $id)->paginate(10);
        if(!$listeArticles){
            return back();
        }
//        dump($listeArticles);
//        die();
        return view('blog.partials.listArticles', compact(['listeArticles','articles','categories'])); 
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Category::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $products = Category::with('Products')->find($id)->products();
        $categories = Category::all();
//        dump($categories);
//        die();        
        return view('admin.category.index', compact(['categories','products'])); 
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
    public function destroy($id)
    {
        //
    }
}
