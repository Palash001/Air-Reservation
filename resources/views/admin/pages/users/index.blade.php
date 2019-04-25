@extends('admin.layouts.app')

@section('main-content')

<div class="row">
      <div class="col-md-12">
          <h1 class="text-center">User List</h1>
          @can('create')
          <a href="{{route('FlightSearch.create')}}"><button class="btn btn-info"> Insert Flight Details </button> </a>
          @endcan
          @if(session()->has('msg'))
              <div class="alert alert-danger text-center">
                  {{session('msg')}}
              </div>
          @endif
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Location</th>
                      <th>Registered at</th>
                      <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                  @php $sl=1 @endphp
                  @foreach($users as $user)
                      <tr>
                          <td>{{$sl++}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->flightUser->phone}}</td>
                          <td>{{$user->flightUser->address}}</td>
                          <td>{{$user->created_at}}</td>
                          <td>

                                  <a href="{{route('user.show',$user->id)}}"><button class="btn btn-info">Profile</button></a>


                                  <a href="{{route('category.edit',$user->id)}}"><button class="btn btn-warning">Edit</button></a>


                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>


  </div>





























===========================
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
    All Users
  </div><!--end of card header-->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php $sl=1; @endphp
          @foreach($users as $user)
          <tr>
            <td>{{$sl++}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>

              <div class="button_inline">
              @can('edit')
              <a href="{{route('users.edit',$user->id)}}"> <button class="btn btn-info">Edit </button> </a>
              @endcan

              @can('view')
              <a href="{{route('users.show',$user->id)}}"> <button class="btn btn-warning">View </button> </a>
              @endcan
              </div>

              <div class="button-inline">

              @can('delete')

              {!! Form::open(['route'=>array('users.destroy', $user->id), 'method'=>'delete']) !!}

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
