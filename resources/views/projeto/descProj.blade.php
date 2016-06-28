@extends('layout.principal')

@section('conteudo')

	@foreach ($desc as $d)
		<h2>{{$d->nome}}</h2>
		<p>{{$d->desc}}</p>
		
		Criador: {{$d->criador}}
	@endforeach

	<p>
		
	</p>


@stop