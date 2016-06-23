@extends('layout.principal')

@section('conteudo')

	<h2 id="#nomev">{{$v->nome}}</h2>
	<h3>Partido: {{$v->partido}}</h3> 
	<h3>Idade: {{$v->idade}}</h3> 
	<h3>Mandatos: {{$v->mandatos}}</h3> 


	@if(!empty($projs))
		@foreach($projs as $p)
			<h3>{{$p->nome}}</h3>
			<h3>{{$p->qtd_votos}} votos</h3>
		@endforeach
	@else
		<h3>Esse vereador ainda não tem projetos</h3>
	@endif

		
	

	

	<a href="{!! route('group.crono', $v->id) !!}">crono</a>  <!--Link para o cronometro de cada vereador-->

	<a href="{!! route('group.index') !!}">Home</a><!-- Link para o inicio da pagina -->

@stop