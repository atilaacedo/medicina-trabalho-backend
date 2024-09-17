<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        $itemsPerPage = array_key_exists('items', $query) ? $query['items'] : 20;
        
        return Funcionario::with('empresa')->paginate($itemsPerPage);
    }
}
