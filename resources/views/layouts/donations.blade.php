@extends('layouts.main')

@section('content')

@php

$donations=App\Donation::get();


@endphp


    <div class="owl-carousel-wrapper">



        <div class="box-92819">
            <h1 class="text-white mb-3">You could be someone's missing piece</h1>
        </div>

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
        <h3 class="text-cursive mb-4">If you want to make a contribution, please fill out this form:</h3>
        
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="{{ route('donations.store') }}" method="post">

            @include('partials.errors')
            {{ csrf_field() }}

              <div class="form-group row">

                <div class="col-md-6 mb-4 mb-lg-0">

                  <label for="">Donor:</label>

                  <input type="text" class="form-control" placeholder="Enter Full Name" name="donor" required>
                </div>

                <div class="col-md-6">

                  <label for="">Phone Number:</label>

                  <input type="text" class="form-control" placeholder="Enter Phone Number" name="d_phone" required>
                </div>
              </div>

              <div class="form-group row">

                <div class="col-md-12">

                  <label for="">Donation Type</label>
                  <textarea name="d_type" cols="30" rows="10" placeholder="Donation Type" class="form-control"  required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                   <button type="submit" class="btn btn-primary">Submit Donation</button>
                </div>
              </div>
            </form>
          </div>


          
        </div>
      </div>
    </div>

@endsection