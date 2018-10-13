@extends('principal')
@section('base')

    <div class="col-md-12">
        <div class="card-box">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#financas" data-toggle="tab" aria-expanded="false" class="nav-link">
                        Finanças
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#despesas" data-toggle="tab" aria-expanded="true" class="nav-link active">
                    Despesas
                </a>
                </li>
                <li class="nav-item">
                    <a href="#utilizadores" data-toggle="tab" aria-expanded="false" class="nav-link">
                    Utilizadores
                    </a>
                </li>
                                            <li class="nav-item">
                                                <a href="#eventos" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Eventos
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a href="#parceiros" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Parceiros
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#quotas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Quotas
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#entr_saidas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Entradas/ Saídas
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#contribuicoes" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Contribuíções
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#outros" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Outros
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="financas">
                                                @yield('conteudo_financas')
                                               
                                            </div>
                                            <div class="tab-pane fade " id="despesas">
                                                @yield('conteudo_despesas')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="utilizadores">
                                                @yield('conteudo_utilizadores')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="eventos">
                                                @yield('conteudo_eventos')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="parceiros">
                                                @yield('conteudo_parceiros')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="quotas">
                                                @yield('conteudo_admin6')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="entr_saidas">
                                                @yield('conteudo_saidas')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="contribuicoes">
                                                @yield('conteudo_contribuicoes')
                                               
                                            </div>
                                            <div class="tab-pane fade" id="outros">
                                                @yield('conteudo_outros')
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->


@endsection