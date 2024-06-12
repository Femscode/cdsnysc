@extends('exco.master')
@section('header')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')


<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <form class="form" method='post' action='{{ route("saveproject") }}' enctype="multipart/form-data">@csrf
            <div class="card-header">
                    <div class='row'>
                        <div class='col-md-4'>
                            <h5 class="card-title">Add CDS Project</h5>
                        </div>
                        <div class='col-md-8'>
                            <a href='/viewprojects' class='btn btn-success'>View Projects</a>
                        </div>
                    </div>
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
            <!--end::Header-->
            <!--begin::Form-->

            <div class="card-body">
                <!--begin::Heading-->

                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Title</label>
                    <div class="col-lg-9 col-xl-6">
                        {{-- <div class="input-group input-group-lg input-group-solid"> --}}

                            <div class="">
                                <input required name='title' placeholder="Enter Project Title"
                                    class="form-control form-control-lg form-control-solid" type="text" />
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">

                            
                            <div id="editor-container">
                                <div id="editor"></div>
                                
                            </div>
                            
                                <input type='hidden' name='description' id='description'/>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">More Infos</label>

                    <div class="col">


                        <label>Select Year</label>
                        <select required type="number" name='year'
                            class="form-control form-control-lg form-control-solid">
                            <option value='1999'>1999</option>
                            <option value='2000'>2000</option>
                            <option value='2001'>2001</option>
                            <option value='2002'>2002</option>
                            <option value='2003'>2003</option>
                            <option value='2004'>2004</option>
                            <option value='2005'>2005</option>
                            <option value='2006'>2006</option>
                            <option value='2007'>2007</option>
                            <option value='2008'>2008</option>
                            <option value='2009'>2009</option>
                            <option value='2010'>2010</option>
                            <option value='2011'>2011</option>
                            <option value='2012'>2012</option>
                            <option value='2013'>2013</option>
                            <option value='2014'>2014</option>
                            <option value='2015'>2015</option>
                            <option value='2016'>2016</option>
                            <option value='2017'>2017</option>
                            <option value='2018'>2018</option>
                            <option value='2019'>2019</option>
                            <option value='2020'>2020</option>
                            <option value='2021'>2021</option>
                            <option value='2022'>2022</option>
                            <option value='2023'>2023</option>
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
                            <option value='Batch A'>Batch A</option>
                            <option value='Batch B'>Batch B</option>
                            <option value='Batch C'>Batch C</option>

                        </select>
                    </div>

                    <div class="col">
                        <label>Date</label>
                        <input required type="date" name='date'
                            class="form-control form-control-lg form-control-solid" placeholder="Enter address" />
                    </div>

                </div>
             

                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Display Image</label>
                    <div class="col-lg-9 col-xl-6">
                        <input required type='file' class='form-control' name='image' accept="image/*" />
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                    <div class="col-lg-9 col-xl-6">
                        <button type="submit" class="btn btn-primary mr-2">Add Project</button>
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

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        var quill = new Quill('#editor', {
    theme: 'snow'
  });

  $("#editor").on('input', function() {
    var content = quill.root.innerHTML;
    $("#description").val(content)
    console.log(content);
  })
        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
   @if (session('error'))
        Swal.fire('Incorrect Pin!',"{{ session('error') }}",'error');
    @endif
   
    })
  
</script>
@endsection