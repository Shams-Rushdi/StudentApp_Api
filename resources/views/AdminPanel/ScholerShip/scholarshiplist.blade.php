@extends('include.master')
@section('content')
@section('index','Scholarship Index')
@section('title','Scholarship')
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a type="button" href="{{route('scholarships.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add Scholarship</a>
                            <br>
                                <h4 class="header-title">Scholarship Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                        {{@csrf_field()}}
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">Scholarship Name</th>
                                                    <th scope="col">Scholarship Available </th>
                                                    <th scope="col">Scholarship Details</th>
                                                    <th scope="col">Scholarship Deadline</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($scholarships as $scholarship)
                                                <tr>
                                                    <td >{{$scholarship->scholership_name}}</td>
                                                    <td >{{$scholarship->scholership_available}}</td>
                                                    <td >{{$scholarship->scholership_details}}</td>
                                                    <td >{{$scholarship->scholership_deadline}}</td>
                                                    <td>
                                                 <form action="{{route('scholarships.destroy',$scholarship->id)}}"  method="Post">
                                                    <a href="{{route('scholarships.edit',$scholarship->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                </form>
                                                    </td>
                                                </tr>
                                                @endforeach   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        @endsection