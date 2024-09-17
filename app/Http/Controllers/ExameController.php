<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        $itemsPerPage = array_key_exists('items', $query) ? $query['items'] : 20;
        
        return Exame::paginate($itemsPerPage);
    }
}
