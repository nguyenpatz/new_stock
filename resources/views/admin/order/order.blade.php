<!DOCTYPE html>
<html lang="en">
<head>@include('admin.head')
</head>
@include('admin.main')
<a href="order_create">
	<button class="btn btn-success">Create</button>
</a>
<div class="d-flex justify-content-end">{{ $order->links() }}</div>
<section class="content">
	<div class="container-fluid px-0">
		<!-- Small boxes (Stat box) -->
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-success">
					<th>{{__('lang.name')}}</th>
					<th>{{__('lang.partner')}}</th>
					<th>{{__('lang.createdate')}}</th>
					<th>{{__('lang.edate')}}</th>
					<th>{{__('lang.rdate')}}</th>
					<th>{{__('lang.employee')}}</th>
					<th>{{__('lang.total_payment')}}</th>
					<th>{{__('lang.state')}}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($order as $row)
				<tr>
					<td><a href="/order/{{$row->oid}}">{{ $row->odname}}</a></td>
					<td>{{ $row->ptname }}</td>
					<td>{{ $row->create_date }}</td>
					<td>{{$row->expiration_date }}</td>
					<td>{{ $row->received_date }}</td>
					<td>{{ $row->epname }}</td>
					<td>{{ $row->total_payment }}<sup>đ</sup></td>
					<td>{{ $row->state }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<!-- /.row (main row) -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>

<!-- /.content-wrapper -->
@include('admin.footer')
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
