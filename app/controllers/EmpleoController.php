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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $empleos = Empleo::all();

        $data['empleos'] = $empleos;
        return View::make('empleo.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // list($id, $slug) = explode('--', $id);

        $empleo = Empleo::find($id);

        $data['empleo'] = $empleo;
        return View::make('empleo.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // list($id, $slug) = explode('--', $id);

        $empleo = Empleo::find($id);

        $data['empleo'] = $empleo;
        return View::make('empleo.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $validator = Validator::make(Input::all(), ['titulo'=>'required', 'descripcion'=>'required']);

        if ($validator->passes()) {

            $empleo = Empleo::find($id);

            $empleo->titulo      = Input::get('titulo');
            $empleo->descripcion = Input::get('descripcion');
            $empleo->save();

            return Redirect::route('empleos.show', $id);
        }

        Session::flash('mensaje', ['tipo'=>'alert-danger', 'mensaje'=>'Debe ingresar todos los campos']);

        return Redirect::route('empleos.edit', $id);
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

}