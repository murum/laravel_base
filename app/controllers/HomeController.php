<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends BaseController {

	protected $layout = 'templates.layout.master';
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function get_index()
	{
		$this->layout->content = View::make('static.about');
	}
}