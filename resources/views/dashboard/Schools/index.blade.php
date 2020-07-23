@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">


        </section>

        <section class="content">

        <div class="card border-top border-primary">
            <div class="card-header">
                <form action="">

                    <div class="row">


                        <div class="col-md-12">
                            <a href="{{ route('dashboard.schools.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New School</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($schools->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>School Name</th>
                        <th>School Location</th>
                        <th>School Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($schools as $index=>$school)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $school->s_name }}</th>
                        <th>{{ $school->s_address }}</th>
                        <th>{{ $school->s_link}}</th>
                        <th>{{ $school->image }}</th>

                        <td>
                            <a href="{{ route('dashboard.schools.edit', $school->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.schools.destroy', $school->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}

                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>

                        @endforeach
                    </tbody>


                </table>

            @else

                <h2>no data found</h2>

            @endif 
            </div>
        </div>

        </section>
    </div> <!--- /. Content Wrapper -->


@endsection