<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();
        return view('admin.page.employee.list',compact('employee'));
    }
 
    public function create(){
        return view('devices.create');
    }
 
    public function storeEmployee(Request $request){
        
        $employee = new Employee();
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        //$employee->role = $request->input('role');
        $employee->email = $request->input('email');
        $employee->username = $request->input('username');
        $employee->password = $request->input('password');
        $employee->save();
        return redirect('/admin/users'); 
    }
}
