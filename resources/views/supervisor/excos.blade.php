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

             

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                
                        <div class="card-body">
                            <h5 class="card-title">CDS Excos</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">Details</th>
                                        <th scope="col">CDS</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($excos as $user)
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