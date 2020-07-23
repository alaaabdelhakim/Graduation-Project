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

                <h3 class="card-title"><b>Edit Medical Center</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.medical.update', $medical->id) }}"" method="post" enctype="multipart/form-data" >

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Medical Center Name</label>
                    <input type="text" name="m_name" class="form-control" placeholder="Enter Medical Center Name" value="{{ $medical->m_name }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Medical Center Phone</label>
                    <input type="text" name="m_phone" class="form-control" placeholder="Enter Medical Center Phone" value="{{ $medical->m_phone }}">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Medical Center address</label>

                    <input type="text" name="m_address" class="form-control" placeholder="Enter Medical Center Address" value="{{ $medical->m_address }}">

                  </div>
            
                  <div class="form-group">

                    <label>Medical Center link</label>

                    <input type="text" name="m_link" class="form-control" placeholder="Enter Medical Center Link" value="{{ $medical->m_link }}"">

                  </div>

                  <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control" value="{{ $medical->image }}">

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