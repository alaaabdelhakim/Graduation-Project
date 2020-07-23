@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">


        </section>

        <section class="content">

        <div class="card border-top border-primary">
            <div class="card-header">
                <h3>Admins</h3>

                <form action="">

                    <div class="row">


                        <div class="col-md-4">
                            <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary"><i class="fa fa-plus">Add</i></a>

                        </div>

                    </div>

                </form>
            </div>

            <div class="card-body">
            @if ($users->count() > 0)

                <table class="table table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($users as $index=>$user)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $user->first_name }}</th>
                        <th>{{ $user->last_name }}</th>
                        <th>{{ $user->email}}</th>

                        <td>
                            <a href="{{ route('dashboard.users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post" style="display: inline-block">
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