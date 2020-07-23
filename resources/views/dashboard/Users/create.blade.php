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

                <h3 class="card-title"><b>Add New Admin</b></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dashboard.users.store') }}" method="post" >

              @include('partials.errors')
               
                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="card-body">

                <div class="form-group">

                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ old('first_name') }}">
                  
                  </div>
                  <div class="form-group">

                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('last_name') }}">
                  
                  </div>
                  
                  <div class="form-group">

                    <label>Email address</label>

                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}"">

                  </div>

                  <div class="form-group">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control" placeholder="Password">
                  
                  </div>

                  <div class="form-group">

                    <label>Confirm Password</label>

                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                  
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