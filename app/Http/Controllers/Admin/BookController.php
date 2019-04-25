<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\flightUser;
use App\flightSearch;
use App\bookDetail;
use App\cardDetail;
use Redirect;

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
        $books= bookDetail::orderBy('created_at','desc')->get();
        $cards =cardDetail::orderBy('created_at','desc')->get();
       return view('admin/pages/PassengerDetails/index', compact('books','cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        // $userName=Auth::user()->name;
        // $userEmail =Auth::user()->email;
        // $userId =Auth::user()->id;


        // $fUserCheck=flightUser::where('user_id',$userId)->get();
        //
        //
        // $product= Product::with('colors')->findOrFail($id);
        // $user= Auth::user();
        // $profile= Profile::findOrFail($user->id);
        //
        //
        //    return view('BackEnd/order/create', compact('product','user','profile'));

        $flightSearch =flightSearch::where('id',$id)->first();
        $user=Auth::user();
        $flightUser =flightUser::findOrFail($user->id);

        return view('admin/pages/Booking/create',compact('user','flightUser','flightSearch'));
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
        $data =$request->all();

        $class_type=$request->input('class_type');
        $e_fare =$request->input('e_fare');
        $b_fare =$request->input('b_fare');
        $child =$request->input('child');
        $adult=$request->input('adult');

        $book_no =bookDetail::orderBy('created_at','desc')->first();
        $book_no=$book_no->id+1;
        $data['b_no']='Air-00'.$book_no;
        $data['status'] ="Processing";

        $data['pin_no'] =rand(0,999).$request->input('pin_no');


        if($class_type=="economy")

          {
            $total_person =$data['adult']+$data['child'];

            $total_fare =$total_person* $e_fare;

          }

          elseif($class_type=="business")

            {

              $total_person =$data['adult']+$data['child'];

              $total_fare =$total_person *$b_fare;


          }

          else{

              return redirect('user/pages/FlightUser/create');
          }


        $data['total_fare']  =$total_fare;


        bookDetail::create($data);

        return Redirect::back();

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
