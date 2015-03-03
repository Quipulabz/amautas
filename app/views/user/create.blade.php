@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10 col-centered">
        <div class="row">
            <h2 class="text-center">Registro</h2>
            <div class="title-divider"></div>
        </div>
        {{ Form::open([
                'route'         => 'user.store',
                'autocomplete'  => 'off'
            ])
        }}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-mail"></span></span>
                {{ Form::text('email', Input::old('email'), [
                        'class'         => 'form-control',
                        'placeholder'   => 'Correo electrónico'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-user"></span></span>
                {{ Form::text('username', Input::old('username'), [
                        'class'         => 'form-control',
                        'placeholder'   => 'Nombre y Apellidos'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-lock"></span></span>
                {{ Form::password('password', [
                        'class'         => 'form-control',
                        'placeholder'   => 'Contraseña'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-lock"></span></span>
                {{ Form::password('password_confirmation', [
                        'class'         => 'form-control',
                        'placeholder'   => 'Repetir contraseña'
                    ])
                }}
            </div>
        </div>
        <div class="form-action">
            {{ Form::submit('Registrarme', [
                    'class' => 'btn btn-embossed btn-success btn-hg btn-block'
                ])
            }}
        </div>
        {{ Form::close() }}
        <hr/>
        <div class="form-group">
            <a class="btn btn-warning btn-block btn-embossed btn-hg"  href="{{ URL::route('user.login') }}"><strong>YA ESTOY REGISTRADO</strong></a>
        </div>
    </div>
</div>
@stop
