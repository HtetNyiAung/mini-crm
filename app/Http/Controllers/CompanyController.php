<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Requests;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $company = Company::paginate(10);
        return view('company.viewcompany',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.insertcompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
     {
        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $this->storeimage($request);
        $company->website = $request->website;
        $company->save();

        return redirect('/view')->with('status','Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.updatecompany',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $this->storeimage($request);
        $company->website = $request->website;
        $company->save();
        return redirect('/view')->with('status','Update Successfully!');
    }

    public function storeimage(Request $request){
        $file = $request->file('logo');
        $name = $file->getClientOriginalName();
        $path = 'uploads/';
        $file->move($path,$name);
        return $name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::where('id',$id)->delete();
        return redirect('/view')->with('status','Delete Successfully!');
    }
}
