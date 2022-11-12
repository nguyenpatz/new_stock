<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.head')
</head>
@include('admin.main')
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
		<table class="table table-bordered">
    		<thead>
      			<tr class="bg-success">
        <th>Name</th>
        <th>Partner</th>
        <th>Create Date</th>
        <th>Expiration Date</th>
        <th>Received Date</th>
        <th>Duration Inventory</th>
        <th>Employee</th>
        <th>Total Payment</th>
        <th>Payment Term</th>
        <th>State</th>
      </tr>
    </thead>
    <tbody>
    @foreach($order as $row)
      <tr>
        <td><a href="/order/{{$row->id}}">{{ $row->odname}}</a></td>
        <td>{{ $row->ptname }}</td>
        <td>{{ $row->create_date }}</td>
        <td>{{$row->expiration_date }}</td>
        <td>{{ $row->received_date }}</td>
        <td>{{ $row->duration_inventory }}</td>
        <td>{{ $row->epname }}</td>
        <td>{{ $row->total_payment }}</td>
        <td>{{ $row->payment_term }}</td>
        <td>{{ $row->state }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
@include('admin.footer')
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
