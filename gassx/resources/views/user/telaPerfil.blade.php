@extends('principal')
@section('base')
<!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Perfil</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">gassX</a></li>
                                        <li class="breadcrumb-item"><a href="#">usuário</a></li>
                                        <li class="breadcrumb-item active">perfil</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="text-center card-box">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                             @if($dados['usuario']->genero()->first()->descricao == 'Feminino')
                                            <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" class="rounded-circle img-thumbnail" alt="profile-image">
                                             @elseif($dados['usuario']->genero()->first()->descricao == 'Masculino')
                                              <img src="{{asset('minton/images/padrao/perfil-padrao1-f.png')}}" class="rounded-circle img-thumbnail" alt="profile-image">
                                             @endif
                                        </div>

                                        <div class="">
                                            <h5 class="m-b-5">{{$dados['usuario']->name}}</h5>
                                            <p class="text-muted">{{'@'.$dados['usuario']->username}}</p>
                                        </div>
                                        @if($dados['usuario']->activo)
                                            <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Ativo</button>
                                        @else
                                             <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Inactivo</button>
                                        @endif
                                        


                                        <div class="text-left m-t-40">
                                        	 <p class="text-muted font-13"><strong>Código :</strong> <span class="m-l-15">{{$dados['usuario']->codigo}} </span></p>

                                            <p class="text-muted font-13"><strong>Nome :</strong> <span class="m-l-15"> {{$dados['usuario']->name}} </span></p>

                                            <p class="text-muted font-13"><strong>Celular :</strong><span class="m-l-15">(+258) {{$dados['usuario']->contacto()->first()->numero}}</span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$dados['usuario']->email}}</span></p>

                                            <p class="text-muted font-13"><strong>Endereço :</strong> <span class="m-l-15">{{$dados['usuario']->endereco()->first()->descricao}}</span></p>

                                            <p class="text-muted font-13"><strong>Genero :</strong> <span class="m-l-15">{{$dados['usuario']->genero()->first()->descricao}}</span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-30">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                    </div>

                                </div> <!-- end card-box -->

                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Avaliação</h4>

                                    <div class="p-b-10">
                                        <p>Quotas</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: {{$dados['avaliacao_user']['quotas']}}%">
                                            </div>
                                        </div>
                                        <p>Contribuíções</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$dados['avaliacao_user']['contribuicoes']}}%">
                                            </div>
                                        </div>
                                        <p>Eventos</p>
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:  {{$dados['avaliacao_user']['eventos']}}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end col -->


                            <div class="col-lg-8 col-xl-9">
                                <div class="">
                                    <div class="card-box">
                                        <ul class="nav nav-tabs tabs-bordered">
                                            
                                            <li class="nav-item">
                                                <a href="#conta" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                    MINHA CONTA
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    BIOGRAFIA
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#atualizarPerfi" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    CONFIGURAÇÕES
                                                </a>
                                            </li>
                                        </ul>
                <div class="tab-content">
                                            <div class="tab-pane" id="home1">
                                                <p class="m-b-5">{{$dados['usuario']->obs}}</p>
                                            </div>
                     <div class="tab-pane active" id="conta">
                                        <div class="col-md-12">
                                        <div class="card-box">
                                            <div class="row">
                                                
                            <div class="col-lg-6 col-md-6">
                                            <div class="col-lg-6 col-xl-12">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class=" ti-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                            <b >{{$dados['usuario']->saldo}},00 Mt</b>
                                        </h3>
                                        <p class="text-muted mb-0">Saldo actual</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </div>

                             <div class="col-lg-6 col-md-6">
                                <div class=" text-right ">
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/atualizarPerfil/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}
                                          <div style="padding-bottom: 30px;"class=""></div>
                                        <div class="form-group row">
                                            <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="{{$dados['data']['mes_int'].'/'.$dados['data']['ano']}}" >
                                            <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Buscar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                                 </div>

                                            <div class="tabs-vertical-env">
                                                <ul class="nav tabs-vertical">
                                                    <li class="nav-item">
                                                        <a href="#v-gastos" class="nav-link active" data-toggle="tab" aria-expanded="true">Gastos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#v-recargas" class="nav-link" data-toggle="tab" aria-expanded="false">Recargas
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                     <div class="tab-pane active" id="v-gastos">
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table mb-12 col-lg-12">
                                            <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Valor</th>
                                                <th>Tipo de gasto</th>
                                                <th>Observações</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($dados['tab_gastos_user'] as $v)
                                            <tr>
                                                <td>12/09/2017</td>
                                                <td>57.000,00</td>
                                                <td>
                                                    <span class="badge badge-info">
                                                        Pagamento de quota
                                                    </span>
                                                </td>
                                                <td>--</td>
                                            </tr>
                                        @endforeach
                                            {{-- <tr>
                                                <td>01/01/2017</td>
                                                <td>7.000,00</td>
                                                <td><span class="badge badge-success">Contribuíção para evento</span></td>
                                                <td>--</td>
                                            </tr>
                                            <tr>
                                                <td>01/01/2017</td>
                                                <td>500,00</td>
                                                <td><span class="badge badge-pink">Pagamento de multa</span></td>
                                                <td>--</td>
                                            </tr>
                                            <tr>
                                                <td>01/01/2017</td>
                                                <td>1.000,00</td>
                                                <td><span class="badge badge-purple">Contribuíção para associação</span>
                                                </td>
                                                <td>--</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>01/01/2017</td>
                                                <td>57.000,07</td>
                                                <td><span class="badge badge-warning">Coming soon</span></td>
                                                <td>--</td>
                                            </tr> --}}
            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -8 -->
                        </div>
                    </div>
                 <div class="tab-pane" id="v-recargas">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table mb-12 col-lg-12">
                                            <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Valor</th>
                                                <th>Observações</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dados['tab_recargas_user'] as $v)
                                                    <tr>
                                                        <td>{{$v['data']}}</td>
                                                        <td>{{$v['valor']}},00</td>
                                                        
                                                       <td>--</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -8 -->
                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                </div>
                            </div> <!-- end col -->
                    </div>
                                            <div class="tab-pane" id="atualizarPerfi">
                                                 <form role="form" method="POST" action="{{ url('/user/salvarMembro/'.$dados['usuario']->id) }}">
                                                {{csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="FullName">Nome completo</label>
                                                        <input type="text" placeholder="{{$dados['usuario']->name }}" name="name" id="FullName" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Email">E-mail</label>
                                                        <input type="email" placeholder="{{$dados['usuario']->email }}" name="email" id="Email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <input type="text" placeholder="{{$dados['usuario']->username }}" name="username" id="Username" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Username">Contacto</label>
                                                        <input type="text" placeholder="(+258) {{$dados['usuario']->contacto()->first()->numero }}" id="contacto" name="contacto" class="form-control">
                                                    </div>
                                                     <div class="form-group">
                                                                <label for="Membro-1" class="control-label">Gênero</label>
                                                                <select name="genero" class="form-control select2">
                                                                    @foreach($dados['generos'] as $g)
                                                                    <option value="{{$g->id}}">{{$g->descricao}}</option>
                                                                    @endforeach
                                                                </select>
                                                    </div>
                                                     <div class="form-group">
                                                                <label for="Membro-1" class="control-label">Endereco</label>
                                                                <select name="endereco" class="form-control select2">
                                                                     @foreach($dados['enderecos'] as $g)
                                                                    <option value="{{$g->id}}">{{$g->descricao}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Password">Senha</label>
                                                        <input type="password" placeholder="8 - 15 carateres" name="password" id="Password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="RePassword">Redefinir senha</label>
                                                        <input type="password" placeholder="8 - 15 Characters" id="RePassword" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="AboutMe">Outros</label>
                                                        <textarea style="height: 125px" name="obs" id="AboutMe" class="form-control ">
                                                        	
                                                        </textarea>
                                                    </div>
                                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">
                                                        Salvar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

@endsection