@extends('user.layouts.app')

@section('title','Passenger details')

@section('main-content')

<div class="container">

  <div class="row">
<br>


    <h1> Credential for Future Book </h1>

    <div class="col-md-offset-2 col-md-8">

      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
        {{session('msg')}}
      </div>
      @endif

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


          <tr>
          @php $sl=1 @endphp
          <th style="color:black;padding:20px;">Sl</th>
          <td style="color:green;padding:20px;"> {{$sl++}} </td>
         </tr>

         <tr>
         <th style="color:black;padding:20px;">Account Holder Name</th>
         <td style="color:green;padding:20px;"> {{$card_number->c_name}} </td>
        </tr>

         <tr>
         <th style="color:black;padding:20px;">Pin NO</th>
         <td style="color:green;padding:20px;"> {{$card_number->pin_no}} </td>
        </tr>


      </table>

      <a href="{{route('userBook.bookComplete')}}"> <button class="btn btn-success btn-lg">Ok  </button></a>

    </div>

  </div>

</div>


@endsection
