@extends('layouts.app')
@section('content')

@foreach($data as $user)

<div class="form"> 

  <div class="form-sub"> 

    <h2> Edit Student </h2>

    <br>

    <form action="/edit/{{ $user->id }}" class="form-group"> 

       
      @csrf
        
      <input type= "text" name="name" class="form-control" placeholder="  Name" value="{{ $user->name }}">
      <br>
      
      <input type= "text" name="contact" class="form-control" placeholder="  Contact" value="{{ $user->contact }}">

      <br>

      <input type= "text" name="email" class="form-control" placeholder="  Email" value="{{ $user->email }}">

      <br>

      <input type= "text" name="address" class="form-control" placeholder="  Address" value="{{ $user->address }}">

      <br>

      <input type= "date" name="dob" class="form-control" placeholder="  DOB" value="{{ $user->dob }}">

      <br>

      <select name="gender" class="form-control" value="{{ $user->gender }}">
        <option value="male">Male</option>
        <option value="female">Female</option>
        
      </select>

      <br>

      <button type="submit" name="submit" id="btn" class="btn btn-warning">Update </button>






    </form>
  </div>
        
</div>
@endforeach







@endsection