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

                <h3 class="card-title"><b>Edit Coach</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.coaches.update', $coach->id) }}" method="post" enctype="multipart/form-data">

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Coach Name</label>
                    <input type="text" name="c_name" class="form-control" placeholder="Enter Coach Name" value="{{ $coach->c_name }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Coach Phone</label>
                    <input type="text" name="c_phone" class="form-control" placeholder="Enter Coach Phone" value="{{ $coach->c_phone }}">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Coach Address</label>

                    <input type="text" name="c_address" class="form-control" placeholder="Enter Coach Address" value="{{ $coach->c_address }}"">

                  </div>

                  <div class="form-group">

                    <label>Coach Link</label>

                    <input type="text" name="c_link" class="form-control" placeholder="Enter Coach Number" value="{{ $coach->c_link }}">
                  
                  </div>

                  <div class="form-group">

                  <label>Image</label>

                  <input type="file" name="image" class="form-control" vlaue="{{ $coach->image}}">

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