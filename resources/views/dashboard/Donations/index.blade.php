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
            @if ($donations->count() > 0)

                <table class="table table-bordered table-hover">
                    <thead>                  
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Donor</th>
                        <th>Donor Number</th>
                        <th>Donation Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach ($donations as $index=>$donation)
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $donation->donor }}</th>
                        <th>{{ $donation->d_phone }}</th>
                        <th>{{ $donation->d_type}}</th>

                        <td>
                            <form action="{{ route('dashboard.donations.destroy', $donation->id) }}" method="post" style="display: inline-block">
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