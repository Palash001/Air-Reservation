@extends('admin.layouts.app')

@section('title','Create Permission TO User')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'"> Assign Permission To User</h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['class'=>'form-inline','method'=>'post','route'=>'role.permissionToUserStore'])!!}

        {!!Form::select('permission',$permissions,1, ['class'=>'form-control']) !!} <br>

        {!!Form::select('user',$users, 1,['class'=>'form-control']) !!} <br>

        {!!Form::submit('Assign Permission',['type'=>'submit','class'=>'btn btn-info'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
