@extends('layouts.appp')

 @section('content')
 <div class="container">
     <form class="form-horizontal" method="POST" action="{{ url('/register') }}">
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
    <legend>Admin User Registration Page</legend>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
      </div>
    </div>

      <div class="form-group">
      <label for="inputSurname" class="col-lg-2 control-label">Surname</label>
      <div class="col-lg-6">
        <input type="text" name="surname" class="form-control" id="inputSurname" placeholder="Surname">
      </div>
    </div>

      <div class="form-group">
      <label for="inputAmount" class="col-lg-2 control-label">Amount</label>
      <div class="col-lg-6">
        <input type="text" name="amount" class="form-control" id="inputAmount" placeholder="Amount">
      </div>
    </div>

     <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Category</label>
      <div class="col-lg-6">
        <select class="form-control" name="category" id="select">
          <option></option>  

       
          <option>Student</option>
          <option>Normal</option>
        </select>
      </div>
    </div>
 
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-6">
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
            Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="optionsRadios2" value="Female">
            Female
          </label>
        </div>
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