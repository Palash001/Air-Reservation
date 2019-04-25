@extends('admin.layouts.app')

@section('title','Flight Booking details')

@section('main-content')

<div class="container">

  <div class="row">
<br>


    <h1> Create Flight Booking Details </h1>

    <div class="col-md-offset-2 col-md-8">

      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
        {{session('msg')}}
      </div>
      @endif

        {!!Form::open(['class'=>'form-group','method'=>'post','route'=>'FlightBook.store'])!!}

        {!! Form::hidden('passenger_id',$user->id, ['class'=>'form-control',  'placeholder'=>'passsenger_id' ]) !!} <br>

        {!! Form::text('name',$user->name, ['class'=>'form-control',  'readonly' ]) !!} <br>

        {!! Form::email('email',$user->email, ['class'=>'form-control', 'readonly' ]) !!} <br>

        {{ Form::label('From City', 'Selected Departure City', ['class' => 'control-label']) }}<br>

        {!! Form::text('from_city',$flightSearch->from_city, ['class'=>'form-control','readonly' ]) !!} <br>

        {{ Form::label('To City', 'Selected Destination City', ['class' => 'control-label']) }}<br>

        {!! Form::text('to_city',$flightSearch->to_city, ['class'=>'form-control', 'readonly' ]) !!} <br>

        {{ Form::label('childs', 'Number Of Child', ['class' => 'control-label']) }}<br>

        {!! Form::text('child',$flightSearch->child, ['class'=>'form-control','readonly']) !!} <br>

        {{ Form::label('adults', 'Number Of Adults', ['class' => 'control-label']) }}<br>

        {!! Form::text('adult',$flightSearch->adult, ['class'=>'form-control','readonly']) !!} <br>



        {{ Form::label('economy fare', 'Economy Fare', ['class' => 'control-label']) }}<br>

        {!! Form::text('e_fare',$flightSearch->e_fare, ['class'=>'form-control','readonly']) !!} <br>

        {{ Form::label('business fare', 'Business Fare', ['class' => 'control-label']) }}<br>

        {!! Form::text('b_fare',$flightSearch->b_fare, ['class'=>'form-control','readonly']) !!} <br>



        {{ Form::label('class_type', 'Select Class ', ['class' => 'control-label']) }}<br>

        {!! Form::select('class_type', array('economy' => 'economy', 'business' => 'business'), null, array('class'=>'form-control' ))!!} <br>

        {{ Form::label('phone', 'Phone', ['class' => 'control-label']) }}<br>

        {!! Form::text('phone',$flightUser->phone, ['class'=>'form-control', 'readonly']) !!} <br>

        {{ Form::label('address', 'Address', ['class' => 'control-label']) }}<br>
        {!! Form::textarea('address',$flightUser->address, ['class'=>'form-control', 'readonly']) !!}<br>

        {{ Form::label('pin_no', 'Pin Code', ['class' => 'control-label']) }}<br>

        {!! Form::text('pin_no',null, ['class'=>'form-control']) !!} <br>

        {!!Form::button('ProceedToPay',['type'=>'submit','class'=>'btn btn-success'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>



@endsection
