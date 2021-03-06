@extends('principal')


@section('base')

 <div class="content">
	<div class="container-fluid">

        <div class="row">
                 <div class="col-sm-12">
                     <div class="page-title-box">
                         <h4 class="page-title">Meus eventos</h4>
                        <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('user/atualizarMeusEventos/'.$dados['usuario']->id) }}">
							{{csrf_field() }}
                                 
                             <div class="form-group row">
								<input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="{{$dados['data']['mes_int'].'/'.$dados['data']['ano']}}" >
								<button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5" >Buscar</button>
							</div>
						</form>
                   		 <div style="padding-bottom: 18px;"class=""></div>
                   </div>
                </div>
            </div>

           
               


		@if(!empty($dados['lista_meus_eventos']))
          @foreach($dados['lista_meus_eventos'] as $lista)

		    <div class="row card-body"> 
		    	@foreach($lista as $item)
		    	
				<div class="col-md-6 col-lg-3">
			            <div class="card d-block">
			              	<div class="card-body">
			                    <h5 class="card-title"> {{$item->descricao}}</h5>
			                    <h6>Data: {{$item->dataInicio}}</h6>
			              	</div>
			                    <img class="img-fluid" src="{{asset('minton/images/padrao/evento-padrao1.png')}}" alt="Card image cap">
			                <div class="card-body">
			                    <p class="card-text">{{$item->objectivo}}</p>
			                    @if(!$item->fechado)

			                     	<a href="{{url('user/cancelarParticipacao/'.$dados['usuario']->id.'/'.$item->id)}}" data-toggle="#con-close-modal" class="btn btn-danger sweet-1 botao" >Cancelar</a>

 								@endif
			                    <a href="{{url('user/detalhesMeusEvento_user/'.$dados['usuario']->id.'/'.$item->id)}}"  class="card-link text-custom" id ="det_1"><i class="mdi mdi-arrow-right-bold-hexagon-outline" data-target=""></i>detalhes</a>
			                </div> <!-- end card-body-->
			            </div> <!-- end card-->
			    </div><!-- end col -->
			  
			   @endforeach             

		    </div>
		@endforeach
      @endif  

		

	</div>



	

</script>

</div>

@endsection
