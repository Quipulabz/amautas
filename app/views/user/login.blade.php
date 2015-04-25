@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10 col-centered">
        <div class="row">
            <h2 class="text-center">Ingreso</h2>
            <div class="title-divider"></div>
        </div>
        {{ Form::open([
                'route'         => 'user.login',
                'autocomplete'  => 'off'
            ])
        }}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-mail"></span></span>
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
            <label class="checkbox {{ Input::old('remember_me') ? 'checked' : '' }}" for="checkbox">                
                {{ Form::checkbox('remember_me', 'on', Input::old('remember_me'), [
                        'id'    => 'checkbox',
                        'class' => 'custom-checkbox',
                        'data-toggle' => 'checkbox'
                    ]) 
                }}
                Recordarme
            </label>
        </div>
        <a class="login-link" href="#"><strong>¿Perdiste tu contraseña?</strong></a>
        {{ Form::close() }}
        <hr/>
        <div class="form-group">
            <a class="btn btn-warning btn-block btn-embossed btn-hg"  href="{{ URL::route('user.register') }}">¿No tienes una cuenta?<br><strong>REGISTRATE AHORA</strong></a>
        </div>
    </div>
</div>
@stop
