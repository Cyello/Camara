@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="inicio/salva">
	  <div class="form-group">
	    <label for="id_nome">Nome do deputado</label>
	    <input type="text" class="form-control" id="id_nome">
	  </div>

	  <div class="form-group">
	    <label for="id_idade">Idade do deputado</label>
	    <input type="number" class="form-control" id="id_idade">
	  </div>
		
		<input type="hidden" name="_token" value="{{ csrf_token }}">

	 </form>

@stop