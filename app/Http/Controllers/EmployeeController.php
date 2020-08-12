<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    public function add(){

        return view('employee.add');
    }

    public function all(){
        $emps = Employee::all(); //select all from employees

        return view('employee.list',['employees'=>$emps]);

    }

    public function  store(Request $req) {

        $name =$req->name;
        $email=$req->email;
        $gender=$req->gender;
        $gender=$req->gender;
        $salary=$req->salary;
        $description=$req->description;

        $obj = new Employee();
        $obj->name= $name;
        $obj->email=$email;
        $obj->gender=$gender;
        $obj->salary=$salary;
        $obj->description=$description;

        if($obj->save()){

           return redirect()->back()->with('success','Inserted successfully');
        }


        //INSERT INTO TABlE_NAME (NAME,EMAIL) VALUES)('')

    }

    public function edit($id){

        //fetch the details of id
        //SELECT * from employees WHERE ID =2
        $emp =Employee::find($id);
        return view('employee.edit',['employee'=>$emp]);

    }
    public function update(Request $req, $id){

        $name =$req->name;
        $email=$req->email;
        $gender=$req->gender;
        $gender=$req->gender;
        $salary=$req->salary;
        $description=$req->description;

        $obj = Employee::find($id);
        $obj->name= $name;
        $obj->email=$email;
        $obj->gender=$gender;
        $obj->salary=$salary;
        $obj->description=$description;

        if($obj->save()){

            return redirect()->back()->with('success','Updated successfully');
         }
 

    }

    public function delete($id){

        $emp =Employee::find($id);
        $emp->delete();
        return redirect()->back()->with('success','delete successfully');
    }
}
