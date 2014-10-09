<?php

use Illuminate\Support\MessageBag;

class EmpleoController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    /**
     * Validaciones para la entidad Empleo
     */
    protected $validaciones = ['titulo'=>'required', 'sueldo'=>'required|numeric', 'departamento'=>'required', 'especialidad'=>'required', 'descripcion'=>'required'];


    public function __construct()
    {
        $this->beforeFilter('auth', ['only' => ['edit', 'create', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $empleos = Empleo::where('estado', 1)->get();

        $data['empleos'] = $empleos;
        $data['total_empleos'] = $empleos->count();
        return View::make('empleo.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('empleo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), $this->validaciones);

        if ($validator->passes()) {

            $empleo = new Empleo;

            $empleo->titulo         = Input::get('titulo');
            $empleo->especialidad_id   = Input::get('especialidad');
            $empleo->departamento_id   = Input::get('departamento');
            $empleo->sueldo         = Input::get('sueldo');
            $empleo->descripcion    = Input::get('descripcion');
            $empleo->user_id        = Session::get('user');
            $empleo->save();

            Session::flash('mensaje', App::make('mensaje.creacion'));

            return Redirect::route('empleos.index');
        }

        Session::flash('mensaje', App::make('mensaje.validacion.error'));

        return Redirect::route('empleos.create')->withInput()->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id_slug)
    {
        list($id, $slug) = explode('--', $id_slug);

        $empleo = Empleo::with('user')->find($id);

        $data['empleo'] = $empleo;
        return View::make('empleo.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id_slug)
    {
        list($id, $slug) = explode('--', $id_slug);

        $empleo = Empleo::find($id);

        if($empleo->user_id != Session::get('user')){
            Session::flash('mensaje', App::make('mensaje.actualizacion.error'));

            return Redirect::route('empleos.index');
        }

        $data['empleo'] = $empleo;
        return View::make('empleo.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id_slug)
    {
        list($id, $slug) = explode('--', $id_slug);

        $validator = Validator::make(Input::all(), $this->validaciones);

        if ($validator->passes()) {

            $empleo = Empleo::find($id);

            $empleo->titulo         = Input::get('titulo');
            $empleo->especialidad_id   = Input::get('especialidad');
            $empleo->departamento_id   = Input::get('departamento');
            $empleo->sueldo         = Input::get('sueldo');
            $empleo->descripcion    = Input::get('descripcion');
            $empleo->save();

            Session::flash('mensaje', App::make('mensaje.actualizacion'));

            return Redirect::route('empleos.index');
        }

        Session::flash('mensaje', App::make('mensaje.validacion.error'));

        return Redirect::route('empleos.edit', $id_slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id_slug)
    {
        list($id, $slug) = explode('--', $id_slug);

        $empleo = Empleo::find($id);

        if($empleo->user_id != Session::get('user')){
            Session::flash('mensaje', App::make('mensaje.eliminacion.error'));

            return Redirect::route('empleos.edit', $id_slug);
        }

        $empleo->estado = 0;
        $empleo->softDelete();

        Session::flash('mensaje', App::make('mensaje.eliminacion'));
        return Redirect::route('empleos.index');
    }

}