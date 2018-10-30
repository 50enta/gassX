@extends('principal')
@section('base')
 <div class="content">
        <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">{{$dados['evento']->descricao}}</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">user</a></li>
                                        <li class="breadcrumb-item"><a href="#">usuário</a></li>
                                        <li class="breadcrumb-item active">perfil</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                <div class="row">
                    

                </div>


        </div>
 </div>
@endsection