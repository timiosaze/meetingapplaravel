@extends('layouts.app')

@section('content')

		<section class="section">
			<div class="create-form">
				<h3>Edit Meeting</h3>
				<form action="">
					<div class="form-group">
						<textarea name="" cols="20" rows="3" class="form-control" placeholder="Meeting">Enim ad cupidatat officia exercitation incididunt aute voluptate</textarea>
					</div>
					<div class="form-group">
						<input type="text" name="" class="form-control selector" placeholder="Meeting Date" value="2020-10-15 12:00">
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
	
	