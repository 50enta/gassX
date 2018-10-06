@extends('principal')

<<<<<<< HEAD

@section('base')

    

<div class="col-md-12">
    <div class="card-box">
        <h4 class="header-title m-t-0 m-b-30">Eventos</h4>
=======
@section('base')

    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Eventos</h4>

>>>>>>> 3e5a67efac733f9958fa963680e082e27a8396cb

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#todos" data-toggle="tab" aria-expanded="false" class="nav-link active">
                Todos Eventos
                </a>
            </li>
            <li class="nav-item">
                <a href="#meus" data-toggle="tab" aria-expanded="true" class="nav-link ">Meus Eventos</a>
            </li>
               
        </ul>
        





        <div class="tab-content" id="todos">
            @yield('conteudo_todosEventos')
                                               
        </div>
        <div class="tab-pane fade " id="meus">
            @yield('conteudo_meusEventos')
                                               
        </div>
       
           
            

            

@endsection