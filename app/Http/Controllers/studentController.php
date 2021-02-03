<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
    public function create(Request $req){

      $name = $req->input('name');
      $contact = $req->input('contact');
      $email = $req->input('email');
      $address = $req->input('address');
      $dob = $req->input('dob');
      $gender = $req->input('gender');


      $data = array('name'=>$name, 'contact'=> $contact, 'email'=> $email, 'address'=>$address, 'dob'=> $dob, 'gender'=> $gender);

      DB::table('students')->insert($data);

      return redirect('/')->with('create', 'Student created successfully');


    }

    public function view(){

      $data = DB::select('select * from students order by id');

      return view('welcome')->with('data', $data);

    }
 
    public function update($id){

      $data = DB::select('select * from students where id = ? ',[$id]);

      return view('update')->with('data', $data);

    }

    public function edit(Request $req, $id){

      $name = $req->input('name');
      $contact = $req->input('contact');
      $email = $req->input('email');
      $address = $req->input('address');
      $dob = $req->input('dob');
      $gender = $req->input('gender');

      DB::update('update students set name = ? where id = ?',[$name,$id]);
      DB::update('update students set contact = ? where id = ?',[$contact,$id]);
      DB::update('update students set email = ? where id = ?',[$email,$id]);
      DB::update('update students set address = ? where id = ?',[$address,$id]);
      DB::update('update students set dob = ? where id = ?',[$dob,$id]);
      DB::update('update students set gender = ? where id = ?',[$gender,$id]);

       return redirect('/')->with('update', 'Details has been updated successfully');


    }

  public function delete(Request $req, $id){


    DB::delete('delete from students where id = ?',[$id]);
    return redirect('/')->with('delete', 'Student deleted successfully'); 
    





  }
}
