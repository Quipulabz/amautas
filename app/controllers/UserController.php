<?php


class UserController extends BaseController {

    private $validaciones = [
        'email'     =>'required|email|unique:user',
        'username'  =>'required|alpha_num',
        'password'  =>'required|confirmed'
    ];

    private $mensajes = [
        'email.unique'  => 'El email ya existe',
        'email'         => 'El email es incorrecto',
        'required'      => 'Tiene campos requeridos',
        'confirmed'     => 'Las contraseñas no son iguales',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        dump(Session::all());
        return View::make('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), $this->validaciones, $this->mensajes);

        if ($validator->passes()) {

            $user = new User;

            $user->username     = Input::get('username');
            $user->email        = Input::get('email');
            $user->password     = Hash::make(Input::get('password'));
            $user->estado       = 1;
            $user->save();

            Auth::loginUsingId($user->id);

            Session::flash('mensaje', App::make('mensaje.creacion'));

            return Redirect::route('user.profile');
        }

        $error_mensaje = ['tipo'=>'alert-danger', 'mensaje'=> implode(', ', $validator->messages()->all())];

        Session::flash('mensaje', $error_mensaje);

        return Redirect::route('user.register')->withInput()->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Shows user profile and posts.
     *
     * @return Response
     */
    public function profile()
    {
        $empleos = Empleo::where('user_id', Session::get('user'))->get();

        $pais = Pais::find(1);

        $data['empleos']    = $empleos;
        $data['pais']       = $pais;

        return View::make('user.profile')->with($data);
    }

}