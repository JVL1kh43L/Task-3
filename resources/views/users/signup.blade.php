@extends('layouts.application')

@section('content')

	{!! Form::open(['route'=>'signup.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		<div class="form-group">
			{!! Form::label('first_name', 'First Name', ['class'=>'col-lg-3 control-label']) !!}
			<div class="col-lg-4">
				{!! Form::text('first_name', null, ['class'=>'form-control']) !!}
				<div class="text-danger">
					{!! $errors->first('first_name') !!}
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Last Name', ['class'=>'col-lg-3 control-label']) !!}
				<div class="col-lg-4">
					{!! Form::text('last_name', null, ['class'=>'form-control']) !!}
					<div class='text-danger'>{!! $errors->first('last_name') !!}</div>
				</div>
				<div class='clear'></div>
		</div>

		<div class="form-group">
			{!! Form::label('email','Email', ['class'=>'col-lg-3 control-label']) !!}
				<div class="col-lg-4">
					{!! Form::text('email', null, ['class'=>'form-control']) !!}
					<div class="text-danger">{!! $errors->first('email') !!}</div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password', ['class'=>'col-lg-3 control-label']) !!}
				<div class="col-lg-4">
					{!! Form::password('password', ['class'=>'form-control']) !!}
					<div class="text-danger">{!! $errors->first('password') !!}</div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Password Confirm', ['class'=>'col-lg-3 control-label']) !!}
			<div class="col-lg-4">
				{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
			</div>
			<div class="clear"></div>
		</div>

		<div class="form-group">
			<div class="col-lg-3"></div>
			<div class="col-lg-4">
				{!! Form::submit('Signup', ['class'=>'btn-raised btn-primary']) !!}
			</div>
			<div class="clear"></div>
		</div>

	{!! Form::close() !!}	

@stop
