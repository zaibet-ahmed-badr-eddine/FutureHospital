@extends('layouts.admin')

@section('content')


<div class="card card-primary" style="margin-left:300px;margin-right:300px;margin-top:15px" >
    <div class="card-header">
      <h3 class="card-title">Ajouter Service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
      
      <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Nom du Service</label>
              <input type="text" class="form-control"  placeholder="Nom Service">
            </div>
    
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom du Chef Service</label>
                  <input type="text" class="form-control"  placeholder="Nom du chef service">
                </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Nombre de lit</label>
          <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nombre de lit">
        </div>
        


        
      
      </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>



@endsection