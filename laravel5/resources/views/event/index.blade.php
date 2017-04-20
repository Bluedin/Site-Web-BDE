@extends('layout')

@section('content')

	<H1>Liste des évènements</H1>

	@foreach ($events as $event)

		<div>
			{{ $event->nom_event}}
		</div>
		<div>
			{{ $event->description_event}}
		</div>
		<?php echo'<img src="'?>{{ $event->image_event_presentation}}<?php echo'" style="width: 200px; height: 200px;">'?>
		<div>
			@if($event->exclu_club)
				<img src="image\case-check.png">
			@else
				<img src="image\case-blank.jpg">
			@endif
		</div>
	@endforeach
@stop
