<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $fillable = ['title', 'content', 'user_id', 'views', 'status'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
