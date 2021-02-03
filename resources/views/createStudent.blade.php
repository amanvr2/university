@extends('layouts.app')
@section('content')

<div class="form"> 

  <div class="form-sub"> 

    <h2> Create Student </h2>

    <br>

    <form action="/create-customer" method="POST" class="form-group"> 

       
      @csrf
        
      <input type= "text" name="name" class="form-control" placeholder="  Name">
      <br>
      
      <input type= "text" name="contact" class="form-control" placeholder="  Contact">

      <br>

      <input type= "text" name="email" class="form-control" placeholder="  Email">

      <br>

      <input type= "text" name="address" class="form-control" placeholder="  Address">

      <br>

      <input type= "date" name="dob" class="form-control" placeholder="  DOB">

      <br>

      <select name="gender" class="form-control">
        <option value="male">Male</option>
        <option value="female">Female</option>
        
      </select>

      <br>

      <button type="submit" name="submit" id="btn" class="btn btn-warning">Submit </button>






    </form>
  </div>
        
</div>


@endsection