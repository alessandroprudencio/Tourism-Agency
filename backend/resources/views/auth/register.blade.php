@extends('site.layouts.app')

@section('content-site')

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                    <h1 class="title">Registrar</h1>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group ">
                                    <label for="name">{{ __('Nome') }}</label>
    
                                    <div class="col-md-9">  
                                        <input id="name" type="text" class="form-control" name="name" required autofocus>
                                    </div>
                                </div>

                            <div class="form-group ">
                                <label for="email">{{ __('E-Mail') }}</label>

                                <div class="col-md-9">  
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password">{{ __('Senha') }}</label>

                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                    <label for="confirmPassword">{{ __('Confirma Senha') }}</label>
    
                                    <div class="col-md-9">
                                        <input id="confirmPassword" type="confirmPassword" class="form-control{{ $errors->has('confirmPassword') ? ' is-invalid' : '' }}" name="confirmPassword" required>
                                        @if ($errors->has('confirmPassword'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('confirmPassword') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-md-8 offset">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            {{ __('Já tenho cadastro') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</div>
@endsection
