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

         <!-- DataTables -->
        <link href="{{asset('minton/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('minton/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('minton/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{asset('minton/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('minton/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('minton/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <link href="{{asset('minton/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('minton/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('minton/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{asset('minton/plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet">

         <link rel="stylesheet" type="text/css" href="{{asset('minton/plugins/jquery.steps/css/jquery.steps.css')}}" />
        <link rel="stylesheet" href="{{asset('minton/plugins/magnific-popup/dist/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('minton/plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css')}}" />

        <link href="{{asset('minton/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('minton/plugins/morris/morris.css')}}">

        <link href="{{asset('minton/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('minton/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('minton/css/style.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('minton/js/modernizr.min.js')}}"></script>
        <script src="{{asset('minton/js/fullcalendar.min.css')}}"></script>
        <link href="{{asset('minton/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet">
        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
        
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ url('principal/'.$dados['usuario']->id)}}" class="logo"><i class="mdi mdi-radar"></i> <span>GassX</span></a>
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
                               @if($dados['usuario']->genero()->first()->descricao == 'Feminino')
                                <img src="{{asset('minton/images/padrao/perfil-padrao1-m.png')}}" alt="user" class="rounded-circle">
                                @elseif($dados['usuario']->genero()->first()->descricao == 'Masculino')
                                <img src="{{asset('minton/images/padrao/perfil-padrao1-f.png')}}" alt="user" class="rounded-circle">
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small> {{ $dados['usuario']->username }} </small> </h5>
                                </div>

                                <!-- item-->
                                <a href="{{url('/user/perfil/'.$dados['usuario']->id)}}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('/') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i> <span>Sair</span>
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
                                <a href="{{ url('principal/'.$dados['usuario']->id)}}" class="waves-effect waves-primary">
                                    <i class="ti-home"></i><span> Início </span>
                                </a>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class=" mdi mdi-calendar"></i><span> Eventos </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('user/todosEventos/'.$dados['usuario']->id)}}">Todos eventos</a></li>
                                    <li><a href="{{url('user/meusEventos/'.$dados['usuario']->id)}}">Meus eventos</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="mdi mdi-credit-card"></i><span> Pagamentos </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('user/quotas/'.$dados['usuario']->id)}}">Quotas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-paint-bucket"></i> <span> Contribuíções </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('user/contribuicoes/'.$dados['usuario']->id)}}">Minhas contribuíções</a></li>
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
                        @if($dados['usuario']->isAdmin())
                            <li class="menu-title">Mais</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-menu-alt"></i><span> Administração </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/admin/quotas/'.$dados['usuario']->id)}}">Quotas</a></li>
                                    <li><a href="{{url('/admin/contribuicoes/'.$dados['usuario']->id)}}">Contribuíções</a></li>
                                    <li><a href="{{url('/admin/despesas/'.$dados['usuario']->id)}}">Despesas</a></li>
                                    <li><a href="{{url('/admin/financas/'.$dados['usuario']->id)}}">Finanças</a></li>
                                    <li><a href="{{url('/admin/utilizadores/'.$dados['usuario']->id)}}">Membros</a></li>
                                    <li><a href="{{url('/admin/parceiros/'.$dados['usuario']->id)}}">Parceiros</a></li>
                                    <li><a href="{{url('/admin/eventos/'.$dados['usuario']->id)}}">Eventos</a></li>
                                    <li><a href="{{url('/admin/outros/'.$dados['usuario']->id)}}">Outros</a></li>

                                  {{--   <li><a href="#" onclick="irPara('/admin/quotas/{{$dados['usuario']->id}}')">Quotas</a></li>
                                    <li><a href="#" onclick="irPara('/admin/contribuicoes/{{$dados['usuario']->id}}')">Contribuíções</a></li>
                                    <li><a href="#" onclick="irPara('/admin/despesas/{{$dados['usuario']->id}}')">Despesas</a></li>
                                    <li><a href="#" onclick="irPara('/admin/financas/{{$dados['usuario']->id}}')">Finanças</a></li>
                                    <li><a href="#" onclick="irPara('/admin/membros/{{$dados['usuario']->id}}')">Membros</a></li>
                                    <li><a href="#" onclick="irPara('/admin/parceiros/{{$dados['usuario']->id}}')">Parceiros</a></li>
                                    <li><a href="#" onclick="irPara('/admin/eventos/{{$dados['usuario']->id}}')">Eventos</a></li>
                                    <li><a href="#" onclick="irPara('/admin/outros/{{$dados['usuario']->id}}')">Outros</a></li> --}}

                                </ul>
                            </li>
                        @endif
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
                     @yield('base', new Illuminate\Support\HtmlString(view('minton.inicio1')))

                <!-- <div class="centro">

                </div>
 -->

                <footer class="footer">
                        2018 © GassX 
                </footer>
   
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



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
        <script src="{{asset('minton/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
          <script src="{{asset('minton/plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>
            <script type="text/javascript" src="{{asset('minton/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

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

        <!-- <script src="{{asset('minton/pages/jquery.wizard-init.js')}}" type="text/javascript"></script> -->
        <!-- Page js  -->
        <script src="{{asset('minton/pages/jquery.dashboard.js')}}"></script>

        <script src="{{asset('minton/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/dataTables.responsive.min.js')}}"></script>


        <!-- Examples -->
        <script src="{{asset('minton/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('minton/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
        <script src="{{asset('minton/plugins/tiny-editable/numeric-input-example.js')}}"></script>


        <script src="{{asset('minton/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('minton/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('minton/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('minton/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('minton/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('minton/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('minton/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('minton/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('minton/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('minton/pages/jquery.form-advanced.init.js')}}"></script>
        <script src="{{asset('minton/plugins/sweet-alert/sweetalert2.min.js')}}" type="text/javascript" ></script>
      
     
     
        <!-- Custom main Js -->
        <script src="{{asset('minton/js/jquery.core.js')}}"></script>
        <script src="{{asset('minton/js/jquery.app.js')}}"></script>

        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 0,
                    time: 120
                });
            });

        </script>
        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

         <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
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

        {{-- CENAS SOBRE TABELA PDF --}}
          <!-- Required datatable js -->
        <script src="{{asset('minton/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('minton/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/buttons.print.min.js')}}"></script>

 <!-- Key Tables -->
        <script src="{{asset('minton/plugins/datatables/dataTables.keyTable.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('minton/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('minton/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Selection table -->
        <script src="{{asset('minton/plugins/datatables/dataTables.select.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('minton/js/jquery.core.js')}}"></script>
        {{-- <script src="{{asset('minton/js/jquery.app.js')}}"></script> --}}

           <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({ 
                    lengthChange: false,
                    // buttons: ['copy', 'excel', 'pdf']
                    buttons: ['excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>


        //para requisições ajax
        <script type="text/javascript">
                function irPara(rota){
                        $.ajax(
                        {
                            // url: "/corpo",
                            url: rota,
                            type: 'GET',
                        }).done( 
                            function(data) 

                            {
                                $('.centro').html(data.html);
                            }
                        );
                }
                irPara("/principal/{{$dados['usuario']->id}}");
        </script>


    </body>

</html>