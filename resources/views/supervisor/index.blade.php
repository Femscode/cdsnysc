@extends('supervisor.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class='card p-4'>

                <h4>Select CDS Group To Manage : </h4>
            </div>
        </div>

        <div class="row">

            @foreach($cdsgroups as $cds)
            <div class="col-xxl-4 col-md-4">
                <a href='/dashboard/{{  $cds->uuid }}'>
                <div style='background:#d1e7dd;border: 1.5px dashed #0f5132' class="card info-card revenue-card">


                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6 style='color:#0f5132'>{{ $cds->name }}</h6>
                                <a href='/dashboard/{{  $cds->uuid }}' class="text-success small pt-1 fw-bold">Manage CDS→</a><br>
                              

                            </div>
                        </div>
                    </div>

                </div>
            </a>
            </div><!-- End Revenue Card -->
            @endforeach
           


        </div>

        <!-- Right side columns -->


    </div>
</section>
@endsection

@section('script')
@endsection