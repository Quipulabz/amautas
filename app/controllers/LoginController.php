<?php

use Illuminate\Support\MessageBag;

class LoginController extends BaseController {
	/**
	 * Login view
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		$errors = new MessageBag();

        if ($old = Input::old('errors')) {
            $errors = $old;
        }

        $data['errors'] = $errors;

        return View::make('user.login', $data);
	}

	/**
	 * Login action
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		$validator = Validator::make(Input::all(), ['username'=>'required', 'password'=>'required']);

        if ($validator->passes()) {

            $credentials = [
                    'username' => Input::get('username'),
                    'password' => Input::get('password'),
                ];

            if (Auth::attempt($credentials)) {
            	Session::put('user', Auth::user()->id);
            	Session::put('email', Auth::user()->email);
            	Session::put('login_date', Carbon::now());

                return Redirect::intended(route('user.profile'));
            }
        }

        $data['errors'] 	= new MessageBag(['password' => array('Usuario y/o contraseña incorrecto')]);

        $data['username'] 	= Input::get('username');

        return Redirect::route('user.login')->withInput($data);
	}

	/**
	 * Logout action
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		Auth::logout();
		Session::flush();
        return Redirect::route('/');
	}
}