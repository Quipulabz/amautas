@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-xs-10 col-xs-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
        <h1 class="text-center">Acceso</h1>
        {{ Form::open([
                'route'         => 'user.login',
                'autocomplete'  => 'off'
            ])
        }}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-user"></span></span>
                {{ Form::text('username', Input::old('username'), [
                        'class'         => 'form-control',
                        'placeholder'   => 'amauta@amautas.net'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-lock"></span></span>
                {{ Form::password('password', [
                        'class'         => 'form-control',
                        'placeholder'   => '*******'
                    ])
                }}
            </div>
        </div>
        <div class="form-action">
            {{ Form::submit('Entrar', [
                    'class' => 'btn btn-embossed btn-success btn-hg btn-block'
                ])
            }}
        </div>
        <div class="form-group">
            <label class="checkbox {{ Input::old('remember_me') ? 'checked' : '' }}">
                <span class="icons">
                    <span class="first-icon fui-checkbox-unchecked"></span>
                    <span class="second-icon fui-checkbox-checked"></span>
                </span>
                {{ Form::checkbox('remember_me', Input::old('remember_me')) }}
                Recordarme
            </label>
        </div>
        <a class="login-link" href="#">¿Perdiste tu contraseña?</a>
        {{ Form::close() }}
    </div>
</div>
@stop
