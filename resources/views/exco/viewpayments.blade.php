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
                            <div class='row'>
                                <div class='col-md-4'>
                                    <h5 class="card-title">All Payments</h5>
                                </div>
                                <div class='col-md-8'>
                                    <a href='/addpayment' class='btn btn-success'>Create New Payment</a>
                                </div>
                            </div>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                       
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $payment)
                                    <tr>

                                       
                                        <td><b>{{ $payment->title }} (@if($payment->status == 1)<a
                                                    class=' text-success'>Active</a>@else<a class='text-secondary'>Not
                                                    active</a> @endif)</b><br>{!! Str::limit($payment->description,100)
                                            !!}</td>
                                        <td>
                                            <a href='/viewtransactions/{{ $payment->id }}' class="btn btn-primary">View Transactions</a>
                                            
                                            <a onclick='return confirm("Are you sure you want to delete this payment?")'
                                                href='/deletepayment/{{ $payment->id }}'
                                                class="btn btn-danger">Delete</a>
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



    </div>
</section>
@endsection

@section('script')
@endsection