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

                <h3 class="card-title"><b>Edit Company</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.companies.update', $Company->id) }}" method="post" enctype="multipart/form-data">

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Company Name</label>
                    <input type="text" name="c_name" class="form-control" placeholder="Enter Company Name" value="{{ $Company->c_name  }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Services</label>
                    <input type="text" name="c_service" class="form-control" placeholder="Enter Services" value="{{ $Company->c_service }}">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Company address</label>

                    <input type="text" name="c_address" class="form-control" placeholder="Enter Company Address" value="{{ $Company->c_address }}"">

                  </div>

                  <div class="form-group">

                    <label>Company Link</label>

                    <input type="text" name="c_link" class="form-control" placeholder="Enter Company Link" value="{{ $Company->c_link }}">
                  
                  </div>

                  <div class="form-group">

                    <label>Company Phone</label>

                    <input type="text" name="'c_phone'" class="form-control" placeholder="Enter Company Phone" value="{{ $Company->c_phone }}">
                  
                  </div>

                  <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control" value="{{ $Company->image }}">

                  </div>v>

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