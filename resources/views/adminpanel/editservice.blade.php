@extends('adminpanel.admin')

@section('content')


<div class="card card-primary" style="margin-left:300px;margin-right:300px;margin-top:15px" >
    <div class="card-header">
      <h3 class="card-title">Editer Service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('update.service', ["id"=> $service->id]) }}">
      @csrf
      
     {{-- <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Nom du Service</label>
              <input type="text" class="form-control"  placeholder="Nom Service" name="name_s" value="{{ $service->name_s }}">
            </div>
    
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom du Chef Service</label>
                  <input type="text" class="form-control"  placeholder="Nom du chef service" name="name_cs" value="{{ $service->name_cs }}">
                </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Nombre de lit</label>
          <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nombre de lit" name="lit_number" value="{{ $service->lit_number }}">
        </div>
        


        
      
      </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
      </div>--}}






      <div class="card-body">
        
        <div class="form-group">
          <label for="exampleInputEmail1">Nom du Service</label>
          <input type="text" class="form-control"  placeholder="Nom Service" name="name_s" value="{{ $service->name_s }}">
        </div>

          <div class="form-group">
            <label for="cs">Nom du Chef Service</label>
            <select class="form-control" name="chef_id" id="cs">
              @foreach ($chefs as $chef)
                <option value="{{ $chef->id }}">{{ $chef->name }}</option>  
              @endforeach
            </select>
          </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Nombre de lit</label>
      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nombre de lit" name="lit_number" value="{{ $service->lit_number }}">
    </div>
    


    
  
  </div>

  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </div>














    </form> 
  </div>



@endsection