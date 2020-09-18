@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                	<h3>Add Student</h3>
            	</div>
                <div class="card-body">
				<!-- Data Insert Message -->
                	@if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Done!</strong> {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                       <hr>
                      @endif
				<!-- End Data Insert Message -->
                  <form action="{{url('/add_student_post')}}" method="post" enctype="multipart/form-data">
                  	@csrf
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="student_name">Student Name</label>
					      <input type="text" name="student_name" class="form-control @error('student_name') is-invalid @enderror" id="student_name" placeholder="Enter Student Name">
					      @error('student_name')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>

					    <div class="form-group col-md-6">
					      <label for="student_roll">Student Roll</label>
					      <input type="text" name="student_roll" class="form-control @error('student_roll') is-invalid @enderror" id="student_roll" placeholder="Enter Student Roll">
					      @error('student_roll')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>

					    <div class="form-group col-md-6">
					      <label for="fathers_name">Father's Name</label>
					      <input type="text" name="fathers_name" class="form-control @error('fathers_name') is-invalid @enderror" id="fathers_name" placeholder="Enter Father's Name">
					      @error('fathers_name')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>
					    <div class="form-group col-md-6">
					      <label for="mothers_name">Mother's Name</label>
					      <input type="text" name="mothers_name" class="form-control @error('mothers_name') is-invalid @enderror" id="mothers_name" placeholder="Enter Mother's Name">
					      @error('mothers_name')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>
					    <div class="form-group col-md-6">
					      <label for="student_phone">Student Phone</label>
					      <input type="text" name="student_phone" class="form-control @error('student_phone') is-invalid @enderror" id="student_phone" placeholder="Enter Student Phone">
					      @error('student_phone')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>

					     <div class="form-group col-md-6">
					      <label for="student_email">Student Email</label>
					      <input type="email" name="student_email" class="form-control @error('student_email') is-invalid @enderror" id="student_email" placeholder="Enter Student Email">
					      @error('student_email')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>
					    <div class="form-group col-md-6">
					      <label for="student_password">Student Password</label>
					      <input type="password" name="student_password" class="form-control @error('student_password') is-invalid @enderror" id="student_password" placeholder="Enter Student Password">
					      @error('student_password')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>

					    <div class="form-group col-md-6">
					      <label for="student_city">City</label>
					      <input type="text" name="student_city" class="form-control @error('student_city') is-invalid @enderror" id="student_city" placeholder="Enter Student City">
					      @error('student_city')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					    </div>
					  </div>


					  <div class="form-group">
					    <label for="student_address">Address</label>
					    <input type="text" name="student_address" class="form-control @error('student_address') is-invalid @enderror" id="student_address" placeholder="1234 Main St">
					    @error('student_address')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					  </div>


					 <div class="form-group">
					    <label for="student_image">Image</label><br>
					    <input type="file" name="student_image" class="@error('student_image') is-invalid @enderror" id="student_image" placeholder="1234 Main St">
					    @error('student_image')
    						<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
					  </div>
					<br>
					  <button type="submit" class="btn btn-primary">Add Student</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
