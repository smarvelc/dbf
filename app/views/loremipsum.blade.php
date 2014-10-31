@extends('_master')

@section('title')
	Generate some fake content and data!

@stop

@section('head')

@stop

@section('content')
	{{ Form::open(array('url' => '/loremipsum')) }}
		{{ Form::label('paragraphs', 'How many paragraphs of fake content do you want?') }}
		
		{{ Form::select('paragraphs', array(
				 1 => 'One',
				 2 => 'Two',
				 3 => 'Three',
				 4 => 'Four',
				 5 => 'Five',
		), 1) }}

		{{ Form::submit('Make me some text!'); }}


	{{ Form::close() }}	

	<br>

	@if (isset($paragraphnum))
		{{ $create }}
	@endif	


@stop