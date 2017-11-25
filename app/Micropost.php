<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
/** //お気に入りしているuserを取得する
    public function favoreds(){
    return $this->belongsToMany(User::class, "user_favorite", "favorite_id", "user_id")->withTimestamps();
    }
    
    
    
     public function is_favor($postId) {
        return $this->favors()->where('favorite_id', $postId)->exists();
    }
*/
    
    
}
