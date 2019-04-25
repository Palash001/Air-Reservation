@extends('user.layouts.app')

@section('title','Booking details')

@section('main-content')

<div class="container">

  <div class="row">
<br>


    <h1> Payment</h1>

    <div class="col-md-offset-2 col-md-8">

      @if (session('alert'))
      <div class="alert alert-success">
          {{ session('alert') }}
      </div>
    @endif

        {!!Form::open(['class'=>'form-group','method'=>'post','route'=>'userPayment.store'])!!}

        {!! Form::hidden('account_id',$bookDetails->id, ['class'=>'form-control',  'placeholder'=>'passsenger_id' ]) !!} <br>

        {{ Form::label('AccountHolder', 'Account Holder Name', ['class' => 'control-label']) }}<br>

        {!! Form::text('c_name',$bookDetails->name, ['class'=>'form-control',  'readonly' ]) !!} <br>

        {{ Form::label('card_no', 'Card Number', ['class' => 'control-label']) }}<br>

        {!! Form::text('card_no',null, ['class'=>'form-control' ]) !!} <br>

        {{ Form::label('bank_name', 'Bank Name', ['class' => 'control-label']) }}<br>

        {!! Form::text('bank_name',null, ['class'=>'form-control' ]) !!} <br>

        {!!Form::button('Confirm',['type'=>'submit','class'=>'btn btn-success'])!!}

        {!!Form::close()!!}

    </div>

  </div>

</div>


@endsection
