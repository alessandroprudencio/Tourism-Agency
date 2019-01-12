@extends('site.layouts.app')

@section('content-site')
<div class="content">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <h1 class="title">Recuperar Senha</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
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

                        <div class="col-md-8 offset">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Link de Recuperacão de Senha') }}
                                </button>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
