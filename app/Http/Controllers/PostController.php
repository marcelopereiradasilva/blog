<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Retorna uma quantidades de posts
     * em ordem cronológica
     * @param int $n A quantidade de posts
     * @return Collection Uma coleção de posts
     */
    public function last($n=3)
    {
        return Post::select('id', 'title', 'active')
            ->with(['tags'=>function($q){
                $q->select('id','title');
            }])
            ->with(['comments'=>function($q){
                $q->active()->select('active','post_id');
            }])
            ->orderBy('id', 'desc')
            ->take($n)
            ->get();
    }
}
