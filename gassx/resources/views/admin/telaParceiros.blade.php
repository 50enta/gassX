@extends('principal')
@section('base')
	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                       <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Parceiros</h4>
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
                                        <p class="text-muted mb-0">Total Inativos</p>
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
                                            <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/salvarParceiro/'.$dados['usuario']->id) }}">
                                                {{csrf_field() }}
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">
                                                        Registar 
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Nome</label>
                                                                <input name="nome" type="text" class="form-control" id="field-1" placeholder="Compra de cerveja">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Código</label>
                                                                <input name="codigo" type="text" class="form-control" id="field-1" placeholder="Compra de cerveja">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">        
                                                                     Endereço
                                                                </label>
                                                                <select name="endereco" class="form-control select2">
                                                                    @foreach($dados['enderecos'] as $cat)
                                                                    <option value="{{$cat->id}}">{{$cat->descricao}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                   </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Descricao</label>
                                                                <textarea name="descricao" class="form-control" id="field-7" placeholder="Qualquer coisa sobre a despesa"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
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


                     @if(!empty($dados['parceiros']))
                        @foreach($dados['parceiros'] as $lista)
                        <div class="row">
                           @foreach($lista as $item)
                             <div class="col-md-3">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/amazon.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">{{$item->nome}}</h4>
                                        <h5 class="mb-1">{{$item->codigo}}</h5>
                                        <p class="text-muted  font-14">Moçambique, {{$item->endereco()->first()->descricao}}</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                       {{
                                        $item->descricao
                                       }}
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Mais detalhes</a>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                             @endforeach  
                        </div>
                        <!-- end row -->
                           @endforeach
                       @endif              



                        </div>
                  </div>

        </div>
</div>
@endsection