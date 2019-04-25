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
    Role List
  </div><!--end of card header-->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Role Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php $sl=1; @endphp
          @foreach($roles as $role)
          <tr>
            <td>{{$sl++}}</td>
            <td>{{$role->name}}</td>
            <td>
              <a href="#"> <button class="btn btn-info">Edit </button> </a>
              <a href="#"> <button class="btn btn-warning">View </button> </a>
              <a href="#"> <button class="btn btn-danger">Delete </button> </a>
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
