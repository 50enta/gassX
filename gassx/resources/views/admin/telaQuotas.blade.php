@extends('principal')
@section('base')

	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Quotas</h4>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/atualizarQuotas/'.$dados['usuario']->id) }}">
										{{csrf_field() }}
										<div class="form-group row">
										    <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" 
                                            placeholder="{{$dados['data']['mes_int'].'/'.$dados['data']['ano']}}" >
										    <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Buscar</button>
										</div>
									</form>
                                    <div style="padding-bottom: 18px;"class=""></div>
                                </div>
                            </div>
                        </div>
                       
                <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="text-center mb-4">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-secondary text-white">
                                                    <i class="fi-tag"></i>
                                                    <h3 class="m-b-10">
                                                         {{$dados['est_pagamentos_admin']['quotas_pagas']}}
                                                    </h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Quotas pagas</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-primary text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10">
                                                    {{$dados['est_pagamentos_admin']['pendentes']}}
                                                    </h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Pendentes</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10">
                                                         {{$dados['est_pagamentos_admin']['pagos_com_multa']}}
                                                    </h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Pagos com multa</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-success text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10">
                                                         {{$dados['valor_quota']}} Mt
                                                    </h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Valor da quota</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>


                                    <table class="table table-hover m-0 table-centered dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                                        <thead class="bg-light">
                                        <tr>
                                            <th class="font-weight-medium">Código</th>
                                            <th class="font-weight-medium">Membro</th>
                                            <th class="font-weight-medium">Nr. de  prestações</th>
                                            <th class="font-weight-medium">Valor da multa (Mt)</th>
                                            <th class="font-weight-medium">Estado</th>
                                            <th class="font-weight-medium">Data do pagamento</th>
                                            <th class="font-weight-medium">Dar acção</th>
                                        </tr>
                                        </thead>
{{-- //codigo, membro, n_prestacoes, valor_multa, estado, data_pagamento || genero  --}}
                                        <tbody class="font-14">
                                            @foreach($dados['tab_pagamentos_admin'] as $key)
                                            <tr>
                                                <td><b>#{{$key['codigo']}}</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        @if($key['genero'] == 'Masculino')
                                                            <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        @elseif($key['genero'] == 'Feminino')
                                                            <img src="{{asset('minton/images/padrao/perfil-padrao1-f.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        @endif
                                                        <span class="ml-2">{{$key['membro']}}</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">{{$key['n_prestacoes']}}</span>
                                                </td>
                                                <td>
                                                    {{$key['valor_multa']*100}}%
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">{{$key['estado']}}</span>
                                                    {{-- <span class="badge badge-warning">Pendente</span> --}}
                                                </td>

                                                <td>
                                                    {{$key['data_pagamento']}}
                                                </td>


                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Cancelar</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Definições</h4>
                                    	<br>
                                    	 
                                      <div class="form-group row">
                                                        <label class="control-label col-sm-3">Data limite de pagamento
                                                        </label>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/atualizarQuotas/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}
                                        <div class="form-group row">
                                            <input name="diaLimite" type="text" class="col-sm-5  input-sm from" 
                                            placeholder="5" >
                                            <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">atualicar</button>
                                        </div>
                                    </form>
                                        </div>
                                
                                    <br>
                                  
                                    
                <div class="row">
                    <div class="col-lg-6">
                    <div class="col-12">
                                <div class="card-box">
                                  <p class="text-muted m-b-15 font-14">
                                       Tabela de multas
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead class="font-13 bg-light text-muted">
                                                <tr>
                                                    <th class="font-weight-medium">Até (dias)</th>
                                                    <th class="font-weight-medium">Percentagem</th>
                                                    <th class="font-weight-medium">Status</th>
                                                    <th class="font-weight-medium text-center" style="width: 110px;">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dados['tab_multas_admin'] as $val)
                                                <tr>
                                                    <td>
                                                       {{$val['dias']}}
                                                    </td>
                                                  
                                                    <td>
                                                        {{$val['percentagem']}}
                                                    </td>
                                                    <td>
                                                        @if($val['status'] == true)
                                                        <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/> 
                                                        @else
                                                           <input type="checkbox" data-plugin="switchery" data-color="#3bafda" data-size="small"/> 
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div> <!-- end col -->

                                    <!-- sample modal content -->

                                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Nova multa</h4>
                                                </div>
                                        <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/salvarMulta/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Até (dias)</label>
                                                                 <input id="demo0" type="text" value="3" name="dias" data-bts-min="0" data-bts-max="30" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Percentagem</label>
                                                                <input id="demo1" type="text" value="55" name="percentagem">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <div class="row">
                                                  	
                                        
			                                        <label for="checkbox">
			                                             Habilitar .
			                                        </label>
			                                        <input type="checkbox" name="ativo" checked data-plugin="switchery" data-color="#3bafda" value="1" data-size="small"/>
			                                    
                                                  </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Descrição</label>
                                                                <textarea class="form-control" name="descricao" id="field-7" placeholder="Escreva algo sobre a multa"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">cancelar</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                </div>
                                                 </form>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    

                                    <div class="button-list">
                                      
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Nova multa
                                        </button>
                                     
                                    </div>

</div>
{{-- /// TABELA DE QUOTA-VALOR --}}
 <div class="col-lg-6">
                    <div class="col-12">
                                <div class="card-box">
                                  <p class="text-muted m-b-15 font-14">
                                       Valor de quotas
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead class="font-13 bg-light text-muted">
                                                <tr>
                                                    <th class="font-weight-medium">De (data)</th>
                                                    <th class="font-weight-medium">Até (data)</th>
                                                    <th class="font-weight-medium">valor</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dados['tab_quota_valor_admin'] as $val)
                                                <tr>
                                                    <td>
                                                       {{$val['de']}}
                                                    </td>
                                                  
                                                    <td>
                                                        {{$val['ate']}}
                                                    </td>
                                                    <td>
                                                        {{$val['valor']}}
                                                    </td>
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div> <!-- end col -->

                                    <!-- sample modal content -->

                                    <div id="con-close-moda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Novo valor</h4>
                                                </div>
                                        <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/salvarValorQuota/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Valor</label>
                                                                <input id="demo1" type="text" value="55" name="valor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <div class="row">
                                                    
                                        
                                                    <label for="checkbox">
                                                         Habilitar .
                                                    </label>
                                                    <input type="checkbox" name="ativo" checked data-plugin="switchery" data-color="#3bafda" value="1" data-size="small"/>
                                                
                                                  </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Descrição</label>
                                                                <textarea class="form-control" name="descricao" id="field-7" placeholder="Escreva algo sobre o valor"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">cancelar</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                </div>
                                                 </form>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    

                                    <div class="button-list">
                                      
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-moda">
                                            Novo valor
                                        </button>
                                     
                                    </div>

</div>

</div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

{{-- 
        <script>
            var startDate = new Date();
            var fechaFin = new Date();
            var FromEndDate = new Date();
            var ToEndDate = new Date();

            $('.from').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: 'mm/yyyy'
            }).on('changeDate', function(selected){
                    startDate = new Date(selected.date.valueOf());
                    startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                    $('.to').datepicker('setStartDate', startDate);
                }); 

            $('.to').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: 'mm/yyyy'
            }).on('changeDate', function(selected){
                    FromEndDate = new Date(selected.date.valueOf());
                    FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                    $('.from').datepicker('setEndDate', FromEndDate);
                });

        </script>

         {{-- Para formatação de tabelas - fltro e paginação --}}
         <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script> --}}


@endsection