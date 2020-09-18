@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary text-center text-white">	 <h3>ALL STUDENT</h3>
                </div>
				@if(session('success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Done!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                   </div>
                 <hr>
                @endif
                <div class="card-body">
				 <table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">SL</th>
				      <th scope="col">St Name</th>
				      <th scope="col">St Image</th>
				      <th scope="col">St Roll</th>
				      <th scope="col">St Phone</th>
				      <th scope="col">St Email</th>
				      <th scope="col">St Address</th>
				      <th scope="col">St City</th>
				      <th class="text-center">Action</th>
				    </tr>
				  </thead>
				  <tbody>
					@foreach($student_view as $key => $std)
				    <tr>
				      <th>{{ $student_view->firstitem() + $key}}</th>
				      <td>{{ $std->student_name }}</td>
				      <td><img src="{{asset('upload/'.$std->student_image) }}" width="100" height="80" style="border-radius: 50%;">
				      </td>
				      <td>{{ $std->student_roll }}</td>
				      <td>{{ $std->student_phone }}</td>
				      <td>{{ $std->student_email }}</td>
				      <td>{{ $std->student_address }}</td>
				      <td>{{ $std->student_city }}</td>
				      <td>
				      	<button class="btn btn-outline-success"> <a href="{{'/student_view'}}/{{$std->student_id}}">view</a> </button>
				      	<button class="btn btn-outline-info"> <a href="{{'/student_edit'}}/{{$std->student_id}}">edit</a> </button>
				      	<button class="btn btn-outline-danger"> <a href="{{'/student_delete'}}/{{$std->student_id}}">delete</a> </button>
				      </td>
				      </tr>
					@endforeach
				  </tbody>
                </table>
                {{ $student_view->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
