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

         //Retorna o total de votos
    	$desc = DB::select('select COUNT(vt.tipo) as qt, p.nome, p.desc, p.criador from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ?', [$id2]);

    	    	//Votos sim 
    	$desc2 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 1', [$id2]);
    	//Votos não
    	$desc3 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 2', [$id2]);
    	//Abnegação
    	$desc4 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 3', [$id2]);


    	return view('projeto.descProj', ['desc' => $desc, 'desc2' => $desc2, 'desc3' => $desc3, 'desc4' => $desc4]);

    
    }
}





    	/*
    	$desc = DB::select('select distinct p.criador, p.nome, p.desc from vereador v, projetos p, ver_proj vp where
         p.id = vp.id_proj and vp.id_ver = v.id and ? = vp.id_ver and ? = vp.id_proj', [$id, $id2]);
*/



         	/**/