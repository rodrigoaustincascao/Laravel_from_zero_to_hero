<?php

namespace App\Http\Controllers;

use App\Models\Folha;
use Illuminate\Http\Request;

class FolhaController extends Controller
{

   public function index(){
       $folhas = Folha::all();

       $dados = [
        'folhas' => $folhas
       ];
       return view('folhas', $dados);

   } 
}
