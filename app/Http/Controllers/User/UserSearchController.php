<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\flightSearch;
use DB;
use App\UserSearch;

class UserSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $flightSearches =flightSearch::all();

        return view('user/pages/UserSearch/index',compact('flightSearches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $flightSearches =flightSearch::all();

        return view('user/pages/UserSearch/searchedCreate',compact('flightSearches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //or
    }

    public function find(Request $request)
    {

        $path_search               =$request->input('path');
        $from_search               =$request->input('from_city');
        $to_search                 =$request->input('to_city');
        $departure_search          =$request->input('departure_date');
        $arrival_search            =$request->input('arrival_date');
        $adult_search              =$request->input('adult');
        $child_search              =$request->input('child');

       $flightUserSearch =flightSearch::where('from_city','Like','%'.$from_search.'%')->Where('to_city','Like','%'.$to_search.'%')->orwhere('departure_date','Like','%'.$departure_search.'%')->orwhere('arrival_date','Like','%'.$arrival_search.'%')->where('adult','Like','%'.$adult_search.'%')->where('child','Like','%'.$child_search.'%')->get();

      return view('user/pages/UserSearch/search',compact('flightUserSearch'));
    }

}
