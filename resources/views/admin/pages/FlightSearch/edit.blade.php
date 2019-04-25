@extends('admin.layouts.app')

@section('title','Flight Search details')

@section('main-content')

<div class="container">

      <h1 style="color:orange;'font-family: verdana'"> Flight Search Details </h1>
      <br>
   <div class="row">

    <div class="col-md-offset-2 col-md-8">

        {!!Form::open(['route'=>array('FlightSearch.update',$flightSearches->id),'class'=>'form-group','method'=>'put'])!!}
        {!!Form::text('fNo',$flightSearches->fNo, ['class'=>'form-control', 'placeholder'=>'Flight NO']) !!} <br>
        {!!Form::text('from_city',$flightSearches->from_city, ['class'=>'form-control','placeholder'=>'From City']) !!} <br>
        {!!Form::text('to_city',$flightSearches->to_city, ['class'=>'form-control', 'placeholder'=>'To City']) !!} <br>
        {{ Form::label('departure_date', 'Departure_date ', ['class' => 'control-label']) }}<br>
        {!!Form::date('departure_date',$flightSearches->departure_date,['class'=>'form-control','placeholder'=>'Departure Date'])!!} <br>
        {{ Form::label('arrival_date', 'Arrival Date' , ['class' => 'control-label']) }}<br>
        {!!Form::date('arrival_date',$flightSearches->arrival_date,['class'=>'form-control','placeholder'=>'Arrival Date'])!!} <br>
        {!!Form::text('adult',$flightSearches->adult,['class'=>'form-control','placeholder'=>'Number of adult'])!!}<br/>
        {!!Form::text('child',$flightSearches->child,['class'=>'form-control','placeholder'=>'Number of Children'])!!}<br/>
        {!!Form::text('e_fare',$flightSearches->e_fare,['class'=>'form-control','placeholder'=>'Economy  Fare'])!!}<br/>
        {!!Form::text('b_fare',$flightSearches->b_fare,['class'=>'form-control','placeholder'=>'Business  Fare'])!!}<br/>
        {!!Form::submit('Update Flight',['type'=>'submit','class'=>'btn btn-success'])!!}
        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
