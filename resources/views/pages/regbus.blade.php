@extends('layouts.appp')

 @section('content')
 <div class="container">
     <form class="form-horizontal" method="POST" action="{{ url('/register1') }}">
        {{csrf_field()}}
        @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
             @endforeach
        @endif 

        @if(session('response'))
          <div class="alert alert-success">
              {{session('response')}}
          </div>
        @endif
  <fieldset>
    <legend>Admin Bus Registration Page</legend>

      <div class="form-group">
      <label for="inputplateNO" class="col-lg-2 control-label">PlateNo</label>
      <div class="col-lg-6">
        <input type="text" name="platenumber" class="form-control" id="inputplateNO" placeholder="plate number">
      </div>
    </div>

     <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Bus owner</label>
      <div class="col-lg-6">
        <select class="form-control" name="busowner" id="select">
          <option></option>  
          <option>david</option>
          <option>walter</option>
          <option>Agustino</option>
        </select>
      </div>
    </div>
 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </fieldset>
</form>
 </div>
 @endsection