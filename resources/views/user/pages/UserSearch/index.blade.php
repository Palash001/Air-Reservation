@extends('user.layouts.app')

@section('title','Search Filter page')

@section('main-content')

<div class="container">

  <div class="row">
    <div class="col-md-8 col-offset-2">
      <h3 class="text center"> Flight Search Deatils </h3>
      <table id="myTable" class="table table-bordered table-striped">
        <thead>

          <tr>
            <th>SL</th>
            <th>From</th>
            <th>To</th>
            <th>Departure Date </th>
            <th>Arrival Date </th>

            <th> Action </th>

          </tr>
        </thead>

        <tbody>
          @php $sl=1 @endphp

          @foreach($flightUserSearch as $flightUserSearched)
          <tr>
              <td> {{$sl++}} </td>
              <td> {{$flightUserSearched->from_city}}</td>
              <td> {{$flightUserSearched->to_city}} </td>
              <td> {{$flightUserSearched->departure_date}} </td>
              <td> {{$flightUserSearched->arrival_date}} </td>
              <td>

            <a href="#"><button class="btn btn-success">Book</button> </a>

              </td>
          </tr>
          @endforeach
        </tbody>

      </table> <!--end of table-->

    </div> <!--end of col-->
  </div> <!--end of row-->

</div><!--end of container-->

@endsection

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('user/css/jquery-ui.css')}}">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>

<script type="text/javascript">

$( function() {
  $( "#departure_date" ).datepicker();
});

$( function() {
  $( "#arrival_date" ).datepicker();
});

</script>

<!-- <script>

$(document).ready( function () {
  $('#myTable').DataTable({

    "processing"    :true, //for show processing bar
    "serverSide"    :true, //for process on server side
    "orderMulti"    :false,//for disable multu column orderMulti
    "dom"           : '<"top"i>rt<"bottom"lp><"clear">' ,// for hide deault global search box

    "ajax":{

        "url"           :{{route('user_search.create')}},
        "type"          :"POST",
        "dataType"      :"json"
    },

    "column"  :[

          {"data" :"from_city",             "name":"from_city",     "autoWidth":true}, //index 0
          {"data" :"to_city",               "name":"to_city",       "autoWidth":true}, //index 1
          {"data" :"departure_date",        "name":"departure_date","autoWidth":true},
          {"data" :"arrival_date"           "name":"arrival_date"  ,"autoWidth":true},
          {"data" :"class_type",            "name":"class_type",    "autoWidth":true}
    ]

  });

});

</script> -->
