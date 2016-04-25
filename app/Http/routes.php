<?php

use  App\Models\User;
use App\Models\Post;

Route::get('/users_posts', function (){
    $users = User::all();

    $users = User::all();
    foreach ($users as $user) {
        echo "<h1>{$user->name}</h1>";
        echo "<ul>";
        foreach ($user->posts as $post) {
            echo "<li>{$post->title}</li>";

            if ( count($post->tags) > 0 )
            {
                echo "Tags:<ol>";
                foreach ($post->tags as $tag) {
                    echo "<li>$tag->title</li>";
                }
                echo "</ol>";
            }
        }
        echo "</ul>";
    }
});
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $users = DB::table('users')
        ->where('name', 'like', 'T%')
        ->get();
});

Route::get('/users', 'UserController@getAll');

Route::controller("user", "UserController");

//Resource:
Route::resource('user', 'UserController');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

