@extends('layouts.main_content')


@section('title' , 'All Department')

@section('add')
<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
	<!--begin:Form-->
	<form class="form" method="post" action="{{ url('/departments') }}">
		@csrf
		<!--begin::Heading-->
		<div class="mb-13 text-center">
			<!--begin::Title-->
			<h1 class="mb-3">Add Department</h1>
			<!--end::Title-->
		</div>
		<!--end::Heading-->
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
				<span class="required">Department Name :</span>
				<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
			</label>
			<!--end::Label-->
			<input type="text" class="form-control form-control-solid" placeholder="Enter Department Name" name="name" />
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8">
			<label class="fs-6 fw-semibold mb-2">Department Description :</label>
			<textarea class="form-control form-control-solid" rows="8" name="description" placeholder="Type Department Description"></textarea>
		</div>
		<!--end::Input group-->


		<!--begin::Actions-->
		<div class="text-center">
			<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
			<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
				<span class="indicator-label">Submit</span>
				<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</button>
		</div>
		<!--end::Actions-->
	</form>
	<!--end:Form-->
</div>

@endsection

@section('main_content')
<div class="table-responsive">
	<!--begin::Table-->
	<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
		<!--begin::Table head-->
		<thead>
			<tr class="fw-bold text-muted">
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Created At</th>
				<th>Last Update</th>
				<th>Actions</th>
			</tr>
		</thead>
		<!--end::Table head-->
		<!--begin::Table body-->
		<tbody>
			@foreach($departments as $dept)
			<tr>
				<td>
					<div class="d-flex align-items-center">
						{{$dept->id}}
					</div>
				</td>
				<td>
					{{$dept->name}}
				</td>
				<td>
					{{$dept->description}}
				</td>
				<td>{{$dept->created_at}}</td>
				<td>{{$dept->updated_at}}</td>
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
						<a href="{{ url('/departments/' . $dept->id .'/edit') }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
							<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
							<span class="svg-icon svg-icon-3">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
									<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<form action="{{ route('departments.destroy' ,  $dept->id ) }}" method="post" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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