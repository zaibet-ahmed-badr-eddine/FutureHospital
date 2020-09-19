@extends('adminpanel.admin')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lire</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admindashboard">Tableau de bord</a></li>
            <li class="breadcrumb-item"><a href="/mailbox">Boite Rèception</a></li>
            <li class="breadcrumb-item active">Lire</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Lire L'email</h3>

            <div class="card-tools">
              <a href="/mailbox" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-read-info">
              <h5>{{ $mail->subject }}</h5>
              <h6>From: {{ $mail->email }}
                <span class="mailbox-read-time float-right">{{ $mail->created_at }}</span></h6>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
              <div class="btn-group">
              <a href="{{ route('adminpanel.delete',  ['id'=>$mail->id]) }}"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                  <i class="far fa-trash-alt"></i></button></a>
                
              </div>
              <!-- /.btn-group -->
              
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
              {{ $mail->message }}
            </div>
            <!-- /.mailbox-read-message -->
          </div>
          
          <div class="card-footer">
         
            
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>









@endsection
