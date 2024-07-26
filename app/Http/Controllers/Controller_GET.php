<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class Controller_GET extends Controller
{
    public function get($_id)
    {
        if ($_id == NULL) {
            //retorna todo
            return "debe retornar todo";
        } else {
            //retorna solo el valor del ID
            return "valores del id: {$_id}";
        }
    }
}
