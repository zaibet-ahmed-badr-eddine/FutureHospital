@extends('medpanel.med')

@section('content')


<div class="card card-primary" style="margin-left:300px;margin-right:300px;margin-top:15px" >
    <div class="card-header">
      <h3 class="card-title">Modifier le Mot de passe</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
      
      <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">ancien mot de passe</label>
              <input type="password" class="form-control"  placeholder="ancien mot de passe">
            </div>
    
                <div class="form-group">
                  <label for="exampleInputEmail1">nouveau mot de passe</label>
                  <input type="password" class="form-control"  placeholder="nouveau mot de passe">
                </div>


        <div class="form-group">
          <label for="exampleInputEmail1">confirmer nouveau mot de passe</label>
          <input type="password" class="form-control" id="exampleInputEmail1" placeholder="confirmer nouveau mot de passe">
        </div>
        


        
      
      </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">confirmer</button>
      </div>
    </form>
  </div>



@endsection