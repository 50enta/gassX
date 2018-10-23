@extends('principal')
@section('base')
<div class="content">
	<div class="container-fluid">


		<div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Detalhes de Eventos</h4>
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
       

    <div class="row">
        <div class= "col-12">
            <div class="card-box">
            
           
            
        <div class="tab-content">
        <div class="tab-pane" id="v-home">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            </div>

              <div class="tab-pane active" id="v-profile">
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                            </div>
            </div>
            </div>
        </div>
   </div>
      

<script>
     
    </script>

	</div>
</div>

@endsection