@extends('layouts.main_content')


@section('title' , 'Edit Blog')

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
	<form class="form" method="post" action="{{ url('/blogs/'. $blog->id) }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
				<span class="required">Blog Name :</span>
				<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
			</label>
			<!--end::Label-->
			<input type="text" class="form-control" placeholder="Enter Blog Name" name="name" value="{{$blog->name}}" />
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="d-flex flex-column mb-8">
			<label class="fs-6 fw-semibold mb-2">Blog Description :</label>
			<textarea class="form-control" rows="8" name="description" placeholder="Type Blog Description">{{$blog->description}}</textarea>
		</div>
		<!--end::Input group-->
		<div class="d-flex flex-column mb-8">
			<label class="fs-6 fw-semibold mb-2">Upload Blog Image :</label>
			<input type="file" name="blog_image" id="imageInput" class="btn btn-primary">


			<img width="150px" height="150px" src="{{ asset('images/blogs/' . $blog->blog_image) }}" alt="">

			<img id="previewImage" src="#" alt="" >
		
		</div>

		<div class="d-flex flex-column mb-8">
			<label class="fs-6 fw-semibold mb-2">Chose Department :</label>
			<select name="id_dept" class="form-control">
				<option value="{{$blog->id_dept}}">{{$blog->department->name}}</option>
				@foreach($departments as $dept)
				<option value="{{ $dept->id }}">{{ $dept->name }}</option>
				@endforeach
			</select>
		</div>


		<div class="mb-8">
			<input type="hidden" name="author" value="{{Auth::user()->name}}">
			<span class="bg-black text-white rounded p-2">Author : <span class="text-primary">{{Auth::user()->name}}</span></span>
		</div>
		<!--begin::Actions-->
		<div>
			<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
				<span class="indicator-label">Edit Blog</span>
				<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</button>
		</div>


		<!--end::Actions-->
	</form>
	<!--end:Form-->
</div>

@endsection