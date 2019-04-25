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
            <th>Adult</th>
            <th>Child</th>
            <th>Econ Fare</th>
            <th>Busin Fare</th>
            <th>User</th>
            <th>Action </th>
          </tr>
        </thead>
        <tbody>
            @php $sl=1; @endphp
          @foreach($flightSearches as $flightSearch)
          <tr>
            <td>{{$sl++}}</td>
            <td>{{$flightSearch->fNo}}</td>
            <td>{{$flightSearch->from_city}}</td>
            <td>{{$flightSearch->to_city}}</td>
            <td>{{$flightSearch->departure_date}}</td>
            <td>{{$flightSearch->arrival_date}}</td>
            <td>{{$flightSearch->adult}}</td>
            <td>{{$flightSearch->child}}</td>
            <td>${{$flightSearch->e_fare}}</td>
            <td>${{$flightSearch->b_fare}}</td>
            <td>{{$flightSearch->user_id}}</td>
            <td>
              <div class="button-inline">
              @can('edit')
              <a href="{{route('FlightSearch.edit',$flightSearch->id)}}"> <button class="btn btn-info">Edit </button> </a>
              @endcan

              @can('view')
              <a href="{{route('FlightSearch.show',$flightSearch->id)}}"> <button class="btn btn-warning">View </button> </a>
              @endcan
            </div>

            <div class="button-inline">
              @can('delete')

              {!! Form::open(['route'=>array('FlightSearch.destroy', $flightSearch->id), 'method'=>'delete']) !!}

              {!! Form:: submit('Delete',['type'=>'button' , 'class'=>'btn btn-danger'])!!}

              {!! Form::close() !!}
              @endcan

            </div>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div> <!--end of card body-->
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> <!--end of card-->
@endsection
