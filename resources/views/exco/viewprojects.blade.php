@extends('exco.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">




                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">



                        <div class="card-body">
                            <div class='row'>
                                <div class='col-md-4'>
                                    <h5 class="card-title">All Projects</h5>
                                </div>
                                <div class='col-md-8'>
                                    <a href='/createproject' class='btn btn-success'>Create New Project</a>
                                </div>
                            </div>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">Image</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                    <tr>

                                        <td>
                                            <img src='{{ asset("project_display_image/".$project->image) }}'
                                                height='100px' width='100px' />
                                        </td>
                                        <td><b>{{ $project->title }} (@if($project->status == 1)<a
                                                    class=' text-success'>Active</a>@else<a class='text-secondary'>Not
                                                    active</a> @endif)</b><br>{{ Str::limit($project->description,100)
                                            }}<br><a href='/cdsproject/{{ $project->id }}'>View more</a></td>
                                        <td>
                                            <a href='/editproject/{{ $project->id }}' class="btn btn-primary">Edit</a>
                                            <a href='/addprojectimages/{{ $project->id }}' class="btn btn-success">Add
                                                Images</a>
                                            <a onclick='return confirm("Are you sure you want to change the status of this project?")'
                                                href='/changeprojectstatus/{{ $project->id }}'
                                                class="btn btn-warning">Change Status</a>
                                            <a onclick='return confirm("Are you sure you want to delete this project?")'
                                                href='/deleteproject/{{ $project->id }}'
                                                class="btn btn-danger">Delete</a>
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



    </div>
</section>
@endsection

@section('script')
@endsection