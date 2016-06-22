@extends('layout.principal')

@section('conteudo')

	<h2>{{$v->nome}}</h2>
	<h3>Partido: {{$v->partido}}</h3> 
	<h3>Idade: {{$v->idade}}</h3> 
	<h3>Mandatos: {{$v->mandatos}}</h3> 
	<a href="{!! route('group.crono') !!}">crono</a>

@stop