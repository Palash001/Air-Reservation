@extends('admin.layouts.app')

@section('main-content')

<div class="row">
  <div class="col-md-6 offset-3">

      @if(session()->has('msg'))
          <div class="alert alert-danger text-center">
              {{session('msg')}}
          </div>
      @endif

          <h1 class="text-center">{{$user->name}} Details</h1>
      <hr>


  <table>
      <tr>
          <th>Name</th>
          <td> : {{$user->name}}</td>
      </tr>
      <tr>
          <th>Email</th>
          <td> : {{$user->email}}</td>
      </tr>
      <tr>
          <th>Registered At</th>
          <td> : {{$user->created_at->toDayDateTimeString()}}</td>
      </tr>

      <tr>
          <th>User Profile Created At</th>
          <td> : {{$user->flightUser->created_at->toDayDateTimeString()}}</td>
      </tr>

      <tr>
          <th>Profile Updated At</th>
          <td> : @php
              if($user->flightUser->created_at == $user->flightUser->updated_at
              ){
              $profile_update= "Profile Not Updated Yet";
              }
              else{
              $profile_update=$user->flightUser->updated_at->toDayDateTimeString();
              }
                      @endphp

              {{$profile_update}}</td>
      </tr>
      <tr>
          <th>Phone Number</th>
          <td> : {{$user->flightUser->phone}}</td>
      </tr>
      <tr>
          <th>Address</th>
          <td> : {{$user->flightUser->address}}</td>
      </tr>
      <tr>
          <th>Passport No</th>
          <td> : {{$user->flightUser->passport_no}}</td>
      </tr>
      <tr>
          <th>Visa No</th>
          <td> : {{$user->flightUser->visa_no}}</td>
      </tr>

      <tr>
          <th>Date of Birth</th>
          <td> : {{$user->flightUser->dob}}</td>
      </tr>

      <tr>
          <th>Gender</th>
          <td> : {{$user->flightUser->gender}}</td>
      </tr>

      <tr>
          <th>Booking List</th>
          <td> : (empty)</td>
      </tr>



  </table>
      <br>
      <a href="{{route('user.index')}}"><button class="btn btn-warning">Back</button></a>
      <br><br>

  </div>


</div>
{{--{{ $categories->links() }}--}}






















=============================================================================

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
   User Details
  </div><!--end of card header-->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
            @php $sl=1; @endphp
          <tr>
            <td>{{$sl++}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div> <!--end of card body-->
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> <!--end of card-->
@endsection
