<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\flightSearch;
use Spatie\Permission\Models\Role;
use Validator;
use Redirect;
use Session;
use Auth;

class FlightSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $flightSearches =flightSearch::all();
        return view('admin.pages.FlightSearch.index',compact('flightSearches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.FlightSearch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate =Validator::make($request->all(),[

          'fNo'                        =>'required',
          'from_city'                  =>'required',
          'to_city'                    =>'required',
          'departure_date'             =>'required',
          'arrival_date'               =>'required',
          'adult'                      =>'required',
          'child'                      =>'required',
          'e_fare'                     =>'required',
          'b_fare'                     =>'required',


        ]);

        if($validate->fails())
        {

          return redirect(route('FlightSearch.create'))
                ->withErrors($validate)
                ->withInput();

        }else{

            $flightSearch                              =new FlightSearch;
            $flightSearch->fNo                         =$request->fNo;
            $flightSearch->from_city                   =$request->from_city;
            $flightSearch->to_city                     =$request->to_city;
            $flightSearch->departure_date              =$request->departure_date;
            $flightSearch->arrival_date                =$request->arrival_date;
            $flightSearch->adult                       =$request->adult;
            $flightSearch->child                       =$request->child;
            $flightSearch->e_fare                      =$request->e_fare;
            $flightSearch->b_fare                      =$request->b_fare;
            $flightSearch['user_id']                   =Auth::user()->id;
            $flightSearch->save();

            Session::flash('messsage','Inserted Successfully');
            return redirect(route('FlightSearch.index'));

        }
        //
        // $data=$request->all();
        // $data['user_id'] =Auth::user()->id;
        // flightSearch::create($data);
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
        $flightSearches= flightSearch::FindOrFail($id);
        return view('admin/pages/FlightSearch/show', compact('flightSearches'));
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
        $flightSearches= flightSearch::findOrFail($id);
        return view('admin/pages/FlightSearch/edit', compact('flightSearches'));
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
        $flightSearches = flightSearch::findOrFail($id);
        $flightSearches->update($request->all());
        return redirect(route('FlightSearch.index'));

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
        flightSearch::destroy($id);
        return redirect(route('FlightSearch.index'));

    }
}
