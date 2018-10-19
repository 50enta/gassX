@extends('principal')


@section('base')

 <div class="content">
	<div class="container-fluid">


                          <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Todos eventos</h4>
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/user/atualizarTodosEventos/'.$dados['usuario']->id) }}">
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
		    <div class="row">  
		                   
		                    
				<div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Card title</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/small/img1.jpg')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                            
			                    
			                     <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Participar</a>

			                    

			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}"  class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline" data-target=""></i> mais detalhes</a>
			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->
			                  
 
			         <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/small/img2.jpg')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->


			        <div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Card title</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/small/img5.jpg')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                    
										<a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			                    
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
										<a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom "><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->



		    </div>
		

			<div class="row">  
		                   
		                    
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
			                    
			                     <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->
			                  


			         <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/8.jpg')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                 <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->

			        <div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Card title</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/12.jpg')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                    
			                    <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->



			    <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/9.jpg')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                 <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('/eventos/todosEventos/telaDetalhes')}}" class="card-link text-custom "><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->



		    </div>
			<button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button>

		</div>


	</div>

<!-- scrips para sweets alerts no buntao participar -->
<script type="text/javascript">
	document.querySelector('.sweet-1').onclick = function(){
        swal("Here's a message!");
      };

     document.querySelector('.sweet-4').onclick = function(){
		swal({
			 	title: "Are you sure?",
			  text: "You will not be able to recover !",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Sim!",
			  cancelButtonText: "Nao, cancel!",
			  closeOnConfirm: false,
			  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
		    swal({
			  title: "Sweet!",
			  text: "Here's a custom image.",
			  imageUrl: 'thumbs-up.jpg'
			});
		  } else {
		    swal("Cancelled", "Your imaginary file is safe :)", "error");
		  }
		});
     };

</script>

</div>

@endsection
