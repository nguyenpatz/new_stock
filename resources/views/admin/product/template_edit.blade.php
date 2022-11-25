@include('admin.head')
</head>
<form method="post" action="/template_update/{{$id}}"
	class="form-group container mt-5">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="row">
		<div class="col-6">
			<p>
				<label for="title">{{__('lang.category')}}</label><br>
				<select class="form-control"
					name="category_id" aria-label="Default select example">
					@foreach($category as $row)
					<option value="{{$row->id}}">{{$row->name}}</option> @endforeach
				</select>
			</p>
			<p>
				<label for="title">{{__('lang.name')}}</label><br> 
				<input type="text" class="form-control" name="name" value="{{$template->name}}">
			</p>
		</div>
		<div class="col-6">
			<p>
				<label for="title">{{__('lang.date_manufacture')}}</label><br>
				<input type="datetime-local" class="form-control" name="date_manufacture" value="{{$template->date_manufacture}}">
			</p>
			<p>
				<label for="title">{{__('lang.date_expiry')}}</label><br>
				<input type="datetime-local" class="form-control" name="expiry_date" value="{{$template->expiry_date}}">
			</p>
			<p>
				<label for="title">Note</label><br>
				<textarea class="form-control" name="note"{{$template->note}}></textarea>
			</p>
			<p>
				<button type="submit" class="form-control btn btn-success">{{__('lang.submit')}}</button>
			</p>
		</div>
	</div>
</form>
