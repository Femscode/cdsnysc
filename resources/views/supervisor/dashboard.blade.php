@extends('supervisor.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <span class="badge bg-success text-white">

                {{-- <i class="bi-exclamation-triangle-fill me-1"></i> --}}
                Whatsapp Group URL:
              </span>
              <form method='post' action='saveWhatsappGroup'>@csrf
              <div class="input-group input-group-merge">
                <input name='cdsgroup' type="text" id="iconExample" class="form-control"
                  value="{{ $cdsgroup->whatsapp ?? '' }}">
                  <input type='hidden' name='cdsId' value="{{ $cdsgroup->id }}"/>
      
                <button type='submit' class="btn btn-success btn-sm">
                 Update
                </button>
            </div>
        </form>
              <br>
            <div class="row">

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                      
                        <div class="card-body">
                            <h5 class="card-title">Total CDS Members</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(count($corpers)) }}</h6>
                                    <a href='/addmembers' class="text-primary small pt-1 fw-bold">Add Members→</a>
                                    {{-- <a href='/viewmembers' class="text-primary small pt-1 fw-bold">View Members→</a> --}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">Announcements</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(count($announcements)) }}</h6>
                                    <a href='/createannouncement/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">Create →
                                        </a><br>
                                    <a href='/exconotifications/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">View →
                                        </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">Payment & Transactions</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-table"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(count($payments)) }}</h6>
                                    <a href='/addpayment/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">Add Payment→</a><br>
                                    <a href='/viewpayments/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">View Transactions→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">CDS Projects</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(count($projects)) }}</h6>
                                    <a href='/createproject/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">Add Projects→</a><br>
                                    <a href='/viewprojects/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">View Past Projects→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">CDS Certification</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>0</h6>
                                    <a href='#' class="text-success small pt-1 fw-bold">Add Certificate→</a><br>
                                    <a href='#' class="text-success small pt-1 fw-bold">View Certificate→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->


                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">CDS Excos</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(count($excos)) }}</h6>
                                  
                                    <a href='/viewexcos/{{ $cdsgroup->uuid }}' class="text-success small pt-1 fw-bold">View
                                        Excos→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->


                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                
                        <div class="card-body">
                            <h5 class="card-title">CDS Members</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">Details</th>
                                        <th scope="col">CDS</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($corpers as $user)
                                    <tr>

                                        <td><b>{{ $user->name }}</b><br>{{ Str::limit($user->statecode,35) }}</td>
                                        <td>{{ $user->cdsname->name }}</td>
                                        <td>
                                            @if($user->type == 0)
                                            <a href='/makeexco/{{ $user->uuid }}' onclick='return confirm("Are you sure you want to make this corper an exco?")' class="btn btn-primary btn-sm">Make Exco</a>
                                            @else 
                                            <a href='/makeexco/{{ $user->uuid }}' onclick='return confirm("Are you sure you want to remove this corper as an exco?")' class="btn btn-danger btn-sm">Revoke Exco</a>
                                            @endif
                                            <a class="btn btn-primary btn-sm">View Transactions</a>
                                            {{-- <a class="btn btn-success">View Activities</a> --}}
                                            <a href='https://wa.me/234{{ substr($user->phone,1) }}' class="btn btn-success btn-sm">Message</a>
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