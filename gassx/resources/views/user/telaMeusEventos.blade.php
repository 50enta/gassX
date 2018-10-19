@extends('principal')


@section('base')

<div class="content">
<div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Meus eventos</h4>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/atualizarMeusEventos/'.$dados['usuario']->id) }}">
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
	    	
	<div class="col-md-6 col-lg-3">
	            <div class="card d-block">
	              	<div class="card-body">
	                    <h5 class="card-title">Card title</h5>
	                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
	              	</div>
	                    <img class="img-fluid" src="{{asset('minton/images/gallery/10.jpg')}}" alt="Card image cap">
	                <div class="card-body">
	                    <p class="card-text">Some quick example text to build on the card title and make
	                            up the bulk of the card's content.</p>
	                    
	                    <a href="javascript: void(0);" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
	                    
	                </div> <!-- end card-body-->
	            </div> <!-- end card-->
	        </div><!-- end col -->
	                  


	         <div class="col-md-6 col-lg-3">
            <div class="card d-block">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                        <img class="img-fluid" src="{{asset('minton/images/small/img3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                    <a href="javascript: void(0);" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

	        <div class="col-md-6 col-lg-3">
	            <div class="card d-block">
	              	<div class="card-body">
	                    <h5 class="card-title">Card title</h5>
	                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
	              	</div>
	                    <img class="img-fluid" src="{{asset('minton/images/gallery/4.jpg')}}" alt="Card image cap">
	                <div class="card-body">
	                    <p class="card-text">Some quick example text to build on the card title and make
	                            up the bulk of the card's content.</p>
	                    
	                    <a href="javascript: void(0);" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
	                    
	                </div> <!-- end card-body-->
	            </div> <!-- end card-->
	        </div><!-- end col -->



	    <div class="col-md-6 col-lg-3">
            <div class="card d-block">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                        <img class="img-fluid" src="{{asset('minton/images/gallery/7.jpg')}}" alt="Card image cap">
                <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                    <a href="javascript: void(0);" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
	</div>
	</div>
</div>
@endsection
