@extends('principal')
@Section('base')

    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Contas</h4>

            <ul class="nav nav-tabs">
                 <li class="nav-item">
                     <a href="#gastos" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Gastos
                     </a>
                </li>
                <li class="nav-item">
                    <a href="#recargas" data-toggle="tab" aria-expanded="true" class="nav-link ">
                         Recargas
                    </a>
                </li>
               
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="gastos">
                    @yield('conteudo_gastos')
                </div>
                <div class="tab-pane fade show active" id="recargas">
                    @yield('conteudo_recargas') 
                </div>
               
            </div>
        </div>
    </div> <!-- end col -->



@endsection