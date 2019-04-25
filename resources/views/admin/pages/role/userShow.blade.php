@extends('admin.layouts.app')

@section('main-content')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>

</ol>

<!-- Icon Cards-->


<!-- Area Chart Example-->

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    User List
  </div><!--end of card header-->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>

            <th> Name</th>
            <th> Email</th>
            <th> Role</th>

          </tr>
        </thead>
        <tbody>

          <tr>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$assignedRole}}</td>
          </tr>

        </tbody>
      </table>
      <br>

      {!!Form::open(['class'=>'form-inline','method'=>'post','route'=>'role.assign'])!!}

      {!!Form::select('role',$roles, 1,['class'=>'form-control']) !!}

      {!!Form::hidden('user_id',$user->id) !!}

      {!!Form::submit('Assign',['type'=>'submit','class'=>'btn btn-info'])!!}

      {!!Form::close()!!}

    </div>
  </div> <!--end of card body-->
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> <!--end of card-->
@endsection
