@extends('layouts.main')

@section('content')

@php
$famouscases=App\FamousCase::get();
@endphp

            <div class="box-92819">
                <p class="text-white h1 mb-3 text-uppercase page-intro-heading">OUR
                     FAMOUS<span>Cases</span></p>
            </div>

            <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/famouscase.jpeg');"></div>
      
        	</div>
            <section id="team" class="my-5">
                <div class="container">
                <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="font-weight-bold font-size-3em">Famous Cases</h2>
                            
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($famouscases as $famouscase)

                        <div class="col-sm-4 mb-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="/images/famouscases/{{ $famouscase->image }}" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title font-weight-bold">{{ $famouscase->f_name }}</h5>
                                        </div>
                                    
                                    </div>
                                    <p class="card-text"> {{ $famouscase->f_desc }}</p>
                                    
                                    <hr>
                                
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>


@endsection