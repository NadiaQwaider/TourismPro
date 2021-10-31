@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Validation</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>		
					</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<form action="form-validation.html" data-parsley-validate="">
									<div class="row">
										<div class="col-lg-9 col-md-8 form-group mg-b-0">
											<label class="form-label">Email: <span class="tx-danger">*</span></label>
											<input class="form-control" name="email" placeholder="Enter email" required="" type="email">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											<label class="form-label">select: <span class="tx-danger">*</span></label>
											<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required="">
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
													
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
											<label class="form-label">input: <span class="tx-danger">*</span></label>
											<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
											<label class="form-label">input: <span class="tx-danger">*</span></label>
											<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
											<label class="form-label">input: <span class="tx-danger">*</span></label>
											<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
											<label class="form-label">input: <span class="tx-danger">*</span></label>
											<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
											<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
											<div class="parsley-checkbox" id="cbWrapper">
												<label class="ckbox mg-b-5"><input data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label>
												<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label> <label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
												<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
											</div>
											<div id="cbErrorContainer"></div>
											<label class="form-label">date: <span class="tx-danger">*</span></label>
											<input class="form-control" id="datetimepicker" type="text" value="2018-12-20 21:05">
											<div class="col-lg-3 col-md-4 mg-t-10 mg-sm-t-25">
											<button class="btn btn-main-primary" type="submit">Create New</button>
										</div>
										</div>
									
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->		
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection