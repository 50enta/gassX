@extends('principal')
@section('base')
	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Contribuíções</h4>
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
                                                        Registar contriuíção
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Valor a contribuir
                                                                </label>
                                                                 <input id="demo0" type="text" value="3" name="demo0" data-bts-min="0" data-bts-max="30" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                        <div class="col-md-12">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Descrição</label>
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
                                    <button type="button" class="col-lg-3 btn btn-success waves-effect waves-light" data-toggle="modal" data-target=" #con-close-modal">Contribuir
                                    </button> 
                                    <div style="padding-bottom: 15px;"></div>  
                                </div>
                           
                    </div><!-- end col -->
            </div>
                                </div>
                            </div>
                        </div>

                        {{-- end row --}}




                      {{-- histórico de pagamento --}}
                          <div class="row">
                          	<div class="card-box table-responsive">
                          		<h4 class="m-t-0 header-title">Histórico de contribuições</h4>
                          		<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Tipo contribuíção</th>
                                            <th>Data do pagamento </th>
                                            <th>Valor</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Evento</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Associação</td>
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
                                            <td>Associação</td>
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
                                       		 <h3 class="text-dark m-t-10"><b>64570</b></h3>
                                        	<p class="text-muted mb-0">Total gasto em contribuições</p>
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
                                        <h3 class="text-dark m-t-10"><b>31</b></h3>
                                        <p class="text-muted mb-0">Número de contribuições</p>
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