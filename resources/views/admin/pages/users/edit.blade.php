@extends('admin.layouts.app')

@section('title','Create Role')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'"> User Edit </h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['class'=>'form-group','method'=>'put','route'=>array('users.update',$user->id )])!!}

        {!!Form::text('name',$user->name, ['class'=>'form-control', 'placeholder'=>'Insert Name']) !!} <br>

        {!!Form::text('email',$user->email, ['class'=>'form-control', 'placeholder'=>'Email']) !!} <br>

        {!!Form::submit('Update',['type'=>'submit','class'=>'btn btn-info'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
