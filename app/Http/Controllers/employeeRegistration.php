<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class employeeRegistration extends Controller
{
    public function employeeRegistration()
    {
        return view('employeeRegistration');
    }
    // Save Records in Data Base
    public function registerEmployee(Request $request)
    {
        $request->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'companyName'=>'required',
                'email'=>'required|email',
                'phone'=>'required'
            ]);
            employees::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'companyName' => $request->companyName,
                'email' => $request->email,
                'phone' => $request->phone
            ]);
            return redirect(route('dashboard'));
    }

    public function employees_view( Request $request)
    {
        $employees = employees::all();
        //$customers = cutomer::simplepaginate(5);
        $data = compact('employees');
        return view('employees_view')->with($data);
    }
    // Edit Company Records
    public function employees_edit($id)
    {
        $record = employees::find($id);
        if(is_null($record))
        {
            // Not Found
            return redirect('employees_view');
        }
        else
        {
            // Record Found
            $title = 'Update Employee';
            $url = url('/employees_update').'/'.$id;
            $data = compact('record','url', 'title');
            //$data = compact('record', 'title');
            return view('employeeRegistration')->with($data);
        }
    }
    public function employees_delete($id)
    {
        $record = employees::find($id);
        if(!is_null($record))
        {
            $record->delete();
        }
        return redirect('employees_view');
    }
    public function employees_update($id, Request $request)
    {
        // Server side Form data Vlidation
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'companyName'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);

        $record = employees::find($id);
        $record->firstname = $request['firstname'];
        $record->lastname = $request['lastname'];
        $record->companyName = $request['companyName'];
        $record->email = $request['email'];
        $record->phone = $request['phone'];
        $record->update();
        return redirect(route('employees_view'));
    }
}
