<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الشهاده</title>
    <!-- Bootstrap-Link -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/js/bootstrap.bundle.min.js') }}" />
    <!-- Css file -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dashboard/dist/css/adminlte.min.css') }}">
  </head>
  <body>


 
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">النتيجة</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>الاسم</th>
                    <th>اسم الام</th>
                    <th> المدينة</th>
                    <th> السلوك</th>
                    <th> الناتج الصافي</th>
                    <th> الناتج الكامل</th>
                    <th>الحالة</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->name_of_mother }}</td>
                    <td>{{ $result->city }}</td>
                    <td>{{ $result->behavior }}</td>
                    <td>{{ $result->natig_safy }}</td>
                    <td>{{ $result->natig_camel }}</td>
                    <td>{{ $result->Result }}</td>
                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  </body>
  
<!-- jQuery -->
<script src="{{ asset('assets/dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dashboard/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dashboard/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</html>
