<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Symfony\Component\Routing\Router;

Route::get('/', HomeController::class);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'hello']);



/*
Route::get('/p', function (){
    return "Paz";
});


Route::get('/post/create', function(){
    
});


Route::get('/post/{post}', function($post){

   
});
*/

Route::get('/delete/{hello}/{bey?}', function($hello, $bey = null){
    if ($bey){
        return "Yo mostrare la ruta {$hello} pero de {$bey}";
    }

    return "Yo mostare la ruta {$hello}";
});





/*Route::get('/post/{post}/{category}', function($post, $category){
    return "Aqui se mostrara el post {$post} de la categoria {$category}";
});
*/



//Get
//Post
//Put
//Patch
//Delete