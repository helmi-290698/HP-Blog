<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('Home',[
        "title" => "HOME"
    ]); 
});




Route::get('/about', function () {
    
    return view ('about',[
        "title" => "ABOUT",
        "name" => "Helmi paturohman ",
        "email" => "helmipaturohman69@gmail.com",
        "image" => "fotohelmi.jpeg"
    ]);
});
Route::get('/blog', [PostController::class,'index']);

//halaman singgle post

Route::get('blog/{post:slug}',[PostController::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Blog Categories',
        'categories' => Category::all(),
       
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
