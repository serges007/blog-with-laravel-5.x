<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model {
    
    protected $fillable = [
        'name',
    ];
    
    public function products() {
        return $this->belongsToMany(Product::class, 'product_competence')->withPivot('niveau');  
    }
    
    public function articles() {
        return $this->belongsToMany(Post::class, 'post_competence' )->withPivot('niveau');  
    }    
}
