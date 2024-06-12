@extends('exco.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">


        <!-- Right side columns -->
        <div class="col-lg-12">

            <!-- Recent Activity -->
            <div class="card">
               

                <div class="card-body">
                    <div class='row'>
                        <div class='col-md-4'>
                            <h5 class="card-title">CDS Group Updates</h5>
                        </div>
                        <div class='col-md-8'>
                            <a href='/createannouncement' class='btn btn-success'>Create Announcements</a>
                        </div>
                    </div>

                    <div class="activity">

                       
                        @foreach($announcements as $act)

                        <div class="activity-item d-flex">
                            <div class="activite-label">
                                <a href='/deleteann/{{ $act->id }}' onclick='return confirm("Delete This Announcement?")' class='btn btn-danger btn-sm'>Delete</a>
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                               <a href="#" class="fw-bold text-dark">{{ $act->title }}</a><br>{!! $act->description !!}
                              <br> 
                              <span style='color:red'>{{ \Carbon\Carbon::parse($act->created_at)->diffForHumans() }}</span>
                            </div>
                        </div><!-- End activity item-->
                        @endforeach

                        <div class="activity-item d-flex">
                            <div class="activite-label">
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                               <a  href="{{ $cdsgroup->whatsapp }}" class="fw-bold text-dark">Click to join CDS Whatasapp Group</a><br>Connect with other CDS members via whatsapp                            </div>
                             
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