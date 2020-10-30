@extends('layouts.app')

@section('content')

		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				<h3>Edit Meeting</h3>
				<form action="{{route('meetings.update', $meeting->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<textarea name="title" cols="20" rows="3" class="form-control" placeholder="Meeting">{{$meeting->title}}</textarea>
					</div>
					<div class="form-group">
						<input type="text" name="meeting_date" class="form-control selector" placeholder="Meeting Date" value="{{$meeting->meeting_date}}">
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
	
	