<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*
     * Relacionamento um para um
     * Um comentário está relacionado para um post
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
    
    /*
     *
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
