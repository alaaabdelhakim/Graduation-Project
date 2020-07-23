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
                            <a href="{{ route('dashboard.companies.create') }}" class="btn btn-block btn-primary"><i class="fa fa-plus">Add New Company</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($companies->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Company Name</th>
                        <th>Company Email</th>
                        <th>Company Phone</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($companies as $index=>$company)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $company->c_name }}</th>
                        <th>{{ $company->c_email}}</th>
                        <th>{{ $company->c_phone}}</th>


                        <td>
                            <a href="{{ route('dashboard.companies.edit', $company->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.companies.destroy', $company->id) }}" method="post" style="display: inline-block">
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