@extends('admin.layouts.app')

@section('main-content')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>

</ol>
@can('create')
<a href="{{route('FlightSearch.create')}}"><button class="btn btn-info"> Insert Flight Details </button> </a>
@endcan

<!-- Icon Cards-->

<!-- Area Chart Example-->

<!-- DataTables Example -->
<br>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Flight Details go Here
  </div><!--end of card header-->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Flight No</th>
            <th>From City</th>
            <th>To City</th>
            <th>Departure Date</th>
            <th>Arrival Date</th>
            <th>Class Type</th>
            <th>Econ Fare</th>
            <th>Busin Fare</th>
            <th>User</th>

          </tr>
        </thead>
        <tbody>
            @php $sl=1; @endphp

          <tr>
            <td>{{$sl++}}</td>
            <td>{{$flightSearches->fNo}}</td>
            <td>{{$flightSearches->from_city}}</td>
            <td>{{$flightSearches->to_city}}</td>
            <td>{{$flightSearches->departure_date}}</td>
            <td>{{$flightSearches->arrival_date}}</td>
            <td>{{$flightSearches->class_type}}</td>
            <td>${{$flightSearches->e_fare}}</td>
            <td>${{$flightSearches->b_fare}}</td>
            <td>{{$flightSearches->user_id}}</td>

          </tr>

        </tbody>
      </table>
    </div>
  </div> <!--end of card body-->
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> <!--end of card-->
@endsection
