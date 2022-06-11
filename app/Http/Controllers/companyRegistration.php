<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;

class companyRegistration extends Controller
{
    public function companyRegistration()
    {
        return view('companyRegistration');
    }


    public function registerCompany(Request $request)
    {
        // Server side Form data Vlidation

        $request->validate([
                'companyname'=>'required',
                'email'=>'email',
                'logo'=> 'mimes:png,jpg',
                'website'=>'nullable'
            ]);
            // Uploads Log File
            $fileName = time().'logo.'.$request->file('file')->getClientOriginalExtension();
            $logo = $request->file('file')->storeAs('public', $fileName);
            // Stores Data in Form
            companies::create([
                'name' => $request->companyname,
                'email' => $request->email,
                'logo' => $logo,
                'website' => $request->website
            ]);
            return redirect(route('dashboard'));
    }
    public function companies_view( Request $request)
    {
        $companies = companies::all();
        //$customers = cutomer::simplepaginate(5);
        $data = compact('companies');
        return view('companies_view')->with($data);
    }
    // Edit Company Records
    public function companies_edit($id)
    {
        $record = companies::find($id);
        if(is_null($record))
        {
            // Not Found
            return redirect('companies_view');
        }
        else
        {
            // Record Found
            $title = 'Update Company';
            $url = url('/companies_update').'/'.$id;
            $data = compact('record','url', 'title');
            //$data = compact('record', 'title');
            return view('companyRegistration')->with($data);
        }
    }
    public function companies_delete($id)
    {
        $record = companies::find($id);
        if(!is_null($record))
        {
            $record->delete();
        }
        return redirect('companies_view');
    }
    public function companies_update($id, Request $request)
    {
        // Server side Form data Vlidation
        $request->validate([
                'companyname'=>'required',
                'email'=>'required|email',
                'logo'=> 'nullable|mimes:png,jpg',
                'website'=>'nullable'
            ]);

        // Uploads Log File
        $logo = '';
        if($request->file('file') != '')
        {
            $fileName = time().'logo.'.$request->file('file')->getClientOriginalExtension();
            $logo = $request->file('file')->storeAs('public', $fileName);
        }
        $record = companies::find($id);
        $record->name = $request['companyname'];
        $record->email = $request['email'];
        $record->logo = $logo;
        $record->website = $request['website'];
        $record->update();
        return redirect(route('companies_view'));
    }
    // Net Code
    // public function companies_update(Request $request, companies $product)
    // {
    //     $request->validate([
    //             'companyname'=>'required',
    //             'email'=>'email',
    //             'logo'=> 'mimes:png,jpg',
    //             'website'=>'nullable'
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('file'))
    //     {
    //         $destinationPath = 'public/';
    //         $profileImage = time().'logo.'. $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['file'] = "$profileImage";
    //     }
    //     else
    //     {
    //         unset($input['file']);
    //     }

    //     $product->update($input);

    //     return redirect()->route('companies_view')->with('success','Product updated successfully');
    // }
}
