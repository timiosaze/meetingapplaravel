@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				@include('includes.session')
				<h3>New Meeting</h3>
				<form action="{{route('meetings.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<textarea name="title" cols="20" rows="3" class="form-control" placeholder="Meeting"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="meeting_date" class="form-control selector" placeholder="Meeting Date">
					</div>
					<button class="btn-primary btn float-right" type="submit">Save</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Meetings</h5>
				<ul>
					@forelse ($meetings as $meeting)

					<li class="data-list">
						<div class="data-text">
							<p class="text-class {{$meeting->checkDate()}}">{{$meeting->title}}</p>
							<p class="date {{$meeting->checkDate()}}">{{ \Carbon\Carbon::parse($meeting->meeting_date)->format('F,d Y | h:ia') }}</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('meetings.edit', $meeting->id)}}" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$meeting->id}}">Delete</a>
								</div>
							</div>
						</div>
					</li>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$meeting->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Meeting</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							{{Str::limit($meeting->title, 20)}}
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<form action="{{route('meetings.destroy', $meeting->id)}}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
							</div>
						</div>
						</div>
					</div>
					@empty

					<li class="no-data text-center">
						No meeting yet.
					</li>
					
					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$meetings->links()}}
		</section>

@endsection