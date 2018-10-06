@extends('principal')
@section('base')
	<div class="row">

                            <div class="col-sm-12">

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="m-b-30">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">
                                                	Novo 
                                                	<i class="mdi mdi-plus-circle-outline"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-striped add-edit-table" id="datatable-editable">
                                        <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6
                                            </td>
                                            <td>Win 98+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->
@endsection