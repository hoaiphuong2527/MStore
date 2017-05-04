@extends('backend.masterpage.masterpage')
@section('title')
      Edit
@endsection
@section('content')
	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="{{ asset ('/admin/product') }}" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
			<h1>Manage Products</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
							<h5>Product-info</h5>
						</div>
						<div class="widget-content nopadding">

							<!-- BEGIN USER FORM -->
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
								{{ csrf_field() }}
								<?php
									use App\Kind;
									use App\Category;
									$categories = Category::all();
								?>
								<div class="control-group">
									<label class="control-label">Name :</label>
									<div class="controls">
										<input name="name" type="text" class="span11" placeholder="Name" value="{{ $product->Name }}" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Category:</label>
									<div class="controls">
										<select name="category"/>
										@foreach ($categories as $category)
											@if ($category->Id == $product->CategoryId)
											<option value="{{ $category->Id }}" selected>{{ $category->Name }}</option>
											@else
											<option value="{{ $category->Id }}">{{ $category->Name }}</option>
											@endif
										@endforeach
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Price :</label>
									<div class="controls">
										<input name="price" type="text" class="span11" placeholder="Price" value="{{ $product->Price }}" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Kind ID :</label>
									<div class="controls">
										<input name="kind" class="span11" placeholder="Kind id" value="{{ $product->KindId }}" type="number" min="1" max="{{ Kind::all()->count() }}" step="1"/> *
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Description: </label>
									<div class="controls">
										<textarea name="description" class="span11" >{{ $product->Description }}</textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Specification</label>
									<div class="controls">
										<textarea name="specification" class="span11">{{ $product->Specification }}</textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Picture : </label>
									<div class="controls">
										<button type="file" name="fileToUpLoad"  class="btn btn-success">Choose Picture</button>
									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-success">Save</button>
									</div>
								</div>
							</form>
							<!-- END USER FORM -->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- END CONTENT -->
@endsection