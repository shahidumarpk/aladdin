<?php

namespace App\Http\Controllers;

use App\Lead;
use DB;
use Auth;
use Validator;
use Hash;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = \App\Lead::with('user')->with('createdby')->get();
		return view('leads.leads', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required',
			'businessName' => 'required',
			'businessNature' => 'required',
			'description' => 'required' 
        ]);
		//Customer Creation 
        $user= new \App\User;
        $user->fname=$request->get('fname');
        $user->lname=$request->get('lname');
        $user->email=$request->get('email');
        $user->phonenumber=$request->get('phonenumber');
        $user->status = 1;		
		$user->password=Hash::make(str_random(6));
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $user->created_at = strtotime($format);
        $user->updated_at = strtotime($format);
		$user->iscustomer = 1;
		$user->save();
		//Getting last inserted user id to be used in LEADS
		$last_user_id = $user->id;
		
		//Lead Insertion
		$lead= new \App\Lead;
        $lead->businessName=$request->get('businessName');
        $lead->businessNature=$request->get('businessNature');
        $lead->description=$request->get('description');
        $lead->company_pro=($request->get('company_pro')) ? 1: 0;
        $lead->testimonials=($request->get('testimonials')) ? 1: 0;
        $lead->solser=($request->get('solser')) ? 1: 0;
        $lead->fblink=$request->get('fblink');
        $lead->fblike=$request->get('fblike');
        $lead->twlink=$request->get('twlink');
        $lead->twfollwer=$request->get('twfollwer');
        $lead->inlink=$request->get('inlink');
        $lead->incfollower=$request->get('incfollower');
        $lead->lilink=$request->get('lilink');
        $lead->livisitor=$request->get('livisitor');
        $lead->weblink=$request->get('weblink');
        $lead->user_id=$last_user_id;
        $lead->created_by=auth()->user()->id;
		$date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $lead->created_at = strtotime($format);
        $lead->updated_at = strtotime($format);
        $lead->save();
        $id = $lead->id;
        return redirect('leads/'.$id)->with('success', 'Lead has been created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lead_detail = \App\Lead::with('user')->with('createdby')->where('id',$id)->first();
        $recordings = \App\Recording::where('lead_id',$id)->orderBy('id', 'DESC')->limit(5)->get();
		return view('leads.show', compact('lead_detail','recordings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = \App\Lead::with('user')->with('createdby')->where('id',$id)->first();
		return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
			'businessName' => 'required',
			'businessNature' => 'required',
			'description' => 'required' 
        ]);
		

		$lead= \App\Lead::find($id);
        $lead->businessName=$request->get('businessName');
        $lead->businessNature=$request->get('businessNature');
        $lead->description=$request->get('description');
        $lead->company_pro=($request->get('company_pro')) ? 1: 0;
        $lead->testimonials=($request->get('testimonials')) ? 1: 0;
        $lead->solser=($request->get('solser')) ? 1: 0;
        $lead->fblink=$request->get('fblink');
        $lead->fblike=$request->get('fblike');
        $lead->twlink=$request->get('twlink');
        $lead->twfollwer=$request->get('twfollwer');
        $lead->inlink=$request->get('inlink');
        $lead->incfollower=$request->get('incfollower');
        $lead->lilink=$request->get('lilink');
        $lead->livisitor=$request->get('livisitor');
        $lead->weblink=$request->get('weblink');
		$date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $lead->created_at = strtotime($format);
        $lead->updated_at = strtotime($format);
		$lead->save();
        return redirect('leads/'.$id)->with('success', 'Lead has been created Successfully.');
        
    }
    //For Deactivate
    public function deactivate($id)
    {
        $lead= \App\Lead::find($id);
        $lead->status=2;
        $date=now();
        $format = date_format($date,"Y-m-d");
        $lead->updated_at = strtotime($format);
        $lead->save();
        return redirect()->action(
            'LeadController@index'
        )->with('success', 'Navigation Role status has been deactivated');
    }
    //For Active
    public function active($id)
    {
        $lead=\App\Lead::find($id);         
        $lead->status=1;
        $date=now();
        $format = date_format($date,"Y-m-d");
        $lead->updated_at = strtotime($format);
        $lead->save();
        return redirect()->action(
            'LeadController@index'
        )->with('success', 'Navigation Role has been active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $lead = \App\Lead::find($id);
            $lead->delete();
            return redirect()->action(
                'LeadController@index' 
            )->with('success', 'Lead has been deleted.');
        } catch(\Illuminate\Database\QueryException $ex){ 
            return redirect()->action(
                'LeadController@index' 
            )->with('failed', 'Unable to delete, this LEAD has linked record(s) in system.');
        }

    }


    public function createrecording($lead_id){     
        $lead = \App\Lead::with('user')->with('createdby')->where('id',$lead_id)->first();
        return view('recordings.create',compact('lead','lead_id'));
    }

    public function storerecording(Request $request){
        $this->validate(request(), [
            'title' => 'required',
            'lead_id' => 'required',
            'recording_file' => ['mimes:mpga,wav']
        ]);
        if($request->hasfile('recording_file'))
         {
            $file = $request->file('recording_file');
            $recordingfile=time().$file->getClientOriginalName();
            $file->move(public_path().'/leads_assets/recordings/', $recordingfile);
         }else{
            $recordingfile="";
         }
		//Recording Uploading
		$recording= new \App\Recording;
        $recording->title=$request->get('title');
        $recording->link=$request->get('link');
        $recording->note=$request->get('note');
        $recording->recording_file=$recordingfile;
        $recording->lead_id=$request->get('lead_id');
        $recording->created_by=auth()->user()->id;
		$date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $recording->created_at = strtotime($format);
        $recording->updated_at = strtotime($format);
        $recording->save();
        $id = $request->get('lead_id');
        return redirect('leads/'.$id)->with('success', 'Recording has been uploaded Successfully.');
    }

    
}
