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
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>64,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Today's Visits</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-primary pull-left">
                                        <i class=" ti-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10">
                                        	<b>31,570</b>
                                        </h3>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-danger pull-left">
                                        <i class="ti-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>280</b></h3>
                                        <p class="text-muted mb-0">Today's Sales</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="ti-stats-up text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark m-t-10"><b>0.16</b>%</h3>
                                        <p class="text-muted mb-0">Conversion</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                  <div class="row">
                        <div class="card-box col-sm-12">
                        	{{-- botão novo utilizador --}}
                            <div class="card-box">
                            	   <!-- Custom Modals -->
                        <div class="row">
                            <div class="col col-12">
                               
                               <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Adicionar novo Membro</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                      


                                                      <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card-box">
                                                               
                                                                
<form id="wizard-vertical" role="application" class="wizard clearfix vertical"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard-vertical-t-0" href="#wizard-vertical-h-0" aria-controls="wizard-vertical-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="wizard-vertical-t-1" href="#wizard-vertical-h-1" aria-controls="wizard-vertical-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="wizard-vertical-t-2" href="#wizard-vertical-h-2" aria-controls="wizard-vertical-p-2"><span class="number">3.</span> Hints</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="wizard-vertical-t-3" href="#wizard-vertical-h-3" aria-controls="wizard-vertical-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                                        <h3 id="wizard-vertical-h-0" tabindex="-1" class="title current">Account</h3>
                                        <section id="wizard-vertical-p-0" role="tabpanel" aria-labelledby="wizard-vertical-h-0" class="body current" aria-hidden="false" style="">
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="userName1">User name *</label>
                                                <div class="">
                                                    <input class="form-control required" id="userName1" name="userName" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="password1"> Password *</label>
                                                <div class="">
                                                    <input id="password1" name="password" type="text" class="required form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="confirm1">Confirm Password *</label>
                                                <div class="">
                                                    <input id="confirm1" name="confirm" type="text" class="required form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                            </div>
                                        </section>
                                        <h3 id="wizard-vertical-h-1" tabindex="-1" class="title">Profile</h3>
                                        <section id="wizard-vertical-p-1" role="tabpanel" aria-labelledby="wizard-vertical-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <div class="form-group clearfix">

                                                <label class="control-label" for="name1"> First name *</label>
                                                <div class="">
                                                    <input id="name1" name="name" type="text" class="required form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="surname1"> Last name *</label>
                                                <div class="">
                                                    <input id="surname1" name="surname" type="text" class="required form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="email1">Email *</label>
                                                <div class="">
                                                    <input id="email1" name="email" type="text" class="required email form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="address1">Address *</label>
                                                <div class="">
                                                    <input id="address1" name="address" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                            </div>

                                        </section>
                                        <h3 id="wizard-vertical-h-2" tabindex="-1" class="title">Hints</h3>
                                        <section id="wizard-vertical-p-2" role="tabpanel" aria-labelledby="wizard-vertical-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <ul class="list-unstyled w-list">
                                                        <li><b>First Name :</b> Jonathan </li>
                                                        <li><b>Last Name :</b> Smith </li>
                                                        <li><b>Emial:</b> jonathan@smith.com</li>
                                                        <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <h3 id="wizard-vertical-h-3" tabindex="-1" class="title">Finish</h3>
                                        <section id="wizard-vertical-p-3" role="tabpanel" aria-labelledby="wizard-vertical-h-3" class="body" aria-hidden="true" style="display: none;">
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox-v" type="checkbox">
                                                        <label for="checkbox-v"> I agree with the Terms and Conditions. </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></form>

                                                             </div>
                                                        </div>
                                                     </div>  

                                                 </div>
                                                    
                                            </div>
                                              
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->



                                <div class="button-list">
                                        <!-- Responsive modal -->
                                    <button type="button" class="col-lg-4 btn btn-success waves-effect waves-light" data-toggle="modal" data-target=" #con-close-modal">Novo membro
                                    </button>  
                                </div>
                           
                            </div><!-- end col -->
                        </div>
                            </div>
                           <div class="row"> 
                           	{{-- Coluna 1 --}}
                            <div class="col-lg-4">
                              	<div class="card-box widget-user">
                                    <div>
                                        <img src="{{url('minton/images/users/avatar-1.jpg')}}" class="img-responsive rounded-circle" alt="user">
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

                            {{-- Coluna 2   --}}
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
                            </div>          
                        </div>
                  </div>

        </div>
</div>
@endsection