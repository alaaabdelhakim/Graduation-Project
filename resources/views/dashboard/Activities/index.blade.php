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
                            <a href="{{ route('dashboard.activities.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New Activity</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($activities->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Activity type</th>
                        <th>Audio</th>
                        <th>Video</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($activities as $index=>$activity)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $activity->a_type }}</th>
                        <th>{{ $activity->audio }}</th>
                        <th>{{ $activity->video }}</th>


                        <td>
                            <a href="{{ route('dashboard.activities.edit', $activity->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.activities.destroy', $activity->id) }}" method="post" style="display: inline-block">
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