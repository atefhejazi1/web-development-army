@extends('layouts.main_content')


@section('title' , 'Add Department')

@section('main_content')
<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<!--begin:Form-->
	<form class="form" method="post" action="{{ url('/departments') }}">
		@csrf
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
				<span class="required">Department Name :</span>
				<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
			</label>
			<!--end::Label-->
			<input type="text" class="form-control" placeholder="Enter Department Name" name="name" />
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8">
			<label class="fs-6 fw-semibold mb-2">Department Description :</label>
			<textarea class="form-control" rows="8" name="description" placeholder="Type Department Description"></textarea>
		</div>
		<!--end::Input group-->


		<!--begin::Actions-->
		<div>
			<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
				<span class="indicator-label">Add Department</span>
				<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</button>
		</div>
		<!--end::Actions-->
	</form>
	<!--end:Form-->
</div>

@endsection