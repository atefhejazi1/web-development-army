@extends('layouts.main_content')


@section('title' , 'All Messages')

@section('main_content')
<div class="table-responsive">
	<!--begin::Table-->
	<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
		<!--begin::Table head-->
		<thead>
			<tr class="fw-bold text-muted">
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Created At</th>
				<th>Actions</th>
			</tr>
		</thead>
		<!--end::Table head-->
		<!--begin::Table body-->
		<tbody>
			@foreach($messages as $message)
			<tr>
				<td>
					<div class="d-flex align-items-center">
						{{$message->id}}
					</div>
				</td>
				<td>
					{{$message->name}}
				</td>
				<td>{{$message->email}}</td>
				<td>{{$message->subject}}</td>
				<td>{{$message->message}}</td>
				<td>{{$message->created_at}}</td>
				<td>
					<div class="d-flex justify-content-start flex-shrink-0">
						<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
							<span class="svg-icon svg-icon-3">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
									<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>

						<form action="{{ route('messages.destroy' ,  $message->id ) }}" method="post" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
							@method('DELETE')
							@csrf
							<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->

							<button type="submit" class="border-0 bg-transparent">
								<span class="svg-icon svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
										<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
										<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
									</svg>
								</span>
							</button>
							<!--end::Svg Icon-->
						</form>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		<!--end::Table body-->
	</table>
	<!--end::Table-->
</div>

@endsection