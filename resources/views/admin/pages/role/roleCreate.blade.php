@extends('admin.layouts.app')

@section('title','Create Role')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'"> Create Role </h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['class'=>'form-group','method'=>'post','route'=>'role.store'])!!}

        {!!Form::text('role',null, ['class'=>'form-control', 'placeholder'=>'Insert Role']) !!} <br>

        {!!Form::submit('Create',['type'=>'submit','class'=>'btn btn-info'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
