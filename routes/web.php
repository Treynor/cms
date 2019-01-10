<?php

use App\Post;
use App\User;

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
    return view('welcome');
});

// Route::get('/post/{id}/{name}', function ($id, $name) {
//   return "This is id ". $id . " " . $name;
// });

// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');
//
// Route::get('/post', 'PostsController@show_post');




/*
Database Raw SQL Queries
*/

// Route::get('/insert', function() {
//   DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });

// Route::get('/read', function() {
//   $results = DB::select('select * from posts where id = ?', [1]);
//
//   foreach($results as $post) {
//     return $post->title;
//   }
//
// });

// Route::get('/update', function() {
//   $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);
//
//   return $updated;
// });


// Route::get('/delete', function() {
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//   return $deleted;
// });

/*
  Eloquent
*/

// Route::get('/read', function() {
//   $posts = Post::all();
//
//   foreach($posts as $post) {
//     return $post->title;
//   }
//
// });


// Route::get('/find', function() {
//   $post = Post::find(2);
//   return $post->title;
// });


// Route::get('/findwhere', function() {
//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//   return $posts;
// });


// Route::get('/findmore', function() {
//   // $posts = Post::findOrFail(2);
//   //
//   // return $posts;
//
//   $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
// });


// Route::get('/basicinsert', function() {
//   $post = new Post;
//
//   $post->title = 'New Eloquent title insert';
//   $post->content = 'Wow, eloquent is really cool, look at this content';
//
//   $post->save();
// });

// Route::get('/basicinsert2', function() {
//   $post = Post::find(2);
//
//   $post->title = 'New Eloquent title insert 2';
//   $post->content = 'Wow, eloquent is really cool, look at this content 2';
//
//   $post->save();
// });

// Route::get('/create', function() {
//   Post::create(['title'=>'The create method', 'content'=>'Wow im learning a lot with Edwin']);
// });




// Route::get('update', function() {
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP Title', 'content'=>'New PHP content']);
// });


// Route::get('/delete', function() {
//     $post = Post::find(8);
//
//     $post->delete();
// });


// Route::get('/delete2', function() {
//   Post::destroy([4,5]);
// });

// Route::get('/softdelete', function() {
//     Post::find(6)->delete();
// });


// Route::get('/readsoftdelete', function() {
//   // $post = Post::find(6);
//   //
//   // return $post;
//
//   $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//   return $post;
// });

// Route::get('/restore', function() {
//   Post::withTrashed()->where('is_admin', 0)->restore();
//
//
// });

// Route::get('/forcedelete', function() {
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

/*
Eloquent relationships
*/

// One to one relationship
// Route::get('/user/{id}/post', function($id) {
//     return User::find($id)->post;
// });

// Route::get('/post/{id}/user', function($id) {
//   return Post::find($id)->user->name;
// });

// One to many relationship
route::get('/posts', function() {
  $user = User::find(1);

  foreach($user->posts as $post) {
    echo $post->title . "<br>";
  }
});
// Many to many relationships
Route::get('/user/{id}/role', function($id) {
  $user = User::find($id);

  foreach($user->roles as $role) {
    return $role->name;
  }

});
