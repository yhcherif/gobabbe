<?php

class SessionController extends \BaseController {


    public function __construct(){
        $this->beforeFilter('guest');
        $this->beforeFilter('crsf', ['on'=>'post']);

    }
	/**
	 * Display a listing of the resource.
	 * GET /session
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::check()){
            return Redirect::home();
        }
		return View::make('pages.login');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /session/create
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Auth::check()){
            return Redirect::home();
        }
		return View::make('pages.register');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /session
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validation
        $validate = Validator::make(Input::all(), User::$rules);

        if($validate->fails()){
            return Redirect::back()->withInput()->withErrors($validate->messages());
        }
        // Store

        $user = User::create(Input::all());

        Auth::login($user);

        // Login and Redirect
        return Redirect::home();
	}

	/**
	 * Login the specified resource.
	 * GET /session/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function login()
	{

        // Validation
        $validate = Validator::make(Input::all(), User::$rules);

//        if($validate->fails()){
//            return Redirect::back()->withInput()->withErrors($validate->messages());
//        }
//        dd('After validation');
        // Store
        if(Auth::attempt(Input::only('email','password'), true)){
            // Login and Redirect
            return Redirect::home();
        }else{
            return Redirect::back()->withInput()->withFlashMessage('Invalid credentials');
        }

	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /session/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        return Redirect::home();
	}

}