@extends('exco.master')
@section('header')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')


<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <form class="form" method='post' action='{{ route("savepayment") }}' enctype="multipart/form-data">@csrf
            <div class="card-header">
                <div class='row'>
                    <div class='col-md-4'>
                        <h5 class="card-title">Add Payment</h5>
                    </div>
                    <div class='col-md-8'>
                        <a href='/viewpayments' class='btn btn-success'>View Payments</a>
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
                                <input required name='title' placeholder="Reason For Payment"
                                    class="form-control form-control-lg form-control-solid" type="text" />
                            </div>
                            {{--
                        </div> --}}
                    </div>
                </div>
                <!--begin::Form Group-->
                {{-- <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">


                            <div id="editor-container">
                                <div id="editor"></div>

                            </div>

                            <input type='hidden' name='description' id='description' />
                        </div>
                    </div>
                </div> --}}
                <br><br>
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">More Infos</label>

                    <div class="col">
                        <label>Select Batch</label>
                        <select required type="number" name='batch'
                            class="form-control form-control-lg form-control-solid">
                            <option value='Batch A'>Batch A</option>
                            <option value='Batch B'>Batch B</option>
                            <option value='Batch C'>Batch C</option>
                            <option value='All Batch'>All Batch</option>

                        </select>
                    </div>

                    <div class="col">
                        <label>Deadline</label>
                        <input required type="date" name='deadline'
                            class="form-control form-control-lg form-control-solid" placeholder="Enter address" />
                    </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label">Account Info</label>

                    <div class="col">
                        <label>Select Bank</label>
                        <select required type="number" name='bank'
                            class="form-control form-control-lg form-control-solid">
                            <option value='Access Bank'>Access Bank</option>
                            <option value='Citibank Nigeria'>Citibank Nigeria</option>
                            <option value='Ecobank Nigeria'>Ecobank Nigeria</option>
                            <option value='Fidelity Bank'>Fidelity Bank</option>
                            <option value='First Bank of Nigeria'>First Bank of Nigeria</option>
                            <option value='First City Monument Bank'>First City Monument Bank</option>
                            <option value='Guaranty Trust Bank'>Guaranty Trust Bank</option>
                            <option value='Heritage Bank'>Heritage Bank</option>
                            <option value='Keystone Bank'>Keystone Bank</option>
                            <option value='Kuda Bank'>Kuda Bank</option>
                            <option value='Moniepoint Microfinance Bank'>Moniepoint Microfinance Bank</option>
                            <option value='Opay'>Opay</option>
                            <option value='Palmpay'>Palmpay</option>
                            <option value='Polaris Bank'>Polaris Bank</option>
                            <option value='Providus Bank'>Providus Bank</option>
                            <option value='Stanbic IBTC Bank'>Stanbic IBTC Bank</option>
                            <option value='Standard Chartered Bank'>Standard Chartered Bank</option>
                            <option value='Sterling Bank'>Sterling Bank</option>
                            <option value='SunTrust Bank'>SunTrust Bank</option>
                            <option value='Titan Trust Bank'>Titan Trust Bank</option>
                            <option value='Union Bank of Nigeria'>Union Bank of Nigeria</option>
                            <option value='United Bank for Africa'>United Bank for Africa</option>
                            <option value='Unity Bank'>Unity Bank</option>
                            <option value='Wema Bank'>Wema Bank</option>
                            <option value='Zenith Bank'>Zenith Bank</option>


                        </select>
                    </div>

                    <div class="col">
                        <label>Account Number</label>
                        <input required type="number" name='accountno'
                            class="form-control form-control-lg form-control-solid"
                            placeholder="Enter account number" />
                    </div>


                </div>


                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                   
                    <div class="col">
                        <label>Account Name</label>
                        <input required type="text" name='accountname'
                            class="form-control form-control-lg form-control-solid" placeholder="Enter account name" />

                    </div>
                    <div class="col">
                        <label>Amount To Be Paid(NGN)</label>
                        <input required type="number" name='amount'
                            class="form-control form-control-lg form-control-solid"
                            placeholder="" />
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                    <div class="col-lg-9 col-xl-6">
                        <button type="submit" class="btn btn-primary mr-2">Add Payment</button>
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
        Swal.fire('Error!',"{{ session('error') }}",'error');
    @endif
   
    })
  
</script>
@endsection