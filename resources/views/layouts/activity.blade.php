@extends('layouts.main')

@section('content')

@php
$activities=App\Activity::get();
@endphp


    <div class="owl-carousel-wrapper"> 
        <div class="box-92819">
                <h1 class="text-white mb-3">activities</h1>
            </div>
        
        <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/home-banner.jpg');"></div>   
    </div>
    
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 align-items-st">
                <div class="col-md-12">
                    <div class="heading-20219">
                    <h2 class="title text-cursive mb-4">Why After-School Activities Matter</h2>
                    <p>Many kids with special needs also have impressive talents, regardless of learning disabilities, social issues, or speech delays they may be dealing with. But that doesn't mean she can't run like the wind, draw like Picasso, or be a successful Girl Scout. It's important to recognize and build these talents, especially when your child's challenges are so often the focus of discussion.</p>
                    
                    </div>
                </div>
            </div>
            <div class="row">

            @foreach($activities as $activity)
                <div class="col-md-3 ml-3">
                    <audio controls>
                        <source src="/audio/activities/{{ $activity->audio }}" type="audio/wav">
                    </audio>

                </div>  
            @endforeach

            </div>
            <div class="row">
            @foreach($activities as $activity)

                <div class="col-md-4 align-items-st">
                    <div class="cause-shadow-sm">
                        <video style="width:100%;" src="/video/activities/{{ $activity->video }}"
                        controls loop  onDblClick="1"></video>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="site-section">
      <div class="container">
        
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
              <div class=""><h2 class="text-cursive">“All kids need is a little help, a little hope, and someone who believes in them”</h2>
              </div>
            </div>
        
      </div>
    </div>



@endsection