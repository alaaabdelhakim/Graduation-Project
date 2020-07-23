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
                            <a href="{{ route('dashboard.coaches.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New Coach</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($coaches->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Coach Name</th>
                        <th>Coach Address</th>
                        <th>Coach Phone</th>
                        <th>Coach Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($coaches as $index=>$coach)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $coach->c_name }}</th>
                        <th>{{ $coach->c_address }}</th>
                        <th>{{ $coach->c_phone}}</th>
                        <th>{{ $coach->c_link}}</th>
                        <th>{{ $coach->image }}</th>

                        <td>
                            <a href="{{ route('dashboard.coaches.edit', $coach->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.coaches.destroy', $coach->id) }}" method="post" style="display: inline-block">
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