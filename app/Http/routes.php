<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Post;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/insert', function () {
	DB::insert('INSERT INTO posts(title, content) VALUES(?, ?)', ['Post title 03', 'Post desc 03']);
	return 'Insert Query!';
});

Route::get('/read', function () {
	$posts = Post::all();
	foreach ($posts as $post) {
		return $post->title;
	}
});

Route::get('/update', function () {
	$result = DB::update('UPDATE posts set title = "Post title delete" WHERE id = ?', [2]);

	return $result;
});

Route::get('/delete', function () {
	$result = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

	if ($result) {
		echo "Item Deleted!";
	}
});

/* Find by where */
Route::get('/findWhere', function () {
	
	$post = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();

	return $post;
});

/* Find with id */
Route::get('/find', function () {
	$post = Post::find(3);

	return $post;
});


Route::resource('posts', 'PostsController@index');
Route::get('/contact/{name}/{email}/{phone}', 'TestController@contact');