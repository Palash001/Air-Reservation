@extends('user.layouts.app')

@section('title','Passenger details')

@section('main-content')

<div class="container">

  <div class="row">
<br>


    <h1> Create Flight User Details </h1>

    <div class="col-md-offset-2 col-md-8">

      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
        {{session('msg')}}
      </div>
      @endif

      {!!Form::open(['class'=>'form-group','method'=>'post','route'=>'flightUser.store'])!!}
    {!! Form::text('name',$userName, ['class'=>'form-control', 'disabled'=>'disabled']) !!} <br>
    {!! Form::email('email',$userEmail, ['class'=>'form-control','disabled'=>'disabled']) !!} <br>
    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'Phone']) !!} <br>
    {!!Form::text('passport_no',null,['class'=>'form-control','placeholder'=>'passport_no'])!!} <br>
    {!!Form::text('visa_no',null,['class'=>'form-control','placeholder'=>'visa_no'])!!} <br>
    {!! Form::textarea('address',null, ['class'=>'form-control', 'placeholder'=>'Present Address','rows'=>'3']) !!}<br>
    {!! Form::date('dob',null, ['class'=>'form-control', 'placeholder'=>'Dob']) !!}<br>
    {{ Form::label('gender', 'Select Gender', ['class' => 'control-label']) }}<br>
    {!! Form::radio('gender','male', true, [ 'placeholder'=>'Chose One']) !!}  Male <br>
    {!! Form::radio('gender','female', false, [ 'placeholder'=>'Chose One']) !!}  Female <br>
    {!! Form::radio('gender','others', false, [ 'placeholder'=>'Chose One']) !!}  Others <br>
    {!!Form::button('Info',['type'=>'submit','class'=>'btn btn-success'])!!}
    {!!Form::close()!!}
    </div>

  </div>

</div>


@endsection
