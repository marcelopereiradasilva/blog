<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /*
     * Relacionamento muitos para muitos
     * Uma tag pode estar em vários posts
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
