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
                                        <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                                        @if ($errors->has('nome'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
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
                                        <label for="senha">{{ __('Senha') }}</label>
                                        <input id="senha" type="password" class="form-control{{ $errors->has('senha') ? ' is-invalid' : '' }}" name="senha" required>

                                        @if ($errors->has('senha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('senha') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="senha-confirm">{{ __('Confirmar Senha') }}</label>
                                        <input id="senha-confirm" type="password" class="form-control" name="senha_confirmation" required>

                                        @if ($errors->has('senha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('senha') }}</strong>
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

