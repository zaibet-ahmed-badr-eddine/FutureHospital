@extends('adminpanel.admin')

@section('content')





 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Boîte de Réception</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admindashboard">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Boîte de Réception</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
 
      <!-- /.col -->
      <div class="">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Boîte de Réception</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                  @foreach ($mails as $mail)
                    <tr>
                      <td>
                        <div class="icheck-primary">
                          <input type="checkbox" value="" id="check1">
                          <label for="check1"></label>
                        </div>
                      </td>
                      <td class="mailbox-star"><a href="/read"></a></td>
                      <td class="mailbox-name"><a href="/read/{{ $mail->id }}">{{ $mail->name }}</a></td>
                      <td class="mailbox-subject">{{ $mail->email }}
                      </td>
                      <td class="mailbox-attachment"></td>
                      <td class="mailbox-date">{{ $mail->created_at }}</td>
                    </tr>
                  @endforeach
                
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            
          </div>
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
<!-- Page Script -->
<script>
$(function () {
  //Enable check and uncheck all functionality
  $('.checkbox-toggle').click(function () {
    var clicks = $(this).data('clicks')
    if (clicks) {
      //Uncheck all checkboxes
      $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
      $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
    } else {
      //Check all checkboxes
      $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
      $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
    }
    $(this).data('clicks', !clicks)
  })

  //Handle starring for glyphicon and font awesome
  $('.mailbox-star').click(function (e) {
    e.preventDefault()
    //detect type
    var $this = $(this).find('a > i')
    var glyph = $this.hasClass('glyphicon')
    var fa    = $this.hasClass('fa')

    //Switch states
    if (glyph) {
      $this.toggleClass('glyphicon-star')
      $this.toggleClass('glyphicon-star-empty')
    }

    if (fa) {
      $this.toggleClass('fa-star')
      $this.toggleClass('fa-star-o')
    }
  })
})
</script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>








    
@endsection