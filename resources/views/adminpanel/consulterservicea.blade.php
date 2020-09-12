@extends('adminpanel.admin')

@section('content')




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Services</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admindashboard">Tableau de bord</a></li>
              <li class="breadcrumb-item active">Services</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Services</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Service
                      </th>
                      <th style="width: 20%">
                          Chef Service
                      </th>
                      <th>
                        Photo Chef Service
                      </th>
                      <th style="width: 15%" class="text-center">
                          Nombre de lit
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($services as $service)
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <p>{{ $service->name_s }}</p>
                              
                        </td>
                        <td>
                          @if($service->serviceChef() == null)
                            {{'pas de chef'}}
                          @else
                            {{$service->serviceChef()->name}}
                          @endif
                         
                        </td>
                        <td class="project_progress">
                          @if($service->serviceChef() == null)
                          {{'pas de photo'}}
                        @else
                        <img class=" img-circle ml-5" width="30px" height="30px"
                        src={{$service->serviceChef()->getAvatar()}}
                        alt="User profile picture">
                        @endif

                          
                        </td>
                        <td class="project-state">
                            <p>{{ $service->lit_number }}</p>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-outline-info btn-sm" href="{{ route('show.edit.service', ['id'=> $service->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.service', ['id'=> $service->id]) }}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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

@endsection