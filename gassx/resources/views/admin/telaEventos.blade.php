@extends('principal')
@section('base')
     <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                         <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Eventos</h4>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/atualizarFinancas/'.$dados['usuario']->id) }}">
                                        {{csrf_field() }}
                                        <div class="form-group row">
                                            <input name="mes_ano" type="text" class="col-sm-5   form-control form-control-1 input-sm from" placeholder="Mês e ano" >
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
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                            <b>64,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Today's Visits</p>
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
                                        <p class="text-muted mb-0">Total Revenue</p>
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
                                        <p class="text-muted mb-0">Today's Sales</p>
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
                                        <h3 class="text-dark m-t-10"><b>0.16</b>%</h3>
                                        <p class="text-muted mb-0">Conversion</p>
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
                                    <button type="button" class="col-lg-3 btn btn-success waves-effect waves-light" data-toggle="modal" data-target=" #con-close-modal">Novo evento
                                    </button>  
                                </div>
                           
                         </div><!-- end col -->
                    </div>
                </div>
                          
                        <div class="row">
                             <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/9.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/10.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Churasco</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Evento 07</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Evento 4</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a  href="{{url('user/detalhesEvento_admin/'.$dados['usuario']->id)}}" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <div class="row">
                             <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/7.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Teatro</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/9.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/8.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 col-lg-3 col-xs-12">
                                <!-- Simple card -->
                                <div class="card m-b-20">
                                    <img class="card-img-top img-fluid" src="{{url('minton/images/gallery/9.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make.</p>
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        
                                  
                    </div>
                  </div>

        </div>
</div>
@endsection