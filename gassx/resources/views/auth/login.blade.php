@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="#">GassX
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Entrar</h4>
                                    <p class="text-muted mb-4">Introduza o seu e-mail e senha para aceder ao sistema</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                     @csrf
                                    <div class="form-group">
                                        <label for="emailaddress">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>

                                    <div class="form-group">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small>Esqueceu a senha?</small></a>
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Não tem conta? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Cadastre-se</b></a></p>
                   
                    </div>  
                </div>
                    
            </div> <!-- end col -->
        </div>
    </div>
                


@endsection

