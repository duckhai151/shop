@extends('backEnd.layouts.master')
@section('title','List Categories')
@section('content')
<hr>
<h4>Categories</h4>
<hr>
<div class="row">
	<div class="col-md-5">
		<div>
			<h5>Add new SKU</h5>
			<hr>
			<h6>Product:</h6>
			<img src="#" width="150px" height="150px">
		</div>
		<form action="#" method="post">
			@csrf
			<div class="form-group">
				<label>Size</label>
				<input type="text" name="size" class="form-control">
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="form-group">
				<label>Stock</label>
				<input type="text" name="stock" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Add</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
		@if(session('message1'))
			<br>
			<div class="alert alert-success">
				{{session('message1')}}
			</div>
		@endif
	</div>
	<div class="col-md-6 offset-md-1">
		<div>
			<h5>List SKU</h5>
			<hr>
		</div>
		<table class="table table-bordered table-hover table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Size</th>
					<th>Price($)</th>
					<th>Stock</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
				<form action="" method="post">
					@csrf
					<tr>
						<th>
							<input type="text" name="size" value="" class="form-control" size="5px">
						</th>
						<th><input type="text" name="price" value="" class="form-control" size="3px"></th>
						<th><input type="text" name="stock" value="" class="form-control" size="2px"></th>
						<th>
							<button type="submit" class="btn btn-success">Edit</button>
							<a href="" class="btn btn-danger">Delete</a>
						</th>
					</tr>
				</form>
				
			</tbody>
		</table>
		@if(session('message2'))
			<br>
			<div class="alert alert-success">
				{{session('message2')}}
			</div>
		@endif
		@if(session('message3'))
			<br>
			<div class="alert alert-success">
				{{session('message3')}}
			</div>
		@endif
	</div>
</div>
@endsection