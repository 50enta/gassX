@extends('principal')


@section('base')

 <div class="content">
	<div class="container-fluid">
<!-- <br>
<br>
<br>
<br> -->
                        <!-- Page-Title -->
        <div class="row">
                 <div class="col-sm-12">
                     <div class="page-title-box">
                         <h4 class="page-title">Todos Eventos</h4>
                        <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('') }}">
							{{csrf_field() }}
                                 
                             <div class="form-group row">
								<input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="Mês e ano" >
								<button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5" >Buscar</button>
							</div>
						</form>
                   		 <div style="padding-bottom: 18px;"class=""></div>
                   </div>
                </div>
            </div>


                         

		    <div class="row card-body">  
				<div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Churrasco no Sitoe</h5>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/padrao/evento-padrao1.png')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Só mais um feriado que decidimos curtir e esquecer de tudo.</p>
			                    

			                     <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-1 botao" >Participar</a>
 									
			                    <a href="{{url('user/detalhesEvento/'.$dados['usuario']->id)}}"  class="card-link text-custom" id ="det_1"><i class="mdi mdi-arrow-right-bold-hexagon-outline" data-target=""></i>  detalhes</a>

			                     <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Participar</a>
			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}"  class="card-link text-custom"><i class="mdi mdi-arrow-right-bold-hexagon-outline" data-target=""></i>  detalhes</a>

			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->
			                  
 
			         <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Futebol 03</h5>
			                
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/padrao/evento-padrao1.png')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make.</p>
								<a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-1 botao">Participar</a>

			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom"  id ="det_2"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i>detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->


			       

					<div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Card title</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/padrao/evento-padrao1.png')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make.</p>
			                            
			                    
			                    <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-1 botao" > Participar</a>
			                    <a href ="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom" id ="det_3"> <i class="mdi mdi-arrow-right-bold-hexagon-outline"> </i> mais detalhes</a>
			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->
			                  

					<div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Card title</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/padrao/evento-padrao1.png')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make.</p>
			                    
			                    <a href="#" data-toggle="#con-close-modal" class="btn btn-primary sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3	']);">Participar</a>
			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom" id ="det_4"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			                    
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			        </div><!-- end col -->
			                  



		    </div>
		

			<div class="row card-body">  
		                   
		          
			        <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/8.jpg')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make.</p>
			                           
			                 <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom" id ="det_5"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->

			        <div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title">Casamento do Cinquenta</h5>
			                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/12.jpg')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make
			                            up the bulk of the card's content.</p>
			                    
			                    <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom" id ="det_6"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			                    
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
			                    <p class="card-text">Some quick example text to build on the card title and make  up the bulk of the card's content.</p>
			                           
			                 <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('user/detalhesEvento_user/'.$dados['usuario']->id)}}" class="card-link text-custom " id ="det_7"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->


			    <div class="col-md-6 col-lg-3">
			        <div class="card d-block">
			            <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
			            </div>
			                    <img class="img-fluid" src="{{asset('minton/images/gallery/6.jpg')}}" alt="Card image cap">
			            <div class="card-body">
			                    <p class="card-text">Some quick example text to build on the card title and make  up the bulk of the card's content.</p>
			                           
			                 <a href="javascript: void(0);" class="btn btn-primary">Participar</a>
			                    <a href="{{url('user/detalhesEvento/'.$dados['usuario']->id)}}" class="card-link text-custom " id ="det_8"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mais detalhes</a>
			            </div> <!-- end card-body-->
			        </div> <!-- end card-->
			    </div><!-- end col -->





		    </div>
			



	</div>

<!-- scrips para sweets alerts no buntao participar -->
<script type="text/javascript">
	

     document.querySelector('.sweet-1').onclick = function(){

		swal({
			 	title: "Tem Certeza?",
			  text: "se escolher Sim ira se tornar participante deste Evento !",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Sim!",
			  cancelButtonText: "Nao, cancela!",
			  closeOnConfirm: false,
			  closeOnCancel: false
		},
		function(isConfirm) {
  			if (isConfirm) {
    			swal("Agora é Participante do evento");
  			} else {
    			swal("Cancelled", "Your imaginary file is safe :)", "error");
  			}
		});
	};

	// for (var i = 0; i < document.querySelector('.sweet-1').length; i++) {
		document.querySelector('.sweet-1')[2].addEventListener('click', function() {
		swal({
			 	title: "Tem Certeza?",
			  text: "se escolher Sim ira se tornar participante deste Evento !",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Sim!",
			  cancelButtonText: "Nao, cancela!",
			  closeOnConfirm: false,
			  closeOnCancel: false
		},
		function(isConfirm) {
  			if (isConfirm) {
    			swal("Agora é Participante do evento");
  			} else {
    			swal("Cancelled", "Your imaginary file is safe :)", "error");
  			}
		});
	});	
	// }

	

</script>

</div>

@endsection
