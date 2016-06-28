@extends('layout.principal')

@section('conteudo')


	<h2>{{$v->nome}}</h2>
	<table class="table">
		<tr class="active">
			<th>Partido</th>
			<th>Idade</th>
			<th>Mandatos</th>
			<th>Projetos</th>
		</tr>
		<tr>
			<td>
				<div class="alert-success">
					{{$v->partido}}
				</div>
			</td>

			<td>
				<div class="alert-success">
					{{$v->idade}}
				</div>
			</td>

			<td>
				<div class="alert-success">
					{{$v->mandatos}}
				</div>
			</td>

			<td>
				@if(!empty($projs))
					@foreach($projs as $p)
					{{$p->id}}
					<div class="alert-success">
						<a href="/inicio/vereador/{{$v->id}}/projeto/{{$p->id}}">{{$p->nome}}</a>
					</div>
					<br>
					@endforeach
				@else
					<div class="alert-danger">
						Esse vereador ainda não tem projetos
					</div>
				@endif

			</td>
		</tr>
	</table>

	
	<a href="{!! route('group.crono', $v->id) !!}" class="btn" >crono</a>  <!--Link para o cronometro de cada vereador-->

	<!--<a href="{!! route('group.index') !!}">Home</a> Link para o inicio da pagina -->

@stop