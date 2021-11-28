<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\Person;

class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$organizations = Organization::all();
        return view('organization.index')->with(['organizations'=>$organizations]);
    }

    public function create()
    {
        return view('organization.create');
    }

    public function edit($id)
    {
        $organization  = Organization::findOrFail($id);
        return view('organization.edit')->with(['organization'=>$organization]);
    }
    public function Detail($id)
    {
        $organization  = Organization::findOrFail($id);
        $persons = Person::where('organizationId',$id)->get();
        return view('organization.detail')->with(['organization'=>$organization,'persons'=>$persons]);
    }

    public function store()
    {
    	$org = new Organization;
    	$org->name = \Request::get('name');
    	$org->phone = \Request::get('phone');	
    	$org->email = \Request::get('email');	
    	$org->website = \Request::get('website');	
    	$org->save();

    	return redirect('/');
    }

    public function update($id)
    {
    	$find =Organization::find($id);
    	if($find){
    		$org= [];
	    	$org['name'] = \Request::get('name');
	    	$org['phone'] = \Request::get('phone');	
	    	$org['email'] = \Request::get('email');	
	    	$org['website'] = \Request::get('website');	
	    }
    	$update = Organization::where('id',$id)->update($org);

    	return redirect('/');
    }

    public function destroy($id)
    {
    	$find = Organization::find($id);
    	if($find){
    		$find->delete();
    	}

    	return redirect('/');
    }
}
