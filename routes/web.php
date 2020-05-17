<?php

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
    //$user = App\Test::create(['name' => 'Tester', 'email' => 'some@email.com']);
    //return view('welcome');
    return view('home');
});

Route::get('/punboon/{id}', function ($id) {
    //$user = App\Test::create(['name' => 'Tester', 'email' => 'some@email.com']);
    //return view('welcome');
    $boonid = $id;
    return view('form',compact('boonid'));
});


Route::get('/boon/{id}', function ($id) {
    $json = json_decode(file_get_contents('https://jaipungo.herokuapp.com/puncall/boon'.$id), true);
    return view('show',compact('json'));
});


Route::get('/join/{id}', function ($id) {
    if(App\Join::with('user')->find($id))
    {
        $join = App\Join::with('user')->find($id);
        $posts = $join->posts()->paginate(10);
        $stays = $join->stays;
        //$user = App\Test::create(['name' => 'Tester', 'email' => 'some@email.com']);
        return view('join',compact('join','posts','stays'));
    }else{
        return View::make('404');
    }
});
Route::get('/set/{name}', function ($name)  {
    //$user = App\Test::create(['name' => $name, 'email' => 'some@email.com']);
    return view('welcome');
});

// 404 Route Handler
Route::any('/{page?}',function(){
    return View::make('404');
  })->where('page','.*');