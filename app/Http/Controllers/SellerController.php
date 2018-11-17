<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=\App\User::where('iscustomer',1)->get();
        return view('sellers.sellers',compact('users'));
    }
    

    public function pending()
    {
        $users=\App\User::where('iscustomer',1)->get();
        return view('sellers.pending',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sellers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('sellers/create')->with('success', 'Seller has been created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id==19){
            return view('sellers.show');
        }else{
            return view('sellers.showpending');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sellers.edit',compact('id'));
    }

    //For Reset Password
    public function resetPassword($id)
    {
        return view('sellers.resetpassword',compact('id'));
    }
    //For Deactivate
    public function deactivate($id)
    {
        return redirect()->action(
            'SellerController@index'
        )->with('success', 'Seller status has been deactivated.');
    }
    //For Active
    public function active($id)
    {
        return redirect()->action(
            'SellerController@index'
        )->with('success', 'Seller status has been active.');
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
        
        if($request->get('changepassword')){
        //Change Password
            return redirect()->back()->with('success', "Your Password has been changed.");
        }elseif($request->get('resetpassword')){
            return redirect()->action(
                'SellerController@resetPassword', ['id' => $id]
            )->with('success', 'Password has been reset.');
        }else{
        //Update Staff/User details
            $message='Customer details has been updated';
            return redirect()->back()->with('success', $message);

            
        }

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
            'SellerController@index' 
        )->with('success', 'Seller has been deleted.');
    }
}
