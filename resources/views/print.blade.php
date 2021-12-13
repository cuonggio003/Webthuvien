
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Borrow</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/dist/css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i>Danh sách phiếu mượn
          <small class="pull-right">Date: {{ date('Y-m-d') }}</small>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
                <th>STT</th>
                <th>Tên người mượn</th>
                <th>Tên sách</th>
                <th>Ngày mượn</th>
                <th>Ngày trả</th>
                <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
              <?php $id=1 ?>
          @foreach ($borrow as $data)
            <tr>
                <td>{{ $id ++ }}</td>
                <td>{{ $data->student_id }}</td>
                <td>{{ $data->book_id }}</td>
                <td>{{ $data->borrow_date }}</td>
                <td>{{ $data->borrow_return }}</td>
                <td>{{ $data->status }}</td>
            </tr>
              
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
