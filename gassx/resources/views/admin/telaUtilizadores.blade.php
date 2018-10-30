@extends('principal')
@section('base')
	 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                       <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Membros</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">gassX</a></li>
                                        <li class="breadcrumb-item active">Admin</li>
                                        <li class="breadcrumb-item active">membros</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                {{-- main content start here --}}


                        <div class="row">
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>64,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total cadastrados</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
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

                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-danger pull-left">
                                        <i class="ti-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>280</b></h3>
                                        <p class="text-muted mb-0">Total inativos</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                           
                        </div>
                        <!-- end row -->


                  <div class="row">
                        <div class="card-box col-sm-12">
                           <div class="row"> 
                           	{{-- Coluna 1 --}}
                            <div class="col-lg-4">
                              	<div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-1.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-warning">Pendente</span>
                                            </p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-2.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-pink">Inativo</span>
                                            </p>
                                            <small class="text-success"><b>User</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                           <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-info">ativo</span>
                                            </p>
                                            <small class="text-pink"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                            </div>  

                            {{-- Coluna 2   --}}
                             <div class="col-lg-4">
                              	<div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-info">ativo</span>
                                            </p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-success"><b>User</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-pink"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Coluna 3 --}}
                             <div class="col-lg-4">
                              	<div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-2.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                             <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-pink">Inativo</span>
                                            </p>
                                            <small class="text-success"><b>User</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-7.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <p class="text-muted m-b-5 font-13">
                                                <span class="badge badge-pink">Inativo</span>
                                            </p>
                                            <small class="text-pink"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                            </div> 
                            </div>          
                        </div>
                  </div>

        </div>
</div>
@endsection