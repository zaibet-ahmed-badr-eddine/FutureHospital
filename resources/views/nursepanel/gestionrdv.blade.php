@extends('nursepanel.nurse')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Simple Tables</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Simple Tables</li>
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
            <h3 class="card-title">Les Rendez Vous</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>                  
                <tr>
                  <th style="width: 80px" >N° RDV</th>
                  <th>Pseudoname</th>
                  <th>Email</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rdvs as $rdv)
                  <tr>
                    <td>{{ $rdv->id }}</td>
                    <td>{{ $rdv->pseudoname }}</td>
                    <td>{{ $rdv->email }}</td>
                    <td><a href="/gestionrdv/{{$rdv->id}}" class="btn btn-info">&gt;</a></td>
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

                  <th> </th>{{-- hna oktob num du rendez vous--}}
                  
                </tr>
              </thead>
              <tbody>
                <tr>
 
                  <td>Nom</td>
                  <td>{{ $rdvt->name }}</td>
                 
                </tr>
                <tr>
                  
                  <td>Pseudoname</td>
                  <td>{{ $rdvt->pseudoname }}</td>
                 
                </tr>
                <tr>
                  
                  <td>Genre</td>
                  <td> / </td>
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
                  <td>Date de naissance</td>
                  <td>{{ $rdvt->birthday }}</td>
                </tr>
                <tr>
                  <td>Lieu de naissance</td>
                  <td>{{ $rdvt->bornplace }}</td>
                </tr>
                <tr>
                  <td>Adresse</td>
                  <td>{{ $rdvt->adress }}</td>
                </tr>
                <tr>
                  <td>Service</td>
                  <td>/</td>
                </tr>
                <tr>
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
          <div class="card-header">
            <h3 class="card-title">Ajouter Un medcin au RDV</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">choisi un medcin</label>
                <div class="col-sm-10">
                  <select class="form-control" >            
                    <option selected="selected">medcin 5</option>
                    <option >medcin 2</option>
                    <option >medcin 3</option>
                    <option >medcin 4</option></select>
                 
                </div>
              </div>
           
              <div class="form-group row">
                
                <label class="col-sm-2 col-form-label" for="exampleCheck2">Date du RDV</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="exampleCheck2">
                  </div>
                </div>
              </div>
             </div>
           
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Ajouter</button>
                <button type="submit" class="btn btn-danger float-right">Supprimer</button>
              </div>
            </div>
        
          </form>
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
