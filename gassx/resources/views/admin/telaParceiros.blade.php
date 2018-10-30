@extends('principal')
@section('base')
	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                       <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Membros</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">gassX</a></li>
                                        <li class="breadcrumb-item active">Admin</li>
                                        <li class="breadcrumb-item active">parceiros</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                {{-- main content start here --}}

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>566</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total cadastrados</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class=" ti-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>31,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total ativos</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-danger pull-left">
                                        <i class="ti-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>280</b></h3>
                                        <p class="text-muted mb-0">TTotal Inativos</p>
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
                                        <h3 class="text-dark m-t-10"><b>0.16</b></h3>
                                        <p class="text-muted mb-0">Outro</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                  <div class="row">
                        <div class="card-box col-sm-12">
                        	{{-- botão novo utilizador --}}
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
                                                        Registar 
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Descrição</label>
                                                                <input type="text" class="form-control" id="field-1" placeholder="Compra de cerveja">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">valor</label>
                                                                <input type="text" class="form-control" id="field-2" placeholder="3000,00">
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
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->

                                <div class="button-list">
                                        <!-- Responsive modal -->
                                    <button type="button" class="col-lg-3 btn btn-success waves-effect waves-light" data-toggle="modal" data-target=" #con-close-modal">Novo parceiro
                                    </button>  
                                </div>
                           
                   		 </div><!-- end col -->
            		</div>
                            </div>
                          
                           <div class="row">
                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/airbnb.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p class="text-muted  font-14">San Francisco, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                        for people to lease or rent..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/apple.png')}}"alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Apple Inc.</h4>
                                        <p class="text-muted  font-14">Cupertino, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops,
                                        and sells..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-2" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/google.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Google LLC</h4>
                                        <p class="text-muted  font-14">Menlo Park, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Google LLC is an American multinational technology company that specializes in Internet-related services and products, which
                                        include..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>
                                    <div id="company-3" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                             <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/amazon.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p class="text-muted  font-14">San Francisco, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                        for people to lease or rent..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/cisco.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p class="text-muted  font-14">San Francisco, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                        for people to lease or rent..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/apple.png')}}"alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Apple Inc.</h4>
                                        <p class="text-muted  font-14">Cupertino, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops,
                                        and sells..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-2" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/facebook.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Google LLC</h4>
                                        <p class="text-muted  font-14">Menlo Park, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Google LLC is an American multinational technology company that specializes in Internet-related services and products, which
                                        include..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>
                                    <div id="company-3" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                             <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/amazon.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p class="text-muted  font-14">San Francisco, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                        for people to lease or rent..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                                  
                        </div>
                  </div>

        </div>
</div>
@endsection