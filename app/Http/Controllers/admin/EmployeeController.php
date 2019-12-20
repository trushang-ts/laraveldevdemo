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
 
    public function storeDevice(){
 
        $device = new Device();
 
        $device->name = request('name');
        $device->description = request('description');
 
        $device->save();
 
        return redirect('/devices');
 
    }
}
