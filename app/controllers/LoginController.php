<?php

use Illuminate\Support\MessageBag;

class LoginController extends BaseController {

    /**
     * Login construct
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', ['only' => ['postLogin']]);
    }

    /**
     * Login view
     *
     * @return Response
     */
    public function getLogin()
    {
        return View::make('user.login');
    }

    /**
     * Login action
     *
     * @return Response
     */
    public function postLogin()
    {
        $validator = Validator::make(Input::all(), ['username'=>'required', 'password'=>'required', 'remember_me'=>'max:2']);

        if ($validator->passes()) {

            $credentials = [
                    'username'  => Input::get('username'),
                    'password'  => Input::get('password'),
                    'estado'    => 1,
                ];

            if ( Auth::attempt($credentials, (bool)Input::get('remember_me')) ) {
                Session::put('user', Auth::user()->id);
                Session::put('email', Auth::user()->email);
                Session::put('login_date', Carbon::now());

                return Redirect::intended(route('user.profile'));
            }
        }

        Session::flash('mensaje', App::make('mensaje.login.error'));

        return Redirect::route('user.login')->withInput();
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