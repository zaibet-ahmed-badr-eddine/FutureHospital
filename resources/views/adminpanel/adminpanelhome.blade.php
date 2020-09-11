
 @extends('adminpanel.admin')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tableau de bord</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admindashboard">Acueil</a></li>
            <li class="breadcrumb-item active">Tableau de bord</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Chef Service</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <a href="/consulte-user/2" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Medcin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="/consulte-user/3" class="small-box-footer">Plus dinfos <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Infirmiere</p>
            </div>
            <div class="icon">
              <i class="fas fa-syringe"></i>
            </div>
            <a href="/consulte-user/4" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Service</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-book"></i>
            </div>
            <a href="consultservicea" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->




      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="../../dist/img/user4-128x128.jpg"
                 alt="User profile picture">
          </div>

          <h3 class="profile-username text-center">Nina Mcintire</h3>

          <p class="text-muted text-center">Medcin</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item" >
              <b>Mon ID</b> <a class="float-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>EMAIL</b> <a class="float-right">543</a>
            </li>
            <li class="list-group-item">
              <b>NUM DE TELEPHONE</b> <a class="float-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn-outline-primary btn-block"><b>PLUS</b></a>
        </div>
        <!-- /.card-body -->
      </div>





      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
































{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection 
