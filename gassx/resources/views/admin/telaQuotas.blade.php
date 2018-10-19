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
										    <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="Mês e ano" >
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
                                                    <h3 class="m-b-10">34</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Quotas pagas</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-primary text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10">62</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Pendentes</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-success text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10">183</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Em falta</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10">250</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-weight-medium">Pagos com multa</p>
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

                                        <tbody class="font-14">
                                            <tr>
                                                <td><b>#1256</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">George A. Lianes</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">4</span>
                                                </td>
                                                <td>
                                                    60,00
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Pagp</span>
                                                </td>

                                                <td>
                                                    2017/04/28
                                                </td>


                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#2542</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="{{asset('minton/images/padrao/perfil-padrao1-f.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Jose D. Delacruz</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-secondary">3</span>
                                                </td>
                                                 <td>
                                                    0,00
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning">Pendente</span>
                                                </td>

                                                <td>
                                                    2008/04/25
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#320</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Phyllis K. Maciel</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">0</span>
                                                </td>
                                                 <td>
                                                    0,00
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Pago</span>
                                                </td>

                                                <td>
                                                    2017/04/20
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#1254</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Margeret V. Ligon</span>
                                                    </a>
                                                </td>
                 
                                                <td>
                                                    <span class="badge badge-danger">0</span>
                                                </td>
                                                 <td>
                                                    0,00
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Não pago</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>#1020</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <img src="{{asset('minton/images/users/avatar-9.jpg')}}" alt="contact-img" title="contact-img" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Erwin E. Brown</span>
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">5</span>
                                                </td>
                                                 <td>
                                                    50,00
                                                </td>
                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    2013/08/11
                                                </td>
                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>  
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
                                    	 <form action="#" class="form-horizontal">
                                      <div class="form-group row">
                                                        <label class="control-label col-sm-3">Data limite de pagamento
                                                        </label>
                                                        <div class="col-sm-3">
                                                            <div class="input-group">
                                                              <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                <div class="input-group-append">
                                                          		<span class="input-group-text"><i class="ion-calendar"></i></span>
                                                                </div>
                                                            </div><!-- input-group -->
                                                        </div>
                                        </div>
                                    </form>
                                    <br>
                                  
                                    <p class="text-muted m-b-15 font-14">
                                       Tabela de multas
                                    </p>
                                     <div class="col-6">
                                <div class="card-box">
                                  
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
                                                <tr>
                                                    <td>
                                                       8
                                                    </td>
                                                  
                                                    <td>2.31%</td>
                                                    <td>
                                                        
                                                        <input type="checkbox"  data-plugin="switchery" data-color="#3bafda" data-size="small"/> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                  
                                                    <td>3.89 %</td>
                                                    <td>
				                                        <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                              
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
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Até (dias)</label>
                                                                 <input id="demo0" type="text" value="3" name="demo0" data-bts-min="0" data-bts-max="30" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Percentagem</label>
                                                                <input id="demo1" type="text" value="55" name="demo1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <div class="row">
                                                  	
                                        
			                                        <label for="checkbox">
			                                             Habilitar .
			                                        </label>
			                                        <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
			                                    
                                                  </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Descrição</label>
                                                                <textarea class="form-control" id="field-7" placeholder="Escreva algo sobre a multa"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">cancelar</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    

                                    <div class="button-list">
                                      
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Nova multa
                                        </button>
                                     
                                    </div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

@endsection