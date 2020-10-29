@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Meeting</h3>
				<form action="">
					<div class="form-group">
						<textarea name="" cols="20" rows="3" class="form-control" placeholder="Meeting"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="" class="form-control selector" placeholder="Meeting Date">
					</div>
					<button class="btn-primary btn float-right">Save</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Meetings</h5>
				<ul>
					<li class="no-data text-center">
						No meeting yet.
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Enim ad cupidatat officia exercitation incididunt aute voluptate </p>
							<p class="date">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Enim ad cupidatat officia exercitation incididunt aute voluptate </p>
							<p class="date">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class text-red">Enim ad cupidatat officia exercitation incididunt aute voluptate </p>
							<p class="date text-red">October 20, 2020 | 12:14pm</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>

@endsection