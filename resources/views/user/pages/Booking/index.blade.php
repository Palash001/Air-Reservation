@extends('user.layouts.app')

@section('title','Passenger details')

@section('main-content')

<div class="container">

  <div class="row">
<br>


    <h1> Your Flight Details </h1>

    <div class="col-md-offset-2 col-md-8">

      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
        {{session('msg')}}
      </div>
      @endif

      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>

          <th>Sl</th>
          <th>Name</th>
          <th>Email</th>
          <th> Child</th>
          <th>Adult</th>
          <th>Class Type</th>
          <th>Total Fare</th>
          <th> Action </th>

        </tr>

        </thead>

        <tbody>

          @php $sl=1 @endphp

          <tr>
            <td>{{$sl++}} </td>
            <td>{{$book_order->name}} </td>
            <td>{{$book_order->email}} </td>
            <td>{{$book_order->child}} </td>
            <td>{{$book_order->adult}} </td>
            <td>{{$book_order->class_type}} </td>
            <td>${{$book_order->total_fare}} </td>

            <td>

            <a href="{{route('userPayment.create',$book_order->id)}}"><button class="btn btn-info">Pay Now</button></a>

            </td>

          </tr>



        </tobdy>


      </table>

    </div>

  </div>

</div>


@endsection
