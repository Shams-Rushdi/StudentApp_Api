@extends('include.master')
@section('content')
@section('title','University')
@section('index','University')



<!-- main content area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a type="button" href="{{route('university.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add University</a>
                            <br>
                                <h4 class="header-title">University Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">University Image</th>
                                                    <th scope="col">University Name</th>
                                                    <th scope="col">Deadline</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Fees</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($universities as $university)
                                                <tr>
                                                    <td ><img style="width:150px; height:100px;" src="{{ asset('images/university/'.$university->university_image)}}" alt=""></td>
                                                    <td>{{$university->university_name}}</td>
                                                    <td>{{$university->deadline}}</td>
                                                    <td>{{$university->university_country}}</td>
                                                    <td>{{$university->application_fee}}</td>

                                                    <td><span class="status-p bg-primary">pending</span></td>
                                                    <td>
                                                    <form action="{{route('university.destroy',$university->id)}}"  method="Post">
                                                        <a href="{{route('university.edit',$university->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
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