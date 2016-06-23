@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="{!! route('group.store') !!}" method="post">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do vereador">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Idade</label>
	    <input type="number" class="form-control" id="id_idade" name="idade" placeholder="Idade">
	  </div>

	  <div class="form-group">
	    <label for="id_partido">Partido</label>
	    <input type="text" class="form-control" id="id_partido" name="partido" placeholder="Partido">
	  </div>

	  <div class="form-group">
	    <label for="id_mandato">Mandatos</label>
	    <input type="text" class="form-control" id="id_mandato" name="mandatos" placeholder="Mandatos">
	  </div>

	  <input class="btn btn-primary" type="submit" value="enviar">
		
	 </form>

@stop