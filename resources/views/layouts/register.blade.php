@extends('layouts.main')

@section('content')

@php

$guests=App\Guest::get();


@endphp


    <div class="owl-carousel-wrapper">



        <div class="box-92819">
        <h1 class="text-white mb-3">Register To Contact Us</h1>
        <p class="lead text-white">If you would like to get in touch with us, please fill out the below form and one of our team members will contact you.</p>        </div>

        <div class="owl-carousel owl-1 ">

            <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/tim-marshall-cAtzHUz7Z8g-unsplash.jpg');"></div>
            <div class="ftco-cover-1 overlay"
                style="background-image: url(/front/images/kat-yukawa-K0E6E0a0R3A-unsplash.jpg);">
            </div>
            <div class="ftco-cover-1 overlay"
                style="background-image: url(/front/images/clark-tibbs-oqStl2L5oxI-unsplash.jpg);"></div>

        </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="{{ route('guest.store') }}" method="post">
            
            @include('partials.errors')
            {{ csrf_field() }}

              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <label for="">Full Name</label>
                  <input type="text" class="form-control" placeholder="Enter Full Name" name="u_name" required>
                </div>
                <div class="col-md-6">
                <label for="">Phone Number</label>
                  <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="u_phone"required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <label for="">E-mail Address</label>
                  <input type="text" class="form-control" placeholder="Email address" name="u_email" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <label for="">Your Message</label>
                  <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h4 class="text-cursive mb-4">If you're a school, company, coach, medical center, or any other business, please contact us through email: </h4>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Email:</span><span>contact@shinealight.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection