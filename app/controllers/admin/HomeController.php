<?php

namespace Admin;

use BaseController, View;

class HomeController extends BaseController {

	//protected $layout = 'admin.layouts.main';

	public function dashboard() {
		/*$this->layout->title = "Dashboard";
		$this->layout->content = View::make('admin.dashboard');*/
		return View::make('admin.dashboard')
			->with('title', 'Dashboard');
	}
}
