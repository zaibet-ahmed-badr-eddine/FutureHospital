
 @extends('medpanel.med')

 
@section('style-extra')
    



<style>






 
 
 .modal {
     display: none; /* Hidden by default */
     z-index: 59; /* Sit on top */
     width: 100%; /* Full width */
     height: 100%; /* Full height */
     background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
 }
 /* Modal Content/Box */
 .modal-content {
   z-index: 99;
   padding: 20px;
     background-color: #fefefe;
     margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
     border: 1px solid #888;
     width: 27%; /* Could be more or less, depending on screen size */
 }
 
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
 
 
 
    </style>


@endsection



 @section('content')
 
  <!-- Content Header (Page header) -->
  <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Tableau De bord</h1>
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




  

   <section class="content">
    <div class="container-fluid">


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

          <a href="#" class="btn btn-outline-primary btn-block"><b>PLUS</b></a>
        </div>
   </div>
   </section>



 
   <!-- Main content -->
   </div><!-- /.container-fluid -->
   
   <!-- /.content -->
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 @endsection 
 