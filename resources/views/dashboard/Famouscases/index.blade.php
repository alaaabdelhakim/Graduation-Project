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
                            <a href="{{ route('dashboard.famouscases.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New Case</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($famouscases->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Case Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($famouscases as $index=>$famouscase)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $famouscase->f_name }}</th>
                        <th>{{ $famouscase->f_desc }}</th>
                        <th>{{ $famouscase->image }}</th>


                        <td>
                            <a href="{{ route('dashboard.famouscases.edit', $famouscase->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.famouscases.destroy', $famouscase->id) }}" method="post" style="display: inline-block">
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