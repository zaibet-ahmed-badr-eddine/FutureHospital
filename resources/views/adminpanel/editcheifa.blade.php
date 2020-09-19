@extends('adminpanel.admin')

@section('content')

<div class="card card-primary" style="margin-left:300px;margin-right:300px;margin-top:15px" >
    <div class="card-header">
      <h3 class="card-title">modifier informations du chef service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('edit.member', ['id'=> $user->id]) }}">
      @csrf
      <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" class="form-control" name="name" placeholder="Nom" value="{{ $user->name }}">
            </div>
    
                <div class="form-group">
                  <label for="exampleInputEmail1">Pseudoname</label>
                  <input type="text" class="form-control" name="pseudoname" placeholder="Pseudoname" value="{{ $user->pseudoname }}">
                </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{ $user->email }}">
        </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">lieu de naissance </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="bornplace" placeholder="Lieu de naissance" value="{{ $user->bornplace }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">date de naissance </label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="birthday" placeholder="date de naissance" value="{{ $user->birthday }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">num de telephone </label>
            <input type="phone" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="num de telephone" value="{{ $user->phonenumber }}">
          </div>


          <div class="form-group">
            <label for="s">Ajouter Service</label>
            <select class="form-control" name="service_id" id="ids" >
              @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name_s }}</option>  
              @endforeach
            </select>
          </div>



       
     
      
      </div> 

      <!-- /.card-body --> 

      <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary">confirmer</button>
      </div>
    </form>
  </div>



@endsection