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
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/atualizarQuotas') }}">
										{{csrf_field() }}
										<div class="form-group row">
										    <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="Mês e ano" >
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
                                                                 <input id="demo0" type="text" value="3" name="demo0" data-bts-min="0" data-bts-max="30" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                               <div class="form-group">
                                                                <label for="field-1" class="control-label">Multa</label>
                                                                 <input id="demo0" type="text" value="3" name="demo0" data-bts-min="0" data-bts-max="30" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Mês</label>
                                                                <select class="form-control select2">
                                                                    <option>Janeiro</option>
                                                                    <option value="1">Fevereiro</option>
                                                                    <option value="2">Março</option>
                                                                    <option value="4">Abril</option>
                                                                    <option value="3">Maio</option>
                                                                    <option value="3">Junho</option>
                                                                    <option value="3">julho</option>
                                                                    <option value="3">Agosto</option>
                                                                    <option value="3">Setembro</option>
                                                                    <option value="3">Outubro</option>
                                                                    <option value="3">Novembro</option>
                                                                    <option value="3">Dezembro</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Observações</label>
                                                                <textarea class="form-control" id="field-7" placeholder="Qualquer coisa sobre a despesa"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Concluir</button>
                                                </div>
                                            </div>
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
                                            <th data-toggle="true">Jan</th>
                                            <th data-hide="phone">Fev</th>
                                            <th data-hide="phone">Mar</th>
                                            <th data-hide="phone, tablet">Abr</th>
                                            <th data-hide="phone, tablet">Mai</th>
                                            <th data-hide="phone, tablet">Jun</th>
                                            <th data-hide="phone, tablet">Jul</th>
                                            <th data-hide="phone, tablet">Ago</th>
                                            <th data-hide="phone, tablet">Set</th>
                                            <th data-hide="phone, tablet">Out</th>
                                            <th data-hide="phone, tablet">Nov</th>
                                            <th data-hide="phone, tablet">Dez</th>
                                        </tr>
                                        </thead>
                                        <div class="form-inline m-b-20">
                                        </div>
                                        <tbody>
                                        <tr>
                                            <td>Stat</td>
                                             <td><span class="badge label-table badge-success">pago</span></td>
                                             <td><span class="badge label-table badge-success">pago</span></td>
                                             <td><span class="badge label-table badge-success">pago</span></td>
                                             <td><span class="badge label-table badge-success">pago</span></td>
                                            <td><span class="badge label-table badge-success">pago</span></td>
                                            <td><span class="badge label-table badge-warning">pend</span></td>
                                            <td><span class="badge label-table badge-success">pago</span></td>
                                             <td><span class="badge label-table badge-warning">pend</span></td>
                                            <td><span class="badge label-table badge-danger">não</span></td>
                                            <td><span class="badge label-table badge-danger">não</span></td>
                                            <td><span class="badge label-table badge-danger">não</span></td>
                                            <td><span class="badge label-table badge-danger">não</span></td>

                                        </tr>
                                        <tr>
                                            <td>Mult</td>
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
                                            <td>0,00</td>
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
                                            <td>Tiger Nixon</td>
                                            <td>Janeiro</td>
                                   
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Março</td>
                                      
                                            <td>2012/03/29</td>
                                            <td>Fevereiro</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Dezembro</td>
                                      
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Fevereiro</td>
                                       
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
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