<!--           Contents for tutorial 5         -->

@extends('layout')

@section('content')

<!--           Email template or flyer page          -->

<div class="container">

    <div class="row"><h1>{{$user['name']}}</h1><br><h1 class="text-center">CSS Coupons</h1>
        <p class="text-center">Update: Made coupon titles appear correctly on mobile.</p>
    </div>

    <div id="quicknav">
        <ul>
            <li><a href="#red" class="btn btn-danger">Red</a></li>
            <li><a href="#green" class="btn btn-success">Green</a></li>
            <li><a href="#lightblue" class="btn btn-info">Light Blue</a></li>
            <li><a href="#yellow" class="btn btn-warning">Yellow</a></li>
            <li><a href="#blue" class="btn btn-primary">Blue</a></li>
        </ul>
    </div>

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title">
                    <img src="http://i.imgur.com/IOL5F9T.png">
                    <span class="hidden-xs">Automatic Transmission Service</span>
                    <span class="visible-xs">Automatic Transmission Service</span>
                </div>
              </div>
              <div class="panel-body">
                <img src="http://i.imgur.com/e07tg8R.png" class="coupon-img img-rounded">
                <div class="col-md-9">
                    <ul class="items">
                        <li>Add up to 5 quarts of motor oil (per specification)</li>
                        <li>Complimentary multi-point inspection</li>
                        <li>Drain and refill trnasmission fluid</li>
                        <li>System inspection</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="offer">
                        <span class="usd"><sup>$</sup></span>
                        <span class="number">39</span>
                        <span class="cents"><sup>95</sup></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="disclosure">Using Genuine Oil Filter and 
                    multigrade oil up to vehicle specification. Lube as 
                    necessary. Ester Oil or Synthetic available at additional 
                    cost. Excludes hazardous waste fee, tax and shop supplies, 
                    where applicable. Offer not valid with previous charges or 
                    with any other offers or specials. Customer must offer at 
                    time of write-up. No cash value.</p>
                </div>
              </div>
              <div class="panel-footer">
                <div class="coupon-code">
                    Code: GBWO2
                    <span class="print">
                        <a href="#" class="btn btn-link"><i class="fa fa-lg fa-print"></i> Print Coupon</a>
                    </span>
                </div>
                <div class="exp">Expires: Sep 30, 2016</div>
              </div>
            </div>
    	</div>
    </div>
</div>
            
<!--           Email template or flyer page          -->

@stop

<!--           Contents for tutorial 5 ends         -->