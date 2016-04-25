<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*
     * Relacionamento um para um
     * Um post possui somente um usuário
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /*
     * Relacionamento um para muitos
     * Um Post pode ter diversos comentários
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /*
     * Relacionamento muitos para muitos
     * Um Post pode ter várias tags
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
