@extends('exco.master')
@section('content')


<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <form class="form" method='post' action='{{ route("updateproject") }}' enctype="multipart/form-data">@csrf
            <div class="card-header py-3">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">Edit Project</h3>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <p><strong>Opps Something went wrong</strong></p>
                            <ul>
                                @foreach ($errors->all() as $error)    
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                </div>

            </div>
            <!--end::Header-->
            <!--begin::Form-->

            <div class="card-body">
                <!--begin::Heading-->
              
                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Title</label>
                    <div class="col-lg-9 col-xl-6">
                       

                            <div class="">
                                <input required type='hidden' value='{{ $project->id }}' name='id' />
                                <input required name='title' value='{{ $project->title}}' placeholder="Enter Project Title"
                                    class="form-control form-control-lg form-control-solid" type="text" />
                            </div>
                       
                    </div>
                </div>
                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">

                            <textarea name='description' type="text"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter Project Description">{{ $project->description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">

                            <input required type="text" value='{{ $project->type}}' name='type'
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter Project Type" />
                        </div>

                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">More Infos</label>

                    <div class="col">


                        <label>Select Year</label>
                        <select required type="number" name='year'
                            class="form-control form-control-lg form-control-solid">
                            <option value='{{ $project->year}}'>{{ $project->year}}</option>
                            <option value='2024'>2024</option>
                            <option value='2025'>2025</option>
                            <option value='2026'>2026</option>
                            <option value='2027'>2027</option>
                            <option value='2028'>2028</option>
                            <option value='2029'>2029</option>
                            <option value='2030'>2030</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Select Batch</label>
                        <select required type="number" name='batch'
                            class="form-control form-control-lg form-control-solid">
                            <option value='{{ $project->batch}}'>{{ $project->batch}}</option>
                            <option value='Batch A'>Batch A</option>
                            <option value='Batch B'>Batch B</option>
                            <option value='Batch C'>Batch C</option>

                        </select>
                    </div>

                    <div class="col">
                        <label>Date</label>
                        <input required type="date" name='date'  value='{{ $project->date}}'
                            class="form-control form-control-lg form-control-solid" placeholder="Enter address" />
                    </div>


                </div>
               
                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Display Image</label>

                   
                    <div class="col-lg-6 col-xl-6">
                        <img src='{{ asset("project_display_image/".$project->image) }}' height='150px' width='150px' />
                        <input type='file' class='form-control' name='image' accept="image/*" />
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                    <div class="col-lg-9 col-xl-6">
                        <button type="submit" class="btn btn-primary mr-2">Update Project</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>

                <!--begin::Form Group-->

                <!--begin::Form Group-->
                {{-- <div class="form-group row mb-4 align-items-center">
                    <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="checkbox-inline">
                            <label class="checkbox">
                                <input required type="checkbox" checked="checked" />
                                <span></span>Email</label>
                            <label class="checkbox">
                                <input required type="checkbox" checked="checked" />
                                <span></span>SMS</label>
                            <label class="checkbox">
                                <input required type="checkbox" />
                                <span></span>Phone</label>
                        </div>
                    </div>
                </div> --}}
                <!--begin::Form Group-->
                <div class="separator separator-dashed my-5"></div>

            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
   @if (session('error'))
        Swal.fire('Incorrect Pin!',"{{ session('error') }}",'error');
    @endif
   
    })
  
</script>
@endsection