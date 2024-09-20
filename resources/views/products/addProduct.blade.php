@extends('layouts.master')
@section('content')

<div class="content-area py-1">
		<div class="box box-block bg-white">
			<h5>فورم ثبت محصول جدید:</h5>
			<!-- <p class="font-90 text-muted mb-1">Use <code>data-mask</code> to the input element.</p> -->
			@include('layouts.errors')

			@if(session('product_id'))
			<div class="alert alert-success-fill alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<span>آی دی کالا / محصول</span><br>
				<h1>{{ session('product_id') }}</h1>
			</div>
			@endif

			<form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="product_id" value="<?php date_default_timezone_set('asia/kabul')?>{{date('yHis')}}">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>اسم کالا<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="productName" placeholder="اسم کالا" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>نوع کالا<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="type" placeholder="نوع کالا" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>کمپنی سازنده<span style="color: red">*</span></label>
							<select class="form-control" name="company_id" required>
								<option value="">انتخاب کنید</option>
								@foreach($companies as $company)
								<option value="{{$company->id}}">{{$company->companyName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>قیمت </label>
							<input type="text" class="form-control txt" name="price" placeholder="قیمت">
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>وزن</label>
							<input type="text" class="form-control txt" name="weight" placeholder="وزن">
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>محل فروش</label>
							<input type="text" class="form-control" name="salesPlace" placeholder="محل فروش" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>تاریخ تولید</label>
							<input type="date" class="form-control" name="productionDate">
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>تاریخ انقضا</label>
							<input type="date" class="form-control" name="expireDate">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>نمایش در سایت</label>
							<select class="form-control" name="view">
								<option value="2">خیر</option>
								<option value="1">بلی</option>
							</select>
						</div>
					</div>
				</div>
					<input type="hidden" name="status" value="1">
				<div class="row">
				<div class="col-md-12">
					<label>عکس</label>
					 <input type="file" name="productImage" id="input-file-now" class="dropify"/>
				</div>
			</div>

				<br>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
							<i class="ti-save"></i>
							<span>ذخیره</span>
						</button>
						<button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
							<i class="ti-loop"></i>
							<span>لغو</span>
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


@endsection
