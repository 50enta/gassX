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


        	Detalhes
        </div>
       @endsection


