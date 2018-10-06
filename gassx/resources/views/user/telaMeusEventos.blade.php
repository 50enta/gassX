@extends('principal')


@section('base')


<div class="tab-content">
	    <div class="row">  
	                   
	        <div class="col-md-6 col-lg-3">
	                    <!-- Simple card -->
	            <div class="card d-block">
	                <img class="card-img-top" src="{{asset('minton/images/small/img5.jpg')}}"alt="Card image cap">
	                <div class="card-body">
	                    <h5 class="card-title">Card title</h5>
	                    <p class="card-text">Some quick example text to build on the card title and make
	                    up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
	                    <a href="javascript: void(0);" class="btn btn-primary">Button</a>
	                </div> <!-- end card-body-->
	            </div> <!-- end card-->
	        </div><!-- end col -->

	                  


	       <div class="col-md-6 col-lg-3">
	            <div class="card d-block">
	               <img class="card-img-top" src="{{asset('minton/images/small/img2.jpg')}}" alt="Card image cap">
	                <div class="card-body">
	                	<h5 class="card-title">Card title</h5>
	                 	<p class="card-text">Some quick example text to build on the card title and make
	                    up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
	                    <a href="javascript: void(0);" class="btn btn-primary">Button</a>
	                </div> <!-- end card-body-->
	            </div> <!-- end card-->
	        </div><!-- end col -->


	        <div class="col-md-6 col-lg-3">
	            <div class="card d-block">
	              	<div class="card-body">
	                    <h5 class="card-title">Card title</h5>
	                  	<h6 class="card-subtitle text-muted">Support card subtitle</h6>
	              	</div>
	                    <img class="img-fluid" src="{{asset('minton/images/small/img1.jpg')}}" alt="Card image cap">
	                <div class="card-body">
	                    <p class="card-text">Some quick example text to build on the card title and make
	                            up the bulk of the card's content.</p>
	                    <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
	                    <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
	                </div> <!-- end card-body-->
	            </div> <!-- end card-->
	        </div><!-- end col -->



	    <div class="col-md-6 col-lg-3">
	        <div class="card d-block">
	            <div class="card-body">
	                <h5 class="card-title">Card title</h5>
	                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
	            </div>
	                    <img class="img-fluid" src="{{asset('minton/images/small/img3.jpg')}}" alt="Card image cap">
	            <div class="card-body">
	                    <p class="card-text">Some quick example text to build on the card title and make
	                            up the bulk of the card's content.</p>
	                <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
	                <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
	            </div> <!-- end card-body-->
	        </div> <!-- end card-->
	    </div><!-- end col -->
	            
	</div>

@endsection
