@extends('_master')

@section('title')
	Generate some fake content and data!

@stop

@section('head')

@stop

@section('content')
	{{ Form::open(array('url' => '/usergenerator')) }}
		{{ Form::label('users', 'How many fake users do you want for your website?') }}
		{{ Form::select('users', array(
				 1 => 'One',
				 2 => 'Two',
				 3 => 'Three',
				 4 => 'Four',
				 5 => 'Five',
				 6 => 'Six',
				 7 => 'Seven',
				 8 => 'Eight',
				 9 => 'Nine',
				 10 => 'Ten',
		), 1) }}

		{{ Form::submit('Make me some users!'); }}

	{{ Form::close() }}
	<br>
	@if (isset($users))
		@for ($i=0; $i< count($names); $i++)
		<li>{{ $names[$i]['name'] }}</li>
		@endfor
	@endif	
@stop
