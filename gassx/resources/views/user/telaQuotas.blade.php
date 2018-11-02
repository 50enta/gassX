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
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/atualizarQuotas/'.$dados['usuario']->id) }}">
										{{csrf_field() }}
										<div class="form-group row">
										    <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="{{$dados['data']['mes_int'].'/'.$dados['data']['ano']}}" >
										    <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Buscar</button>
										</div>
									</form>
                                    <div style="padding-bottom: 18px;"class=""></div>
                                </div>
                            </div>
                        </div>
                  <div class="row">
                    <div class="col-lg-9">
                      {{-- Visão geral dos mesmes --}}
                      <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                      <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/salvarPagamento/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">
                                                        Efetuar pagamento
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Valor a pagar</label>
                                                                 <input id="demo0" type="text" value="3" name="demo0" data-bts-min="0" data-bts-max="30000" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                               <div class="form-group">
                                                                <label for="field-1" class="control-label">Multa</label>
                                                                 <input id="demo0" type="text" value="3" name="demo1" data-bts-min="0" data-bts-max="30000" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Mês</label>
                                                                <select name="mes" class="form-control select2">
                                                                @foreach($dados['meses'] as $me)
                                                                    <option value="{{$me->id}}">{{$me->mes}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <label for="field-1" class="control-label">Ano</label>
                                                                <select name="ano" class="form-control select2">
                                                                 @foreach($dados['anos'] as $me)
                                                                    <option value="{{$me->id}}">{{$me->ano}}</option>
                                                                 @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Observações</label>
                                                                <textarea name="descricao" class="form-control" id="field-7" placeholder="Qualquer coisa sobre a despesa"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Concluir</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div><!-- /.modal -->

                                <div class="button-list">
                                        <!-- Responsive modal -->
                                    <button type="button" class="col-lg-3 btn btn-success waves-effect waves-light" data-toggle="modal" data-target=" #con-close-modal">Pagar
                                    </button> 
                                    <div style="padding-bottom: 15px;"></div>  
                                </div>
                           
                    </div><!-- end col -->
            </div>
                                    <table class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true"></th>
                                            @foreach($dados['tab_pagamentos_do_ano'] as $m)
                                                <th data-toggle="true">{{$m['mes']}}</th>
                                            @endforeach
                                        
                                        </tr>
                                        </thead>
                                        <div class="form-inline m-b-20">
                                        </div>
                                        <tbody>
                                        <tr>
                                            <td>Estado</td>
                                            @foreach($dados['tab_pagamentos_do_ano'] as $m)
                                              <td>
                                                @if($m['estado'] == 'pago')
                                                <span class="badge label-table badge-success">
                                                    {{$m['estado']}}
                                                </span>
                                                @elseif($m['estado'] == 'não')
                                                <span class="badge label-table badge-danger">
                                                    {{$m['estado']}}
                                                </span>
                                                @endif
                                              </td>
                                            @endforeach
                                             {{-- 
                                            <td><span class="badge label-table badge-warning">pend</span></td>
                                             --}}

                                        </tr>
                                        <tr>
                                            <td>Multa</td>
                                              @foreach($dados['tab_pagamentos_do_ano'] as $m)
                                              <td>
                                                    {{$m['multa']*100}}%
                                              </td>
                                             @endforeach
                                           {{--  
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td>
                                            <td>0,00</td> --}}
                                        </tr>
                                       
                                      
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="13">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- end row --}}




                      {{-- histórico de pagamento --}}
                          <div class="row">
                          	<div class="card-box table-responsive">
                          		<h4 class="m-t-0 header-title">Histórico de pagamentos</h4>
                          		<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Mês</th>
                                        
                                            <th>Data do pagamento </th>
                                            <th>Valor</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>pagamento</td>
                                            <td>Janeiro</td>
                                   
                                            <td>2011/04/25</td>
                                            <td>320,800</td>
                                        </tr>
                                        <tr>
                                            <td>xyz - abc</td>
                                            <td>Março</td>
                                      
                                            <td>2012/03/29</td>
                                            <td>Fevereiro</td>
                                        </tr>
                                        <tr>
                                            <td>pagando tudo</td>
                                            <td>Dezembro</td>
                                      
                                            <td>2008/11/28</td>
                                            <td>162,700</td>
                                        </tr>
                                        <tr>
                                            <td>liquidar divida</td>
                                            <td>Fevereiro</td>
                                       
                                            <td>2012/12/02</td>
                                            <td>372,000</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                           

                    </div>
                            <!-- end col -8 -->
                        <div class="col-lg-3">

                                <div class="card-box widget-user">
                                    <div class="widget-bg-color-icon">
                                    	<div class="bg-icon bg-icon-success pull-left">
                                        	<i class=" ti-stats-up text-success"></i>
                                    	</div>
                                    	<div class="text-right">
                                       		 <h3 class="text-dark m-t-10"><b>64,570</b></h3>
                                        	<p class="text-muted mb-0">Total em dívida</p>
                                    	</div>
                                  	  	<div class="clearfix"></div>
                               		</div>
                                </div>

                              <div class="card-box widget-user">
                                <div class="widget-bg-color-icon fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class="ti-eye text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>31,570</b></h3>
                                        <p class="text-muted mb-0">Quota mensal</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                           	  </div>

                           	  <div class="card-box widget-user">
                                <div class="widget-bg-color-icon fadeInDown animated">
                                    <div class="text-right">
                                          <input type="checkbox" data-plugin="switchery" data-color="#3DDCF7"/>
                                        <p class="text-muted mb-0">Auto pagamento</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                           	  </div>

                            </div>

                        </div>
                        <!-- end row -->

        </div>
</div>
@endsection