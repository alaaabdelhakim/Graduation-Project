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
                            <a href="{{ route('dashboard.medical.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New Medical Center</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($medical->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Medical Name</th>
                        <th>Medical Center Address</th>
                        <th>Medical Center Phone</th>
                        <th>Medical Center Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($medical as $index=>$medical)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $medical->m_name }}</th>
                        <th>{{ $medical->m_address }}</th>
                        <th>{{ $medical->m_phone}}</th>
                        <th>{{ $medical->m_link}}</th>
                        <th>{{ $medical->image}}</th>


                        <td>
                            <a href="{{ route('dashboard.medical.edit', $medical->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.medical.destroy', $medical->id) }}" method="post" style="display: inline-block">
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