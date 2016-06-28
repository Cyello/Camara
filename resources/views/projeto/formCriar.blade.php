@extends('layout.principal')

@section('conteudo')

	
		<form role="form" action="{!! route('group.store') !!}" method="post" name="criarForm">

		  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

		  <div class="form-group">
		    <label for="id_nome">Nome</label>
		    <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do vereador" ng-model="nome" ng-required="true">
		  </div>

		  <div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo nome
		  </div>

		  <div class="form-group">
		    <label for="id_idade">Idade</label>
		    <input type="number" class="form-control" id="id_idade" name="idade" placeholder="Idade" ng-model="idade" ng-required="true">
		  </div>

		  <div ng-show="criarForm.idade.$invalid && criarForm.idade.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo idade
		  </div>

		  <div class="form-group">
		    <label for="id_partido">Partido</label>
		    <input type="text" class="form-control" id="id_partido" name="partido" placeholder="Partido" ng-model="partido" ng-required="true">
		  </div>

		  <div ng-show="criarForm.partido.$invalid && criarForm.partido.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo partido
		  </div>

		  <div class="form-group">
		    <label for="id_mandato">Mandatos</label>
		    <input type="text" class="form-control" id="id_mandato" name="mandatos" placeholder="Mandatos" ng-model="mandato" ng-required="true"> 
		  </div>

		   <div ng-show="criarForm.mandatos.$invalid && criarForm.mandatos.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo mandatos
		  </div>

		   <div class="form-group">
		    <label for="exampleInputFile">Foto</label>
		    <input type="file" id="exampleInputFile">
		    
		  </div>

		  <input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">

			
		 </form>


@stop