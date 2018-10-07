<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/minton/new-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 03:17:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Um sistema de gestão de associações"> 
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{asset('minton/images/favicon.ico')}}">

        <title>GassX</title>
        <link href="{{asset('minton/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{asset('minton/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('minton/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('minton/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <link href="{{asset('minton/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('minton/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('minton/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('minton/plugins/magnific-popup/dist/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('minton/plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css')}}" />

        <link href="{{asset('minton/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('minton/plugins/morris/morris.css')}}">

        <link href="{{asset('minton/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('minton/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('minton/css/style.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('minton/js/modernizr.min.js')}}"></script>

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ url('principal')}}" class="logo"><i class="mdi mdi-radar"></i> <span>GassX</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item notification-list hide-phone">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="mdi mdi-dots-horizontal noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notificações</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    Ver tudo
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('minton/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Bem vindo! User</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Configurações</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-open"></i> <span>Bloquear tela</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Localizar..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Principal</li>

                            <li>
                                <a href="{{ url('principal')}}" class="waves-effect waves-primary">
                                    <i class="ti-home"></i><span> Início </span>
                                </a>
                            </li>

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class=" mdi mdi-calendar"></i><span> Eventos </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('eventos')}}">Todos eventos</a></li>
                                    <li><a href="{{url('eventos')}}">Meus eventos</a></li>
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class=" mdi mdi-clipboard-account"></i><span> Minha conta </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('contas')}}">Gastos</a></li>
                                    <li><a href="{{url('contas')}}">Recargas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="mdi mdi-credit-card"></i><span> Pagamentos </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.html">Inbox</a></li>
                                    <li><a href="mail-compose.html">Compose Mail</a></li>
                                    <li><a href="mail-read.html">Histórico</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-paint-bucket"></i> <span> Contribuíções </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-shine"></i><span> Notificações </span> 
                                    <span class="badge badge-pink pull-right">4</span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Lidas</a></li>
                                    <li><a href="form-advanced.html">Não lidas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-light-bulb"></i><span> Configurações </span> 
                                    <span class="menu-arrow"></span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Conta</a></li>
                                    <li><a href="components-carousel.html">Perfil</a></li>
                                    <li><a href="components-widgets.html">Outros</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Mais</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-menu-alt"></i><span> Administração </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/admin/financas')}}">Finanças</a></li>
                                    <li><a href="{{url('/admin/despesas')}}">Despesas</a></li>
                                    <li><a href="{{url('/admin/utilizadores')}}">Utilizadores</a></li>
                                     <li><a href="{{url('/admin/eventos')}}">Eventos</a></li>
                                    <li><a href="{{url('/admin/parceiros')}}">Parceiros</a></li>
                                    <li><a href="{{url('/admin/quotas')}}">Quotas</a></li>
                                     <li><a href="{{url('/admin/entrSaidas')}}">Entradas/ Saídas</a></li>
                                    <li><a href="{{url('/admin/contribuicoes')}}">Contribuíções</a></li>
                                    <li><a href="{{url('/admin/outros')}}">Outros</a></li>
                                </ul>
                            </li>
                        </ul>


                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                    @yield('base')
                <footer class="footer">
                        2018 © GassX <br/>
                       by: Válter Cinquenta & Lucília Mandlate
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                TimeLine
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Config.
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{asset('minton/js/jquery.min.js')}}"></script>
        <script src="{{asset('minton/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
        <script src="{{asset('minton/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('minton/js/detect.js')}}"></script>
        <script src="{{asset('minton/js/fastclick.js')}}"></script>
        <script src="{{asset('minton/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('minton/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('minton/js/waves.js')}}"></script>
        <script src="{{asset('minton/js/wow.min.js')}}"></script>
        <script src="{{asset('minton/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('minton/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('minton/plugins/switchery/switchery.min.js')}}"></script>
        
        <!-- Counter Up  -->
        <script src="{{asset('minton/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('minton/plugins/counterup/jquery.counterup.min.js')}}"></script>

        {{-- Dat piker sei lá --}}
        <script src="{{asset('minton/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{asset('minton/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script src="{{asset('minton/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('minton/plugins/select2/js/select2.min.js" type="text/javascript')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript')}}"></script>

        <script src="{{asset('minton/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('minton/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        
        <script src="{{asset('minton/pages/jquery.form-advanced.init.js')}}"></script>

        <!-- Page js  -->
        <script src="{{asset('minton/pages/jquery.dashboard.js')}}"></script>

        <!-- Examples -->
        <script src="{{asset('minton/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('minton/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
        <script src="{{asset('minton/plugins/tiny-editable/numeric-input-example.js')}}"></script>

     
        <!-- Custom main Js -->
        <script src="{{asset('minton/js/jquery.core.js')}}"></script>
        <script src="{{asset('minton/js/jquery.app.js')}}"></script>

        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });

        </script>
        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>


        <script src="{{asset('minton/pages/datatables.editable.init.js')}}"></script>
        <script>
            var startDate = new Date();
            var fechaFin = new Date();
            var FromEndDate = new Date();
            var ToEndDate = new Date();

            $('.from').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: 'mm/yyyy'
            }).on('changeDate', function(selected){
                    startDate = new Date(selected.date.valueOf());
                    startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                    $('.to').datepicker('setStartDate', startDate);
                }); 

            $('.to').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: 'mm/yyyy'
            }).on('changeDate', function(selected){
                    FromEndDate = new Date(selected.date.valueOf());
                    FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                    $('.from').datepicker('setEndDate', FromEndDate);
                });

        </script>

    </body>

</html>