<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Jobs',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
// Route::get('/hello', function () {
//     return response('hello');
// });

// Route::get('/posts/{num}', function ($id){
//     return response('Post ' . $id);
// })->where('num', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return ($request->name);
// });