<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vereador;
use App\Projeto;
use App\Ver_Proj;
use DB;


class ProjetoController extends Controller
{
    public function show ($id, $id2) {
    	$desc = DB::select('select distinct p.criador, p.nome, p.desc from vereador v, projetos p, ver_proj vp where
         p.id = vp.id_proj and vp.id_ver = v.id and ? = vp.id_ver and ? = vp.id_proj', [$id, $id2]);

    	$qtdV = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where
    	 p.id = vt.id_proj and v.id = vt.id_ver and p.id = ?', [$id2]);

    	return view('projeto.descProj', ['desc' => $desc, 'qtdV' => $qtdV]);
    }
}

