@extends('layouts.app')

@section('content')

<div class="container widescreen">

  <div class="wrapper-page">

            <div class="text-center">
                <!-- <a href="index.html" class="logo-lg"><i class="mdi mdi-radar"></i> <span>Minton</span> </a> -->
                <br>
                <br>
                <h1  style=" color: #008cff">Gestão de associações </h1><br><br>
            </div>

           
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-account"></i></span>

<div class="container">

  <div class="row justify-content-center">

   <div class="row"> <div class="col-lg-8"><h2> Gestão de Associações</h2></div></div>
                    <div class="col-lg-5">
                       
                        <br>
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="#">
                                  <span></span> 
                                </a>
                                <h3> Entrar</h3>

                            </div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8 offset-2" >
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-radar"></i></span>
                            </div>
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Senha" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <div class="checkbox checkbox-primary">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                            {{ __('Lembrar') }}
                                    </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-lg-6 offset-4 ">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div><br>

                <div class="form-group row m-t-30">
                    <div class="offset-3">
                        <a href="" class="text-muted"><i class="fa fa-lock m-r-5"></i> Esqueceu a senha?</a>
                    </div>
                    <div class="col-md-2 offset-3 ">
                        <a href="{{ route('register') }}" class="text-muted">Criar conta</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
                


@endsection


 <!-- <form class="text-center" method="POST" action="{{ route('login') }}">
                                     @csrf
                                    <div class="form-group">
                                        <label for="emailaddress">{{ __('Endereço e-mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>

                                    <div class="form-group">
                                        
                                        <label for="password">{{ __('Senha') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'ínválido' : '' }}" name="password" required>

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
                                        {{ __('memorizar') }}
                                    </label>
                                    <a href="pages-recoverpw.html" class="text-muted float-right"><small>Esqueceu a senha?</small></a>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Entrar </button>
                                    </div>


                                </form> -->

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Não tem conta? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Registe-se</b></a></p>
                   
                    </div>  
                </div>
                    
            </div> <!-- end col -->
        </div>
    </div>
                


@endsection

