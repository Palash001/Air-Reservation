@extends('admin.layouts.app')

@section('title','Permission  Assign')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'">  Permission  Assign</h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['class'=>'form-inline','method'=>'post','route'=>'permission.permissionAssignStore'])!!}

        {!!Form::select('permission',$permissions,1, ['class'=>'form-control']) !!}

        {!!Form::select('role',$roles, 1,['class'=>'form-control']) !!}

        {!!Form::submit('Assign',['type'=>'submit','class'=>'btn btn-info'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
