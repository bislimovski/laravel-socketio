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

Route::get('/', function () {
    return view('welcome');
});


//the messages will be shown from this route
Route::get('start', function () {
    return view('start');
});

//the event will be fire from this route
Route::get('socket', function(){
	event(new UserRegistered(new App\User(['name' => 'Ivan'])));
	return 'Done'; 
});


use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRegistered implements ShouldBroadcast
{
	public $user;

	public function __constructor($user)
	{
		$this->user = $user;
	}

	public function broadcastOn()
	{
		return ['user-channel'];
	}
}


