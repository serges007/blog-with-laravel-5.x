<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = ['title','slug','content','publication', 'counts_comment' ,'category_id', 'user_id', 'image_id'];

    public static function boot() {
        parent::boot();
        self::created(function ($post){
            $post->counts_comment = 0;
        });
        self::deleted(function ($post){
            $image  = $post->image;
            $image->delete();
            
            $comments = $post->comments;            
            foreach ($comments as $comment){
                $comment->delete();
            }
        });        
        return true;
    }    
    
    public function user() {
        return $this->belongsTo(User::class);    
    }    
    
    public function comments() {
        return $this->hasMany(Comment::class); 
    }  
    
    public function competences() {
        return $this->belongsToMany(Competence::class, 'post_competence' )->withPivot('niveau'); 
    }    
    
    public function category() {
        return $this->belongsTo(Category::class);   
    }        
    
    public function image(){
        return $this->belongsTo(Image::class); 
    }          
}
