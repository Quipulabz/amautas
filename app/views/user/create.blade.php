@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-push-3">
        <h1 class="text-center">Registro</h1>
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
                        'placeholder'   => 'amauta@amautas.net'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-user"></span></span>
                {{ Form::text('username', Input::old('username'), [
                        'class'         => 'form-control',
                        'placeholder'   => 'amauta'
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
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-lock"></span></span>
                {{ Form::password('password_confirmation', [
                        'class'         => 'form-control',
                        'placeholder'   => '*******'
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
        <a class="login-link" href="{{ route('user.login') }}">¿Ya estás registrado?</a>
        {{ Form::close() }}
    </div>
</div>
@stop
