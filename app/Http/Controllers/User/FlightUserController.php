<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\flightUser;
use App\flightSearch;
use App\BookDetails;
use Citco\Carbon;
use Session;
use Redirect;
use Validator;
use Auth;
use DB;

class FlightUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userName=Auth::user()->name;
        $userEmail =Auth::user()->email;
        $userId =Auth::user()->id;


        $fUserCheck=flightUser::where('user_id',$userId)->get();

        if(!$fUserCheck->isEmpty()){

          return redirect( route('flightUser.edit',$userId));
        }


        return view('user/pages/FlightUser/create',compact('userName','userEmail','userId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->all();

         $data['user_id']=Auth::user()->id;
         flightUser::create($data);
         $userName=Auth::user()->name;
         $userEmail=Auth::user()->email;
         $userId=Auth::user()->id;
         session()->flash('msg','FUser Details created Successfully');
         return redirect(route('flightUser.edit',$userId));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(flightUser $flightUser)
    {
        //
        $userName=Auth::user()->name;
        $userEmail =Auth::user()->email;
        $userId =Auth::user()->id;

        $fUserData=User::findOrFail($userId);
        return  view('user/pages/FlightUser/edit',compact('userName','userEmail','fUserData','userId'));

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
        //
        $userId=Auth::user()->id;
        $user=User::with('flightUser')->findOrFail($userId);

        $data =$request->except('_method','_token');

        $user->flightUser()->update($data);
        session()->flash('msg', 'FlightUser Details Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
