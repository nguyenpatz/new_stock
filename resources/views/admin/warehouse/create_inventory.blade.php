@include('admin.head')
</head>
<form method="post" action="{{route('partner.store')}}" class="form-group container mt-5">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <div class="row">
 	<div class="col-6">
 		<p>
        	<label for="title">{{__('lang.name')}}</label><br>
        	<input type="text" class="form-control" name="name" value="">
    	</p>
 		<p>
        	<label for="title">{{__('lang.template')}}</label><br>
			<select class="form-control" name="template" aria-label="Default select example">
				@foreach ($templates as $template)
					<option value="{{$template->tid}}">{{$template->tpname}}</option>
				@endforeach
			</select>
    	</p>
		<p>
        	<label for="title">{{__('lang.employee')}}</label><br>
			<select class="form-control" name="bank_name" aria-label="Default select example">
				<option selected>Open this select menu</option>
					<option value=""></option>
			</select>
    	</p>
		<p>
        	<label for="title">{{__('lang.actual_number')}}</label><br>
			<!-- oninput regex để lấy mỗi giá trị là số, không phải số  thì không hiển thị ra input-->
        	<input type="text" class="form-control" name="account_number" value="" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled>
    	</p>
 		<p>
        	<label for="title">{{__('lang.quantity_checked')}}</label><br>
        	<input type="number" class="form-control" name="quantity_checked" value="" min=0>
    	</p>
 		<p>
        	<label for="title">{{__('lang.date')}}</label><br>
			<!-- oninput regex để lấy mỗi giá trị là số, không phải số  thì không hiển thị ra input-->
        	<input type="date" class="form-control" name="date" value="" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
    	</p>
 	</div>
 	<div class="col-6">
 		<p>
        	<label for="title">{{__('lang.note')}}</label><br>
			<textarea class="form-control" name="note" rows="4"></textarea>
    	</p>
 		<p>
        	<label for="title">{{__('lang.deviant')}}</label><br>
        	<input type="number" class="form-control" name="deviant value="" min="0">
    	</p>
		<p>
        	<label for="title">{{__('lang.state')}}</label><br>
        	<input type="text" class="form-control" name="state" value="" min="0">
    	</p>
    	<p>
        	<button type="submit" class="form-control btn btn-success">{{__('lang.submit')}}</button>
    	</p>
 	</div>
 </div>
</form>
