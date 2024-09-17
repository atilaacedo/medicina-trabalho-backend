<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        $itemsPerPage = array_key_exists('items', $query) ? $query['items'] : 20;
        
        return Medico::paginate($itemsPerPage);
    }
}
