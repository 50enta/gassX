@extends('layouts.app')

@section('content')
<style type="text/css">
    beground
</style>

<div class="container">
  <div class="row justify-content-center">

                    <div class="col-lg-5">

                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-info">
                                <a href="#">
                                    <!-- <span><img src="{{asset('minton/images/logo/Capture9.jpg')}}" alt=""  width="350"  height="90"></span> -->
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Registo
                                    </h4>
                                     <p class="text-muted mb-4">Preencha os campos para tornar se membro da associacao.</p> 
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                        <label for="Nome">{{ __('Nome') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="emailaddress">{{ __('E-Mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>

                                    

                                   <div class="form-group">
                                        <label for="password">{{ __('Senha') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                     @endif
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Registar </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Já tem uma conta? <a href="{{ route('login') }}" class="text-dark ml-1"><b>Entrar</b></a></p>
                   
                    </div>  
                </div>
                    
            </div> <!-- end col -->


        </div>
    </div>
                


@endsection

