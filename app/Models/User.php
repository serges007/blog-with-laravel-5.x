<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Vérification rôle administrateur
     *
     * @return bool
     */
    public function isAdmin(){
        return $this->admin == 1;
    }    

    public function setPassword($password){
        $this->update([
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }    
        
    public function address(){
        return $this->hasMany(Address::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
    
    public function posts() {
        return $this->hasMany(Post::class); 
    }
    
    public function comments() {
        return $this->hasMany(Comment::class);  
    }    
    
    public function image(){
        return $this->belongsTo(Image::class); 
    }         
}
