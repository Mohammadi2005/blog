<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'email', 'age', 'password'
    ];
    public function posts(){
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
}
