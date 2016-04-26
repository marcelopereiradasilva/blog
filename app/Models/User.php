<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['chunk_email'];

    /*
     * Relacionamento um para muitos
     * Um Usuário tem um ou muitos Posts
     */

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function comments()
    {
        return $this->hasManyThrough('App\Models\Comment', 'App\Models\Post');
    }

    public function getChunkEmailAttribute($value){
        $arrayEmail = explode("@", $this->email);
        if (count($arrayEmail)!=2) return $value;
        $chunkEmail1 = substr($arrayEmail[0],0,2);
        $chunkEmail2 = $arrayEmail[1];
        return $chunkEmail1 . "...@" . $chunkEmail2;
    }
}
