@extends('_master')

@section('title')
	Generate some fake content and data!

@stop

@section('head')

@stop

@section('content')
	{{ Form::open(array('url' => '/loremipsum')) }}
		{{ Form::label('users', 'How many fake users do you want for your website?') }}
		{{ Form::select('users', array(
				 1 => 'One',
				 2 => 'Two',
				 3 => 'Three',
				 4 => 'Four',
				 5 => 'Five',
		), 1) }}
	{{ Form::close() }}	
@stop