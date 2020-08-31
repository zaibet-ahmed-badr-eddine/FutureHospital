@extends('medpanel.med')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Les Rendez-Vous</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Rendez-Vous</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Table Rendez Vous</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>                  
                <tr>
                  <th style="width: 80px" >N° RDV</th>
                  <th>Nom & Prènom</th>
                  <th>Date du RDV</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rdvs as $rdv)
                  <tr>
                    <td>{{ $rdv->id }}</td>
                    <td>{{ $rdv->pseudoname }} {{ $rdv->name }}</td>
                    <td>{{ $rdv->rdv_date }}</td>
                    <td><a href="/gestionrdv/{{$rdv->id}}" class="btn btn-outline-info"><i class="fas fa-play"></i></a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
     
        </div>
       

        {{-- <div class="card"></div> --}}
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Les information du Rendez vous</h3>

        
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                
                  <th style="width: 200px">Rendez-vous numero </th>

                  <th>{{ $rdvt->id }} </th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
 
                  <td>Nom</td>
                  <td>{{ $rdvt->name }}</td>
                 
                </tr>
                <tr>
                  
                  <td>Prènom</td>
                  <td>{{ $rdvt->pseudoname }}</td>
                 
                </tr>
                <tr>
                  
                  <td>Genre</td>
                  <td> {{ $rdvt->gender }} </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>{{ $rdvt->email }}</td>
                </tr>
                <tr>
                  <td>Num de tlf</td>
                  <td>{{ $rdvt->phonenumber }}</td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td>{{ date("Y") - date("Y", strtotime($rdvt->birthday)) }}</td>
                </tr>
               
                <tr>
                  <td>Adresse</td>
                  <td>{{ $rdvt->adress }}</td>
                </tr>
               
                <tr>
                  <td>Date du Rendez-Vous</td>
                  <td>{{ $rdvt->rdv_date }}</td>
                <tr>
                  <td>Dossier</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-primary" style="width: 30%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  
                 
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-info">
          
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="card-footer">
              <button type="submit"  class="btn btn-outline-success btn-lg btn-block">Rèdiger rapport</button>
              
            
             </div>
          </form>
        </div>
        <!-- /.card -->

        
    
  </div>
  <!-- /.container-fluid -->
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

