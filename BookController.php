<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\flightSearch;
use DB;

class BookController extends Controller
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
        $flightSearches =flightSearch::all();

        return view('user/pages/Book/searchedCreate',compact('flightSearches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $path             =$request->input('path');
        $from             =$request->input('from_city');
        $to               =$request->input('to_city');
        $departure_date   =$request->input('departure_date');
        $arrival_data     =$request->input('arrival_date');
        $class_type       =$request->input('class_type');



        if($from==$to)
        {
          return redirect('user/pages/Book/searchedCreate',compact('flightSearches'));
        }else{

          if($path=="Oneway"){

                $econo1          =DB::table('flight_searches')->select('id','e_fare')->get();
                if($class_type=="economy")
                {

                    $adult1          =$request->input('adult');
                    $children1       =$request->input('children');
                    $econo1          =DB::table('flight_searches')->select('id','e_fare')->get();
                    // $econo1          =$request->input('e_fare');
                    $total_fare      =$adult1*$children1*$econo1;
                    $book_info       = book::create(['total_fare'=>$total_fare,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date]);
                    return view('user/pages/Book/bookDetails',compact('book_info'));

                }elseif($class_type=="business"){

                  $adult2          =$request->input('adult');
                  $children2       =$request->input('children');
                  $busin2          =DB::table('flight_searches')->select('id','b_fare')->get();
                  // $busin2          =$request->input('b_fare');
                  $total_fare      = $adult2*$children2*$busin2;
                  $book_info    = book::create(['total_fare'=>$total_fare,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date]);
                  return view('user/pages/Book/bookDetails',compact('book_info'));

                }else{

                    return Redirect::back();

                }

              }


              else if($path=="return"){


                if($class_type=="economy"){

                  $adult3           =$request->input('adult');
                  $children3        =$request->input('children');
                  $econo3           =DB::table('flight_searches')->select('id','e_fare')->get();
                  // $econo3 =$request->input('e_fare');
                  $total_fare       = $adult3*$children3*$econo3;
                  $book_info        =book::create(['total_fare'=>$total_fare,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date]);
                  return view('user/pages/Book/bookDetails',compact('book_info'));

                }elseif($class_type=="business"){

                  $adult4            =$request->input('adult');
                  $children4         =$request->input('children');
                  $busin4            =DB::table('flight_searches')->select('id','b_fare')->get();
                  // $busin4            =$request->input('b_fare');
                  $total_fare        =$adult4*$children4*$busin4;
                  $book_info         =book::create(['total_fare'=>$total_fare,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date]);
                  return view('user/pages/Book/bookDetails',compact('book_info'));

                }else{

                      return Redirect::back();
                }


          }


        }

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
        //
    }
}
