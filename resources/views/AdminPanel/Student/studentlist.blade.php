@extends('include.master')
@section('content')
@section('title','Student Index')
@section('index','Student')



<!-- main content area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a type="button" href="{{route('student.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add Student</a>
                            <br>
                                <h4 class="header-title">Student Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Citizenship</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($students as $student)
                                                <tr>
                                                    
                                                    <td>{{$student->user_name}}</td>
                                                    <td>{{$student->email}}</td>
                                                    <td>{{$student->address}}</td>
                                                    <td>{{$student->citizenship}}</td><td>
                                                    <form action="{{route('student.destroy',$student->id)}}"  method="Post">
                                                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
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