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

                <h3 class="card-title"><b>Edit Case</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.famouscases.store') }}" method="post" enctype="multipart/form-data">

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="card-body">

                <div class="form-group">

                    <label>Case Name</label>
                    <input type="text" name="f_name" class="form-control" placeholder="Enter Case Title" value="{{ $famousecase->f_name }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Description</label>
                    <input type="text" name="f_desc" class="form-control" placeholder="Enter Description" value="{{ $famousecase->f_desc }}">
                  
                  </div>
                  
                  </div>

                  <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control" value="{{ $famousecase->image }}">

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