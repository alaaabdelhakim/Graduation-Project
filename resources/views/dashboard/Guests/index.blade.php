@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">


        </section>

        <section class="content">

        <div class="card border-top border-primary">
            <div class="card-header">
 
            </div>

            <div class="card-body">
            @if ($guests->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th>User Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($guests as $index=>$guest)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $guest->u_name }}</th>
                        <th>{{ $guest->u_email}}</th>
                        <th>{{ $guest->u_phone}}</th>
                        <th>{{ $guest->message}}</th>



                        <td>
                            <form action="{{ route('dashboard.guests.destroy', $guest->id) }}" method="post" style="display: inline-block">
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