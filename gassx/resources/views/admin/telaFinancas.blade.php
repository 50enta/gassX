@extends('principal')
@section('base')
	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Finanças</h4>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/atualizarFinancas/'.$dados['usuario']->id) }}">
										{{csrf_field() }}
										<div class="form-group row">
										    <input name="mes_ano" type="text" class="col-sm-5   form-control form-control-1 input-sm from" placeholder="{{$dados['data']['mes_int'].'/'.$dados['data']['ano']}}" >
										    <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Buscar</button>
										</div>
									</form>
                                    <div style="padding-bottom: 18px;"class=""></div>
                                </div>
                            </div>
                        </div>


                {{-- main content start here --}}


                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                          <i class="fa fa-arrow-circle-down"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>{{$dados['numero_total_entradas']}}</b>
                                        </h3>
                                        <p class="text-muted mb-0">Numero de Entradas</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class="  fa-money"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>{{$dados['valor_total_entradas']}}</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total de Entradas</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-danger pull-left">
                                        <i class="fa fa-arrow-circle-up"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>{{$dados['numero_total_saidas']}}</b></h3>
                                        <p class="text-muted mb-0">Numero Total de Saidas</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>{{$dados['valor_total_saidas']}}</b></h3>
                                        <p class="text-muted mb-0">Total de saidas</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                  <div class="row">
                        {{-- Entrances --}}
                  		 <div class="col-lg-6">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Entradas</h4>
                                     <p class="text-muted font-14 m-b-30">
                                        Registo de todas as entradas de valores no sistema.
                                        São todas entradas focando-se na data, o valor em causa e o autor.
                                    </p>
                                    <table id="datatable-button" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>valor</th>
                                            <th>autor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dados['tab_entradas_admin'] as $k)
                                        <tr>
                                            <td>{{$k['data']}}</td>
                                            <td>{{$k['valor']}}</td>
                                            <td>{{$k['autor']}}</td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <!-- termina aqui -->
                         </div>
                         {{-- Exites --}}
                         <div class="col-lg-6">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Saídas</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Registo de todas as saídas de valores no sistema.
                                        São todas saídas focando-se na data, o valor em causa e o autor.
                                    </p>
                                    <table id="datatable-button" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>valor</th>
                                            <th>autor</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                       @foreach($dados['tab_saidas_admin'] as $k)
                                        <tr>
                                            <td>{{$k['data']}}</td>
                                            <td>{{$k['valor']}}</td>
                                            <td>{{$k['autor']}}</td>
                                        </tr>
                                       @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <!-- termina aqui -->
                         </div>
                  </div>

        </div>
</div>
@endsection