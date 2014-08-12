<?php

class LoginController extends BaseController {

	public function index() {
		return Redirect::to('login');
	}

	public function showLogin() {
		return View::make('login');
	}

	public function doLogin() {
		$rules = array(
			'username'=>'required',
			'password'=>'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('login')
					->withErrors($validator)
					->withInput(Input::Except('password'));
		} else {
			$userdata = array('username'=>Input::get('username'), 'password'=>Input::get('password'));
			if(Auth::attempt($userdata)) {
				return Redirect::to('admin');
			} else {
				return Redirect::to('login');
			}
		}
	}

	public function doLogout() {
		Auth::logout();
		return Redirect::to('login')->with('message', 'Logout successfully.');
	}
}
