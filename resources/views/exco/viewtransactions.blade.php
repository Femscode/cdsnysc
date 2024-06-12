@extends('exco.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
            <div class="row">

              
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">


                        <div class="card-body">
                            <h5 class="card-title">{{ $payment->title }} Transactions.</h5>
                            <h4>Total Payment : NGN {{ $payment->amount }}</h4>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">Details</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($corpers as $user)
                                    <tr>

                                        <td><b>{{ $user->name }}</b><br>{{ Str::limit($user->statecode,35) }}</td>
                                        <td>
                                            @if($user->paymentstatus($payment->id,$user->id) == true)
                                            <span class='alert alert-sm alert-success'>Paid</span>
                                            @else 
                                            <span class='alert alert-sm alert-danger'>Not Paid</span>
                                            @endif

                                        </td>
                                        <td>
                                            @if($user->paymentstatus($payment->id,$user->id) == true)
                                           
                                            <a onclick="return confirm('Are you sure you want to mark {{ $user->name }} unpaid?');" href='/markunpaid/{{ $payment->id }}/{{ $user->id }}' class="btn btn-danger btn-sm">Mark Unpaid</a>
                                            @else 
                                            <a onclick="return confirm('Are you sure you want to mark {{ $user->name }} paid?');" href='/markpaid/{{ $payment->id }}/{{ $user->id }}' class="btn btn-primary btn-sm">Mark Paid</a>
                                            
                                            @endif
                                            {{-- <a class="btn btn-success">View Activities</a> --}}
                                            <a href='https://wa.me/234{{ substr($user->phone,1) }}'
                                                class="btn btn-success btn-sm">Message</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->


    </div>
</section>
@endsection

@section('script')
@endsection