@extends('exco.master')
@section('content')


    <div class="flex-row-fluid ml-lg-8">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <form class="form" method='post' action='{{ route("saveannouncement") }}' enctype="multipart/form-data">@csrf
                <div class="card-header py-3">
                    <div class='row'>
                        <div class='col-md-4'>
                            <h5 class="card-title">Create Announcements</h5>
                        </div>
                        <div class='col-md-8'>
                            <a href='/exconotifications' class='btn btn-success'>View Announcements</a>
                        </div>
                    </div>
                    
                </div>
                <!--end::Header-->
                <!--begin::Form-->

                <div class="card-body">
                  
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Title</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group input-group-lg input-group-solid">
                               
                                <input type="text" name='title' class="form-control form-control-lg form-control-solid"
                                    placeholder="Title" />
                            </div>

                        </div>
                    </div>
                    <!--begin::Form Group-->
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Details</label>
                        <div class="col-lg-9 col-xl-6">
                            <textarea type='text' class='form-control' name='description'></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Notification Time</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group input-group-solid">
                              
                                <select class='form-control' name='time'>
                                    <option value='twice'>Twice In A Day</option>
                                    <option value='once'>Once In A Day</option>
                                    <option value='weekly'>Weekly (Every Monday)</option>
                                    <option value='monthly'>Monthly (First Day Of Every Month)</option>
                                </select>
                                </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-lg-3 col-form-label">Batch</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group input-group-solid">
                              
                                <input type='checkbox' name='batch[]' class='form-input m-1' value='all'/> All Batches
                                <input type='checkbox' name='batch[]' class='form-input m-1' value='batchA'/> Batch A
                                <input type='checkbox' name='batch[]' class='form-input m-1' value='batchB'/> Batch B
                                <input type='checkbox' name='batch[]' class='form-input m-1' value='batchC'/> Batch C
                                   
                                </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                        <div class="col-lg-9 col-xl-6">
                            <button type="submit" class="btn btn-primary mr-2">Create</button>
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
                                    <input type="checkbox" checked="checked" />
                                    <span></span>Email</label>
                                <label class="checkbox">
                                    <input type="checkbox" checked="checked" />
                                    <span></span>SMS</label>
                                <label class="checkbox">
                                    <input type="checkbox" />
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
    $("#reset_pin").click(function() {
        Swal.fire({
title: 'You are about to reset your pin?',
text: 'A token will be sent to your email, copy the token to reset your pin!',
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes, reset',
cancelButtonText: 'Cancel'
}).then((result) => {
if (result.isConfirmed) {
   Swal.fire('Sending your token, please wait...')
        $.ajax({
       type: 'POST',
       url: "{{route('forgot-pin')}}",
      
       cache: false,
       contentType: false,
       processData: false,
       success: function(data) {
          console.log(data)
          location.href = 'http://127.0.0.1:8000/reset-pin-with-token';
       },
       error: function(data) {
           console.log(data)
           Swal.close()
          
           Swal.fire('Opps!', 'Something went wrong, please try again later', 'error')
       }
   })
}
})
    })
    })
  
</script>
@endsection