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

                <h3 class="card-title"><b>Add New School</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.schools.store') }}" method="post" enctype="multipart/form-data">

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="card-body">

                <div class="form-group">

                    <label>School Name</label>
                    <input type="text" name="s_name" class="form-control" placeholder="Enter School Name" value="{{ old('s_name') }}">
                  
                  </div>
                  <div class="form-group">

                    <label>School Location</label>
                    <input type="text" name="s_address" class="form-control" placeholder="Enter School Address" value="{{ old('s_address') }}">
                  
                  </div>
                  

                  <div class="form-group">

                    <label>School Link</label>

                    <input type="text" name="s_link" class="form-control" placeholder="Enter School Link" value
                    ="{{ old('s_link') }}">
                  
                  </div>

                  <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">

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