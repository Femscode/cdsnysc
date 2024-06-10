@extends('exco.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card p-4">
                        <h4>Display Image</h4>
                        <img src='{{ asset("project_display_image/".$project->image) }}' height='200' width='200'
                            class="img-fluid" alt="Responsive image">

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-8">
                    <div class="card info-card sales-card p-4 ">
                        <h4>Upload Additional Images</h4>
                        <div class='alert alert-info'>For fast upload, please do not select more than five(5) pictures
                            at a time.</div>
                        <form method='post' action='/saveadditionalimages' enctype="multipart/form-data">@csrf
                            <input type='hidden' name='id' value='{{ $project->id }}' />
                            <input multiple accept="image/*" class='form-control' type='file' name='images[]' /><br>
                            <button type='submit' class='btn btn-success'>Upload</button>

                        </form>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->



                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">



                        <div class="card-body">
                            <h5 class="card-title">Additional Images</h5>
                            <!-- Gallery -->
                            <div class="row">
                                @foreach($additionalimages as $img)
                                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    <div class="position-relative">
                                        <img src='{{ asset("project_additional_image/".$img->image) }}'
                                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                        <a href='/deleteprojectimage/{{ $img->id}}' type="button"
                                            class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2">Delete</a>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <!-- Gallery -->


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