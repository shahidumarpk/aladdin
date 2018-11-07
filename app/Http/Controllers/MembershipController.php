<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=\App\User::where('iscustomer',1)->get();
        return view('memberships.memberships',compact('users'));
    }

    public function membershipsreports()
    {
        $users=\App\User::where('iscustomer',1)->get();
        return view('memberships.membershipsreports',compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memberships.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('memberships/create')->with('success', 'Membership has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('memberships.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('memberships.edit',compact('id'));
    }

    
    //For Deactivate
    public function deactivate($id)
    {
        return redirect()->action(
            'MembershipController@index'
        )->with('success', 'Membership status has been deactivated.');
    }
    //For Active
    public function active($id)
    {
        return redirect()->action(
            'MembershipController@index'
        )->with('success', 'Membership status has been active.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message='Membership details has been updated';
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        return redirect()->action(
            'MembershipController@index' 
        )->with('success', 'Membership has been deleted.');
    }
}
