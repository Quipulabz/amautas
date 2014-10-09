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
        return View::make('user.login');
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

        Session::flash('mensaje', App::make('mensaje.login.error'));

        return Redirect::route('user.login')->withInput()->withErrors($validator);
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