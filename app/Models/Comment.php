<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    protected $fillable = ['content', 'user_id', 'post_id'];
    
    public static function boot() {
        parent::boot();
        self::created(function ($comment){
            $comment->post->counts_comment = $comment->post->comments->count();
            $comment->post->save();
        });
        self::deleted(function ($comment){
            if($comment->post){
                $comment->post->counts_comment = $comment->post->comments->count();
                $comment->post->save();                
            }
        });        
        return true;
    }
    
    public function post() {
        return $this->belongsTo(Post::class);   
    }

    public function user() {
        return $this->belongsTo(User::class);    
    }
}

