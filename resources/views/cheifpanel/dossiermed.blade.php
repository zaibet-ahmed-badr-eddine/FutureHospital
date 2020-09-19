@extends('cheifpanel.cheif')
@section('content')

   <!-- Content Header (Page header) -->
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dossier medical</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/cheifdashboard">Tableau de bord</a></li>
            <li class="breadcrumb-item"><a href="/consulte-patient">Patients</a></li>
            <li class="breadcrumb-item active">Dossier medical</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
         


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> Dossier Medical
                  <small class="float-right">service</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
               
                <address>
                  <strong>Chef Service</strong><br>
                  NOM:<br>
                  PRENOM:<br>
                  NUM TLF<br>
                  EMAIL: 
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                
                <address>
                  <strong>Medcin</strong><br>
                  NOM:<br>
                  PRENOM:<br>
                  NUM TLF<br>
                  EMAIL:
                </address>
              </div>
              <!-- /.col -->
              <address>
                <strong>Infirmiere</strong><br>
                NOM:<br>
                PRENOM:<br>
                NUM TLF<br>
                EMAIL:
              </address>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <hr>

            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                 
                  
                    <strong>Les Information du Patient </strong><br>
                     Nom     :  {{ $patient->name }}<br>
                     Prenom  :  {{ $patient->pseudoname }}<br>
                     Age     :  {{ $patient->age }}<br>
                     Adresse :  {{ $patient->adress }}<br>
                     Genre   :  {{ $patient->gender }}<br>
                     Email   :  {{ $patient->email }}<br>
                     Num de Tlf   :  {{ $patient->phonenumber }}<br>
                     Service :  {{ Auth::user()->service->name_s }}<br>
                   
                   
                  
                </div>
                <div class="col-sm-4 invoice-col">
                 
                  
                    <strong>Rapport du medcin </strong><br>
                    {{ $patient->rapport }}
                   
                   
                  
                </div>



            </div>
            
            <!-- this row will not appear when printing -->
           
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
