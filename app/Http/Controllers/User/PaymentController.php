<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\bookDetail;
use App\cardDetail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books= bookDetail::orderBy('created_at','desc')->first();
        $cards =cardDetail::orderBy('created_at','desc')->first();
       return view('admin/pages/PassengerDetails/index', compact('books','cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $bookDetails=bookDetail::where('id',$id)->first();

        return view('user/pages/Payment/create',compact('bookDetails'));
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

        $data['pin_no'] =$request->account_id.rand(0,999);

        $cardNumber=cardDetail::create($data);

        $cardId =$cardNumber->id;

        $card_number =cardDetail::findOrFail($cardId);

        // return redirect()->back()->with('alert', 'Booked!');
        //
        return view('user/pages/Payment/index',compact('card_number'));

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
