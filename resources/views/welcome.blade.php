@extends('layouts.app')
@section('content')

<div class="create">
  <a href="/create" role="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>Create Student</a>
</div>
<br>
<br>


@if(Session::has('create'))
<div class="container">
  <p class="btn btn-success"> Student created successfully </p>
</div>

@elseif(Session::has('update'))
<div class="container">
  <p class="btn btn-success"> Details has been updated successfully</p>
</div>

@elseif(Session::has('delete'))
<div class="container">
  <p class="btn btn-danger"> Student deleted successfully</p>
</div>

@endif

<br><br>

<div class="container">
  <h2> Students </h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th> No </th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Address</th>
        <th>DOB</th>
        <th>Gender</th>
        <th> Edit </th>
        <th> Delete </th>
      </tr>
    </thead>
    <tbody> 

    @foreach($data as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->contact}}</td> 
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->dob}}</td>
        <td>{{$user->gender}}</td>
        <td> <a href="/update/{{$user->id}}" role="button" class="btn btn-primary">Edit</a>
        <td> <a href="/delete/{{$user->id}}" role="button" class="btn btn-danger">Delete</a>
      </tr>

    @endforeach
     
    </tbody>
  </table>
</div>






@endsection