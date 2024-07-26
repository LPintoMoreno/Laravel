<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;


class Controller_POST extends Controller
{
    public function Post($_nuevo)
    {
        //objeto nuevo
        $registro = new Proyecto();
        $registro->setId($_nuevo->getId());
    }
}
