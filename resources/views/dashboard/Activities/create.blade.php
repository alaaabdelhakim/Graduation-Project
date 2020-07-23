@extends('layouts.dashboard.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">

            <!-- general form elements -->
            <div class="card border-top border-primary">

              <div class="card-header">

                <h3 class="card-title"><b>Add New Activity</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.activities.store') }}" method="post" enctype="multipart/form-data">

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Activity Type</label>
                    <input type="text" name="a_type" class="form-control" placeholder="Enter Activity Type" value="{{ old('a_type') }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Audio</label>
                    <input type="file" name="audio" class="form-control">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Video</label>

                    <input type="file" name="video" class="form-control">

                  </div>

                </div>
                <!-- /.card-body -->

                

                <div class="card-footer form-group">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
    <!-- /create new admin .content -->

  <!-- /.content-wrapper -->

@endsection