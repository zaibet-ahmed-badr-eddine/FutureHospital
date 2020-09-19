@extends('adminpanel.admin')
@section('content')

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if ($role_id == 2)
              <h1>Chef Service</h1>  
            @endif

            @if ($role_id == 3)
              <h1>Medcin</h1>  
            @endif

            @if ($role_id == 4)
              <h1>infermiere</h1>  
            @endif
          </div>
          <div class="col-sm-6">
            @if ($role_id == 2)
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admindashboard">Tableau de Bord</a></li>
              <li class="breadcrumb-item active">Chef Service</li>
            </ol>
          @endif

          @if ($role_id == 3)
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admindashboard">Tableau de Bord</a></li>
            <li class="breadcrumb-item active">Medcin</li>
          </ol>        
            @endif

          @if ($role_id == 4)
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admindashboard">Tableau de Bord</a></li>
            <li class="breadcrumb-item active">Infirmiere</li>
          </ol>  
          @endif
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            @foreach ($users as $user)
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">
                  <div class="card-header text-muted border-bottom-0">
                    {{ $user->role->role }}
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead"><b>{{ $user->pseudoname }}</b></h2>
                        <p class="text-muted text-sm"><b>Birthday: </b> {{ $user->birthday }} </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Born Place: {{ $user->bornplace }}</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{ $user->phonenumber }}</li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                         <img src={{$user->getAvatar()}} alt="" class="img-circle img-fluid">



                     






                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="{{ route('show.edit.form', ['id'=> $user->id]) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-edit"></i> Modifier
                      </a>
                      <a href="{{ route('delete.member', ['id'=> $user->id, 'role_id'=> $role_id]) }}" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash-alt"></i> Supprimer
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

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
</body>
</html>

@endsection