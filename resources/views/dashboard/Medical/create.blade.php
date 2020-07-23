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

                <h3 class="card-title"><b>Add New Job</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.medical.store') }}" method="post" enctype="multipart/form-data" >

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Medical Center Name</label>
                    <input type="text" name="m_name" class="form-control" placeholder="Enter Medical Center Name" value="{{ old('m_name') }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Medical Center Phone</label>
                    <input type="text" name="m_phone" class="form-control" placeholder="Enter Medical Center Phone" value="{{ old('m_phone') }}">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Medical Center address</label>

                    <input type="text" name="m_address" class="form-control" placeholder="Enter Medical Center Address" value="{{ old('m_address') }}"">

                  </div>

                  <div class="form-group">

                    <label>Medical Center link</label>

                    <input type="text" name="m_link" class="form-control" placeholder="Enter Medical Center Link" value="{{ old('m_link') }}"">

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