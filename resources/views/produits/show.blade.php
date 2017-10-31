@extends('layout')

@section('container')
		
		@foreach($html_1->find('.special_offre tr td') as $element)
			
		       {!! $element->outertext !!} <br>

		   
		@endforeach
		@foreach($html_2->find('.tableDataList_Images img') as $element)
			
		       {!! $element->outertext !!} <br>
		   
		@endforeach
@stop