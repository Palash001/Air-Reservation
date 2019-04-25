@extends('user.layouts.app')

@section('title','Search Filter page')

@section('main-content')

<div class="container">

  <div class="row">

      <div class="col-md-12">



      </div>

  </div>

</div> <!--end of container-->

<div class="container">

  <div class="row">
    <div class="col-md-8 col-offset-2">
      <h2 class="text text-uppercase text-info">Search Result</h2> <br>
      <table id="myTable" class="table table-bordered table-striped">
        <thead>

          <tr>
            <th>SL</th>
            <th> Flight Id </th>
            <th>From</th>
            <th>To</th>
            <th>Departure Date</th>
            <th>Arrival Date</th>
            <th>Number of Adult</th>
            <th>Number of Child</th>
            <th> Economy Fare </th>
            <th> Business Fare </th>
            <th> Action </th>

          </tr>
        </thead>

        <tbody>
          @php $sl=1 @endphp

          @foreach($flightUserSearch as $flightUserSearches)
          <tr>
              <td> {{$sl++}} </td>
              <td> {{$flightUserSearches->id}}
              <td> {{$flightUserSearches->from_city}}</td>
              <td> {{$flightUserSearches->to_city}} </td>
              <td> {{$flightUserSearches->departure_date}} </td>
              <td> {{$flightUserSearches->arrival_date}} </td>
              <td> {{$flightUserSearches->adult}} </td>
              <td> {{$flightUserSearches->child}} </td>
              <td> ${{$flightUserSearches->e_fare}} </td>
              <td> ${{$flightUserSearches->b_fare}} </td>
              <td>

            <a href="{{route('userBook.create',$flightUserSearches->id)}}"><button class="btn btn-warning">Book</button> </a>

              </td>
          </tr>
          @endforeach
        </tbody>

      </table> <!--end of table-->

    </div> <!--end of col-->
  </div> <!--end of row-->

</div><!--end of container-->

@endsection
