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
                                    <h4 class="page-title">Calendar</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-primary btn-block waves-effect waves-light">
                                                            <i class="fa fa-plus"></i> Create New
                                                        </button>
                                                        <div id="external-events" class="m-t-20">

                                                            <p>Drag and drop your event or click in the calendar</p>
                                                            <div class="external-event bg-primary ui-draggable ui-draggable-handle" data-class="bg-primary" style="position: relative;">
                                                                <i class="fa fa-move"></i>My Event One
                                                            </div>
                                                            <div class="external-event bg-pink ui-draggable ui-draggable-handle" data-class="bg-pink" style="position: relative;">
                                                                <i class="fa fa-move"></i>My Event Two
                                                            </div>
                                                            <div class="external-event bg-info ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;">
                                                                <i class="fa fa-move"></i>My Event Three
                                                            </div>
                                                            <div class="external-event bg-purple ui-draggable ui-draggable-handle" data-class="bg-purple" style="position: relative;">
                                                                <i class="fa fa-move"></i>My Event Four
                                                            </div>
                                                        </div>

                                                        <!-- checkbox -->
                                                        <div class="checkbox m-t-20">
                                                            <input id="drop-remove" type="checkbox">
                                                            <label for="drop-remove">
                                                                Remove after drop
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-lg-9">
                                        <div class="card-box">
                                            <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>October 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 384px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2018-09-30">30</td><td class="fc-day-number fc-mon fc-past" data-date="2018-10-01">1</td><td class="fc-day-number fc-tue fc-past" data-date="2018-10-02">2</td><td class="fc-day-number fc-wed fc-past" data-date="2018-10-03">3</td><td class="fc-day-number fc-thu fc-past" data-date="2018-10-04">4</td><td class="fc-day-number fc-fri fc-past" data-date="2018-10-05">5</td><td class="fc-day-number fc-sat fc-past" data-date="2018-10-06">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-07"></td><td class="fc-day fc-widget-content fc-mon fc-today fc-state-highlight" data-date="2018-10-08"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-09"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-10"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-11"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-12"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2018-10-07">7</td><td class="fc-day-number fc-mon fc-today fc-state-highlight" data-date="2018-10-08">8</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-09">9</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-10">10</td><td class="fc-day-number fc-thu fc-future" data-date="2018-10-11">11</td><td class="fc-day-number fc-fri fc-future" data-date="2018-10-12">12</td><td class="fc-day-number fc-sat fc-future" data-date="2018-10-13">13</td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">8:15p</span> <span class="fc-title">See John Deo</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable"><div class="fc-content"><span class="fc-time">4:08p</span> <span class="fc-title">Hey!</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable"><div class="fc-content"><span class="fc-time">6:08p</span> <span class="fc-title">Buy a Moltran</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-14"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-15"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-16"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-10-14">14</td><td class="fc-day-number fc-mon fc-future" data-date="2018-10-15">15</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-16">16</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-17">17</td><td class="fc-day-number fc-thu fc-future" data-date="2018-10-18">18</td><td class="fc-day-number fc-fri fc-future" data-date="2018-10-19">19</td><td class="fc-day-number fc-sat fc-future" data-date="2018-10-20">20</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-21"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-22"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-23"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-24"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-25"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-26"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-10-21">21</td><td class="fc-day-number fc-mon fc-future" data-date="2018-10-22">22</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-23">23</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-24">24</td><td class="fc-day-number fc-thu fc-future" data-date="2018-10-25">25</td><td class="fc-day-number fc-fri fc-future" data-date="2018-10-26">26</td><td class="fc-day-number fc-sat fc-future" data-date="2018-10-27">27</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-28"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-29"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-30"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-10-28">28</td><td class="fc-day-number fc-mon fc-future" data-date="2018-10-29">29</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-30">30</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-31">31</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2018-11-01">1</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2018-11-02">2</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2018-11-03">3</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 64px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-11-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-11-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-11-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-11-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2018-11-04">4</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2018-11-05">5</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2018-11-06">6</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2018-11-07">7</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2018-11-08">8</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2018-11-09">9</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2018-11-10">10</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title mt-0"><strong>Add Event</strong></h5>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title mt-0"><strong>Add</strong> a category</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div>
@endsection