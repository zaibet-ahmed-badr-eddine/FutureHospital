
 @extends('medpanel.med')

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
             <li class="breadcrumb-item"><a href="#">Accueil</a></li>
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
   </div>
   </section>



 
   <!-- Main content -->
   </div><!-- /.container-fluid -->
   
   <!-- /.content -->
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 @endsection 
 