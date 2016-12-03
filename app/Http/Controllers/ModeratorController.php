<?php namespace App\Http\Controllers;
use App\code_submissions;
use App\User;
use Auth;
class ModeratorController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Moderator Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$submissions= User::with('codes')->get();
		//$submissions = code_submissions::all();
		//return $submissions;
		return view('moderator_dashboard')->with('submissions',$submissions);
	}

}