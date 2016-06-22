@extends('layout.principal')

@section('conteudo')

	Lista de deputados

	
	<table class="table"> 
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>partido</th>
		</tr>
		@foreach ($vereadores as $v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->nome}}</td>
			<td>{{$v->partido}}</td>
			<td><a href="{!! route('group.show', $v->id) !!}">mais</a></td>

		</tr>
		@endforeach
	</table>

	<a class="btn btn-default" href="{!!route('group.create')!!}">Novo vereador</a>

@stop