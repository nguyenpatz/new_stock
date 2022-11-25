@include('admin.head')
<form method="post" action="/product_update/{{$id}}"
	class="form-group container mt-5">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="row">
		<div class="col-6">
			<p>
				<label for="title">Template</label><br>
				<input type="text" class="form-control" name="template_id" value="{{$id}}">
			</p>
			<p>
				<label for="title">Price</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="price" value="{{$product->price}}"> <span>đ</span>
			</div>
			</p>
			<p>
				<label for="title">Price Cost</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="price_cost" value="{{$product->price_cost}}">
				<span>đ</span>
			</div>
			</p>
			<p>
				<label for="exampleColorInput" class="form-label">Color</label>
				<input type="color" class="form-control form-control-color" name="color" id="exampleColorInput" value="{{$product->color}}" title="Choose your color">
			</p>
			
		</div>
		<div class="col-6">
			<p>
				<label for="title">Height</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="height" value="{{$product->height}}"> <span>m</span>
			</div>
			</p>
			<p>
				<label for="title">Length</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="length" value="{{$product->length}}"> <span>m</span>
			</div>
			</p>
			<p>
				<label for="title">Width</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="width" value="{{$product->width}}"> <span>m</span>
			</div>
			</p>
			<p>
				<label for="title">Weight</label><br>
			
			
			<div class="d-flex">
				<input type="number" class="form-control" name="weight" value="{{$product->weight}}"> <span>kg</span>
			</div>
			</p>
			<p>
				<button type="submit" class="form-control btn btn-success">Submit</button>
			</p>
		</div>
	</div>
</form>