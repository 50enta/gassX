@extends('principal')
@section('base')

<!-- nao testado ainda -->
<div class="container-fluid">
<br>
<br>
<br>
<br>
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Eventos</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">GassX</a></li>
                                        <li class="breadcrumb-item"><a href="#">admin</a></li>
                                        <li class="breadcrumb-item active">Eventos</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                 <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg font-16 btn-primary btn-block  ">
                                                    <i class="mdi mdi-plus-circle-outline"></i> Create New Event
                                                </a>
                                                <div id="external-events" class="m-t-20">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                    <div class="external-event bg-success ui-draggable ui-draggable-handle" data-class="bg-success" style="position: relative;">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>New Theme Release
                                                    </div>
                                                    <div class="external-event bg-info ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>My Event
                                                    </div>
                                                    <div class="external-event bg-warning ui-draggable ui-draggable-handle" data-class="bg-warning" style="position: relative;">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Meet manager
                                                    </div>
                                                    <div class="external-event bg-danger ui-draggable ui-draggable-handle" data-class="bg-danger" style="position: relative;">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Create New theme
                                                    </div>
                                                </div>
    
                                                <!-- checkbox -->
                                                <div class="custom-control custom-checkbox mt-3">
                                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                </div>
    
                                                <div class="mt-5 d-none d-xl-block">
                                                    <h5 class="text-center">How It Works ?</h5>
    
                                                    <ul class="pl-3">
                                                        <li class="text-muted mb-3">
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        </li>
                                                        <li class="text-muted mb-3">
                                                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                                        </li>
                                                        <li class="text-muted mb-3">
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-lg-9">
                                                <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>October 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 299px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-09-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-07"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-08"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2018-10-09"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-10"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-11"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-12"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-tue fc-today " data-date="2018-10-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-10-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-10-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-10-13"><span class="fc-day-number">13</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"><div class="fc-content"><span class="fc-time">11:17p</span> <span class="fc-title">See John Deo</span></div></a></td><td rowspan="2"></td><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable"><div class="fc-content"><span class="fc-time">7:10p</span> <span class="fc-title">Hey!</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+2 more</a></div></td><td rowspan="2"></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable"><div class="fc-content"><span class="fc-time">9:10p</span> <span class="fc-title">Buy a Theme</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">9:57p</span> <span class="fc-title">Meet John Deo</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-14"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-15"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-16"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-10-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-10-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-10-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-10-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-10-20"><span class="fc-day-number">20</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-21"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-22"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-23"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-24"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-25"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-26"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-10-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-10-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-10-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-10-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-10-27"><span class="fc-day-number">27</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-28"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-29"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-30"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-10-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-11-03"><span class="fc-day-number">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-11-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-11-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-11-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-11-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2018-11-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2018-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2018-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2018-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-11-10"><span class="fc-day-number">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                            </div> <!-- end col -->

                                        </div>  <!-- end row -->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Add New Event</h4>
                                            </div>
                                            <div class="modal-body pt-3 pr-4 pl-4">
                                            </div>
                                            <div class="text-right pb-4 pr-4">
                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event  ">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Delete</button>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->

                                <!-- Modal Add Category -->
                                <div class="modal fade" id="add-category" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Add a category</h4>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Choose Category Color</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="primary">Primary</option>
                                                            <option value="success">Success</option>
                                                            <option value="danger">Danger</option>
                                                            <option value="info">Info</option>
                                                            <option value="warning">Warning</option>
                                                            <option value="dark">Dark</option>
                                                        </select>
                                                    </div>

                                                </form>

                                                <div class="text-right">
                                                    <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary ml-1   save-category" data-dismiss="modal">Save</button>
                                                </div>

                                            </div> <!-- end modal-body-->
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->
                            </div>
                            <!-- end col-12 -->
                        </div>
                        </div>
@endsection