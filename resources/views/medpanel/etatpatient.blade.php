@extends('medpanel.med')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tables D'etat Patient</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/nursedashboard">Tableau de bord</a></li>
          <li class="breadcrumb-item active">Patients</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
@if (isset($patients))
    

<section class="content">
      <div class="container-fluid">
           <div class="row">
                <div class="col-md-12">
                        <div class="card">
                                <div class="card-header">
                                <h3 class="card-title">Les Patients</h3>
                                </div>
                            <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>                  
                                            <tr>
                                                <th style="width: 140px" >ID PATIENT</th>
                                                <th style="width: 400px" >NOM & PRENOM</th>
                                                <th>Etat Actual </th> 
                                                <th > L'alarme</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($patients as $patient)
                                                <tr>
                                                <td>{{ $patient->id }}</td>
                                                <td>{{ $patient->pseudoname }} {{ $patient->name }}</td>
                                                <td><a href="/etatactual" class="btn btn-outline-success">Etat actuel</a></td>
                                                 <td><a href="" class="btn btn-outline-info">Traiter</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> 
                            <!-- /.card-body -->

                        </div>
                </div>
                
            </div>
       </div>




<!-- /.container-fluid -->
</section>
@endif
<!-- /.content -->

<!-- /.content-wrapper -->


<!-- Control Sidebar -->


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


@endsection
