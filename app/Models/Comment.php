<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'article_id',
        'user_id',
    ];
    
    /**
     * Relationship to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Relationship to Article
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
