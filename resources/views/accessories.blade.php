@extends('layouts.master')
@section('dash')
@include('sidebar.accessories')
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
	{{-- <head>
		<meta charset="utf-8">
		<title>Accessories</title>
        <!-- Google Web Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>    
        <link href='http://fonts.googleapis.com/css?family=Indie Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
            
        <!--Choco bar Theme CSS style -->
        <link href="acc/css/products.css" rel="stylesheet">     
        <link rel="stylesheet" href="acc/css/animate.css">      
    </head> --}}
	<body >
{{-- <!-- Products section -->
		<div class="section outdiv" id="specialities">
 	     <div class="container">
    	  <div class="col-md-12"><h1 class="text-center wow pulse"><span>Our Specialities</span></h1>
    				<p class="sub-headers text-center">Top rated by customers!</p>
			
                <div class="speciality wow fadeIn" data-wow-delay="0.6s">

	             <div class="spe-prods">
					<div class="mainbox">
						<h3>Special 1</h3>
                        <img class="rotprod" src="acc/img/donut.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$10</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
			<div class="spe-prods">
					<div class="mainbox">
						<h3>Special 2</h3>
                        <img class="rotprod"  src="acc/img/donut.png" alt="">
					</div>
				<div class="price-big">
					<div>
						<div class="floatting-price">
							<h3>$30</h3>
						</div>
						<div class="month">
							<p> / 6 piece</p>
						</div>
						
					</div>
					<div class="ordersection">
						<a href="#" class="buybtn">Order</a>
					</div>
				</div>
			</div>
				<div class="spe-prods">
					<div class="mainbox">
						<h3>Special 3</h3>
                        <img class="rotprod" src="acc/img/donut.png" alt="">
					</div>
					<div class="price-big">
					<div>
						<div class="floatting-price">
							<h3>$60</h3>
						</div>
						<div class="month">
							<p> / Dozen</p>
						</div>
					</div>
						<div class="ordersection">
							<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
              </div>
           </div>   
         </div>  
       </div>                           		
<!-- Products section -->

<!-- Required JavaScript libraris collection -->    
<!--The jQuery library from local-->    
        <script type="text/javascript" src="acc/js/jquery.min.js"></script>
<!-- Bootstrap library from local -->        
        <script type="text/javascript" src="acc/js/bootstrap.min.js"></script>
        
        <!-- In own hosting -->
        <!-- <script src="acc/js/wow.min.js"></script>-->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        
<script>
        //Initializing WOW aninations
          new WOW().init();
</script> --}}
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h1>Accessories</h1>
                                    <span>Below are the accessories that are available in the service centres.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <!-- Product list start -->
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\cover.jpg" class="img-fluid o-hidden">
                                            </a>
                                            <div class="p-new"><a href=""> New </a></div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Seat Covers</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">3 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(17 Ratings &amp;  13 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 2500 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\rims.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                            <div class="p-sale">SALE</div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>20 inch Wheel Rims</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(18 Ratings &amp;  14 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 9950 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\wheel.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Steering Wheel Cover</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(15 Ratings &amp;  6 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 550 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\tool.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Tool Kit</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(7 Ratings &amp;  1 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 1850 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\mat.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Floor Mat</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(20 Ratings &amp;  13 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 3250 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\sun1.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                            <div class="p-sale">SALE</div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Sun Shade 6pcs</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">2.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(12 Ratings &amp;  8 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 2200 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\gear.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Gear Cover</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(9 Ratings &amp;  5 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 450 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\car.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                            <div class="p-new"><a href=""> New </a></div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Car Perfume</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">3 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(6 Ratings &amp;  1 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 1300 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\plane.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Plane Dashboard</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(7 Ratings &amp;  5 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 850 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\mosque.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                            <div class="p-sale">SALE</div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Mosque Dashboard Ornament</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">2.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(4 Ratings &amp;  4 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 950 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\crystal.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                            <div class="p-new"><a href=""> New </a></div>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Crytal Pendant</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">4.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(10 Ratings &amp;  5 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 1900 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="card prod-view">
                                    <div class="prod-item text-center">
                                        <div class="prod-img">
                                            <a href="#!" class="hvr-shrink">
                                                <img src="img\acc\watch.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                            </a>
                                        </div>
                                        <div class="prod-info">
                                            <a href="#!" class="txt-muted"><h4>Watch Pendant</h4></a>
                                            <div class="m-b-10">
                                                <label class="label label-success">3 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">(4 Ratings &amp;  4 Reviews)</a>
                                            </div>
                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>Rs. 1300 {{--<small class="old-price"><i class="icofont icofont-cur-dollar"></i>1850</small> --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product list end -->
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
	</body>
</html>                    
@endsection
