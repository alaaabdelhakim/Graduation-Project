@extends('layouts.main')

@section('content')

@php
$coaches=App\Coach::get();
@endphp

    <div class="coaches-intro bg-dark">
            <div class="box-92819">
                <p class="text-white h1 mb-3 text-uppercase page-intro-heading">Meet Our <span>Team</span></p>
            </div>
        </div>
    </div>

    <section id="team" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="font-weight-bold font-size-3em">OUR COACHES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($coaches as $coach)

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="/images/coaches/{{ $coach->image }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title font-weight-bold">{{ $coach->c_name }}</h5>
                                </div>

                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <hr>
                            <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>{{ $coach->c_address }} </p>
                            <a href="{{ $coach->c_link }}" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    
@endsection