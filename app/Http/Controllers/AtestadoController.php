<?php

namespace App\Http\Controllers;

use App\Models\EmissaoAtestado;
use Illuminate\Http\Request;

class AtestadoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        $itemsPerPage = array_key_exists('items', $query) ? $query['items'] : 20;
        
        return EmissaoAtestado::with(['consulta'])->paginate($itemsPerPage);
    }
}
