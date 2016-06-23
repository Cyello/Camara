@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="{!! route('group.update', $v->id) !!}" method="post">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome" value="{{$v->nome}}" placeholder="Nome do vereador">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Idade</label>
	    <input type="number" class="form-control" id="id_idade" name="idade" value="{{$v->idade}}" placeholder="Idade">
	  </div>

	  <div class="form-group">
	    <label for="id_partido">Partido</label>
	    <input type="text" class="form-control" id="id_partido" name="partido" value="{{$v->partido}}" placeholder="Partido">
	  </div>

	  <div class="form-group">
	    <label for="id_mandato">Mandatos</label>
	    <input type="text" class="form-control" id="id_mandato" name="mandatos" value="{{$v->mandatos}}" placeholder="Mandatos">
	  </div>

	  <input class="btn btn-success" type="submit" value="Salvar">
		
	 </form>

@stop