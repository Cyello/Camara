@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="/inicio/salva/" method="post">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Idade</label>
	    <input type="number" class="form-control" id="id_idade" name="idade">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Partido</label>
	    <input type="text" class="form-control" id="id_idade" name="partido">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Mandatos</label>
	    <input type="text" class="form-control" id="id_idade" name="mandatos">
	  </div>

	  <input type="submit" value="enviar">
		
	 </form>

@stop