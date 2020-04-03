<?php

use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use App\User;
use App\Join;
use App\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| POST API Routes User
|--------------------------------------------------------------------------
*/

Route::get('users', function() {
    return User::all();
});
 
Route::get('users/{id}', function($id) {
    return User::find($id);
});

Route::post('users', function(Request $request) {
    return new User($request->all());
});

Route::put('users/{id}', function(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());
    return $user;
});

Route::delete('users/{id}', function($id) {
    User::find($id)->delete();
    return 204;
});

/*
|--------------------------------------------------------------------------
| POST API Routes Join
|--------------------------------------------------------------------------
*/
Route::get('joins', function() {
    return Join::all();
});
 
Route::get('joins/{id}', function($id) {
    return Join::with('user')->find($id);
});

Route::post('joins/{id}', function(Request $request, $id) {
    $user = User::find($id);
    $join = new Join($request->all());
    $user->create()->save($join);
    return  $user->create;
});

Route::post('editjoins/{id}', function(Request $request, $id) {
    $join = Join::findOrFail($id);
    $join->update($request->all());
    return $join;
});

Route::delete('joins/{id}', function($id) {
    Join::find($id)->delete();
    return 204;
});
/*
|--------------------------------------------------------------------------
| POST API Routes Post
|--------------------------------------------------------------------------
*/
Route::get('posts', function() {
    return Post::with('join')->with('author')->paginate(10);
});
 
Route::get('posts/{id}', function($id) {
    $post = Post::with('author')->with('join')->find($id);
    //$user = $post->right();
    return $post;
});

Route::post('posts/{id}/{joinid}', function(Request $request, $id, $joinid) {
    $user = User::find($id);
    $post = new Post($request->all());
    $join = Join::find($joinid);
    $user->posts()->save($post);
    $relation = $post->join()->associate($join);
    $relation->save();
    return  $user->post;
});

Route::post('editposts/{id}', function(Request $request, $id) {
    $post = Post::findOrFail($id);
    $post->update($request->all());
    return $post;
});

Route::delete('posts/{id}', function($id) {
    Post::find($id)->delete();
    return 204;
});
/*
|--------------------------------------------------------------------------
| POST API Routes Comment
|--------------------------------------------------------------------------
*/
Route::post('comments', function(Request $request) {
    return   $request->all();
});


Route::get('fcmtest', function() {
    $optionBuilder = new OptionsBuilder();
    $optionBuilder->setTimeToLive(60*20);

    $notificationBuilder = new PayloadNotificationBuilder('my title');
    $notificationBuilder->setBody('Hello world')
                        ->setSound('default');

    $dataBuilder = new PayloadDataBuilder();
    $dataBuilder->addData(['a_data' => 'my_data']);

    $option = $optionBuilder->build();
    $notification = $notificationBuilder->build();
    $data = $dataBuilder->build();
    //android
    //$token = "eJN2WRYJP4k:APA91bGrjsht9ga_ef4VcK9LA3QoYTbxpLZG5xCdsWZ0b2J4I-pVqraYVrMOOLajVawRQXiMXghTQJRJJbeR8g_TZaBhJQOIE23BDqj7QVCIXuF02EywRBAIFjfU7g18EFh2pdfZByia";
    //iOS
    $token = "cnxlBDgL_dE:APA91bEwgeYZgjnqDUKh-hCO7FeGrnuyQbh3TsMalKGjL9tvytrcGS91zEiqaByJd2Okk20FwdCkoHfQ3VkNkBbTfb3pbIxuv04kGKc4G4_X1BBsGOpnLCrVxQaqT7fgzn48iNeHGHof";
    $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);

    $downstreamResponse->numberSuccess();
    $downstreamResponse->numberFailure();
    $downstreamResponse->numberModification();

    // return Array - you must remove all this tokens in your database
    $downstreamResponse->tokensToDelete();

    // return Array (key : oldToken, value : new token - you must change the token in your database)
    $downstreamResponse->tokensToModify();

    // return Array - you should try to resend the message to the tokens in the array
    $downstreamResponse->tokensToRetry();

    // return Array (key:token, value:error) - in production you should remove from your database the tokens
    $downstreamResponse->tokensWithError();
});