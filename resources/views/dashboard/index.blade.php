@extends('dashboard.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class='alert alert-info'>
                Join the CDS whatsapp group of <b>{{ App\Models\User::find($user->id)->cdsname->name }} ({{ $user->batch }})</b><br>
                <a class='btn btn-info btn-sm' href='{{ $cdsgroup->whatsapp }}'>Click To Join →</a>
            </div>
            {{-- <div class='alert alert-info'>
                Payment Ongoing for CDS certificate for Batch B Stream 1 
                <a class='btn btn-info btn-sm' href=''>Click To Pay →</a>
            </div> --}}
            <div class="row">
                

            

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Transactions</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">Details</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $tranx)
                                    <tr>

                                        <td><b>{{ $tranx->title }}</b><br>{{ Str::limit($tranx->description,35) }}<br><a href='/viewmore/{{ $tranx->uid }}'>View more</a></td>
                                        <td>NGN{{ number_format($tranx->amount) }}</td>
                                        <td>
                                            <span class="badge bg-success">Approved</span>
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
        <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">CDS Group Updates</h5>

                    <div class="activity">

                       
                        @foreach($announcements as $act)

                        <div class="activity-item d-flex">
                            <div class="activite-label">
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                               <a href="#" class="fw-bold text-dark">{{ $act->title }}</a><br>{{ $act->description }}
                              <br> 
                              <span style='color:red'>{{ \Carbon\Carbon::parse($act->created_at)->diffForHumans() }}</span>
                            </div>
                        </div><!-- End activity item-->
                        @endforeach

                        <div class="activity-item d-flex">
                            <div class="activite-label">+0
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                               <a href="{{ $cdsgroup->whatsapp }}" class="fw-bold text-dark">Click to join CDS Whatasapp Group</a><br>Connect with other CDS members via whatsapp                            </div>
                             
                            </div><!-- End activity item-->


                    </div>

                </div>
            </div><!-- End Recent Activity -->


        </div><!-- End Right side columns -->

    </div>
</section>
@endsection

@section('script')
@endsection