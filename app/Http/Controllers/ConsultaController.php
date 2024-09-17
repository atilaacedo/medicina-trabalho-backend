<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        $itemsPerPage = array_key_exists('items', $query) ? $query['items'] : 20;
        
        return Consulta::with(['medico','funcionario','exame'])->paginate($itemsPerPage);
    }
}
