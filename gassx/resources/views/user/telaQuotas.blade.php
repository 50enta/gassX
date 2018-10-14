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
                                            <td>System Architect</td>
                                   
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                      
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                      
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                       
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                          <div class="row">
                          	
                          		[INFORMAÇÃO SOBRE MESES EM DÍVIDA E OPÇÃO DE PROSSEGUIR COM O PAGAMENTO]
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
                                          <input type="checkbox" checked data-plugin="switchery" data-color="#3DDCF7"/>
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