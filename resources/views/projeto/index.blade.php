@extends('layout.principal')

@section('conteudo')

	Lista de deputados

	
	<table class="table"> 
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>idade</th>
			<th>partido</th>
		</tr>
		@foreach ($vereadores as $v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->nome}}</td>
			<td>{{$v->idade}}</td>
			<td>{{$v->partido}}</td>
		</tr>
		@endforeach
	</table>

@stop