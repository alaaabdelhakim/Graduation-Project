@extends('layouts.main')

@section('content')

@php
$schools=App\School::get();
@endphp

<div class="owl-carousel-wrapper">



<div class="box-92819">
  <h1 class="text-white mb-3">SCHOOLS</h1>
  <p class="text-white mb-3">Special needs school gives hope to disabled Egyptians</p>

  <p><a href="#" class="btn btn-primary py-3 px-4 rounded-0">WANT TO HELP?</a></p>
</div>

<div class="owl-carousel owl-1 ">

  <div class="ftco-cover-1 overlay" style="background-image: url('/front/images/img1115.jpg');"></div>
  <div class="ftco-cover-1 overlay" style="background-image: url(/front/images/larm-rmah-AEaTUnvneik-unsplash.jpg);">
  </div>
  <div class="ftco-cover-1 overlay" style="background-image: url(/front/images/93.webp);"></div>

</div>
</div>


<div class="site-section">
<div class="container">
  
  <div class="row mb-5 align-items-st">
    <div class="col-md-5">
      <div class="heading-20219">
        <h2 class="title text-cursive mb-4">SCHOOLS IN EGYPT </h2>
        <p>Egypt can no longer ignore its citizens with special needs, who make up five percent of the population, says Nancy Maghraby, chairwoman of the newly opened Special Education for Advancement School (SEAS).

          The SEAS, as is obvious from its name, is a unique school dedicated to establishing a comprehensive education foundation for students with special needs, aged one to 21 years.

          The school's main objective is to prepare young people with moderate to severe mental retardation to live independent lives and engage in their communities as active citizens.

          “Looking back at history, we find many people who were disadvantaged have great influence in changing the world around us,” says Maghraby. “They are human beings who should not be marginalized by the society and deserve proper education.”

          Maghraby out that the SEAS is distinguished from other schools with its highly experienced staff and positive, fully equipped environment. This combination has made the school capable of taking in students with severe mental and physical development disabilities, including cerebral palsy, autism, attention deficit hyperactivity disorder.

          “Most schools or education centers refuse to admit these cases because they require constant attention every step of the way and an individualized education plan,” says Maghraby.
          </p>

       </div>
   </div>


             <div class="col-md-7 col-lg-6">
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  	<img src="/front/images/img12.png" alt="Image" width="400" height="400" class="img-fluid">
                  		<div class="custom-progress-wrap">
                   			 <span class="caption">80% complete</span>
                   			 <div class="custom-progress-inner">
                    	 		<div class="custom-progress bg-danger" style="width: 80%;"></div>
                   		 	</div>
                		</div>
           		 </a>

            <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block">Specail Education For Advancement
                </span>
                <h3 class="mb-4"><a href="#">Categories: Schools &amp; Centers -Special Needs</a></h3>
                <hr>

                <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>  Close Dar El Mona Physiotherapy and Rehabilitation Resort
                </p>
                <hr>
                <a href="http://www.sea-edu.com/Default.aspx " class="btn btn-primary btn-block">Vist Us</a>    
              </div>
              
              </div>
          </div>
        </div>


    <div class="row">
    @foreach($schools as $school)

        <div class="col-md-4">
            
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="/images/schools/{{ $school->image }}" alt="Image" width="100%" height="100%" class="img-fluid">
                  <div class="custom-progress-wrap">
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-success" ></div>
                    </div>
                </div>
              </a>

              <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">{{ $school->s_name }}</span>
                  <h3 class="mb-4"><a href="#">Categories: Schools &amp; Centers -Special Needs</a></h3>
                <hr>
                    <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i>{{ $school->s_address}}</p>
                     <hr>
                     <a href="{{ $school->s_link }}" class="btn btn-primary btn-block">Vist Us</a>
                  <div class="border-top border-light border-bottom py-2 d-flex"></div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                     
                    </div>
                  </div>
              </div>
              
            </div>

        </div>
    @endforeach
    </div>

    <div class="site-section">
            <div class="container">
              
                  <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
                    <div class=""><h2 class="text-cursive">Helping the specail needs,disabled and Hurtings Children&nbsp;</h2>
                    </div>
                  </div>
              
            </div>
          </div>

        </div>
    </div>



@endsection