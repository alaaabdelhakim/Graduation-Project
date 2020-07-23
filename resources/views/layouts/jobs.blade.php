@extends('layouts.main')

@section('content')

@php
$jobs=App\Job::get();
@endphp

  <!------------ Banner Area Start ------------>
     <section class="job-banner-area">
        <div class="img-gradient">
             <img src="front/images/jobs2.jpg" class="img-fluid" alt="My photo">
         </div>
     </section>

        <!-------- Banner Area End -------->

        <!-------- Job Tab Start -------->

     <section class="jobguru-job-tab-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="job-tab">
                        <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Available Job Positions</a>
                            </li>
                         </ul>
                     </div>
                </div>
            </div>
        </div>

        @foreach($jobs as $job)

         <div class="tab-content">
             <ul>
                <li>
                    <div class="company-list">
                        <div class="company-list-logo">
                            <a href="#">
                                <img src="/images/jobs/{{ $job->image }}" alt="">
                            </a>
                        </div>


                            <div class="company-list-details">
                                <h3>{{ $job->j_name }}</h3>
                                <p class="company-state"><i class="fa fa-map-marker"></i>{{ $job->j_address }}</p>
                                <p class="varify"><i class="fa fa-check"></i>{{ $job->j_type}}</p>
                            </div>

                            <div class="company-list-btn">
                                <button type="button" class="btn btn-success job-btn"> <a href="{{ $job->j_link }}" target="_blank">Apply Here </a></button>
                            </div>
                    </div>

                </li>

            </ul>
        </div>

        @endforeach


     </section>

@endsection