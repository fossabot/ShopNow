@extends('admin.layouts.default')
@section('css')
<!-- select2 Plugin -->
		<link href="{{asset('backend\plugins\select2\select2.min.css')}}" rel="stylesheet">

		<!-- Time picker Plugin -->
		<link href="{{asset('backend\plugins\time-picker\jquery.timepicker.css')}}" rel="stylesheet">

		<!-- Date Picker Plugin -->
		<link href="{{asset('backend\plugins\date-picker\spectrum.css')}}" rel="stylesheet">

		<link href="{{asset('backend\plugins\fileuploads\css\dropify.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend\plugins\wysiwyag\richtext.css')}}" rel="stylesheet" type="text/css">

@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Products</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
								<li class="breadcrumb-item active" aria-current="page">Update Product</li>
							</ol>
						</div>

						
					
						<div class="row row-deck">
							<div class="col-lg-12">
								<form class="card" action="{{route('product.update', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
									{{csrf_field()}}
									<input name="_method" type="hidden" value="PATCH">
									<div class="card-header">
										<h3 class="card-title">Update Product</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Name</label>
													<input type="text" name="name" class="form-control" placeholder="Product Name" value="{{$product->name}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Price</label>
													<input type="text" name="price" class="form-control" placeholder="Product Price" value="{{$product->price}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Special Price</label>
													<input type="text" name="special_price" class="form-control" placeholder="Special Price" value="{{$product->special_price}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Special Price Start</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control " name="special_price_start" placeholder="MM/DD/YYYY" type="date" value="{{$product->special_price_start}}">
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Special Price End</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control " name="special_price_end" placeholder="MM/DD/YYYY" type="date" value="{{$product->special_price_end}}">
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Selling Price</label>
													<input type="text" name="selling_price" class="form-control" placeholder="Selling Price" value="{{$product->selling_price}}">
												</div>
											</div>
											
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Quantity</label>
													<input type="text" name="qty" class="form-control" placeholder="Quantity" value="{{$product->qty}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">New From</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control" name="new_from" placeholder="MM/DD/YYYY" type="date" value="{{$product->new_from}}"> 
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">New To</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control " name="new_to" placeholder="MM/DD/YYYY" type="date" value="{{$product->new_to}}">
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group mb-0">
													<label class="form-label">Product Description</label>
													<textarea class="content" name="description">{{$product->description}}</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="card-header">
													<h3 class="card-title">Image Upload</h3>
												</div>
												<div class=" card-body">
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<input type="file" name="image" class="dropify" data-height="180">
														</div>
														<div class="col-md-6">
															<img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" id="image_upload_preview" alt="Product Image" class="img-responsive" style="max-height: 180px">
														</div>

													</div>

												</div>
											</div>

											
											
											<div class="col-md-4">
												
												<div class="form-group">
													<div class="form-label">Manage Stock</div>
													<label class="custom-switch">
														<input type="checkbox" name="manage_stock" class="custom-switch-input" {{$product->manage_stock== '1' ? 'checked' : ''}}>
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I want Notification before Stock Out </span>
													</label>
												</div>
												<div class="form-group">
													<div class="form-label">Out of Stock</div>
													<label class="custom-switch">
														<input type="checkbox" name="in_stock" class="custom-switch-input" {{$product->in_stock== '1' ? 'checked' : ''}}>
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">This Product is Out of stock</span>
													</label>
												</div>
												<div class="form-group">
													<div class="form-label">Is this product Active?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_active" class="custom-switch-input" {{$product->is_active== '1' ? 'checked' : ''}}>
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">This Product is Active</span>
													</label>
												</div>
											</div>
								
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Update Product</button>
									</div>
								</form>
							</div>
						</div>
					</div>
@stop
@section('js')
<!-- Timepicker js -->
		<script src="{{asset('backend\plugins\time-picker\jquery.timepicker.js')}}"></script>
		<script src="{{asset('backend\plugins\time-picker\toggles.min.js')}}"></script>

		<!-- Datepicker js -->
		<script src="{{asset('backend\plugins\date-picker\spectrum.js')}}"></script>
		<script src="{{asset('backend\plugins\date-picker\jquery-ui.js')}}"></script>
		<script src="{{asset('backend\plugins\input-mask\jquery.maskedinput.js')}}"></script>
		<script src="{{asset('backend\plugins\wysiwyag\jquery.richtext.js')}}"></script>
		<!-- Inline js -->
		<script src="{{asset('backend\plugins\select2\select2.full.min.js')}}"></script>

		<script src="{{asset('backend\js\select2.js')}}"></script>
		<!-- file uploads js -->
        <script src="{{asset('backend\plugins\fileuploads\js\dropify.min.js')}}"></script>
        
        <script type="text/javascript">
        	$(function(e) {
        	$('.content').richText();
			$('.content2').richText();
			});
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        </script>

       
@stop