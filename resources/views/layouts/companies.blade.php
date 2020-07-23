@extends('layouts.main')

@section('content')

@php
$companies=App\Company::get();
@endphp


    <div class="box-92819">
        <h1 class="text-white mb-3">Explore Company Services</h1>
     </div>

    <div class="owl-carousel owl-1 ">

    <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/companyheader.jpg');"></div>  
    <div class="ftco-cover-1 overlay" style="background-image: url('images2/design med14.jpg');"></div>
    <div class="ftco-cover-1 overlay" style="background-image: url('images2/hospital-room.jpg');"></div>
    
    </div>

    <section id="team" class="my-5">
        <div class="container">

        
        <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/front/images/companyheader.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">Company Name</h5>
                                </div>

                            </div>
                            <p class="card-text">Company Service</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>Location</p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
        </div>

        </div>
    </section>
    
@endsection