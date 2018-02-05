<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    protected $fillable = [
        'url',
    ];

    public function user(){
        return $this->hasOne(User::class); 
    }    
    
    public function article(){
        return $this->hasOne(Post::class);  
    }    
    
    public function product(){
        return $this->hasOne(Product::class);  
    }    
}
