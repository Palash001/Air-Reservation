@extends('admin.layouts.app')

@section('title','Flight Booking details')

@section('main-content')


  <div class="row">

    <div class="col-lg-8">

      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
        {{session('msg')}}
      </div>
      @endif

      <table class="table table-bordered table-striped">

        <thead>
          <tr>

          <th> Sl </th>
          <th>Name</th>
          <th>Email</th>
          <th>Child</th>
          <th>Adult</th>
          <th>Class Type</th>
          <th>Passenger Pin Code</th>
          <th>Card Number</th>
          <th>Bank Name </th>
          <th>Total Fare</th>
          <th>Action </th>

        </tr>

        </thead>

        <tbody>

          @php $sl=1; @endphp

          @foreach($books as $book)
          <tr>
            <td>{{$sl++}} </td>
            <td>{{$book->name}} </td>
            <td>{{$book->email}} </td>
            <td>{{$book->child}} </td>
            <td>{{$book->adult}} </td>
            <td>{{$book->class_type}} </td>
            <td>{{$book->pin_no}} </td>

              <td> </td>
              <td> </td>
            <td>${{$book->total_fare}} </td>

            <td>

            <a href="{{route('userBook.show',$book->id)}}"><button class="btn btn-info">Details</button></a>
            <!-- <a href="{{route('userBook.edit',$book->id)}}"><button class="btn btn-warning">Edit</button></a> -->

            </td>

          </tr>

          @endforeach



            <!-- @foreach($cards as $card)
                <td>  {{$card->card_no}}  </td>
                <td>  {{$card->bank_name}}  </td>
            @endforeach -->

        </tobdy>


      </table>

    </div>

  </div>




@endsection
