@extends('layout.principal')

@section('conteudo')

	@foreach ($desc as $d)
		<h2>{{$d->nome}}</h2>
		<p>{{$d->desc}}</p>
		Criador: {{$d->criador}} <br>
	@endforeach
	<br>
	@foreach ($desc2 as $d2)
		Votos Sim {{$d2->qt}}
	@endforeach
	<br>
	@foreach ($desc3 as $d3)
		Votos Não {{$d3->qt}}
	@endforeach
	<br>
	@foreach ($desc4 as $d4)
		Abstinencia {{$d4->qt}}
	@endforeach




@stop