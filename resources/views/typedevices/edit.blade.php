@extends('master')

@section('title', 'Edit Devices')

@section('body')
	<div class="container-fluid">
		<div class="from-group">
			<form action="{{ url('typedevices/'.$typedevices->id) }}" method="post">
				@csrf
				{{ method_field('put') }}


				<label >Name:</label>
				<label>{{ $errors->has('email') ? $errors->first('email') : ''}}</label>
				<input type="text" class="form-control" value="{{$typedevices->name}}" placeholder="Enter Name" name="name">



				<button type="submit" class="btn btn-default">Edit</button>
			</form>
		</div>
	</div>

@endsection