@extends('layouts.main')

@section('content')

<div class="owl-carousel-wrapper">

<div class="box-92819">
  <h1 class="text-white mb-3">Looking To Make a Difference In People's lives</h1>
  <p><a href="" class="btn btn-primary py-3 px-4 rounded-0">WANT TO HELP?</a></p>
</div>

<div class="owl-carousel owl-1 ">

    <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/hero_3.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url(/front/images/larm-rmah-AEaTUnvneik-unsplash.jpg);">
        </div>
            <div class="ftco-cover-1 overlay" style="background-image: url(/front/images/nathan-anderson-FHiJWoBodrs-unsplash.jpg);"></div>

            </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 box text-center mt-3">
            <div class="row">
            
                <div class="col-lg-2" data-aos="fade-up">
                    <a href="schools">
                        <div class="shadow-sm rounded-lg inner">
                        <span class="fas fa-school"></span></i><br>
                        <span>Schools</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2" data-aos="fade-up">
                    <a href="jobs">
                        <div class="shadow-sm rounded-lg inner-2">
                        <span class="fas fa-user-md"></span></i><br>
                        <span>Jobs</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2" data-aos="fade-up">
                    <a href="activity">
                        <div class="shadow-sm rounded-lg inner">
                        <span class="fas fa-football-ball"></span></i><br>
                        <span>Activities</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2" data-aos="fade-up">
                    <a href="coaches">
                        <div class="shadow-sm rounded-lg inner-2">
                        <span class="fas fa-chalkboard-teacher"></span></i><br>
                        <span>Coaches</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2" data-aos="fade-up">
                    <a href="medical">
                        <div class="shadow-sm rounded-lg inner">
                        <span class="fas fa-briefcase-medical"></span></i><br>
                        <span>Medical Centers</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2" data-aos="fade-up">
                    <a href="donations">
                        <div class="shadow-sm rounded-lg inner-2">
                        <span class="fas fa-hand-holding-usd"></span></i><br>
                        <span>Donations</span>
                        </div>
                    </a>
                </div>

             </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
          <div class="video-heading mb-3 text-center" data-aos="fade-up">
            <p class="h1 font-weight-bold text-uppercase">Our Main Idea</p>
          </div>
        </div>

        <div class="col-md-12" data-aos="fade-up">
          <video style="width:100%;" src="front/video/People With Disabilities Can Succeed Video - RaffertyWeiss Media.mp4"
            controls loop autoplay onDblClick="1"></video>
        </div>
    </div>
</div>

@endsection
