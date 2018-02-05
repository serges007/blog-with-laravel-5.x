<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Newsletter;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $articles = Post::with(['comments','user','image','category','competences'])->paginate(1);
        return view('blog.index', compact('articles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
        $articles = Post::with(['comments','user','image','category','competences'])->paginate(2);
        $categories = Category::with(['posts'])->paginate(10);
        $article = Post::with('user','comments')->where('slug', $slug)->firstOrFail();
        return view('blog.partials.article', compact(['article','articles','categories']));
    }

    public function findByArticle(Request $request) {
        $data = $request->input('search');
        $articles = Post::with(['comments','user','image','category','competences'])->paginate(2);
        $categories = Category::with(['posts'])->paginate(10);        
        $result = Post::with(['comments','user','image','category','competences'])
                        ->where('title', $data)
                        ->orWhere('title', 'like', '%'.$data.'%')
                        ->paginate(10);
        return view('blog.partials.search', compact(['result','articles','categories']));
    }
    
    public function newsletter(Request $request) {
        $news =  new \App\Models\Newsletter();  
        $news = Newsletter::firstOrNew([
                    'email' => $request->input('email')
                    ]);
        $news->save();
        return redirect()->back();
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
    
    public function admin() {
        $posts = Post::with(['comments','user','image','category','competences'])->paginate(2);
        return view('admin.blog.index', compact('posts')); 
    }
}
