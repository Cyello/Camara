<!DOCTYPE html>
<html lang="pt-BR" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('crono/css/bootstrap.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('style/app.css')}}">
        <script src="{{asset('crono/js/jquery-1.9.1.js')}}"></script>
        <script src="{{asset('crono/js/bootstrap.js')}}"></script>
      <link rel="stylesheet" href="{{asset('crono/css/site.css')}}" />
      <link rel="stylesheet" href="{{asset('crono/css/cronometro.css')}}" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/JavaScript" src="{{asset('crono/js/jplayer/dist/jplayer/jquery.jplayer.min.js')}}"></script>
        <script type="text/JavaScript" src="{{asset('crono/js/default.js')}}"></script>
        <script src="{{asset('angular.min.js')}}"></script>
     
  

  </head>
  <body>

    <nav class="navbar navbar-default navbar-tam navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{!!route('group.index')!!}">
            SisVer
          </a>
        </div>
      </div>
    </nav>
    
    <div class="container principal">

      <h1 class="textof">Sistema Vereadores</h1>

      @yield('conteudo')

    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    -->
    <!--<script src="js/bootstrap.min.js"></script>-->
  </body>
</html>