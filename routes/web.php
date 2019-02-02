<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/hostel', 'HostelController');

Route::post('/getCity', function(Request $request){
    return App\City::where('state_id', $request->input('id'))->get();
})->name('getCity');

Route::post('/getArea', function(Request $request){
return App\Area::where('city_id', $request->input('id'))->get();
})->name('getArea');

Route::post('/getHostel', function(Request $request){
return App\Hostel::where('area_id', $request->input('id'))->get();
})->name('getHostel');