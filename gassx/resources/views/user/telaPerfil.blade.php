@extends('principal')
@section('base')
<!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Perfil</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">gassX</a></li>
                                        <li class="breadcrumb-item"><a href="#">usuário</a></li>
                                        <li class="breadcrumb-item active">perfil</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="text-center card-box">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="{{url('minton/images/users/avatar-1.jpg')}}" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h5 class="m-b-5">Valter Cinquenta</h5>
                                            <p class="text-muted">@5enta</p>
                                        </div>

                                        <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Ativo</button>
                                        {{-- Opção para inativo (btn-danger) --}}


                                        <div class="text-left m-t-40">
                                        	 <p class="text-muted font-13"><strong>Código :</strong> <span class="m-l-15">20189843</span></p>

                                            <p class="text-muted font-13"><strong>Nome :</strong> <span class="m-l-15">Valter Cinquenta</span></p>

                                            <p class="text-muted font-13"><strong>Celular :</strong><span class="m-l-15">(123) 123 1234</span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">cinquenta@gmail.com</span></p>

                                            <p class="text-muted font-13"><strong>Endereço :</strong> <span class="m-l-15">USA</span></p>

                                            <p class="text-muted font-13"><strong>Genero :</strong> <span class="m-l-15">Masculino</span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-30">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                    </div>

                                </div> <!-- end card-box -->

                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Avaliação</h4>

                                    <div class="p-b-10">
                                        <p>Quotas</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <p>Contribuíções</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                        <p>Eventos</p>
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end col -->


                            <div class="col-lg-8 col-xl-9">
                                <div class="">
                                    <div class="card-box">
                                        <ul class="nav nav-tabs tabs-bordered">
                                            
                                            <li class="nav-item">
                                                <a href="#conta" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                    MINHA CONTA
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    SOBRE MIM
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    CONFIGURAÇÕES
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="home">
                                                <p class="m-b-5">Hi I'm Johnathn Deo,has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type.
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                    dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                                    tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                                    ac, enim.</p>

                                                <div class="m-t-30">
                                                    <h5>Experience</h5>

                                                    <div class=" p-t-10">
                                                        <h6 class="text-primary m-b-5">Lead designer / Developer</h6>
                                                        <p class="">websitename.com</p>
                                                        <p><b>2010-2015</b></p>

                                                        <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                                            of the printing and typesetting industry. Lorem Ipsum has
                                                            been the industry's standard dummy text ever since the
                                                            1500s, when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>

                                                    <hr>

                                                    <div class="">
                                                        <h6 class="text-primary m-b-5">Senior Graphic Designer</h6>
                                                        <p class="">coderthemes.com</p>
                                                        <p><b>2007-2009</b></p>

                                                        <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                                            of the printing and typesetting industry. Lorem Ipsum has
                                                            been the industry's standard dummy text ever since the
                                                            1500s, when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane active" id="conta">
                                        <div class="col-md-12">
                                        <div class="card-box">
                                            <div class="row">
                                                
                            <div class="col-lg-6 col-md-6">
                                            <div class="col-lg-6 col-xl-12">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class=" ti-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                            <b class="counter">31,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </div>

                             <div class="col-lg-6 col-md-6">
                                <div class=" text-right ">
                                    <form class="form-horizontal float-right" role="form" method="POST" action="{{ url('/admin/atualizarPerfil') }}">
                                        {{csrf_field() }}
                                          <div style="padding-bottom: 30px;"class=""></div>
                                        <div class="form-group row">
                                            <input name="mes_ano" type="text" class="col-sm-5 form-control form-control-1 input-sm from" placeholder="Mês e ano" >
                                            <button type="submit" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Buscar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                                            </div>

                                            <div class="tabs-vertical-env">
                                                <ul class="nav tabs-vertical">
                                                    <li class="nav-item">
                                                        <a href="#v-profile" class="nav-link active" data-toggle="tab" aria-expanded="true">Gastos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#v-messages" class="nav-link" data-toggle="tab" aria-expanded="false">Recargas</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="v-profile">
                                                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Minton Admin v1</td>
                                                <td>01/01/2017</td>
                                                <td>26/04/2017</td>
                                                <td><span class="badge badge-info">Released</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minton Frontend v1</td>
                                                <td>01/01/2017</td>
                                                <td>26/04/2017</td>
                                                <td><span class="badge badge-success">Released</span></td>
                                                <td>Minton admin</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Minton Admin v1.1</td>
                                                <td>01/05/2017</td>
                                                <td>10/05/2017</td>
                                                <td><span class="badge badge-pink">Pending</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Minton Frontend v1.1</td>
                                                <td>01/01/2017</td>
                                                <td>31/05/2017</td>
                                                <td><span class="badge badge-purple">Work in Progress</span>
                                                </td>
                                                <td>Minton admin</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Minton Admin v1.3</td>
                                                <td>01/01/2017</td>
                                                <td>31/05/2017</td>
                                                <td><span class="badge badge-warning">Coming soon</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -8 -->
                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="v-messages">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                </div>
                            </div> <!-- end col -->
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="FullName">Nome completo</label>
                                                        <input type="text" value="John Doe" id="FullName" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Email">Email</label>
                                                        <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <input type="text" value="john" id="Username" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Password">Senha</label>
                                                        <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="RePassword">Redefinir senha</label>
                                                        <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="AboutMe">Outros</label>
                                                        <textarea style="height: 125px" id="AboutMe" class="form-control">
                                                        	Loren gypsum dolor sit mate, consecrate disciplining lit, tied diam nonunion nib modernism.
                                                        </textarea>
                                                    </div>
                                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Salvar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

@endsection