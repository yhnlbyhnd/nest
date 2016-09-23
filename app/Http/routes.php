Route::get('/', function () {
   return view('home');
});

Route::post('foo/bar', function () {
   return 'Hello World';
});

Route::put('foo/bar', function () {
   //
});

Route::delete('foo/bar', function () {
   //
});
