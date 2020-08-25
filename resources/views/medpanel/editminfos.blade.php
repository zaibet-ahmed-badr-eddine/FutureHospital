@extends('medpanel.med')

@section('content')

<div class="card card-primary" style="margin-left:300px;margin-right:300px;margin-top:15px" >
    <div class="card-header">
      <h3 class="card-title">Modifier les informations</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="">
      
      <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" class="form-control" name="name" placeholder="Nom">
            </div>
    
                <div class="form-group">
                  <label for="exampleInputEmail1">Prenom</label>
                  <input type="text" class="form-control" name="pseudoname" placeholder="Prenom">
                </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
        </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">lieu de naissance </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="bornplace" placeholder="Lieu de naissance">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">date de naissance </label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="birthday" placeholder="date de naissance">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">num de telephone </label>
            <input type="phone" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="num de telephone">
          </div>

{{--     
           <div class="form-group">
            <label>poste</label>
            <select class="form-control">
              <option>Chef Srvice</option>
              <option>Medcin</option>
              <option>Infirmiere</option>
              
            </select>
          </div>--}}


        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      
      </div> 

      <!-- /.card-body --> 

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">confirmer</button>
      </div>
    </form>
  </div>



@endsection