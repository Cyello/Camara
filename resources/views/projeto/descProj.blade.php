@extends('layout.principal')

@section('conteudo')
	<h1>Descrição</h1>

	@foreach ($desc as $d)
		<h2>{{$d->nome}}</h2>
	@endforeach

	<p>
		
	</p>


@stop