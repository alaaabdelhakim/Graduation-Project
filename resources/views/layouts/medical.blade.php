@extends('layouts.main')

@section('content')

@php
$medicals=App\Medical::get();
@endphp



<div class="owl-carousel-wrapper">

      

<div class="box-92819">
  <h1 class="text-white mb-3">Making Health
    Care Better Together</h1>
</div>

<div class="owl-carousel owl-1 ">

  <div class="ftco-cover-1 overlay" style="background-image: url('front/images/aaaaaaa.jpg');"></div>
  
</div>

</div>

<section id="team" class="my-5">
    <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="heading-f20219"></div>
                        <div class="col-md-6">
                <img src="/front/images/hero_2.png" alt="Image" class="bg-image"with 100px height="200">
            </div>
            </div>

            <div class="col-md-8">
                <p><h2 class="title text-cursive">Welcome to Children’s Specialized care</h2></row></p>
                <p>At health care, our compassionate healthcare professionals are dedicated to a single purpose -- helping you and your loved ones. Whether you're choosing a birthing center or you need to use one of our medical or surgical services, you can count on us. With a medical staff of more than 300 physicians, health care has been serving the Rio Grande Valley area since 1954.
                We are five-star rated for maternity care and nationally ranked in the top ten percent for joint replacement. We also offer a full range of medical and surgical services including our 24/7 ER. Mission Regional Medical Center offers convenience and easy access to high quality care close to home.</p>
            </div>        
        </div>
    </div>      

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="font-weight-bold font-size-3em">Our Centers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($medicals as $medical)

                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/images/medical/{{ $medical->image }}" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title font-weight-bold">{{ $medical->m_name }}</h5>
                                    </div>

                                </div>
                                <p class="card-text">Tel: {{ $medical->m_phone }}</p>
                                <hr>
                                <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>{{ $medical->m_address }} </p>
                                <a href="{{ $medical->m_link }}" class="btn btn-primary btn-block">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
</section>
 @endsection