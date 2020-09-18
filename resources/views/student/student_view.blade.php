@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-danger"><h5 style="color:white">Student Profiles<h5></div>

                <div class="card-body" style="background-image: url({{asset('img/bg5.png')}}); background-size:cover;color:white; box-shadow: 50% black">
                    <div class="text-center" style="float-left">
                      <img src="{{URL::to('upload/'.$studentview->student_image)}}" alt="Profile_pictute" style="width:200px; height: 200px; border:2px solid white;border-radius: 50%;">
                    </div>
                    <div class="mt-3" style="text-align: center;">
                      <tr>
                        <td>Name: </td>
                        <td>{{$studentview->student_name}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Roll: </td>
                        <td>{{$studentview->student_roll}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Father's Name: </td>
                        <td>{{$studentview->fathers_name}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Mother's Name: </td>
                        <td>{{$studentview->mothers_name}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>City: </td>
                        <td>{{$studentview->student_city}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Phone: </td>
                        <td>{{$studentview->student_phone}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>E-mail: </td>
                        <td>{{$studentview->student_email}}</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Address: </td>
                        <td>{{$studentview->student_address}}</td>
                      </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
