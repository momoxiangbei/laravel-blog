<?php
class AuthController extends BaseController{

	public function getLogin(){
		return View::make('Auth.login');

	}
	public function postLogin(){
		$username = Input::get('username');
		$password= Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::route('pages');
		}else{
			return "用户名或密码错误";
		}
	}
}
