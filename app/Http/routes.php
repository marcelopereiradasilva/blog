<?php

Route::get('/', function (){
	return Redirect::to('/index.html');
});

Route::get('routes', function(){
    \Artisan::call('route.list');
    return "<pre>".\Artisan::output();
});