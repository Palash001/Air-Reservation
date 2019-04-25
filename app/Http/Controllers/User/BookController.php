<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\flightUser;
use App\flightSearch;
use App\bookDetail;
use App\User;
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
       return view('user/pages/Booking/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $flightSearch =flightSearch::where('id',$id)->first();

        $user=Auth::user();

        $flightUser =flightUser::where('user_id',$user->id)->first();


        return view('user/pages/Booking/create',compact('user','flightUser','flightSearch'));


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


        if($book_no){
             $book_no=$book_no->id+1;;
       }else{
          $book_no= 1;
       }

        $data['b_no']='Air-00'.$book_no;
        $data['status'] ="Processing";
        $data['book_lot']='active';
        // $data['pin_no'] =rand(0,999).$request->input('pin_no');


        if($data['class_type']=="economy")

          {
            $total_person =$data['adult']+$data['child'];

            $total_fare =$total_person* $e_fare;

          }

          elseif($data['class_type']=="business")

            {

              $total_person =$data['adult']+$data['child'];

              $total_fare =$total_person *$b_fare;


          }

          else{

              return redirect('user/pages/Booking/create');
          }


        $data['total_fare']  =$total_fare;


        $bookOrder =bookDetail::create($data);

        $bookId =$bookOrder->id;

        $book_order=bookDetail::findOrFail($bookId);


        // return redirect()->route('userBook.index');
        //
        // return redirect()->route('userPatment.create');

        return view('user/pages/Booking/index',compact('book_order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(bookDetail $bookDetail)
    {
        //
        return view('user/pages/Booking/show', compact('bookDetail'));
    }

    public function bookByUser()

    {

      $bookDetails =bookDetail::where('passenger_id',Auth::user()->id)->where('book_lot','active')->get();

      $total_person=0;
      $total_fare=0;
      $child=0;
      $adult=0;


        foreach($bookDetails as $bookDetail){

          if($bookDetail->class_type=="economy")
          {
            $child +=$bookDetail->child;
            $adult +=$bookDetail->adult;
            $total_person +=$adult+$child;
            $total_fare +=$total_person*$bookDetail->e_fare;
          }
          elseif($bookDetail->class_type=="business"){

            $child +=$bookDetail->child;
            $adult +=$bookDetail->adult;
            $total_person +=$adult+$child;
            $total_fare +=$total_person*$bookDetail->b_fare;

          }else{

            return redirect('user/pages/Booking/show');
          }

        }

      return view('user/pages/Booking/bookByUser',compact('bookDetails','child','adult','total_fare'));

    }

    public function bookComplete()

    {
      $books =bookDetail::where('book_lot','active')->where('passenger_id',Auth::user()->id)->get();

      foreach($books as $book)
      {
        $data['book_lot']=1;
        $book->update($data);
      }

      return Redirect::back();
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
      //  DB::table('bookDetails')->where('id',$id)->get();
        $res=bookDetail::where('id',$id)->delete();
        return Redirect::back();
    }
}
