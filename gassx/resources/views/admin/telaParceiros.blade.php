@extends('principal')
@section('base')
	<div class="row">
              <div class="col-sm-4">
                                <button type="button" class="btn btn-sm btn-primary waves-effect waves-light mb-4">
                                    <i class="mdi mdi-plus-circle"></i> Add New
                                </button>
                            </div>
                            <div class="col-sm-8">
                                <form class="form-inline float-right">
                                    <div class="form-group">
                                        <label for="sort-select">Sort :</label>
                                        <select class="form-control ml-2 form-control-sm" id="sort-select">
                                            <option>Date</option>
                                            <option>Name</option>
                                            <option>Revenue</option>
                                            <option>Employees</option>
                                        </select>
                                    </div>
                                </form>
                            </div><!-- end col-->
          </div>
           <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/airbnb.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p class="text-muted  font-14">San Francisco, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                        for people to lease or rent..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">260 cr</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">3.1k</h3>
                                        </div>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/apple.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Apple Inc.</h4>
                                        <p class="text-muted  font-14">Cupertino, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops,
                                        and sells..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">22,923.4 cr</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">47k</h3>
                                        </div>
                                    </div>

                                    <div id="company-2" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/google.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Google LLC</h4>
                                        <p class="text-muted  font-14">Menlo Park, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Google LLC is an American multinational technology company that specializes in Internet-related services and products, which
                                        include..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">110 bn</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">72k</h3>
                                        </div>
                                    </div>

                                    <div id="company-3" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/amazon.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Amazon Inc.</h4>
                                        <p class="text-muted  font-14">Seattle, Washington</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Amazon.com, Inc., doing business as Amazon, is an American electronic commerce and cloud computing company based in Seattle..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">17,786 cr</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">566k</h3>
                                        </div>
                                    </div>

                                    <div id="company-4" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/facebook.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Facebook Inc.</h4>
                                        <p class="text-muted  font-14">Cambridge, Massachusetts</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Facebook is an American online social media and social networking service company based in Menlo Park, California..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">9.16 bn</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">25.1k</h3>
                                        </div>
                                    </div>

                                    <div id="company-5" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="{{url('minton/images/companies/cisco.png')}}" alt="logo" class="thumb-lg rounded-circle mb-3">
                                        <h4 class="mb-1">Cisco Systems</h4>
                                        <p class="text-muted  font-14">San Jose, California</p>
                                    </div>

                                    <p class="font-14 text-center text-muted">
                                        Cisco Systems, Inc. is an American multinational technology conglomerate headquartered in San Jose, California..
                                    </p>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                    </div>

                                    <div class="row mt-5 text-center">
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Revenue (USD)</h5>
                                            <h3 class="m-b-30">4,800.5 cr</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-normal text-muted">Number of employees</h5>
                                            <h3 class="m-b-30">73.4k</h3>
                                        </div>
                                    </div>

                                    <div id="company-6" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->
@endsection