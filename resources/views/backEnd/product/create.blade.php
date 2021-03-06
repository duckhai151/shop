@extends('backEnd.layouts.master')
@section('title','Create Category')
@section('content')
<hr>
<h3>Product <small>add</small></h3>
<hr>
<form action="{{route('product.postCreate')}}" enctype="multipart/form-data" method="post">
	@csrf
	<div class="col-md-6">
		<div class="form-group">
			<label>Product Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<div class="form-group">
			<label>Category Name</label>
			<select name="cate_id" id="cate_id" class="form-control">
				@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>Image</label>
			<input type="file" class="form-control" name="img" id="img">
		</div>
		<br>
		<button type="submit" class="btn btn-success">Add New</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</form>
	@if(session('message'))
		<br>
		<div class="alert alert-success">
			{{session('message')}}
		</div>
	@endif
@endsection

{{-- @section('js')
<script>
	$(document).ready(function(){
		$('#cate_id').change(function(){
			var cate_id = $(this).val();
			$.get("{{}}")
		});
	});
</script>
@endsection --}}
