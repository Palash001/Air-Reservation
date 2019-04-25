@extends('admin.layouts.app')

@section('title','Flight Search details')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'"> Flight Search Details </h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['class'=>'form-group','method'=>'post','route'=>'FlightSearch.store'])!!}
        {!!Form::text('fNo',null, ['class'=>'form-control', 'placeholder'=>'Flight NO']) !!} <br>
        {!!Form::text('from_city',null, ['class'=>'form-control','placeholder'=>'From City']) !!} <br>
        {!!Form::text('to_city',null, ['class'=>'form-control', 'placeholder'=>'To City']) !!} <br>
        {{ Form::label('departure_date', 'Departure_date ', ['class' => 'control-label']) }}<br>
        {!!Form::date('departure_date',null,['class'=>'form-control','placeholder'=>'Departure Date'])!!} <br>
        {{ Form::label('arrival_date', 'Arrival Date' , ['class' => 'control-label']) }}<br>
        {!!Form::date('arrival_date',null,['class'=>'form-control','placeholder'=>'Arrival Date'])!!} <br>
        {!!Form::text('adult',null,['class'=>'form-control','placeholder'=>'Number of adults'])!!}<br/>
        {!!Form::text('child',null,['class'=>'form-control','placeholder'=>'Number of child'])!!}<br/>
        {!!Form::text('e_fare',null,['class'=>'form-control','placeholder'=>'Economy  Fare'])!!}<br/>
        {!!Form::text('b_fare',null,['class'=>'form-control','placeholder'=>'Business  Fare'])!!}<br/>
        {!!Form::submit('Add Flight',['type'=>'submit','class'=>'btn btn-success'])!!}
        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
