
 @extends('adminpanel.admin')

 @section('style-extra')


 <style>






.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}



.modal {
    display: none; /* Hidden by default */
    z-index: 50; /* Sit on top */
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content/Box */
.modal-content {
  padding: 20px;
  z-index: 99;
    background-color: #fefefe;
    margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 27%; /* Could be more or less, depending on screen size */
}


   </style>



 @endsection

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
            <h3>{{$chef}}</h3>

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
            <h3>{{$medcin}}</h3>

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
              <h3>{{$infirmiere}}</h3>

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
            <h3>{{$service}}</h3>

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
          <div class="text-center " id="popup" style="position: relative">
            
            <img class=" img-circle" width="100px" height="100px"
                 src={{auth()->user()->getAvatar()}}
                 alt="User profile picture">
                 <button class="btn"  onclick="document.getElementById('id01').style.display='block'"  style="position: absolute;bottom: 0;margin-left : -15px;" ><i class="fa fa-camera" aria-hidden="true"></i></button>
                 {{-- popup --}}

                 <div id="id01" class="modal">
                  <div class="modal-content animate" >
                      <span class="" style="text-align: center ; font-size: 2em;"><strong>choisir une photo</strong> </span>
                      


                  <form method="POST" action="{{route('upload.photo')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">

                          <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="avatar" required>
                            <label class="custom-file-label" for="validatedCustomFile">choisir image...</label>
                          </div>
                          <button type="submit" class="btn btn-dark">changer</button>
                          
                        </div>
                      </form>



                  </div>
              </div>
              <script>
                  // Get the modal
                  var modal = document.getElementById('id01');
                  var can = document.getElementById('can');
                  can.onclick=function () {
                      modal.style.display = "none";
                  }
                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
              </script>


          </div>

          <h3 class="profile-username text-center">{{auth()->user()->name}} </h3>

          <form action="" method="post">
            @csrf
            
          </form>
          <p class="text-muted text-center">{{auth()->user()->role->role}}</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item" >
            <b>Mon ID</b> <a class="float-right">{{auth()->id()}}</a>
            </li>
            <li class="list-group-item">
              <b>EMAIL</b> <a class="float-right">{{auth()->user()->email}}</a>
            </li>
            <li class="list-group-item">
              <b>NUM DE TELEPHONE</b> <a class="float-right">{{auth()->user()->phonenumber}}</a>
            </li>
          </ul>

          <a href="/editmyinfos" class="btn btn-outline-primary btn-block"><b>PLUS</b></a>
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
